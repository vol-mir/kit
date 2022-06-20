<?php

namespace App\Controller;

use App\Traits\ListDatatable;
use App\Entity\ProductionPlanItem;
use App\Entity\ProductionPlan;
use App\Form\ProductionPlanItemType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Contracts\Translation\TranslatorInterface;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class ProductionPlanItemController
 * @package App\Controller
 *
 * @Route("/production/plan/{production_plan_id}/edit", requirements={"production_plan_id" = "\d+"});
 * @ParamConverter("productionPlan", options={"id" = "production_plan_id"})
 * @Security("is_granted('ROLE_USER')")
 */
class ProductionPlanItemController extends AbstractController
{

    use ListDatatable;

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
     * List datatable action
     *
     * @Route("/datatable/items", methods="POST", name="datatable_production_plan_item")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listDatatableAction(Request $request): JsonResponse
    {
        $response = $this->getListDatatable($request, ProductionPlanItem::class);

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }


    /**
     * Creates a new item position in production plan
     *
     * @Route("/item/new", methods="GET|POST", name="production_plan_item_new")
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * @param Request $request
     * @param productionPlan $productionPlan
     *
     * @return RedirectResponse|Response
     */
    public function newTrack(Request $request, ProductionPlan $productionPlan): Response
    {
        $track = new ProductionPlanItem();
        $track->setProductionPlan($productionPlan);
        $form = $this->createForm(ProductionPlanItemType::class, $track);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $newIndexNumber = $this->trackRep->getMaxIndexNumber($productionPlan->getId());
            // $track->setIndexNumber($newIndexNumber + 1);
            // $this->entityManager->persist($track);
            // $this->entityManager->flush();

            // $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            // if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

            //     return $this->redirectToRoute('track_new',[
            //         'track_document_id' => $productionPlan->getId()
            //     ]);
            // }

            // return $this->redirectToRoute('track_document_edit', [
            //     'id' => $productionPlan->getId()
            // ]);
        }

        return $this->render('production/item/new.html.twig', [
            'form' => $form->createView(),
            'productionPlan' => $productionPlan
        ]);
    }
}
