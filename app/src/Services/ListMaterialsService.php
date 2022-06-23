<?php

namespace App\Services;

use App\Entity\Product;
use App\Entity\MaterialNorm;
use App\Entity\Specification;
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
     * @param int $rootId - root product id 
     * @param int $count
     * @param int $parent
     * @param $date
     * @param $rendition
     *
     * @return array
     */
    public function getMaterials(Product $product, int $rootId, $count = 1, $parent, $date, $rendition): array
    {
        $result = [];

        // Get specification on the date
        $specification = $this->entityManager->getRepository(Specification::class)->getActualSpecification($product->getId(), $date, 3, $rendition->getId());
        if ($specification) {

            foreach ($specification->getStructures() as  $structure) {

                // Take only product and material
                if ($structure->getProduct()->getIntype() !== Product::INTYPE_PRODUCT && $structure->getProduct()->getIntype() !== Product::INTYPE_MATERIAL) {
                    continue;
                }

                // Replacement do not take into account
                if (!$structure->getMainReplacement()) {
                    continue;
                }

                $productForStructure = $structure->getProduct();
                $pid = $specification->getProduct()->getId() === $rootId ? 0 : $specification->getProduct()->getId() . '-' . $parent;

                if ($productForStructure->getSpecifications()->count() > 0) {

                    $arrTemp = $this->getMaterials($productForStructure, $rootId, $count * $structure->getAmount(), $pid, $date, $rendition);

                    foreach ($arrTemp as  $elemTemp) {
                        $arrPrint[] = $elemTemp;
                    }
                } else {

                    // Get material norm on the date
                    $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($productForStructure->getId(), $date, 3, $rendition->getId());

                    if (count($normMaterials) == 0) {

                        $tempMaterial = '';
                        // No show KD material
                        // foreach ($productForStructure->getKdMaterials() as  $materialKD) {
                        //     $tempMaterial .=  trim($materialKD->getFullName()) . ', ';
                        // }

                        // $tempMaterial = trim($tempMaterial);
                        // if (strlen($tempMaterial) > 0 && $tempMaterial[strlen($tempMaterial) - 1] === ',') {
                        //     $tempMaterial = substr($tempMaterial, 0, -1);
                        // }

                        $categoryId = $productForStructure->getProductCategory()->getId();

                        $result[] = [
                            'amount' => strval((float)($count * $structure->getAmount())),
                            'amountUnit' => $structure->getProduct()->getUnit()->getName(),
                            'name' => $productForStructure->getFullName(),
                            'category' => $productForStructure->getProductCategory()->getName(),
                            'material' => $tempMaterial,
                            'materialCalc' => null,
                            'amountMaterial' => null,
                            'amountUnitMaterial' => null,
                            'amountOne' => null,
                            'mainReplacement' => 1,
                            'nameKD' => $productForStructure->getName(),
                            'designationKD' => $productForStructure->getDesignation(),
                            'productId' => $productForStructure->getId(),
                            'intype' => $productForStructure->getIntype(),
                            'weight' =>  $productForStructure->getWeight(),
                            'categoryId' =>  $categoryId,
                            'calculationId' => $productForStructure->getCalculation()->getId(),
                            'calculationName' =>  $productForStructure->getCalculation()->getName(),
                            'renditionId' => $rendition->getId(),
                            'renditionName' => $rendition->getName(),
                            'error' => $categoryId === 3,
                            'info' => $categoryId === 3 ? 'Не указана норма материала' : '',
                        ];
                    } else {

                        foreach ($normMaterials as  $materialNorm) {

                            $tempMaterial = $materialNorm ? $materialNorm->getMaterial()->getFullName() : '';

                            $materialCalc = $materialNorm ? $materialNorm->getMaterial()->getCalculation()->getName() : '';

                            if (!$tempMaterial) {
                                foreach ($productForStructure->getKdMaterials() as  $materialKD) {
                                    $tempMaterial .= trim($materialKD->getFullName()) . ', ';
                                }
                            }
                            $tempMaterial = trim($tempMaterial);
                            if (strlen($tempMaterial) > 0 && $tempMaterial[strlen($tempMaterial) - 1] === ',') {
                                $tempMaterial = substr($tempMaterial, 0, -1);
                            }
        
                            $mainReplacement = 0;
                            if ($materialNorm && $materialNorm->getMainReplacement() == 1) {
                                $mainReplacement = 1;
                            } else if ($materialNorm) {
                                $mainReplacement = 2;
                            }

                            $categoryId = $productForStructure->getProductCategory() ? $productForStructure->getProductCategory()->getId() : '';
                            $amountMaterial = $materialNorm ? strval($count * $structure->getAmount() * $materialNorm->getAmount()) : '';

                            $result[] = [
                                'amount' => strval((float)($count * $structure->getAmount())),
                                'amountUnit' => $structure->getProduct()->getUnit()->getName(),
                                'name' => $productForStructure->getFullName(),
                                'category' => $productForStructure->getProductCategory() ? $productForStructure->getProductCategory()->getName() : '',
                                'material' => $tempMaterial,
                                'materialCalc' => $materialCalc,
                                'amountMaterial' => $amountMaterial,
                                'amountUnitMaterial' => $materialNorm ? $materialNorm->getMaterial()->getUnit()->getName() : '',
                                'amountOne' => null,
                                'mainReplacement' => $mainReplacement,
                                'nameKD' => $productForStructure->getName(),
                                'designationKD' => $productForStructure->getDesignation(),
                                'productId' => $productForStructure->getId(),
                                'intype' => $productForStructure->getIntype(),
                                'weight' =>  $productForStructure->getWeight(),
                                'categoryId' =>  $categoryId,
                                'calculationId' => $productForStructure->getCalculation()->getId(),
                                'calculationName' =>  $productForStructure->getCalculation()->getName(),
                                'renditionId' => $rendition->getId(),
                                'renditionName' => $rendition->getName(),
                                'error' => ($categoryId === 3 && !$amountMaterial),
                                'info' => ($categoryId === 3 && !$amountMaterial) ? 'Не указана норма материала!' : '',
                            ];
                        }
                    }
                }
            }
        }

        // Get norm materials on the date
        $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($product->getId(), $date, 3, $rendition->getId());
        if ($normMaterials) {
            foreach ($normMaterials as  $materialNorm) {

                $mainReplacement = 0;
                if ($materialNorm && $materialNorm->getMainReplacement() == 1) {
                    $mainReplacement = 1;
                } else if ($materialNorm) {
                    continue;
                    $mainReplacement = 2;
                }

                $amountMaterial = $materialNorm ? strval($count * $materialNorm->getAmount()) : '';

                $result[] = [
                    'amount' => null,
                    'amountUnit' => null,
                    'name' => null,
                    'category' => null,
                    'material' => $materialNorm ? $materialNorm->getMaterial()->getFullName() : '',
                    'materialCalc' => null,
                    'amountMaterial' => $amountMaterial,
                    'amountUnitMaterial' => $materialNorm ? $materialNorm->getMaterial()->getUnit()->getName() : '',
                    'amountOne' => null,
                    'mainReplacement' => $mainReplacement,
                    'nameKD' => $product->getName(),
                    'designationKD' => $product->getDesignation(),
                    'productId' => $product->getId(),
                    'intype' => $materialNorm->getMaterial()->getIntype(),
                    'weight' =>  null,
                    'categoryId' =>  null,
                    'calculationId' => $materialNorm->getMaterial()->getCalculation()->getId(),
                    'calculationName' =>  $materialNorm->getMaterial()->getCalculation()->getName(),
                    'renditionId' => $rendition->getId(),
                    'renditionName' => $rendition->getName(),
                    'error' => !$amountMaterial,
                    'info' => $amountMaterial ? '' : 'Не указана норма',
                ];
            }
        }

        if (!$specification && !$normMaterials) {
            $result[] = [
                'amount' => null,
                'amountUnit' => null,
                'name' => null,
                'category' => null,
                'material' => null,
                'materialCalc' => null,
                'amountMaterial' => $count,
                'amountUnitMaterial' => null,
                'amountOne' => null,
                'mainReplacement' => null,
                'nameKD' => $product->getName(),
                'designationKD' => $product->getDesignation(),
                'productId' => $product->getId(),
                'intype' => null,
                'weight' =>  null,
                'categoryId' =>  null,
                'calculationId' => null,
                'calculationName' =>  null,
                'renditionId' => $rendition->getId(),
                'renditionName' => $rendition->getName(),
                'error' => true,
                'info' => 'Не задана специвикация и нормы',
            ];
        }

        return $result;
    }


    public function getGroupsMaterials($materials)
    {
        $result = [];

        $sum = array(0);

        foreach ($materials as $material) {

            $context = $material['amountUnit'] . '-' . $material['name'] . '-' . $material['category'] . '-' . $material['material'] . '-' . $material['amountUnitMaterial'] . '-' . $material['mainReplacement'] . '-' . $material['calculationName'] . '-' . $material['materialCalc'];

            $search = 0;

            foreach ($result as $key => $item) {
                if ($item['context'] == $context) {
                    $search = 1;
                    $amountTemp = (float)$item['amount'] + (float)$material['amount'];
                    $amountMaterialTemp = (float)$item['amountMaterial'] + (float)$material['amountMaterial'];
                    $result[$key]['amount'] = $amountTemp ? $amountTemp : '';
                    $result[$key]['amountMaterial'] = $amountMaterialTemp ? $amountMaterialTemp : '';
                    $result[$key]['amountOne'] = $amountMaterialTemp && $amountTemp ? $amountMaterialTemp / $amountTemp : '';
                    break;
                }
            }

            if ($search == 0) {
                $arrStr = [];
                $arrStr['amount'] =  (float)$material['amount'];
                $arrStr['amountUnit'] = $material['amountUnit'];
                $arrStr['name'] = $material['name'];
                $arrStr['category'] = $material['category'];
                $arrStr['material'] = $material['material'];

                $arrStr['materialCalc'] = $material['materialCalc'];

                $arrStr['amountMaterial'] = $material['amountMaterial'];
                $arrStr['amountUnitMaterial'] = $material['amountUnitMaterial'];
                $arrStr['context'] = $context;
                $arrStr['amountOne'] = $material['amountMaterial'] && $material['amount'] ? $material['amountMaterial'] / $material['amount'] : '';
                $arrStr['mainReplacement'] =  $material['mainReplacement'];

                $arrStr['nameKD'] = $material['nameKD'];
                $arrStr['designationKD'] = $material['designationKD'];
                $arrStr['productId'] = $material['productId'];

                $arrStr['intype'] =  $material['intype'];

                $arrStr['weight'] =  $material['weight'];
                $arrStr['categoryId'] =  $material['categoryId'];


                $arrStr['calculationId'] = $material['calculationId'];
                $arrStr['calculationName'] = $material['calculationName'];


                $result[] = $arrStr;
            }
        }

        return $result;
    }
}
