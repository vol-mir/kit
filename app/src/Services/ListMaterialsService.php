<?php

namespace App\Services;

use App\Entity\{
    Product,
    MaterialNorm,
    Structure,
    Rendition,
    Specification,
    NormDocument,
};
use Doctrine\ORM\EntityManagerInterface;

class ListMaterialsService
{
    const RENDITION_STANDART_ID = 1;

    /** 
     * @var EntityManagerInterface $entityManager 
     */
    protected $entityManager;

    /** 
     * @var Rendition $renditionStandart 
     */
    protected $renditionStandart;


    protected $tableMaterials = [];
    

    /**
     * Construct to class ListMaterialsService
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->renditionStandart = $this->entityManager->getRepository(Rendition::class)->find(self::RENDITION_STANDART_ID);
    }

    public function initTable() {
        $this->tableMaterials = [];
    }

    public function getTableMaterials() {
        return $this->tableMaterials;
    }

    /**
     * Get list materials
     *
     * @param int $productId
     * @param int $renditionId
     * @param float $amount
     * @param $date
     * @param string $type = 'root|child'
     *
     * @return array
     */

    public function getMaterials(int $productId, int $renditionId, float $amount = 1, $date, $type, $arrRoots = []): array
    {
        $result = [];

        $product = $this->entityManager->getRepository(Product::class)->find($productId);
        $rendition = $this->entityManager->getRepository(Rendition::class)->find($renditionId);

        $itemRoot = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'designation' => $product->getDesignation(),
            'renditionId' => $rendition->getId(),
            'renditionName' => $rendition->getName(),
            'unitName' =>  $product->getUnit() ? $product->getUnit()->getName() : null,
            'amount' => $amount,
            'type' => $type,
        ];

        // Get structure to specification on the date
        $structure = $this->entityManager->getRepository(Structure::class)->getActualStructure($productId, $date, Specification::APPROVAL, $renditionId);
        $structureRenditionInfo = [
            'structureRenditionId' => $rendition->getId(),
            'structureRenditionName' => $rendition->getName(),
        ];
        if (empty($structure) && $renditionId !== $this->renditionStandart->getId()) {
            $structure = $this->entityManager->getRepository(Structure::class)->getActualStructure($productId, $date, Specification::APPROVAL, $this->renditionStandart->getId());
            $structureRenditionInfo = [
                'structureRenditionId' => $this->renditionStandart->getId(),
                'structureRenditionName' => $this->renditionStandart->getName(),
            ];
        }

        // Get material norm on the date
        $materialNorms = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($productId, $date, NormDocument::APPROVAL, $renditionId);
        $materialRenditionInfo = [
            'materialRenditionId' => $rendition->getId(),
            'materialRenditionName' => $rendition->getName(),
        ];
        if (empty($materialNorms) && ($renditionId !== $this->renditionStandart->getId())) {
            $materialNorms = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($productId, $date, NormDocument::APPROVAL, $this->renditionStandart->getId());
            $materialRenditionInfo = [
                'materialRenditionId' => $this->renditionStandart->getId(),
                'materialRenditionName' => $this->renditionStandart->getName(),
            ];
        }

        $itemRoot = array_merge($itemRoot, $structureRenditionInfo);
        $itemRoot = array_merge($itemRoot, $materialRenditionInfo);

        if ($type === 'root') {
            $result = array_merge($result, ['root' => $itemRoot]);
        }

        $arrRoots[] = $itemRoot;

        $materials = [];
        foreach ($materialNorms as $item) {

            $itemMaterial = $item->getMaterial();

            // Replacement do not take into account
            if (!$item->getMainReplacement()) {
                continue;
            }

            $arrTemp = [
                'id' => $itemMaterial->getId(),
                'name' => $itemMaterial->getName(),
                'designation' => null,
                'unitName' =>  $itemMaterial->getUnit() ? $itemMaterial->getUnit()->getName() : null,
                'amountStandard' => $item->getAmount(),
                'amount' => $amount,
                'amountAll' => $amount * $item->getAmount(),
                'mainReplacement' => $item->getMainReplacement(),
                'prefix' => 'mt-',
            ];


            $materials[] = $arrTemp;
            $itemRoot['expense'] = $arrTemp;
            $arrRoots['expense'] = $arrTemp;
            
            // ** COOL **
            $this->addTableMaterials($arrTemp, $itemRoot, $arrRoots);

            $result = array_merge($result, ['materials' => $materials]);
        }

