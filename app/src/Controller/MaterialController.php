<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\NormDocument;
use App\Entity\Specification;
use App\Entity\ProductType as EntityProductType;
use App\Entity\ProductGroup;
use App\Form\ProductType;
use App\Entity\MaterialNorm;
use App\Entity\ProductKind;
use App\Entity\ProductCategory;
use App\Entity\Calculation;
use App\Entity\Comment;
use App\Entity\AnalyticGroup;
use App\Entity\FinanceGroup;
use App\Entity\ProductionPlan;
use App\Form\MaterialType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class MaterialController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class MaterialController extends AbstractController
{

    private $entityManager;

    private $translator;

    private $productRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        EntityManagerInterface $entityManage,
        ProductRepository $productRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->productRepository = $productRepository;
    }

    /**
     * Index page
     *
     * @Route("/materials", methods="GET", name="material_index")
     *
     * @return Response
     */

    public function index(): Response
    {

        return $this->render('material/index.html.twig', [
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
     * @Route("/material/datatables", methods="POST", name="material_datatables")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listDatatableAction(Request $request): JsonResponse
    {
        // Get the parameters from DataTable Ajax Call
        if ($request->getMethod() === 'POST') {
            $draw = (int)$request->request->get('draw');
            $start = $request->request->get('start');
            $length = $request->request->get('length');
            $search = $request->request->get('search');
            $orders = $request->request->get('order');
            $columns = $request->request->get('columns');
        } else // If the request is not a POST one, die hard
        {
            die;
        }

        // Orders
        foreach ($orders as $key => $order) {
            // Orders does not contain the name of the column, but its number,
            // so add the name so we can handle it just like the $columns array
            $orders[$key]['name'] = $columns[$order['column']]['name'];
        }

        // Further filtering can be done in the Repository by passing necessary arguments
        $otherConditions = null;

        $results = $this->productRepository->getRequiredDTDataMaterial($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->productRepository->countMaterial();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $material) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {

                    case 'checkbox':
                        {
                            $dataTemp[] = "";
                            break;
                        }
                    case 'id':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('material_show', ['id' => $material->getId()]),
                                'urlName' => $material->getId()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;

                            break;
                        }

                    case 'name':
                        {
                            $elementTemp = $material->getName();
                            $dataTemp[] = $elementTemp;

                            break;
                        }

                    case 'groups':
                        {
                            $elementTemp = '<small>' . $material->getProductGroup()->getName() . '</small>';
                            $elementTemp .= '<br><small>' . $material->getProductType()->getName(). '</small>';
                            $elementTemp .= '<br><small>' . $material->getProductKind()->getName(). '</small>';
                            $elementTemp .= '<br><small>' . $material->getProductCategory()->getName(). '</small>';
                            $elementTemp .= '<br><small>' . $material->getCalculation()->getName(). '</small>';
                            
                            $elementTemp .= '<br><small>' . $material->getAnalyticGroup()->getName(). '</small>';
                            $elementTemp .= '<br><small>' . $material->getFinanceGroup()->getName(). '</small>';
                            
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isPEO= in_array('ROLE_PEO', $this->getUser()->getRoles(), true);
                            $isBUH= in_array('ROLE_BUH', $this->getUser()->getRoles(), true);
                            
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('material_show', ['id' => $material->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                            if ($isAdmin || $isOGK || $isOGT || $isPEO || $isBUH) {
                                $urlEdit = $this->generateUrl('material_edit', ['id' => $material->getId()]);
                            }

                            if ($isAdmin || $isOGK || $isOGT) {
                                $idDelete = $material->getId();
                            }


                            $elementTemp = $this->render('default/table_group_btn_esd.html.twig', [
                                'urlShow' => $urlShow,
                                'urlEdit' => $urlEdit,
                                'idDelete' => $idDelete
                            ])->getContent();

                            $elementTemp .= $this->render('default/table_group_btn_ready_product.html.twig', [
                                'product' => $material
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'yid':
                        {
                            $elementTemp = $material->getId();
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                }
            }
            $data[] = $dataTemp;
        }

        // Construct response
        $response = [
            'draw' => $draw,
            'recordsTotal' => $totalObjectsCount,
            'recordsFiltered' => $filteredObjectsCount,
            'data' => $data,
        ];


        // Send all this stuff back to DataTables
        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }


    /**
     * Creates a new material entity
     *
     * @Route("/material/new", methods="GET|POST", name="material_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $material = new Product();
        $material->setIntype(Product::INTYPE_MATERIAL);
        $form = $this->createForm(MaterialType::class, $material);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if (!$material->getCalculation()) {
                $defaultCalculation = $this->getDoctrine()->getRepository(Calculation::class)->find(1);
                $material->setCalculation($defaultCalculation);
            }

            $this->entityManager->persist($material);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('material_new');
            }

            return $this->redirectToRoute('material_index');
        }

        return $this->render('material/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Show material
     *
     * @Route("/material/{id}", methods="GET", name="material_show", requirements={"id" = "\d+"})
     *
     * @param Product $material
     *
     * @return Response
     */
    public function show(Product $material): Response
    {

        return $this->render('material/show.html.twig', [
            'material' => $material,
            'normDocumentStatuses' => NormDocument::STATUSES,
            'comments' => $this->entityManager->getRepository(Comment::class)->getFilterComments('Product', $material->getId()),
        ]);
    }

    /**
     * Edit the material entity
     *
     * @Route("/material/{id}/edit", methods="GET|POST", name="material_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK') or is_granted('ROLE_BUH') or is_granted('ROLE_OGT') or is_granted('ROLE_PEO')")
     *
     * @param Request $request
     * @param Product $material
     *
     * @return Response
     */
    public function edit(Request $request, Product $material): Response
    {
        $form = $this->createForm(MaterialType::class, $material);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('material_edit', ['id' => $material->getId()]);
            }

            return $this->redirectToRoute('material_index');
        }

        return $this->render('material/edit.html.twig', [
            'form' => $form->createView(),
            'material' => $material
        ]);
    }

    /**
     * Delete material
     *
     * @Route("/material/{id}/delete", methods="DELETE", name="material_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param Product $material
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Product $material): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($material->getSpecifications()->count() > 0 || $material->getStructures()->count() > 0 || $material->getKdMaterials()->count() > 0 || $material->getKdProducts()->count() || $material->getNormDocuments()->count() > 0 || $material->getMaterialNorms()->count()) {
                return new JsonResponse(['messageError' => $translator->trans('item.deleted_use')]);
            }

            $this->entityManager->remove($material);
            $this->entityManager->flush();
        }

        return new JsonResponse(['messageSuccess' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Data for select
     *
     * @Route("/select/material", methods="POST", name="select_material")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listSelectMaterialAction(Request $request): JsonResponse
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

        $em = $this->getDoctrine()->getManager();
        $results = $em->getRepository(Product::class)->getRequiredSelectMaterialData($kwd, $page, $limit, $offset);

        $objects = $results["results"];
        $count = $results["countResult"];

        // determine if they are more results or not
        $endCount = $offset + $limit;
        $morePages = $count > $endCount;

        $data = [];
        foreach ($objects as $product) {
            $data[] = [
                'id' => $product->getId(),
                'text' => $product->getName()
            ];
        }


        // Construct response
        $response = [
            'results' => $data,
            'pagination' => [
                'more' => $morePages
            ]
        ];


        // Send all this stuff back to DataTables
        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }


    /**
     * Materials select edit
     *
     * @Route("/materials/list/edit",  methods="POST", name="materials_list_edit")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function editList(Request $request, TranslatorInterface $translator): JsonResponse
    {
        if (!$this->isCsrfTokenValid('materials-list-edit', $request->request->get('_token'))) {
            die;
        }

        $materialsEdit = json_decode($request->request->get('materialsEdit'), true);
        $formData = json_decode($request->request->get('formData'), false);

        foreach ($materialsEdit as $materialId) {
            $em = $this->getDoctrine()->getManager();

            $material = $em->getRepository(Product::class)->find($materialId);

            if (!$material) {
                continue;
            }

            if (property_exists($formData, 'groupSelect')) {

                $materialGroup = $em->getRepository(ProductGroup::class)->find($formData->groupSelect);

                if (!$materialGroup) {
                    continue;
                }
                $material->setProductGroup($materialGroup);
            }

            if (property_exists($formData, 'typeSelect')) {

                $materialType = $em->getRepository(EntityProductType::class)->find($formData->typeSelect);

                if (!$materialType) {
                    continue;
                }
                $material->setProductType($materialType);
            }

            if (property_exists($formData, 'kindSelect')) {

                $materialKind = $em->getRepository(ProductKind::class)->find($formData->kindSelect);

                if (!$materialKind) {
                    continue;
                }
                $material->setProductKind($materialKind);
            }

            if (property_exists($formData, 'categorySelect')) {

                $materialCategory = $em->getRepository(ProductCategory::class)->find($formData->categorySelect);

                if (!$materialCategory) {
                    continue;
                }
                $material->setProductCategory($materialCategory);
            }

            if (property_exists($formData, 'calculationSelect')) {

                $calculation = $em->getRepository(Calculation::class)->find($formData->calculationSelect);

                if (!$calculation) {
                    continue;
                }
                $material->setCalculation($calculation);
            }


            if (property_exists($formData, 'analyticGroupSelect')) {

                $analyticGroup = $em->getRepository(AnalyticGroup::class)->find($formData->analyticGroupSelect);

                if (!$analyticGroup) {
                    continue;
                }
                $material->setAnalyticGroup($analyticGroup);
            }

            if (property_exists($formData, 'financeGroupSelect')) {

                $financeGroupSelect = $em->getRepository(FinanceGroup::class)->find($formData->financeGroupSelect);

                if (!$financeGroupSelect) {
                    continue;
                }
                $material->setFinanceGroup($financeGroupSelect);
            }


            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('items.edited_successfully')]);
    }


    /**
     * Index materials requirement
     *
     * @Route("/materials/requirement",  methods="GET", name="materials_requirement_index")
     *
     *
     * @return Response
     */
    
    public function materialRequirement(): Response
    {

        return $this->render('material/requirement.html.twig');
    }

    /**
     * Calculate materials requirement
     *
     * @Route("/materials/requirement/calculate",  methods="POST", name="materials_requirement_calculate")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    
    public function materialRequirementCalculate(Request $request, TranslatorInterface $translator): JsonResponse
    {
        if ($this->isCsrfTokenValid('calculate-requirement-materials', $request->request->get('_token'))) {

            $productionPlan = $this->entityManager->getRepository(ProductionPlan::class)->find(1);

            $date = new \DateTime();

            $temp = [];
            foreach ($productionPlan->getProductionPlanItems() as $productionPlanItems) {

                $product = $productionPlanItems->getProduct();

                $temp = array_merge($temp, $this->getMaterials($product, $product->getId(),  $productionPlanItems->getAmount(), 0, $date));

            }

            $materials = $this->getGroupsMaterials($temp);

        }


        return new JsonResponse([
            'message' => $translator->trans('items.calculated_successfully'),
            'temp' => $materials
        ]);
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

                    $arrTemp=$this->getMaterials($productForStructure, $original, $count * $structure->getAmount(), $pid, $date);

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
}
