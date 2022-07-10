<?php

namespace App\Services;

use App\Entity\Product;
use App\Entity\MaterialNorm;
use App\Entity\Structure;
use App\Entity\Rendition;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ListMaterialsService
{
    /** @var EntityManagerInterface $entityManager */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Get list materials
     *
     * @param Product $product
     * @param $rootProduct - root product 
     * @param int $count
     * @param int $parent
     * @param $date
     * @param $rendition
     *
     * @return array
     */
    public function getMaterials(Product $product, $rootProduct, $count = 1, $parent, $date, $rendition): array
    {
        $result = [];

        $renditionStandart = $this->entityManager->getRepository(Rendition::class)->find(1);
        
        // Get specification on the date

        $structures = $this->entityManager->getRepository(Structure::class)->getActualStructure($product->getId(), $date, 3, $rendition->getId());
        if (!$structures) {
            $structures = $this->entityManager->getRepository(Structure::class)->getActualStructure($product->getId(), $date, 3, $renditionStandart->getId());
        }

        foreach ($structures as  $structure) {

            // Take only product from specifications - Product::INTYPE_MATERIAL
            if (!in_array($structure->getProduct()->getIntype(), [Product::INTYPE_PRODUCT])) {
                continue;
            }

            // Replacement do not take into account
            if (!$structure->getMainReplacement()) {
                continue;
            }

            $productForStructure = $structure->getProduct();
            $pid = $product->getId() === $rootProduct->getId() ? 0 : $product->getId() . '-' . $parent;

            if (count($productForStructure->getSpecifications()) > 0) {

                
                $arrTemp = $this->getMaterials($productForStructure, $rootProduct, $count * $structure->getAmount(), $pid, $date, $renditionStandart);

                foreach ($arrTemp as $elemTemp) {
                    $result[] = $elemTemp;
                }
            } else {

                // Get material norm on the date
                $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($productForStructure->getId(), $date, 3, $rendition->getId());
                $renditionInfo = ' Исполнение - ' . $rendition->getName();

                $renditionNotFound = false;
                if (!$normMaterials) {
                    $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($productForStructure->getId(), $date, 3, $renditionStandart->getId());
                    $renditionInfo .= ' - отсутствует, ищем для исполнения - ' . $renditionStandart->getName();

                    $renditionNotFound = true;

                }

                if (count($normMaterials) == 0) {
                    $categoryId = $productForStructure->getProductCategory() ? $productForStructure->getProductCategory()->getId() : '';
                    $amountProduct = strval($count * $structure->getAmount());

                    $result[] = [
                        'productId' => $productForStructure->getId(),
                        'productIntype' => $productForStructure->getIntype(),
                        'productName' => $productForStructure->getName(),
                        'productDesignation' => $productForStructure->getDesignation(),
                        'productUnitName' => $productForStructure->getUnit()? $productForStructure->getUnit()->getName() : '',
                        'productAmount' => $amountProduct,
                        'productCategoryId' =>  $categoryId,
                        'productCategoryName' => $productForStructure->getProductCategory() ? $productForStructure->getProductCategory()->getName() : '',
                        'materialId' => null,
                        'materialName' => null,
                        'materialUnitName' => null,
                        'materialAmount' => null,
                        'rootId' => $rootProduct->getId(),
                        'rootName' => $rootProduct->getName(),
                        'rootDesignation' => $rootProduct->getDesignation(),
                        'rootRenditionId' => $renditionNotFound ? $renditionStandart->getId() : $rendition->getId(),
                        'rootRenditionName' => $renditionNotFound ? $renditionStandart->getName() : $rendition->getName(),
                        'rootRenditionNotFound' => $renditionNotFound,
                        'rootPlan' => $count,
                        'rootUnitName' => $rootProduct->getUnit()? $rootProduct->getUnit()->getName() : '',
                        'error' => $categoryId === 3,
                        'info' => $categoryId === 3 ? '[1] ' . 'Не указана норма материала.' . $renditionInfo : '[1] ' . $renditionInfo,
                    ];

                } else {

                    foreach ($normMaterials as  $materialNorm) {

                        if (!$materialNorm->getMainReplacement()) {
                            continue;
                        }

                        $categoryId = $productForStructure->getProductCategory() ? $productForStructure->getProductCategory()->getId() : '';
                        $amountMaterial = strval($count * $structure->getAmount() * $materialNorm->getAmount());
                        $amountProduct = strval($count * $structure->getAmount());

                        $result[] = [
                            'productId' => $productForStructure->getId(),
                            'productIntype' => $productForStructure->getIntype(),
                            'productName' => $productForStructure->getName(),
                            'productDesignation' => $productForStructure->getDesignation(),
                            'productUnitName' => $productForStructure->getUnit()->getName(),
                            'productAmount' => $amountProduct,
                            'productCategoryId' =>  $categoryId,
                            'productCategoryName' => $productForStructure->getProductCategory() ? $productForStructure->getProductCategory()->getName() : '',
                            'materialId' => $materialNorm->getMaterial()->getId(),
                            'materialName' => $materialNorm->getMaterial()->getFullName(),
                            'materialUnitName' => $materialNorm->getMaterial()->getUnit()->getName(),
                            'materialAmount' => $amountMaterial,
                            'rootId' => $rootProduct->getId(),
                            'rootName' => $rootProduct->getName(),
                            'rootDesignation' => $rootProduct->getDesignation(),
                            'rootRenditionId' => $rendition->getId(),
                            'rootRenditionName' => $rendition->getName(),
                            'rootRenditionNotFound' => false,
                            'rootPlan' => $count,
                            'rootUnitName' => $rootProduct->getUnit()? $rootProduct->getUnit()->getName() : '',
                            'error' => ($categoryId === 3 && !$amountMaterial),
                            'info' => ($categoryId === 3 && !$amountMaterial) ? '[2] ' . 'Не указана норма на ' . $materialNorm->getMaterial()->getFullName() : '[2]',
                        ];
                    }
                }
            }
        }
      
        // Get norm materials on the date
        $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($product->getId(), $date, 3, $rendition->getId());
        $renditionInfo = ' Исполнение - ' . $rendition->getName();

        $renditionNotFound = false;

        if (!$normMaterials) {
            $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($product->getId(), $date, 3, $renditionStandart->getId());
            $renditionInfo .= ' - отсутствует, ищем для исполнения - ' . $renditionStandart->getName();

            $renditionNotFound = true;

        }
        if ($normMaterials) {
            foreach ($normMaterials as  $materialNorm) {

                if (!$materialNorm->getMainReplacement()) {
                    continue;
                }

                $amountMaterial = strval($count * $materialNorm->getAmount());

                $result[] = [
                    'productId' => $product->getId(),
                    'productIntype' => $product->getIntype(),
                    'productName' => $product->getName(),
                    'productDesignation' => $product->getDesignation(),
                    'productUnitName' => $product->getUnit()->getName(),
                    'productAmount' => $count,
                    'productCategoryId' => $product->getProductCategory() ? $product->getProductCategory()->getId() : '',
                    'productCategoryName' => $product->getProductCategory() ? $product->getProductCategory()->getName() : '',
                    'materialId' => $materialNorm->getMaterial()->getId(),
                    'materialName' => $materialNorm->getMaterial()->getFullName(),
                    'materialUnitName' =>  $materialNorm->getMaterial()->getUnit()->getName(),
                    'materialAmount' => $amountMaterial,
                    'rootId' => $rootProduct->getId(),
                    'rootName' => $rootProduct->getName(),
                    'rootDesignation' => $rootProduct->getDesignation(),
                    'rootRenditionId' => $renditionNotFound ? $renditionStandart->getId() : $rendition->getId(),
                    'rootRenditionName' => $renditionNotFound ? $renditionStandart->getName() :  $rendition->getName(),
                    'rootRenditionNotFound' => $renditionNotFound,
                    'rootPlan' => $count,
                    'rootUnitName' => $rootProduct->getUnit()? $rootProduct->getUnit()->getName() : '',
                    'error' => !$amountMaterial,
                    'info' => !$amountMaterial ? '[3] ' . 'Не указана норма на ' . $materialNorm->getMaterial()->getFullName() . ', ' . $renditionInfo : '[3] ' . $renditionInfo,
                ];
            }
        }

        if (!$structures && !$normMaterials) {

            $categoryId = $product->getProductCategory() ? $product->getProductCategory()->getId() : '';
            
            $result[] = [
                'productId' => $product->getId(),
                'productIntype' => $product->getIntype(),
                'productName' => $product->getName(),
                'productDesignation' => $product->getDesignation(),
                'productUnitName' => $product->getUnit()->getName(),
                'productAmount' => $count,
                'productCategoryId' => $product->getProductCategory() ? $product->getProductCategory()->getId() : '',
                'productCategoryName' => $product->getProductCategory() ? $product->getProductCategory()->getName() : '',
                'materialId' => null,
                'materialName' => null,
                'materialUnitName' => null,
                'materialAmount' => null,
                'rootId' => $rootProduct->getId(),
                'rootName' => $rootProduct->getName(),
                'rootDesignation' => $rootProduct->getDesignation(),
                'rootRenditionId' => $rendition->getId(),
                'rootRenditionName' => $rendition->getName(),
                'rootRenditionNotFound' => false,
                'rootPlan' => $count,
                'rootUnitName' => $rootProduct->getUnit()? $rootProduct->getUnit()->getName() : '',
                'error' => ($categoryId === 3),
                'info' => '[4] ' . 'Не задана спецификация и нормы',
            ];
        }

        return $result;
    }


    public function getGroupsMaterials($materials)
    {
        $result = [];

        foreach ($materials as $material) {

            $context = '';
            if ($material['productCategoryId'] == 3) {
                $nomenclatureId = $material['materialId'];
                $nomenclatureName = $material['materialName'];
                $nomenclatureDesignation = '';
                $nomenclatureAmount = round((float)$material['materialAmount'], 4);
                $nomenclatureUnitName = $material['materialUnitName'];
                $prefix = 'mt-';
            } else {
                $nomenclatureId = $material['materialId'] ?? $material['productId'];
                $nomenclatureName = $material['materialId'] ? $material['materialName'] : $material['productName'];
                $nomenclatureDesignation = $material['materialId'] ? '' : $material['productDesignation'];
                $nomenclatureAmount = $material['materialId'] ? round((float)$material['materialAmount'], 4) : round((float)$material['productAmount'], 4);
                $nomenclatureUnitName = $material['materialId'] ? $material['materialUnitName'] : $material['productUnitName'];
                $prefix = $material['materialId'] ? 'mt-' : 'pr-';
            }

            $context = $prefix . $nomenclatureId;

            $itemProduct = [
                'id' => $material['productId'],
                'name' => $material['productName'],
                'designation' => $material['productDesignation'],
                'materialAmount' => round((float)$material['materialAmount'], 4),
                'productAmount' => round((float)$material['productAmount'], 4),
                'unitName' => $material['productUnitName'],  
            ];

            $itemRoot = [
                'id' => $material['rootId'],
                'name' => $material['rootName'],
                'designation' => $material['rootDesignation'],
                'renditionId' => $material['rootRenditionId'],
                'renditionName' => $material['rootRenditionName'],
                'nomenclatureAmount' => $nomenclatureAmount,
                'nomenclaturePlan' => $material['rootPlan'],
                'unitName' => $material['rootUnitName'], 
                'product' => [$itemProduct],
                'productIds' => [$material['productId']],
            ];


            $search = 0;

            foreach ($result as $key => $item) {
                if ($item['context'] == $context) {
                    $search = 1;
                    $amountTemp = round((float)$item['amount'] + (float)$nomenclatureAmount, 4);
                    $result[$key]['amount'] = $amountTemp ? $amountTemp : 0;
                    if (!in_array($material['rootId'], $result[$key]['rootIds'])) {
                        $result[$key]['root'] []= $itemRoot;
                        $result[$key]['rootIds'] []= $material['rootId'].'-'.$material['rootRenditionId'];
                    } else {
                        $keyId = array_search($material['rootId'], $result[$key]['rootIds']);
                        $result[$key]['root'][$keyId]['nomenclatureAmount'] += $nomenclatureAmount;
                        $result[$key]['root'][$keyId]['nomenclatureAmount'] = round($result[$key]['root'][$keyId]['nomenclatureAmount'], 4);

                        if ($material['rootRenditionNotFound']) {
                            $result[$key]['root'][$keyId]['nomenclaturePlan'] += $material['rootPlan'];
                        }
                       // $result[$key]['root'][$keyId]['nomenclaturePlan'] = round($result[$key]['root'][$keyId]['nomenclaturePlan'], 0);
                    }


                    foreach ($result[$key]['root'] as $keyP => $itemP) {

                        if (($material['rootId'] == $itemP['id']) && !in_array($material['productId'], $itemP['productIds'])) {
                            $result[$key]['root'][$keyP]['product'] []= $itemProduct;
                            $result[$key]['root'][$keyP]['productIds'] []= $material['productId'];
                        }
                    }
                    
                    if ($material['error']) {
                        $result[$key]['error'] []= $material;
                    }
                    break;
                }
            }

            if ($search == 0) {
                $arrStr = [];
                $arrStr['id'] = $nomenclatureId;
                $arrStr['name'] = $nomenclatureId ? $nomenclatureName : 'Ошибка';
                $arrStr['designation'] = $nomenclatureDesignation;
                $arrStr['unitName'] = $nomenclatureUnitName;
                $arrStr['amount'] = round($nomenclatureAmount, 4);
                $arrStr['context'] = $context;
                $arrStr['root'] []= $itemRoot;
                $arrStr['rootIds'] = [$material['rootId'].'-'.$material['rootRenditionId']];

                if ($material['error']) {
                    $arrStr['error'] []= $material;
                } else {
                    $arrStr['error'] = [];
                }

                $result[] = $arrStr;
            }
        }

        return $result;
    }
}
