<?php

namespace App\Controller;

use App\Traits\ListDatatable;
use App\Entity\ProductionPlan;
use App\Serializer\Normalizer\ProductionPlansNormalizer;
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

class ProductionPlanController extends AbstractController
{
	use ListDatatable;

    private $entityManager;

    private $translator;

    private $logger;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        LoggerInterface $logger
    )
    {
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
        return $this->render('plan/production_plan/index.html.twig', [
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
        $response = $this->getListDatatable($request, ProductionPlan::class);

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
        return $this->render('plan/production_plan/show.html.twig', [
            'productionPlan' => $productionPlan,
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
}
