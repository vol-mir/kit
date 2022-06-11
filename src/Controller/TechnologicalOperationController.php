<?php

namespace App\Controller;

use App\Entity\TechnologicalOperation;
use App\Form\TechnologicalOperationType;
use App\Repository\TechnologicalOperationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class TechnologicalOperationController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class TechnologicalOperationController extends AbstractController
{

    private $entityManager;

    private $translator;

    private $technologicalOperationRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        TechnologicalOperationRepository $technologicalOperationRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->technologicalOperationRepository = $technologicalOperationRepository;
    }

    /**
     * Index page
     *
     * @Route("/technological/operations", name="technological_operation_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('technological_operation/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/technological/operation/datatables", methods="POST", name="technological_operation_datatables")
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

        $results = $this->technologicalOperationRepository->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->technologicalOperationRepository->countTechnologicalOperation();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $technologicalOperation) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'id_operation':
                        {
                            $elementTemp = $technologicalOperation->getId();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'code_operation':
                        {
                            $elementTemp = $technologicalOperation->getCodeOperation();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'name_operation':
                        {

                            $elementTemp = $technologicalOperation->getName();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'type_operation':
                        {
                            $elementTemp = $technologicalOperation->getTypeOperation();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'code_type_operation':
                        {
                            $elementTemp = $technologicalOperation->getCodeTypeOperation();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {

                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('technological_operation_show', ['id' => $technologicalOperation->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                           if ($isAdmin || $isOGT) {
                                $urlEdit = $this->generateUrl('technological_operation_edit', ['id' => $technologicalOperation->getId()]);
                                $idDelete = $technologicalOperation->getId();
                            }

                            $elementTemp = $this->render('default/table_group_btn_esd.html.twig', [
                                'urlShow' => $urlShow,
                                'urlEdit' => $urlEdit,
                                'idDelete' => $idDelete
                            ])->getContent();
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
     * Creates a new technological operation entity
     *
     * @Route("/technological/operation/new", methods="GET|POST", name="technological_operation_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $technologicalOperation = new TechnologicalOperation();

        $form = $this->createForm(TechnologicalOperationType::class, $technologicalOperation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->entityManager->persist($technologicalOperation);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('technological_operation_new');
            }

            return $this->redirectToRoute('technological_operation_index');
        }

        return $this->render('technological_operation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the technological operation entity
     *
     * @Route("/technological/operation/{id}/edit", methods="GET|POST", name="technological_operation_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TechnologicalOperation $technologicalOperation
     *
     * @return Response
     */
    public function edit(Request $request, TechnologicalOperation $technologicalOperation): Response
    {
        $form = $this->createForm(TechnologicalOperationType::class, $technologicalOperation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('technological_operation_edit', ['id' => $technologicalOperation->getId()]);
            }

            return $this->redirectToRoute('technological_operation_index');
        }

        return $this->render('technological_operation/edit.html.twig', [
            'form' => $form->createView(),
            'technologicalOperation' => $technologicalOperation,
        ]);
    }

    /**
     * Show technological operation
     *
     * @Route("/technological/operation/{id}", methods="GET", name="technological_operation_show", requirements={"id" = "\d+"})
     *
     * @param TechnologicalOperation $technologicalOperation
     *
     * @return Response
     */
    public function show(TechnologicalOperation $technologicalOperation): Response
    {
        return $this->render('technological_operation/show.html.twig', [
            'technologicalOperation' => $technologicalOperation
        ]);
    }

    /**
     * Delete technological operation
     *
     * @Route("/technological/operation/{id}/delete", methods="DELETE", name="technological_operation_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TechnologicalOperation $technologicalOperation
     *
     * @return JsonResponse
     */
    public function delete(Request $request, TechnologicalOperation $technologicalOperation): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($technologicalOperation->getTracks()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $this->entityManager->remove($technologicalOperation);
            $this->entityManager->flush();
        }

        return new JsonResponse(['messageSuccess' => $this->translator->trans('item.deleted_successfully')]);
    }
}
