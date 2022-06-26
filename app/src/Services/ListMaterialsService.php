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
        
        // Get specification on the date
        $structures = $this->entityManager->getRepository(Structure::class)->getActualStructure($product->getId(), $date, 3, $rendition->getId());

        foreach ($structures as  $structure) {

            // Take only product and material
            if (!in_array($structure->getProduct()->getIntype(), [Product::INTYPE_PRODUCT, Product::INTYPE_MATERIAL])) {
                continue;
            }

            // Replacement do not take into account
            if (!$structure->getMainReplacement()) {
                continue;
            }

            $productForStructure = $structure->getProduct();
            $pid = $product->getId() === $rootProduct->getId() ? 0 : $product->getId() . '-' . $parent;

            

            if (count($productForStructure->getSpecifications()) > 0) {

                $renditionForStructure = $this->entityManager->getRepository(Rendition::class)->find(1);
                $arrTemp = $this->getMaterials($productForStructure, $rootProduct, $count * $structure->getAmount(), $pid, $date, $renditionForStructure );

                foreach ($arrTemp as $elemTemp) {
                    $result[] = $elemTemp;
                }
            } else {

                // Get material norm on the date
                $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($productForStructure->getId(), $date, 3, $rendition->getId());

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
                        'rootRenditionId' => $rendition->getId(),
                        'rootRenditionName' => $rendition->getName(),
                        'rootPlan' => $count,
                        'error' => $categoryId === 3,
                        'info' => $categoryId === 3 ? 'Не указана норма материала' : '',
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
                            'rootPlan' => $count,
                            'error' => ($categoryId === 3 && !$amountMaterial),
                            'info' => ($categoryId === 3 && !$amountMaterial) ? 'Не указана норма материала!' : '',
                        ];
                    }
                }
            }
        }
      

        // Get norm materials on the date
        $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($product->getId(), $date, 3, $rendition->getId());
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
                    'rootRenditionId' => $rendition->getId(),
                    'rootRenditionName' => $rendition->getName(),
                    'rootPlan' => $count,
                    'error' => !$amountMaterial,
                    'info' => !$amountMaterial ? 'Не указана норма' : '',
                ];
            }
        }

        if (!$structures && !$normMaterials) {
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
                'rootPlan' => $count,
                'error' => true,
                'info' => 'Не задана спецификация и нормы',
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

            $itemRoot = [
                'id' => $material['rootId'],
                'name' => $material['rootName'],
                'designation' => $material['rootDesignation'],
                'renditionId' => $material['rootRenditionId'],
                'renditionName' => $material['rootRenditionName'],
                'nomenclatureAmount' => $nomenclatureAmount,
                'nomenclaturePlan' => $material['rootPlan']
                
            ];

            $search = 0;

            foreach ($result as $key => $item) {
                if ($item['context'] == $context) {
                    $search = 1;
                    $amountTemp = round((float)$item['amount'] + (float)$nomenclatureAmount, 4);
                    $result[$key]['amount'] = $amountTemp ? $amountTemp : 0;
                    if (!in_array($material['rootId'], $result[$key]['rootIds'])) {
                        $result[$key]['root'] []= $itemRoot;
                        $result[$key]['rootIds'] []= $material['rootId'];
                    } else {
                        $keyId = array_search($material['rootId'], $result[$key]['rootIds']);
                        $result[$key]['root'][$keyId]['nomenclatureAmount'] += $nomenclatureAmount;
                        $result[$key]['root'][$keyId]['nomenclatureAmount'] = round($result[$key]['root'][$keyId]['nomenclatureAmount'], 4);
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
                $arrStr['rootIds'] = [$material['rootId']];

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
