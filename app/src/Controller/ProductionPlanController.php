<?php

namespace App\Controller;

use App\Traits\ListDatatableTrait;
use App\Entity\ProductionPlan;
use App\Entity\NeedPurchasedProduct;
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
     * @Route("/production/plans/{id}/purchased", methods="GET", name="production_plan_need_purchased")
     *
     * @return Response
     */
    public function needPurchased(Request $request, ProductionPlan $productionPlan): Response
    {
        return $this->render('production/need/purchased.html.twig', [
            'productionPlan' => $productionPlan,
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


}
