<?php

namespace App\Controller;

use App\Entity\NormDocument;
use App\Entity\MaterialNorm;
use App\Entity\User;
use App\Form\NormDocumentType;
use App\Repository\NormDocumentRepository;
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
 * Class NormDocumentController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class NormDocumentController extends AbstractController
{
	private $entityManager;

    private $translator;

    private $normDocumentRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        NormDocumentRepository $normDocumentRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->normDocumentRepository = $normDocumentRepository;
    }

    /**
     * Index page
     *
     * @Route("/norm/documents",  methods="GET", name="norm_document_index")
     *
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('norm/norm_document/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/norm/document/datatables", methods="POST", name="norm_document_datatables")
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

        $results = $this->normDocumentRepository->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->normDocumentRepository->countNormDocument();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $normDocument) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'id_document':
                        {
                            $elementTemp = $normDocument->getId();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'date_document':
                        {
                            $elementTemp = $normDocument->getDateDocument()?$normDocument->getDateDocument()->format('d.m.Y'):"";

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'status_document':
                        {

                            switch ($normDocument->getStatus()) {
                                case 1:
                                    $elementTemp = "<span class='badge badge-primary'>" . $this->translator->trans(NormDocument::STATUSES[$normDocument->getStatus()]) . "</span>";
                                    break;
                                case 3:
                                    $elementTemp = "<span class='badge badge-success'>" . $this->translator->trans(NormDocument::STATUSES[$normDocument->getStatus()]) . "</span>";
                                    break;
                                default:
                                    $elementTemp = "<span class='badge badge-secondary'>" . $this->translator->trans(NormDocument::STATUSES[$normDocument->getStatus()]) . "</span>";
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'product_name':
                        {
                            $elementTemp = $normDocument->getProduct()->getName();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'product_designation':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('norm_document_show', ['id' => $normDocument->getId()]),
                                'urlName' => $normDocument->getProduct()->getDesignation()
                            ])->getContent();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'rendition':
                        {
                            $elementTemp = $normDocument->getRendition()->getName();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'user':
                        {
                            $elementTemp = '<small>' . $normDocument->getUser()->getFullName() . ', ' . $this->translator->trans(User::DEPARTMENTS[$normDocument->getUser()->getDepartment()]) . ', время создания: ' . $normDocument->getCreatedAt()->format('d.m.Y H:i') . '</small>';
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow =  $this->generateUrl('norm_document_show', ['id' => $normDocument->getId()]);
                            $urlEdit = '';
                            $idDelete = '';
                            $idCopy = '';

                            $isClose = $normDocument->getClose()?$normDocument->getClose():0;
                            $spcStatus = $normDocument->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || $isOGT) {
                                $idCopy = $normDocument->getId();
                            }

                            if ($isAdmin || ($isOGT && $isClose == 0)) {
                                $urlEdit = $this->generateUrl('norm_document_edit', ['id' => $normDocument->getId()]);
                            }


                            if (($isAdmin || ($isOGT && $isClose == 0)) && $spcStatus == 1) {
                                $idDelete = $normDocument->getId();
                            }

                            $elementTemp = $this->render('default/table_group_btn_esdc.html.twig', [
                                'urlShow' => $urlShow,
                                'urlEdit' => $urlEdit,
                                'idDelete' => $idDelete,
                                'idCopy' => $idCopy,
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
     * Creates a new norm document entity
     *
     * @Route("/norm/document/new", methods="GET|POST", name="norm_document_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $normDocument = new NormDocument();

        $normDocument->setUser($this->getUser());

        $form = $this->createForm(NormDocumentType::class, $normDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->entityManager->persist($normDocument);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('norm_document_new');
            }

            return $this->redirectToRoute('norm_document_edit', ['id' => $normDocument->getId()]);
        }

        return $this->render('norm/norm_document/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the norm document entity
     *
     * @Route("/norm/document/{id}/edit", methods="GET|POST", name="norm_document_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return Response
     */
    public function edit(Request $request, NormDocument $normDocument): Response
    {
        $form = $this->createForm(NormDocumentType::class, $normDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('norm_document_edit', ['id' => $normDocument->getId()]);
            }

            return $this->redirectToRoute('norm_document_index');
        }

        return $this->render('norm/norm_document/edit.html.twig', [
            'form' => $form->createView(),
            'normDocument' => $normDocument,
            'normDocumentStatuses' => NormDocument::STATUSES,
            'userDepartments' => User::DEPARTMENTS
        ]);
    }

    /**
     * Show norm document
     *
     * @Route("/norm/document/{id}", methods="GET", name="norm_document_show", requirements={"id" = "\d+"})
     *
     * @param NormDocument $normDocument
     *
     * @return Response
     */
    public function show(NormDocument $normDocument): Response
    {
        return $this->render('norm/norm_document/show.html.twig', [
            'normDocument' => $normDocument,
            'normDocumentStatuses' => NormDocument::STATUSES,
            'userDepartments' => User::DEPARTMENTS
        ]);
    }

    /**
     * Delete norm document
     *
     * @Route("/norm/document/{id}/delete", methods="DELETE", name="norm_document_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return JsonResponse
     */
    public function delete(Request $request, NormDocument $normDocument): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $this->entityManager->remove($normDocument);
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Copy norm document
     *
     * @Route("/norm/document/{id}/copy", methods="POST", name="norm_document_copy", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return JsonResponse
     */
    public function copy(Request $request, NormDocument $normDocument): JsonResponse
    {
        if ($this->isCsrfTokenValid('copy-item', $request->request->get('_token'))) {

            $normDocumentNew = new NormDocument();

            $normDocumentNew
                ->setName($normDocument->getName())
                ->setStatus(NormDocument::IN_DEVELOPING)
                ->setProduct($normDocument->getProduct())
                ->setDateDocument(new \DateTime())
                ->setRendition($normDocument->getRendition());

            $normDocumentNew->setUser($this->getUser());

            $this->entityManager->persist($normDocumentNew);


            foreach($normDocument->getMaterialNorms() as $materialNorm) {
                $materialNormNew = new MaterialNorm();

                $materialNormNew
                    ->setAmount((float)$materialNorm->getAmount())
                    ->setNote($materialNorm->getNote())
                    ->setNormDocument($normDocumentNew)
                    ->setIndexNumber((int)$materialNorm->getIndexNumber())
                    ->setMaterial($materialNorm->getMaterial());

                $this->entityManager->persist($materialNormNew);

            }

            $this->entityManager->flush();

        }

        return new JsonResponse(['message' => $this->translator->trans('item.copy_successfully')]);
    }
}