        $nodes = [];
        foreach ($structure as $item) {

            $itemProduct = $item->getProduct();

            // Take only product from specifications
            if ($itemProduct->getIntype() !== Product::INTYPE_PRODUCT) {
                continue;
            }

            // Replacement do not take into account
            if (!$item->getMainReplacement()) {
                continue;
            }

            $arrTemp = [
                'id' => $itemProduct->getId(),
                'name' => $itemProduct->getName(),
                'designation' => $itemProduct->getDesignation(),
                'renditionId' => $rendition->getId(),
                'renditionName' => $rendition->getName(),
                'unitName' =>  $itemProduct->getUnit() ? $itemProduct->getUnit()->getName() : null,
                'amountStandard' => $item->getAmount(),
                'amount' => $amount,
                'amountAll' => $amount * $item->getAmount(),
                'intype' => $itemProduct->getIntype(),
                'categoryId' => $itemProduct->getProductCategory() ? $itemProduct->getProductCategory()->getId() : null,
                'categoryName' => $itemProduct->getProductCategory() ? $itemProduct->getProductCategory()->getName() : null,
                'mainReplacement' => $item->getMainReplacement(),
                'type' => 'child',
                'prefix' => 'pr-',
            ];

            // TO DO - Make actual document
            if (count($itemProduct->getSpecifications()) > 0 || count($itemProduct->getNormDocuments()) > 0) {
                $composition = $this->getMaterials($itemProduct->getId(), $rendition->getId(), $amount * $item->getAmount(), $date, 'child', $arrRoots);

                if (count($composition) > 0) {
                    $arrTemp = array_merge($arrTemp, $composition);
                }
            }

            $nodes[] = $arrTemp;
            $itemRoot['expense'] = $arrTemp;
            $arrRoots['expense'] = $arrTemp;

            // ** COOL **
            if ($itemProduct->getProductCategory()->getId() == 2) {
                $this->addTableMaterials($arrTemp, $itemRoot, $arrRoots);
            }

            $result = array_merge($result, ['nodes' => $nodes]);
        }

        return $result;
    }

    public function addTableMaterials($data, $root, $arrRoots) {

        $context = $data['prefix'] . $data['id'];

        $search = 0;

        foreach ($this->tableMaterials as $key => $elem) {
            if ($elem['context'] == $context) {
                $search = 1;
                $amountTemp = round((float)$elem['amountAll'] + (float)$data['amountAll'], 6);
                $this->tableMaterials[$key]['amountAll'] = $amountTemp ?? 0;
                $this->tableMaterials[$key]['root'][] = $root;
                $this->tableMaterials[$key]['roots'][] = $arrRoots;
                break;
            }
        }

        if ($search == 0) {
            $arrStr = [];
            $arrStr['id'] = $data['id'];
            $arrStr['name'] = $data['name'];
            $arrStr['designation'] = $data['designation'];
            $arrStr['unitName'] = $data['unitName'];
            $arrStr['amountAll'] = round($data['amountAll'], 6);
            $arrStr['context'] = $context;
            $arrStr['balanceBuy'] = 0;
            $arrStr['balanceManufacture'] = 0;
            $arrStr['amountResult'] = 0;
            $arrStr['root'][] = $root;
            $arrStr['roots'][] = $arrRoots;

            $this->tableMaterials[] = $arrStr;
        }
    }

    public function getAmountResult($data) 
    {
        array_walk ( $data, function (&$key) { 
            $key["amountResult"] = $key['amountAll'] - $key['balanceBuy'] - $key['balanceManufacture']; 
        });

        return $data;

    }
}
