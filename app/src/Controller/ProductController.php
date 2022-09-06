<?php

namespace App\Controller;

use App\Traits\ListDatatableTrait;

use App\Entity\Product;
use App\Entity\Rendition;
use App\Entity\Calculation;
use App\Entity\Track;
use App\Entity\Comment;
use App\Entity\ProductGroup;
use App\Entity\ProductType as EntityProductType;
use App\Form\ProductType;
use App\Entity\ProductKind;
use App\Entity\NormDocument;
use App\Entity\TrackDocument;
use App\Entity\MaterialNorm;
use App\Entity\Content;
use App\Entity\Structure;
use App\Entity\Specification;
use App\Entity\ProductCategory;
use App\Entity\AnalyticGroup;
use App\Entity\FinanceGroup;
use App\Repository\ProductRepository;
use App\Repository\CommentRepository;
use App\Repository\ProductCategoryRepository;
use App\Repository\SpecificationRepository;
use App\Repository\NormDocumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\SimpleType\TblWidth;

/**
 * Class ProductController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class ProductController extends AbstractController
{
    use ListDatatableTrait;

    private $entityManager;

    private $translator;

    private $productRepository;

    private $normDocumentRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        ProductRepository $productRepository,
        SpecificationRepository $specificationRepository,
        NormDocumentRepository $normDocumentRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->productRepository = $productRepository;
        $this->specificationRepository = $specificationRepository;
        $this->normDocumentRepository = $normDocumentRepository;
    }

    /**
     * Index page
     *
     * @Route("/products",  methods="GET", name="product_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'productGroups' => $this->entityManager->getRepository(ProductGroup::class)->getAllProductGroups(),
            'productTypes' => $this->entityManager->getRepository(EntityProductType::class)->getAllProductTypes(),
            'productKinds' => $this->entityManager->getRepository(ProductKind::class)->getAllProductKinds(),
            'productCategories' => $this->entityManager->getRepository(ProductCategory::class)->getAllProductCategories(),
            'calculations' => $this->entityManager->getRepository(Calculation::class)->getAllCalculations(),
            'analyticGroups' => $this->entityManager->getRepository(AnalyticGroup::class)->getAllAnalyticGroups(),
            'financeGroups' => $this->entityManager->getRepository(FinanceGroup::class)->getAllFinanceGroups(),
        ]);
    }

    /**
     * Data for tables
     *
     * @Route("/product/datatables", methods="POST", name="product_datatables")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listDatatableAction(Request $request): JsonResponse
    {
        $response = $this->getListDatatable($request, null, Product::class);

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    /**
     * Creates a new product entity
     *
     * @Route("/product/new", methods="GET|POST", name="product_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $product = new Product();

        $product->setIntype(Product::INTYPE_PRODUCT);
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if (!$product->getProductCategory()) {
                $defaultProductCategory = $this->getDoctrine()->getRepository(ProductCategory::class)->find(1);
                $product->setProductCategory($defaultProductCategory);
            }

            if (!$product->getCalculation()) {
                $defaultCalculation = $this->getDoctrine()->getRepository(Calculation::class)->find(1);
                $product->setCalculation($defaultCalculation);
            }

            if (!$product->getAnalyticGroup()) {
                $defaultAnalyticGroup = $this->getDoctrine()->getRepository(AnalyticGroup::class)->find(1);
                $product->setAnalyticGroup($defaultAnalyticGroup);
            }

            if (!$product->getFinanceGroup()) {
                $defaultFinanceGroup = $this->getDoctrine()->getRepository(FinanceGroup::class)->find(1);
                $product->setFinanceGroup($defaultFinanceGroup);
            }

            $this->entityManager->persist($product);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_new');
            }

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the product entity
     *
     * @Route("/product/{id}/edit", methods="GET|POST", name="product_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK') or is_granted('ROLE_BUH') or is_granted('ROLE_OGT') or is_granted('ROLE_PEO')")
     *
     * @param Request $request
     * @param Product $product
     *
     * @return Response
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_edit', ['id' => $product->getId()]);
            }

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/edit.html.twig', [
            'form' => $form->createView(),
            'product' => $product
        ]);
    }

    /**
     * Show product
     *
     * @Route("/product/{id}", methods="GET", name="product_show", requirements={"id" = "\d+"})
     *
     * @param Product $product
     *
     * @return Response
     */
    public function show(Product $product): Response
    {
        $date = new \DateTime();

        $productRenditions = $this->specificationRepository->getProductRenditions($product, $date);

        $productRenditions = $productRenditions?$productRenditions:$this->normDocumentRepository->getProductRenditions($product, $date);

        return $this->render('product/show.html.twig', [
            'product' => $product,
            'specificationStatuses' => Specification::STATUSES,
            'normDocumentStatuses' => NormDocument::STATUSES,
            'trackDocumentStatuses' => TrackDocument::STATUSES,
            'detailing' => $this->getDetailing($product, $product->getId(), 1, 0, $date),
            'actualTracks' => $this->entityManager->getRepository(TrackDocument::class)->getActualTrackDocuments($product->getId(), $date),
            'materials' => $this->getGroupsMaterials($this->getMaterials($product, $product->getId(), 1, 0, $date)),
            'productRenditions' => $productRenditions,
            'comments' => $this->entityManager->getRepository(Comment::class)->getFilterComments('Product', $product->getId()),
        ]);
    }

    /**
     * Data for tables
     *
     * @Route("/product/{id}/detailing", methods="POST", name="product_detailing")
     *
     * @param Request $request
     * @param Product $product
     *
     * @return JsonResponse
     */
    public function detailing(Request $request, Product $product): JsonResponse
    {

        $date = new \DateTime();

        $response = [
            'detailing' => $this->getDetailing($product, $product->getId(), 1, 0, $date),
        ];

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    public function getDetailing(Product $product, $original, $count = 1, $parent, $date)
    {
        $arrPrint = [];

        $specification = $this->entityManager->getRepository(Specification::class)->getActualSpecification($product->getId(), $date);

        if ($specification) {

            foreach ($specification->getStructures() as  $structure) {

                if ($structure->getProduct()->getIntype() !== Product::INTYPE_PRODUCT && $structure->getProduct()->getIntype() !== Product::INTYPE_MATERIAL) {
                    continue;
                }

                if (!$structure->getMainReplacement()) {
                    continue;
                }

                $productForStructure = $structure->getProduct();

                $id = $productForStructure->getId();
                $pid = $specification->getProduct()->getId()===$original?0:$specification->getProduct()->getId().'-'.$parent;

                $icon = '';
                if ($productForStructure->getIntype() == Product::INTYPE_MATERIAL) {
                    $icon = '<i class="fa fa-leaf fa-xs"></i> ';
                } elseif ($productForStructure->getIntype() == Product::INTYPE_PRODUCT) {
                    if ($productForStructure->getSpecifications()->count() > 0) {
                        $icon = '<i class="fa fa-cubes fa-xs"></i> ';
                    } else {
                        $icon = '<i class="fa fa-cube fa-xs"></i> ';
                    }
                }


               /* $materialNorm = $this->entityManager->getRepository(MaterialNorm::class)->getActualMaterialNorm($productForStructure->getId(), $date);*/

                $arrStr = [];
                $arrStr['id'] = $id.'-'.$pid;
                $arrStr['pid'] = $pid;
                $arrStr['amount'] = strval((double)($count * $structure->getAmount())) . ' ' . $structure->getProduct()->getUnit()->getName();
                $arrStr['name'] = $icon.$productForStructure->getFullName();
                $arrStr['document'] = 'утв. - ' . $specification->getDateSpecification()->format('d.m.Y');

                $arrStr['category'] = $productForStructure->getProductCategory()?$productForStructure->getProductCategory()->getName():'';

                $tempTrack = 'Нет';
                foreach ($productForStructure->getTrackDocuments() as  $trackDocument) {
                    if ($trackDocument->getStatus() == 3) {
                        $tempTrack = 'Да';
                        break;
                    }
                }

                $arrStr['track'] = $tempTrack;

               /* $amountMaterial = $materialNorm?$materialNorm->getAmount():0;

                if ($amountMaterial) {

                $arrStr['material'] = '<small>'.($materialNorm?$materialNorm->getMaterial()->getFullName():'').'<small>';
                $arrStr['amountMaterial'] = $materialNorm?strval($materialNorm->getAmount()) . ' ' . $materialNorm->getMaterial()->getUnit()->getName():'';
                $arrStr['documentMaterial'] = $materialNorm?'утв. - '. $materialNorm->getNormDocument()->getDateDocument()->format('d.m.Y'):'';
                } else {
                    $arrStr['material'] ='';
                    $arrStr['amountMaterial'] =  '';
                    $arrStr['documentMaterial'] = '';
                }*/

                $arrPrint[]=$arrStr;

                if ($productForStructure->getSpecifications()->count() > 0) {

                    $arrTemp=$this->getDetailing($productForStructure, $original, $structure->getAmount(), $pid, $date);

                    foreach ($arrTemp as  $elemTemp) {
                        $arrPrint[] = $elemTemp;
                    }

                }
            }
        }

        return $arrPrint;
    }

    public function getMaterials(Product $product, $original, $count = 1, $parent, $date)
    {
        $arrPrint = [];

        $specification = $this->entityManager->getRepository(Specification::class)->getActualSpecification($product->getId(), $date);

        if ($specification) {

            foreach ($specification->getStructures() as  $structure) {

                if ($structure->getProduct()->getIntype() !== Product::INTYPE_PRODUCT && $structure->getProduct()->getIntype() !== Product::INTYPE_MATERIAL) {
                    continue;
                }

                if (!$structure->getMainReplacement()) {
                    continue;
                }

                $productForStructure = $structure->getProduct();

                $id = $productForStructure->getId();
                $pid = $specification->getProduct()->getId()===$original?0:$specification->getProduct()->getId().'-'.$parent;

                if ($productForStructure->getSpecifications()->count() > 0) {

                    $arrTemp=$this->getMaterials($productForStructure, $original, $structure->getAmount(), $pid, $date);

                    foreach ($arrTemp as  $elemTemp) {
                        $arrPrint[] = $elemTemp;
                    }

                } else {
                    $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($productForStructure->getId(), $date);

                    if (count($normMaterials) == 0) {

                        $tempMaterial = '';
                            if (!$tempMaterial) {
                                foreach ($productForStructure->getKdMaterials() as  $materialKD) {
                                    $tempMaterial .=  trim($materialKD->getFullName()) . ', ';
                            }
                        }
                        $tempMaterial = trim($tempMaterial);
                        if (strlen($tempMaterial) >0 && $tempMaterial[strlen($tempMaterial)-1] == ',') {
                            $tempMaterial = substr($tempMaterial,0,-1);
                        }

                        $arrStr = [];
                        $arrStr['amount'] = strval((double)($count * $structure->getAmount()));
                        $arrStr['amountUnit'] = $structure->getProduct()->getUnit()->getName();
                        $arrStr['name'] = $productForStructure->getFullName();
                        $arrStr['category'] = $productForStructure->getProductCategory()->getName();
                        $arrStr['material'] =$tempMaterial;

                        $arrStr['materialCalc'] =  '';

                        $arrStr['amountMaterial'] =  '';
                        $arrStr['amountUnitMaterial'] =  '';
                        $arrStr['amountOne'] =  '';
                        $arrStr['mainReplacement'] =  1;

                        $arrStr['nameKD'] = $productForStructure->getName();
                        $arrStr['designationKD'] = $productForStructure->getDesignation();
                        $arrStr['productId'] = $productForStructure->getId();

                        $arrStr['intype'] = $productForStructure->getIntype();

                        $arrStr['weight'] =  $productForStructure->getWeight();
                        $arrStr['categoryId'] =  $productForStructure->getProductCategory()->getId();

                        $arrStr['calculationId'] =  $productForStructure->getCalculation()->getId();
                        $arrStr['calculationName'] =  $productForStructure->getCalculation()->getName();

                        $arrPrint[]=$arrStr;
                    } else {

                        foreach ($normMaterials as  $materialNorm) {

                            $tempMaterial = $materialNorm?$materialNorm->getMaterial()->getFullName():'';

                            $materialCalc = $materialNorm?$materialNorm->getMaterial()->getCalculation()->getName():'';


                            if (!$tempMaterial) {
                                foreach ($productForStructure->getKdMaterials() as  $materialKD) {
                                    $tempMaterial .= trim($materialKD->getFullName()) . ', ';
                                }
                            }
                            $tempMaterial = trim($tempMaterial);
                            if (strlen($tempMaterial) >0 && $tempMaterial[strlen($tempMaterial)-1] == ',') {
                                $tempMaterial = substr($tempMaterial,0,-1);
                            }

                            $arrStr = [];
                            $arrStr['amount'] = strval((double)($count * $structure->getAmount()));
                            $arrStr['amountUnit'] = $structure->getProduct()->getUnit()->getName();
                            $arrStr['name'] = $productForStructure->getFullName();
                            $arrStr['category'] = $productForStructure->getProductCategory()?$productForStructure->getProductCategory()->getName():'';
                            $arrStr['material'] = $tempMaterial;

                            $arrStr['materialCalc'] =  $materialCalc;

                            $arrStr['amountMaterial'] = $materialNorm?strval($count * $structure->getAmount()*$materialNorm->getAmount()):'';
                            $arrStr['amountUnitMaterial'] = $materialNorm?$materialNorm->getMaterial()->getUnit()->getName():'';
                            $arrStr['amountOne'] =  '';

                            $arrStr['weight'] =  $productForStructure->getWeight();
                            $arrStr['categoryId'] =  $productForStructure->getProductCategory()?$productForStructure->getProductCategory()->getId():'';

                            $arrStr['nameKD'] = $productForStructure->getName();
                            $arrStr['designationKD'] = $productForStructure->getDesignation();
                            $arrStr['productId'] = $productForStructure->getId();

                            $mainReplacement = 0;
                            if ($materialNorm && $materialNorm->getMainReplacement() == 1) {
                                $mainReplacement = 1;
                            } else if ($materialNorm) {
                                $mainReplacement = 2;
                            }
                            $arrStr['mainReplacement'] =  $mainReplacement;

                            $arrStr['intype'] = $productForStructure->getIntype();

                            $arrStr['calculationId'] = $productForStructure->getCalculation()->getId();
                            $arrStr['calculationName'] = $productForStructure->getCalculation()->getName();

                            $arrPrint[]=$arrStr;
                        }

                    }


                }
            }


        }

        $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($product->getId(), $date);

        if ($normMaterials) {
            foreach ($normMaterials as  $materialNorm) {
                $arrStr = [];
                $arrStr['amount'] = '';
                $arrStr['amountUnit'] = '';
                $arrStr['name'] = '';
                $arrStr['nameKD'] = '';
                $arrStr['designationKD'] = '';
                $arrStr['productId'] = '';
                $arrStr['category'] = '';
                $arrStr['material'] = ($materialNorm?$materialNorm->getMaterial()->getFullName():'');

                $arrStr['materialCalc'] =  '';

                $arrStr['amountMaterial'] = $materialNorm?strval($materialNorm->getAmount()):'';
                $arrStr['amountUnitMaterial'] = $materialNorm?$materialNorm->getMaterial()->getUnit()->getName():'';
                $arrStr['amountOne'] =  '';
                $mainReplacement = 0;
                if ($materialNorm && $materialNorm->getMainReplacement() == 1) {
                    $mainReplacement = 1;
                } else if ($materialNorm) {
                    $mainReplacement = 2;
                }
                $arrStr['mainReplacement'] =  $mainReplacement;

                $arrStr['intype'] = $materialNorm->getMaterial()->getIntype();

                $arrStr['weight'] =  '';
                $arrStr['categoryId'] =  '';

                $arrStr['calculationId'] = $materialNorm->getMaterial()->getCalculation()->getId();
                $arrStr['calculationName'] = $materialNorm->getMaterial()->getCalculation()->getName();

                $arrPrint[]=$arrStr;
            }
        }

        return $arrPrint;
    }

    public function getMaterialsXML(Product $product, $date)
    {
        $arrPrint = [];

        $specification = $this->entityManager->getRepository(Specification::class)->getActualSpecification($product->getId(), $date);

        if ($specification) {

            foreach ($specification->getStructures() as  $structure) {

                if ($structure->getProduct()->getIntype() !== Product::INTYPE_PRODUCT && $structure->getProduct()->getIntype() !== Product::INTYPE_MATERIAL) {
                    continue;
                }

                if (!$structure->getMainReplacement()) {
                    continue;
                }

                $productForStructure = $structure->getProduct();

                $arrStr = [];
                $arrStr['idErp'] = $productForStructure->getIdErp();
                $arrStr['id'] = $productForStructure->getId();
                $arrStr['name'] = $productForStructure->getName();
                $arrStr['designation'] = $productForStructure->getDesignation();
                $arrStr['categoryId'] = $productForStructure->getProductCategory()->getId();
                $arrStr['category'] = $productForStructure->getProductCategory()->getName();
                $arrStr['amount'] = strval( sprintf('%f',  (double)$structure->getAmount() ) );
                $arrStr['amountUnitIdErp'] = $structure->getProduct()->getUnit()->getIdErp();
                $arrStr['amountUnitId'] = $structure->getProduct()->getUnit()->getId();
                $arrStr['amountUnitName'] = $structure->getProduct()->getUnit()->getName();
                $arrPrint[]=$arrStr;
            }
        }

        $normMaterials = $this->entityManager->getRepository(MaterialNorm::class)->getActualNormMaterials($product->getId(), $date);

        if ($normMaterials) {
            foreach ($normMaterials as  $materialNorm) {

                if (!$materialNorm->getMainReplacement()) continue;

                $arrStr = [];

                $arrStr['idErp'] = $materialNorm->getMaterial()->getIdErp();
                $arrStr['id'] = $materialNorm->getMaterial()->getId();
                $arrStr['name'] = $materialNorm->getMaterial()->getFullName();
                $arrStr['designation'] = '';
                $arrStr['categoryId'] = $materialNorm->getMaterial()->getProductCategory()->getId();
                $arrStr['category'] = $materialNorm->getMaterial()->getProductCategory()->getName();
                $arrStr['amount'] = strval( sprintf('%f',   (double)$materialNorm->getAmount())  );
                $arrStr['amountUnitIdErp'] = $materialNorm->getMaterial()->getUnit()->getIdErp();
                $arrStr['amountUnitId'] = $materialNorm->getMaterial()->getUnit()->getId();
                $arrStr['amountUnitName'] = $materialNorm->getMaterial()->getUnit()->getName();
                $arrPrint[]=$arrStr;
            }
        }

        return $arrPrint;
    }

    public function getGroupsMaterials($materials) {
        $result = [];

        $sum = array(0);

        foreach ($materials as $material)
        {

            $context = $material['amountUnit'].'-'.$material['name'].'-'.$material['category'].'-'.$material['material'].'-'.$material['amountUnitMaterial'].'-'.$material['mainReplacement'].'-'.$material['calculationName'].'-'.$material['materialCalc'];

            $search = 0;

            foreach ($result as $key => $item) {
                if ($item['context'] == $context)
                {
                    $search = 1;
                    $amountTemp = (double)$item['amount'] + (double)$material['amount'];
                    $amountMaterialTemp = (double)$item['amountMaterial'] + (double)$material['amountMaterial'];
                    $result[$key]['amount'] = $amountTemp?$amountTemp:'';
                    $result[$key]['amountMaterial'] = $amountMaterialTemp?$amountMaterialTemp:'';
                    $result[$key]['amountOne'] = $amountMaterialTemp&&$amountTemp?$amountMaterialTemp/$amountTemp:'';
                    break;
                }
            }

            if ($search == 0) {
                $arrStr = [];
                $arrStr['amount'] =  (double)$material['amount'];
                $arrStr['amountUnit'] = $material['amountUnit'];
                $arrStr['name'] = $material['name'];
                $arrStr['category'] = $material['category'];
                $arrStr['material'] = $material['material'];

                $arrStr['materialCalc'] = $material['materialCalc'];

                $arrStr['amountMaterial'] = $material['amountMaterial'];
                $arrStr['amountUnitMaterial'] = $material['amountUnitMaterial'];
                $arrStr['context'] = $context;
                $arrStr['amountOne'] = $material['amountMaterial']&&$material['amount']?$material['amountMaterial']/$material['amount']:'';
                $arrStr['mainReplacement'] =  $material['mainReplacement'];

                $arrStr['nameKD'] = $material['nameKD'];
                $arrStr['designationKD'] = $material['designationKD'];
                $arrStr['productId'] = $material['productId'];

                $arrStr['intype'] =  $material['intype'];

                $arrStr['weight'] =  $material['weight'];
                $arrStr['categoryId'] =  $material['categoryId'];


                $arrStr['calculationId'] = $material['calculationId'];
                $arrStr['calculationName'] = $material['calculationName'];


                $result[]=$arrStr;
            }
        }

        return $result;
    }

    /**
     * Delete product
     *
     * @Route("/product/{id}/delete", methods="DELETE", name="product_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Product $product
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Product $product): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($product->getSpecifications()->count() > 0 || $product->getStructures()->count() > 0 || $product->getKdProducts()->count() > 0 || $product->getTrackDocuments()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $this->entityManager->remove($product);
            $this->entityManager->flush();
        }

        return new JsonResponse(['messageSuccess' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Data for select
     *
     * @Route("/select/product", methods="POST", name="select_product")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listSelectProductAction(Request $request): JsonResponse
    {
        // Get the parameters from DataTable Ajax Call
        if ($request->getMethod() === 'POST') {
            $page = (int)$request->request->get('page');
            $kwd = $request->request->get('q');
        } else // If the request is not a POST one, die hard
        {
            die;
        }

        $limit = 25;
        $offset = ($page - 1) * $limit;

        $results = $this->productRepository->getRequiredSelectProductData($kwd, $page, $limit, $offset);

        $objects = $results["results"];
        $count = $results["countResult"];

        $endCount = $offset + $limit;
        $morePages = $count > $endCount;

        $data = [];
        foreach ($objects as $product) {
            $data[] = [
                'id' => $product->getId(),
                'text' => $product->getName() . ' ' . $product->getDesignation()
            ];
        }

        $response = [
            'results' => $data,
            'pagination' => [
                'more' => $morePages
            ]
        ];

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    /**
     * Invoice page
     *
     * @Route("/product/{id}/material/norms/print",  methods="GET", name="print_product_material_norms")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return JsonResponse
     */
    public function invoice(Request $request, Product $product)
    {
        $date = new \DateTime();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('MaterialNorms.docx');

        $templateProcessor->setValue('product', $product->getDesignation() . ' ' . $product->getName());


        $table = new Table([
            'borderSize' => 2,
            'borderColor' => 'black',
            'width' => 10543,
            'unit' => TblWidth::TWIP,
            'alignment'   => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER,
            'layout'      => \PhpOffice\PhpWord\Style\Table::LAYOUT_FIXED,
        ]);

        $materials = $this->getGroupsMaterials($this->getMaterials($product, $product->getId(), 1, 0, $date));

        //http://endmemo.com/convert/topography.php
         $table->addRow();
            $table->addCell(1725, ['valign' => 'center'])->addText('Наименование детали', ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);
            $table->addCell(1522, ['valign' => 'center'])->addText('Обозначение', ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);
            $table->addCell(800, ['valign' => 'center'])->addText('Ед. изм.', ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], [ 'align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(2964, ['valign' => 'center'])->addText('Характеристика материала', ['bold' => true, 'name' => 'Times New Roman', 'size' => 11, 'spaceBefore' => 140], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(800, ['valign' => 'center'])->addText('К-во на изд.', ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], [ 'align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(1004, ['valign' => 'center'])->addText('Норма расхода на деталь', ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(1728, ['valign' => 'center'])->addText('Примечание', ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);

         $table->addRow();
            $table->addCell(1725, ['valign' => 'center'])->addText(1, ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(1522, ['valign' => 'center'])->addText(2, ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(800, ['valign' => 'center'])->addText(3, ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], [ 'align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(2964, ['valign' => 'center'])->addText(4, ['bold' => true, 'name' => 'Times New Roman', 'size' => 11, 'spaceBefore' => 140], [ 'align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(800, ['valign' => 'center'])->addText(5, ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], [ 'align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(1004, ['valign' => 'center'])->addText(6, ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(1728, ['valign' => 'center'])->addText(7, ['bold' => true, 'name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);

        $productId = null;

        foreach ($materials as $material) {

            if ($material['productId'] && $productId != $material['productId']) {
                $merge = 'restart';
                $productId = $material['productId'];
            } else if ($material['productId'] && $productId == $material['productId']){
                $merge = 'continue';
            } else {
                $merge = 'restart';
                $productId = null;
            }

            $table->addRow();

            $tempNameKD = $material['nameKD'];
            $tempDesignationKD = $material['designationKD'];

            $tempUnit = $material['amountUnit'];
            if ($material['amountMaterial']) {
                $tempUnit = $material['amountUnitMaterial'];
            }

            if ($material['mainReplacement'] == 2) {
                $tempName = '';
                $tempUnit = '';
            }
            $table->addCell(1725, ['valign' => 'center', 'vMerge' => $merge])->addText($tempNameKD, ['name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);
            $table->addCell(1522, ['valign' => 'center', 'vMerge' => $merge])->addText($tempDesignationKD, ['name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);
            $table->addCell(800, ['valign' => 'center'])->addText($tempUnit, ['name' => 'Times New Roman', 'size' => 11], [ 'align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0 ]);
            $table->addCell(2964, ['valign' => 'center'])->addText($material['material'], ['name' => 'Times New Roman', 'size' => 11, 'spaceBefore' => 140], ['align' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);
            $table->addCell(800, ['valign' => 'center', 'vMerge' => $merge])->addText($material['amount']?$material['amount']:'', ['name' => 'Times New Roman', 'size' => 11], [ 'align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);
            $table->addCell(1004, ['valign' => 'center'])->addText($material['amountOne']?$material['amountOne']:'', ['name' => 'Times New Roman', 'size' => 11], ['align' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);

            $note = '';
            if ($material['categoryId'] == 2) {
                $note .= 'КООП';
            }

            $tempWeight = (float)$material['weight'];
            if ($tempWeight > 0) {
                if (strlen($note) > 0) {
                    $note .= ', ';
                }
                $note .= 'масса детали ' . $tempWeight . ' кг';
            }

            if ($material['mainReplacement'] == 2) {
                if (strlen($note) > 0) {
                    $note .= ', ';
                }
                $note .= 'замена';
            }

            $table->addCell(1728, ['valign' => 'center'])->addText($note, ['name' => 'Times New Roman', 'size' => 11, 'spaceBefore' => 140], ['align' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0]);
        }

        $templateProcessor->setComplexBlock('table', $table);

        $fileName = 'documents/MaterialNorms.docx';
        $templateProcessor->saveAs($fileName);

        return new Response(
            file_get_contents($fileName),
            200,
            array(
                'Content-Type' => mime_content_type($fileName),
                'Content-Disposition' => 'attachment; filename="MaterialNorms_'.$product->getId().'.docx"'
            )
        );
    }

    public function getGroupsTrackPointsOver($tracks) {

        $newTracks = [];

        $tempId = -1;


        foreach ($tracks as $track) {

            if ($tempId != $track['id']) {

                $newTracks[] = $track;

                $tempId = $track['id'];
            }
        }

        return $newTracks;

    }

    /**
     * Save info xml
     *
     * @Route("/product/{id}/rendition/{rendition_id}/save/xml", requirements={"rendition_id" = "\d+"}, methods="GET|POST", name="save_xml")
     * @ParamConverter("rendition", options={"id" = "rendition_id"})
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function saveXml(Request $request, Product $product, Rendition $rendition): Response
    {
        $date = new \DateTime();

        $actualTrack = $this->entityManager->getRepository(TrackDocument::class)->getActualTrackDocument($product->getId(), $date, $rendition->getId())[0];

        $trackPoints = $this->entityManager->getRepository(Track::class)->getTrackPoints($actualTrack);

        $xml = $this->renderView('product/save_xml.html.twig', [
            'product' => $product,
            'materials' => $this->getMaterialsXML($product, $date),
            'rendition' => $rendition,
            'trackPoints' => $this->getGroupsTrackPointsOver($trackPoints),
            'tracks' => $this->entityManager->getRepository(Track::class)->getTracks($actualTrack),
        ]);

        return new Response(
            $xml,
            200,
            [
                'Content-Type' => 'application/xml',
                'Content-Disposition' => 'attachment; filename="' . date('H_i_s_d_m_Y'). '_' . $product->getId() . '.xml"'
            ]
        );
    }

    /**
     * Products select edit
     *
     * @Route("/products/list/edit",  methods="POST", name="products_list_edit")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function editList(Request $request, TranslatorInterface $translator, LoggerInterface $logger): JsonResponse
    {
        if (!$this->isCsrfTokenValid('products-list-edit', $request->request->get('_token'))) {
            die;
        }

        $productsEdit = json_decode($request->request->get('productsEdit'), true);
        $formData = json_decode($request->request->get('formData'), false);

        foreach ($productsEdit as $productId) {
            $em = $this->getDoctrine()->getManager();

            $product = $em->getRepository(Product::class)->find($productId);

            if (!$product) {
                continue;
            }

            if (property_exists($formData, 'groupSelect')) {

                $productGroup = $em->getRepository(ProductGroup::class)->find($formData->groupSelect);

                if (!$productGroup) {
                    continue;
                }
                $product->setProductGroup($productGroup);
            }

            if (property_exists($formData, 'typeSelect')) {

                $productType = $em->getRepository(EntityProductType::class)->find($formData->typeSelect);

                if (!$productType) {
                    continue;
                }
                $product->setProductType($productType);
            }

            if (property_exists($formData, 'kindSelect')) {

                $productKind = $em->getRepository(ProductKind::class)->find($formData->kindSelect);

                if (!$productKind) {
                    continue;
                }
                $product->setProductKind($productKind);
            }

            if (property_exists($formData, 'categorySelect')) {

                $productCategory = $em->getRepository(ProductCategory::class)->find($formData->categorySelect);

                if (!$productCategory) {
                    continue;
                }
                $product->setProductCategory($productCategory);
            }

            if (property_exists($formData, 'calculationSelect')) {

                $calculation = $em->getRepository(Calculation::class)->find($formData->calculationSelect);

                if (!$calculation) {
                    continue;
                }
                $product->setCalculation($calculation);
            }


            if (property_exists($formData, 'analyticGroupSelect')) {

                $analyticGroup = $em->getRepository(AnalyticGroup::class)->find($formData->analyticGroupSelect);

                if (!$analyticGroup) {
                    continue;
                }
                $product->setAnalyticGroup($analyticGroup);
            }

            if (property_exists($formData, 'financeGroupSelect')) {

                $financeGroupSelect = $em->getRepository(FinanceGroup::class)->find($formData->financeGroupSelect);

                if (!$financeGroupSelect) {
                    continue;
                }
                $product->setFinanceGroup($financeGroupSelect);
            }


            
            

            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('items.edited_successfully')]);
    }
}
