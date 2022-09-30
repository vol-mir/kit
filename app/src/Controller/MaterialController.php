<?php

namespace App\Controller;

use App\Services\ListMaterialsService;
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

            return $this->redirectToRoute('product_index');
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
            'specificationStatuses' => Specification::STATUSES,
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

            return $this->redirectToRoute('product_index');
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
     * @param ListMaterialsService $listMaterialsService
     *
     * @return JsonResponse
     */
    public function materialRequirementCalculate(Request $request, TranslatorInterface $translator, ListMaterialsService $listMaterialsService): JsonResponse
    {
        if ($this->isCsrfTokenValid('calculate-requirement-materials', $request->request->get('_token'))) {

            $productionPlan = $this->entityManager->getRepository(ProductionPlan::class)->find($request->request->get('idProductionPlan'));

            $date = new \DateTime();

            $temp = [];
            $listMaterialsService->initTable();

            foreach ($productionPlan->getProductionPlanItems() as $productionPlanItems) {

                $product = $productionPlanItems->getProduct();
                $rendition = $productionPlanItems->getRendition();

                $listMaterialsService->getMaterials($product->getId(), $rendition->getId(), $productionPlanItems->getAmount(), $date, 'root');
            }

           $tempMaterials = $listMaterialsService->getTableMaterials();

           $listMaterialsService->saveTableMaterials($productionPlan, $tempMaterials);

           $materials = $listMaterialsService->getAmountResult($tempMaterials);
        }

        return new JsonResponse([
            'message' => $translator->trans('items.calculated_successfully'),
            'temp' => $temp,
            'tempMaterials' => $tempMaterials,
            'materials' => $materials,
        ]);
    }

}
