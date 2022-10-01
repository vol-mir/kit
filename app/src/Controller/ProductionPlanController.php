<?php

namespace App\Controller;

use App\Traits\ListDatatableTrait;
use App\Entity\{
    ProductionPlan,
    NeedPurchasedProduct,
    NeedPurchasedProductElement,
    Product
};
use App\Form\ProductionPlanType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Class ProductionPlanController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class ProductionPlanController extends AbstractController
{
    use ListDatatableTrait;

    private $entityManager;

    private $translator;

    private $logger;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        LoggerInterface $logger
    ) {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->logger = $logger;
    }

    /**
     * Index page
     *
     * @Route("/production/plans", methods="GET", name="production_plan_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('production/plan/index.html.twig', [
            'accountTypes' => ProductionPlan::ACCOUNT_TYPES
        ]);
    }

    /**
     * List datatable action
     *
     * @Route("/datatable/production/plans", methods="POST", name="datatable_production_plans")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listDatatableAction(Request $request): JsonResponse
    {
        $response = $this->getListDatatable($request, null, ProductionPlan::class);

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    /**
     * Show production plan
     *
     * @Route("/production/plan/{id}", methods="GET", name="production_plan_show", requirements={"id" = "\d+"})
     *
     * @param ProductionPlan $productionPlan
     *
     * @return Response
     */
    public function show(ProductionPlan $productionPlan): Response
    {
        return $this->render('production/plan/show.html.twig', [
            'productionPlan' => $productionPlan,
            'productionPlanAccountTypes' => ProductionPlan::ACCOUNT_TYPES,
        ]);
    }

    /**
     * Delete production plan
     *
     * @Route("/production/plan/{id}/delete", methods="DELETE", name="production_plan_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * @param Request $request
     * @param ProductionPlan $productionPlan
     *
     * @return JsonResponse
     */
    public function delete(Request $request, ProductionPlan $productionPlan): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $this->entityManager->remove($productionPlan);
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Creates a new production plan entity
     *
     * @Route("/production/plan/new", methods="GET|POST", name="production_plan_new")
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $productionPlan = new ProductionPlan();

        $productionPlan->setUser($this->getUser());

        $form = $this->createForm(ProductionPlanType::class, $productionPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->entityManager->persist($productionPlan);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('production_plan_new');
            }

            return $this->redirectToRoute('production_plan_edit', ['id' => $productionPlan->getId()]);
        }

        return $this->render('production/plan/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the production plan entity
     *
     * @Route("/production/plan/{id}/edit", methods="GET|POST", name="production_plan_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * @param Request $request
     * @param ProductionPlan $productionPlan
     *
     * @return Response
     */
    public function edit(Request $request, ProductionPlan $productionPlan): Response
    {
        $form = $this->createForm(ProductionPlanType::class, $productionPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('production_plan_edit', ['id' => $productionPlan->getId()]);
            }

            return $this->redirectToRoute('production_plan_index');
        }

        return $this->render('production/plan/edit.html.twig', [
            'form' => $form->createView(),
            'productionPlan' => $productionPlan,
            'productionPlanAccountTypes' => ProductionPlan::ACCOUNT_TYPES,
        ]);
    }

    /**
     * Data for select
     *
     * @Route("/select/production_plans", methods="POST", name="production_plans")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listSelectProductionPlansAction(Request $request): JsonResponse
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

        $results = $this->entityManager->getRepository(ProductionPlan::class)->getRequiredSelectProductionPlansData($kwd, $page, $limit, $offset);

        $objects = $results["results"];
        $count = $results["countResult"];

        $endCount = $offset + $limit;
        $morePages = $count > $endCount;

        $data = [];
        foreach ($objects as $productionPlan) {
            $data[] = [
                'id' => $productionPlan->getId(),
                'text' => $productionPlan->getIdErp() . ' от ' . $productionPlan->getDateErp()->format('d.m.Y')
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
     * Show page need purchased
     *
     * @Route("/production/plan/{id}/purchased", methods="GET", name="production_plan_need_purchased")
     *
     * @return Response
     */
    public function needPurchased(Request $request, ProductionPlan $productionPlan): Response
    {
        return $this->render('production/need/purchased.html.twig', [
            'productionPlan' => $productionPlan,
            'accountTypes' => ProductionPlan::ACCOUNT_TYPES,
        ]);
    }

    /**
     * List datatable need purchased action
     *
     * @Route("/datatable/plan/{production_plan_id}/need/purchaseds", requirements={"production_plan_id" = "\d+"}, methods="POST", name="datatable_plan_need_purchaseds")
     * @ParamConverter("productionPlan", options={"id" = "production_plan_id"})
     * @Security("is_granted('ROLE_USER')")
     * 
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listDatatableNeedPurchasedAction(Request $request, ProductionPlan $productionPlan): JsonResponse
    {
        $response = $this->getListDatatable($request, $productionPlan, NeedPurchasedProduct::class);

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    /**
     * Show page need purchased to product or material
     *
     * @Route("/production/plans/{production_plan_id}/purchased/{id}/product", methods="GET", name="production_plan_need_purchased_product")
     * @ParamConverter("productionPlan", options={"id" = "production_plan_id"})
     * @Security("is_granted('ROLE_USER')")
     * 
     * @return Response
     */
    public function needPurchasedProduct(Request $request, ProductionPlan $productionPlan, Product $product): Response
    {
        $needPurchasedProduct = $this->entityManager->getRepository(NeedPurchasedProduct::class)->findOneBy(['production_plan' => $productionPlan->getId(), 'product' => $product->getId()]);
      
        return $this->render('production/need/purchased_product.html.twig', [
            'productionPlan' => $productionPlan,
            'accountTypes' => ProductionPlan::ACCOUNT_TYPES,
            'product' => $product,
            'needPurchasedProduct' => $needPurchasedProduct,
        ]);
    }

    /**
     * Data for purchased-product-detailing tables
     *
     * @Route("/production/plans/{production_plan_id}/purchased/{id}/product/detailing", methods="POST", name="purchased_product_detailing")
     * @ParamConverter("productionPlan", options={"id" = "production_plan_id"})
     * @Security("is_granted('ROLE_USER')")
     * 
     * @param Request $request
     * @param Product $product
     *
     * @return JsonResponse
     */
    public function purchasedProductDetailing(Request $request, ProductionPlan $productionPlan, Product $product): JsonResponse
    {
        $needPurchasedProductElements = $this->entityManager->getRepository(NeedPurchasedProductElement::class)->findBy(['production_plan' => $productionPlan->getId(), 'parent_material' => $product->getId()]);
    
        $detailing = [];

        foreach ($needPurchasedProductElements as $element) {
            $arrStr = [];
            $arrStr['id'] = $element->getKeyParent() . '-' . $element->getProduct()->getId();
            $arrStr['pid'] = $element->getParent() ? $element->getKeyParent() . '-' . $element->getParent()->getId() : null;
            $arrStr['amount'] = strval((double)($element->getAmount()));
            $arrStr['amountStandart'] = strval((double)($element->getAmountStandart()));
            $arrStr['amountAll'] = strval((double)($element->getAmountAll()));
            $arrStr['intype'] = $element->getProduct()->getIntype();
            $arrStr['productId'] = $element->getProduct()->getId();
            $arrStr['name'] = $element->getProduct()->getName();
            $arrStr['unit'] = $element->getProduct()->getUnit() ? $element->getProduct()->getUnit()->getName() : '';
            $arrStr['designation'] = $element->getProduct()->getDesignation();
            $arrStr['specificationId'] = $element->getSpecification() ? $element->getSpecification()->getId() : null;
            $arrStr['normDocumentId'] = $element->getNormDocument() ? $element->getNormDocument()->getId() : null;

            $detailing[] = $arrStr;
        }

        $response = [
            'data' => $detailing
        ];

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }


}
