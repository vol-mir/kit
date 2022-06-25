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
use App\Repository\ProductionPlanItemRepository;

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

    private $productionPlanItemRep; 

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        LoggerInterface $logger,
        ProductionPlanItemRepository $productionPlanItemRep
    ) {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->logger = $logger;
        $this->productionPlanItemRep = $productionPlanItemRep;
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
    public function listDatatableAction(Request $request, ProductionPlan $productionPlan): JsonResponse
    {
        $response = $this->getListDatatable($request, $productionPlan, ProductionPlanItem::class);

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
     * @param ProductionPlan $productionPlan
     *
     * @return RedirectResponse|Response
     */
    public function newProductionPlanItem(Request $request, ProductionPlan $productionPlan): Response
    {
        $productionPlanItem = new ProductionPlanItem();
        $productionPlanItem->setProductionPlan($productionPlan);
        $form = $this->createForm(ProductionPlanItemType::class, $productionPlanItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newIndexNumber = $this->productionPlanItemRep->getMaxIndexNumber($productionPlan->getId());
            $productionPlanItem->setIndexNumber($newIndexNumber + 1);
            $this->entityManager->persist($productionPlanItem);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('production_plan_item_new',[
                    'production_plan_id' => $productionPlan->getId()
                ]);
            }

            return $this->redirectToRoute('production_plan_edit', [
                'id' => $productionPlan->getId()
            ]);
        }

        return $this->render('production/item/new.html.twig', [
            'form' => $form->createView(),
            'productionPlan' => $productionPlan
        ]);
    }

    /**
     * Edit the item position in production plan
     *
     * @Route("/item/{id}/edit", methods="GET|POST", name="production_plan_item_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * @param Request $request
     * @param ProductionPlan $productionPlan
     * @param ProductionPlanItem $productionPlanItem
     *
     * @return Response
     */
    public function editProductionPlanItem(Request $request, ProductionPlan $productionPlan, ProductionPlanItem $productionPlanItem): Response
    {
        $form = $this->createForm(ProductionPlanItemType::class, $productionPlanItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('production_plan_item_edit', ['id' => $productionPlanItem->getId(),'production_plan_id' => $productionPlan->getId()]);
            }

            return $this->redirectToRoute('production_plan_edit', [
                'id' => $productionPlan->getId()
            ]);
        }

        return $this->render('production/item/edit.html.twig', [
            'form' => $form->createView(),
            'productionPlan' => $productionPlan,
            'productionPlanItem' => $productionPlanItem
        ]);
    }

    /**
     * Delete item position in production plan
     *
     * @Route("/item/{id}/delete", methods="DELETE", name="production_plan_item_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * @param Request $request
     * @param ProductionPlan $productionPlan
     * @param ProductionPlanItem $productionPlanItem
     *
     * @return JsonResponse
     */
    public function delete(Request $request, ProductionPlan $productionPlan, ProductionPlanItem $productionPlanItem): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $this->entityManager->remove($productionPlanItem);

            $itemHalfDownElements = $this->productionPlanItemRep->getProductionPlanItemHalfDown($productionPlan, $productionPlanItem);

            $newSrartIndex = $productionPlanItem->getIndexNumber();
            foreach ($itemHalfDownElements as $itemElement) {

                $itemElement->setIndexNumber($newSrartIndex);

                $newSrartIndex++;

                $this->entityManager->persist($itemElement);

            }
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }
}
