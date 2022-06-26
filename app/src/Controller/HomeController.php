<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Specification;
use App\Entity\Unit;
use App\Entity\ProductType;
use App\Entity\ProductGroup;
use App\Entity\ProductKind;
use App\Entity\ProductCategory;
use App\Entity\Rendition;
use App\Entity\Structure;
use App\Entity\NormDocument;
use App\Entity\MaterialNorm;
use App\Entity\AnalyticGroup;
use App\Entity\FinanceGroup;
use App\Repository\StructureRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\HTTPERPService;

/**
 * Class HomeController
 * @package App\Controller
 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
 */
class HomeController extends AbstractController
{

    private $entityManager;

    private $translator;

    private $structureRepository;
    private $productRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        StructureRepository $structureRepository,
        ProductRepository $productRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->structureRepository = $structureRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * @Route("/version", name="version")
     */
    public function version(): Response
    {
        return $this->render('home/version.html.twig');
    }


    /**
     * Index page
     *
     * @Route("/", name="home")
     *
     * @return Response
     */
    public function index(LoggerInterface $logger, HTTPERPService $httpERPService): Response
    {

        $countNullStructures = $this->structureRepository->getCountNullStructures();

        $countNullProductsGroups = $this->productRepository->getCountNullProductsForGroup('product_group');
        $countNullProductsKinds = $this->productRepository->getCountNullProductsForGroup('product_kind');
        $countNullProductsTypes = $this->productRepository->getCountNullProductsForGroup('product_type');
        $countNullProductsCategories = $this->productRepository->getCountNullProductsForGroup('product_category');
        $countNullProductsCalculations = $this->productRepository->getCountNullProductsForGroup('calculation');

        $countNullProductsAnalyticGroups = $this->productRepository->getCountNullProductsForGroup('analytic_group');
        $countNullProductsFinanceGroups = $this->productRepository->getCountNullProductsForGroup('finance_group');


        $countNullMaterialsGroups = $this->productRepository->getCountNullMaterialsForGroup('product_group');
        $countNullMaterialsKinds = $this->productRepository->getCountNullMaterialsForGroup('product_kind');
        $countNullMaterialsTypes = $this->productRepository->getCountNullMaterialsForGroup('product_type');
        $countNullMaterialsCategories = $this->productRepository->getCountNullMaterialsForGroup('product_category');
        $countNullMaterialsCalculations = $this->productRepository->getCountNullMaterialsForGroup('calculation');
        
        
        $countNullMaterialsAnalyticGroups = $this->productRepository->getCountNullMaterialsForGroup('analytic_group');
        $countNullMaterialsFinanceGroups = $this->productRepository->getCountNullMaterialsForGroup('finance_group');

        dump($httpERPService->fetchPlan('00-00000001'));
/*
        $spreadsheet = IOFactory::load('materialnew.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('material');

        for ($i = 2; $i <= 1589; $i++) {

        $product = new Product();

        $product->setIdAvt(($sheet->getCell('A'.strval($i))->getValue()));
        $product->setTypeAvt('material');

        $product->setName($sheet->getCell('B'.strval($i))->getValue()?$sheet->getCell('B'.strval($i))->getValue():'empty');
        $product->setMaterialKind($sheet->getCell('C'.strval($i))->getValue());
        $product->setProfileName($sheet->getCell('D'.strval($i))->getValue());
        $product->setProfile(($sheet->getCell('E'.strval($i))->getValue()));
        $product->setProfileStandard(($sheet->getCell('F'.strval($i))->getValue()));
        $product->setMark(($sheet->getCell('G'.strval($i))->getValue()));
        $product->setMarkStandard(($sheet->getCell('H'.strval($i))->getValue()));


        $product->setUnit($this->getDoctrine()->getRepository(Unit::class)->find(1));

        $product->setProductType($this->getDoctrine()->getRepository(ProductType::class)->find(2));

        $product->setProductGroup($this->getDoctrine()->getRepository(ProductGroup::class)->find(1));
        $product->setProductKind($this->getDoctrine()->getRepository(ProductKind::class)->find(1));
        $product->setProductCategory($this->getDoctrine()->getRepository(ProductCategory::class)->find(1));

        $product->setIntype(3);

        $entityManager = $this->getDoctrine()->getManager();
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
    }*/


/*
        $spreadsheet = IOFactory::load('detail.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('detail');

        for ($i = 2; $i <= 5648; $i++) {

        $product = new Product();

        $product->setIdAvt(($sheet->getCell('A'.strval($i))->getValue()));
        $product->setTypeAvt('detail');


        $product->setDesignation($sheet->getCell('K'.strval($i))->getValue()?$sheet->getCell('K'.strval($i))->getValue():$sheet->getCell('B'.strval($i))->getValue());

        $product->setName($sheet->getCell('L'.strval($i))->getValue()?$sheet->getCell('L'.strval($i))->getValue():($sheet->getCell('C'.strval($i))->getValue()?$sheet->getCell('C'.strval($i))->getValue():'empty'));

        $product->setNameShort($sheet->getCell('C'.strval($i))->getValue());

        $weight = 0; //$sheet->getCell('I'.strval($i))->getValue();
        try {
            $weight = (float)$sheet->getCell('I'.strval($i))->getValue();
        } catch (Exception $e) {
            $weight = 0;
        }
        $product->setWeight($weight);
        $product->setStandard($sheet->getCell('J'.strval($i))->getValue());

        $product->setUnit($this->getDoctrine()->getRepository(Unit::class)->find(2));

        $typeKD = $sheet->getCell('H'.strval($i))->getValue();
        $typeID = 1;
        if ( $typeKD == 'Детали' ) $typeID = 3;
        if ( $typeKD == 'Стандартные' ) $typeID = 4;
        if ( $typeKD == 'Прочие' ) $typeID = 6;
        $product->setProductType($this->getDoctrine()->getRepository(ProductType::class)->find($typeID));

        $product->setProductGroup($this->getDoctrine()->getRepository(ProductGroup::class)->find(2));

        $product->setProductKind($this->getDoctrine()->getRepository(ProductKind::class)->find(1));

        $typeCat = $sheet->getCell('G'.strval($i))->getValue();
        $typeCatID = 1;
        if ( $typeCat == 'Покупные' ) $typeCatID = 2;
        if ( $typeCat == 'Собственные' ) $typeCatID = 3;
        $product->setProductCategory($this->getDoctrine()->getRepository(ProductCategory::class)->find($typeCatID));

        $product->setIntype(1);

        $entityManager = $this->getDoctrine()->getManager();
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
    }*/

    //Продукция
    /*$spreadsheet = IOFactory::load('productnew.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('product');

        for ($i = 2; $i <= 2462; $i++) {

        $product = new Product();

        $product->setIdAvt(($sheet->getCell('A'.strval($i))->getValue()));
        $product->setTypeAvt('product');


        $product->setDesignation($sheet->getCell('J'.strval($i))->getValue());
        $product->setName($sheet->getCell('K'.strval($i))->getValue()?$sheet->getCell('K'.strval($i))->getValue():'empty');

        $product->setNameShort($sheet->getCell('F'.strval($i))->getValue());

        $weight = 0; //$sheet->getCell('I'.strval($i))->getValue();
        try {
            $weight = (float)$sheet->getCell('D'.strval($i))->getValue();
        } catch (Exception $e) {
            $weight = 0;
        }
        $product->setWeight($weight);

        $product->setUnit($this->getDoctrine()->getRepository(Unit::class)->find(2));

        $product->setProductKind($this->getDoctrine()->getRepository(ProductKind::class)->find(1));


        $product->setProductType($this->getDoctrine()->getRepository(ProductType::class)->find(5));


        $lengthProduct = 0; //$sheet->getCell('I'.strval($i))->getValue();
        try {
            $lengthProduct = (float)$sheet->getCell('G'.strval($i))->getValue();
        } catch (Exception $e) {
            $lengthProduct = 0;
        }
        $product->setLengthProduct($lengthProduct);


        $product->getDesignationMaz(($sheet->getCell('H'.strval($i))->getValue()));
        $product->setNameMaz(($sheet->getCell('I'.strval($i))->getValue()));

        $grKD = $sheet->getCell('L'.strval($i))->getValue();
        $grID = 1;
        if ( $grKD == 'Продукция технического назначения' ) $grID = 2;
        if ( $grKD == 'Товары народного потребления' ) $grID = 3;
        $product->setProductGroup($this->getDoctrine()->getRepository(ProductGroup::class)->find($grID));

        $product->setProductCategory($this->getDoctrine()->getRepository(ProductCategory::class)->find(1));

        $product->setIntype(1);

        $entityManager = $this->getDoctrine()->getManager();
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

    }*/


      /*  $spreadsheet = IOFactory::load('documkalk.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('documkalk');

        for ($i = 2; $i <= 1304; $i++) {

        $specification = new Specification();

        $specification->setIdAvt(($sheet->getCell('A'.strval($i))->getValue()));

        $specification->setStatus(1);


        $idProduct = 0; //$sheet->getCell('I'.strval($i))->getValue();
        try {
            $idProduct = (int)$sheet->getCell('C'.strval($i))->getValue();
        } catch (Exception $e) {
            $idProduct = 0;
        }

        $product = $this->getDoctrine()->getRepository(Product::class)->findForExcel($idProduct);
        $specification->setProduct($product);

        $specification->setDateSpecification(new \DateTime());

        $rendition = $this->getDoctrine()->getRepository(Rendition::class)->find(1);
        $specification->setRendition($rendition);


        $entityManager = $this->getDoctrine()->getManager();
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($specification);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

    }*/
/*

    $spreadsheet = IOFactory::load('kalkulacia.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('kalkulacia');

        for ($i = 2; $i <= 23936; $i++) {

        $idProduct = 0;
        try {
            $idProduct = (int)$sheet->getCell('C'.strval($i))->getValue();
        } catch (Exception $e) {
            $idProduct = 0;
        }

        if ($idProduct==0 || $idProduct==1  || $idProduct==2) {
            continue;
        }


        $structure = new Structure();

        $structure->setFormat(0);


        $amount = 0;
        try {
            $amount = (float)$sheet->getCell('B'.strval($i))->getValue();
        } catch (Exception $e) {
            $amount = 0;
        }
        $structure->setAmount($amount);

        $product = $this->getDoctrine()->getRepository(Product::class)->findDetailForExcel($idProduct);
        $structure->setProduct($product);


        $idSpecification = 0;
        try {
            $idSpecification = (int)$sheet->getCell('A'.strval($i))->getValue();
        } catch (Exception $e) {
            $idSpecification = 0;
        }
        $specification = $this->getDoctrine()->getRepository(Specification::class)->findSpecificationForExcel($idSpecification);
        $structure->setSpecification($specification);


        $newIndexNumber = $this->getDoctrine()->getRepository(Structure::class)->getMaxIndexNumber($specification->getId());
        $structure->setIndexNumber($newIndexNumber + 1);



        $entityManager = $this->getDoctrine()->getManager();
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($structure);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

    }*/

/*

        $spreadsheet = IOFactory::load('norm1.xlsx');
        //get current active sheet (first sheet)
        $sheet = $spreadsheet->getSheetByName('norms');

        $entityManager = $this->getDoctrine()->getManager();

        for ($i = 2; $i <= 23936; $i++) {
        //for ($i = 2; $i <= 5; $i++) {

            $idDetail = 0;
            try {
                $idDetail = (int)$sheet->getCell('B'.strval($i))->getValue();
            } catch (Exception $e) {
                $idDetail = 0;
            }

            if ($idDetail==0 || $idDetail==1  || $idDetail==2) {
                continue;
            }


            $idMaterial = 0;
            try {
                $idMaterial = (int)$sheet->getCell('C'.strval($i))->getValue();
            } catch (Exception $e) {
                $idMaterial = 0;
            }

            if ($idMaterial==0 || $idMaterial==1) {
                continue;
            }

            $amount = 0;
            try {
                $amount = (float)$sheet->getCell('A'.strval($i))->getValue();
            } catch (Exception $e) {
                $amount = 0;
            }


            $idUnit = 0;
            try {
                $idUnit = (int)$sheet->getCell('D'.strval($i))->getValue();
            } catch (Exception $e) {
                $idUnit = 0;
            }


            $idUnitKIT = 1;

            if ($idUnit == 3) {
                //шт
                $idUnitKIT = 2;

            } else if ($idUnit == 5) {
                //кг
                $idUnitKIT = 3;

            } else if ($idUnit == 6) {
                //л
                $idUnitKIT = 5;

            } else if ($idUnit == 8) {
                //м2
                $idUnitKIT = 6;

            } else if ($idUnit == 7) {
                //м3
                $idUnitKIT = 7;

            } else if ($idUnit == 9) {
                //мл
                $idUnitKIT = 8;

            } else if ($idUnit == 10) {
                //мм
                $idUnitKIT = 9;

            } else if ($idUnit == 2) {
                //п.м.
                $idUnitKIT = 4;

            } else if ($idUnit == 4) {
                //руб
                $idUnitKIT = 1;

            } else if ($idUnit == 11) {
                //см3
                $idUnitKIT = 10;

            }


            $unit = $this->getDoctrine()->getRepository(Unit::class)->findUnitForExcel($idUnitKIT);


            $material = $this->getDoctrine()->getRepository(Product::class)->findMaterialForExcel($idMaterial);

            $issueUnit = $material->getUnit();

            if ($issueUnit && $material->getUnit()->getId() != 1) {
                if ($issueUnit->getName() != $unit->getName()) {
                    $logger->info('[-----] --- Unit ' . strval($i));
                }
            } else {

                $material->setUnit($unit);

                $entityManager->persist($material);
                $entityManager->flush();

            }


            $detail = $this->getDoctrine()->getRepository(Product::class)->findDetailForExcel($idDetail);

            if (!$detail) {
                $logger->info('[-----] --- Not found ' . strval($i));
                continue;
            }


            $normDocument = $this->getDoctrine()->getRepository(NormDocument::class)->findNormDocumentForExcel($detail->getId());

            if (!$normDocument) {


                $rendition = $this->getDoctrine()->getRepository(Rendition::class)->find(1);


                $normDocument = new NormDocument();

                $normDocument
                    ->setStatus(NormDocument::IN_DEVELOPING)
                    ->setProduct($detail)
                    ->setDateDocument(new \DateTime())
                    ->setRendition($rendition);

                $normDocument->setUser($this->getUser());

                $entityManager->persist($normDocument);
                $entityManager->flush();


                $materialNormNew = new MaterialNorm();

                $materialNormNew
                    ->setAmount((float)$amount)
                    ->setNormDocument($normDocument)
                    ->setIndexNumber((int)1)
                    ->setMaterial($material);

                $entityManager->persist($materialNormNew);
                $entityManager->flush();

            }
        }
*/

        return $this->render('home/index.html.twig', [
            'countNullStructures' => $countNullStructures,
            'countNullProductsGroups' => $countNullProductsGroups,
            'countNullProductsKinds' => $countNullProductsKinds,
            'countNullProductsTypes' => $countNullProductsTypes,
            'countNullProductsCategories' => $countNullProductsCategories,

            'countNullMaterialsGroups' => $countNullMaterialsGroups,
            'countNullMaterialsKinds' => $countNullMaterialsKinds,
            'countNullMaterialsTypes' => $countNullMaterialsTypes,
            'countNullMaterialsCategories' => $countNullMaterialsCategories,

            'countNullProductsCalculations' => $countNullProductsCalculations,

            'countNullMaterialsCalculations' => $countNullMaterialsCalculations,

            'countNullProductsAnalyticGroups' => $countNullProductsAnalyticGroups,
            'countNullProductsFinanceGroups' => $countNullProductsFinanceGroups,
            'countNullMaterialsAnalyticGroups' => $countNullMaterialsAnalyticGroups,
            'countNullMaterialsFinanceGroups' => $countNullMaterialsFinanceGroups
        ]);

}



      /**
 * @Route("/ajax/searchallSelect2", name="ajax_searchall_select2")
 */
public function searchallSelect2Action(Request $request)
{
    return $this->render('', array('name' => '888'));
}

}


