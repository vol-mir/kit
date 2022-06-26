<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\User;
use App\Entity\Track;
use App\Entity\TrackDocument;
use App\Form\TrackDocumentType;
use App\Repository\TrackDocumentRepository;
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
 * Class TrackDocumentController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class TrackDocumentController extends AbstractController
{
	private $entityManager;

    private $translator;

    private $trackDocumentRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        TrackDocumentRepository $trackDocumentRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->trackDocumentRepository = $trackDocumentRepository;
    }

    /**
     * Index page
     *
     * @Route("/track/documents",  methods="GET", name="track_document_index")
     *
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('track/track_document/index.html.twig', [
            'statuses' => TrackDocument::STATUSES,
        ]);
    }

    /**
     * Data for tables
     *
     * @Route("/track/document/datatables", methods="POST", name="track_document_datatables")
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

        $results = $this->trackDocumentRepository->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->trackDocumentRepository->countTrackDocument();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $trackDocument) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'id_document':
                        {
                            $elementTemp = $trackDocument->getId();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'date_start':
                        {
                            $elementTemp = $trackDocument->getDateStart()?$trackDocument->getDateStart()->format('d.m.Y'):"";

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'date_end':
                        {
                            $elementTemp = $trackDocument->getDateEnd()?$trackDocument->getDateEnd()->format('d.m.Y'):"";

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'status_document':
                        {

                            switch ($trackDocument->getStatus()) {
                                case 1:
                                    $elementTemp = "<span class='badge badge-primary'>" . $this->translator->trans(TrackDocument::STATUSES[$trackDocument->getStatus()]) . "</span>";
                                    break;
                                case 3:
                                    $elementTemp = "<span class='badge badge-success'>" . $this->translator->trans(TrackDocument::STATUSES[$trackDocument->getStatus()]) . "</span>";
                                    break;
                                default:
                                    $elementTemp = "<span class='badge badge-secondary'>" . $this->translator->trans(TrackDocument::STATUSES[$trackDocument->getStatus()]) . "</span>";
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'product_name':
                        {
                            $elementTemp = $trackDocument->getProduct()->getName();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'product_designation':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('track_document_show', ['id' => $trackDocument->getId()]),
                                'urlName' => $trackDocument->getProduct()->getDesignation()
                            ])->getContent();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'rendition':
                        {
                            $elementTemp = $trackDocument->getRendition()->getName();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'user':
                        {
                            $elementTemp = '<small>' . $trackDocument->getUser()->getFullName() . ', ' . $this->translator->trans(User::DEPARTMENTS[$trackDocument->getUser()->getDepartment()]) . ', время создания: ' . $trackDocument->getCreatedAt()->format('d.m.Y H:i') . '</small>';
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow =  $this->generateUrl('track_document_show', ['id' => $trackDocument->getId()]);
                            $urlEdit = '';
                            $idDelete = '';
                            $idCopy = '';

                            $isClose = $trackDocument->getClose()?$trackDocument->getClose():0;
                            $spcStatus = $trackDocument->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || $isOGT) {
                                $idCopy = $trackDocument->getId();
                            }

                            if ($isAdmin || ($isOGT && $isClose == 0)) {
                                $urlEdit = $this->generateUrl('track_document_edit', ['id' => $trackDocument->getId()]);
                            }


                            if (($isAdmin || ($isOGT && $isClose == 0)) && $spcStatus == 1) {
                                $idDelete = $trackDocument->getId();
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
     * Creates a new track document entity
     *
     * @Route("/track/document/new", methods="GET|POST", name="track_document_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $trackDocument = new TrackDocument();

        $trackDocument->setUser($this->getUser());

        $form = $this->createForm(TrackDocumentType::class, $trackDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->entityManager->persist($trackDocument);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('track_document_new');
            }

            return $this->redirectToRoute('track_document_edit', ['id' => $trackDocument->getId()]);
        }

        return $this->render('track/track_document/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the track document entity
     *
     * @Route("/track/document/{id}/edit", methods="GET|POST", name="track_document_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     *
     * @return Response
     */
    public function edit(Request $request, TrackDocument $trackDocument): Response
    {
        $form = $this->createForm(TrackDocumentType::class, $trackDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('track_document_edit', ['id' => $trackDocument->getId()]);
            }

            return $this->redirectToRoute('track_document_index');
        }

        return $this->render('track/track_document/edit.html.twig', [
            'form' => $form->createView(),
            'trackDocument' => $trackDocument,
            'trackDocumentStatuses' => TrackDocument::STATUSES,
            'userDepartments' => User::DEPARTMENTS
        ]);
    }

    /**
     * Show track document
     *
     * @Route("/track/document/{id}", methods="GET", name="track_document_show", requirements={"id" = "\d+"})
     *
     * @param TrackDocument $trackDocument
     *
     * @return Response
     */
    public function show(TrackDocument $trackDocument): Response
    {
        return $this->render('track/track_document/show.html.twig', [
            'trackDocument' => $trackDocument,
            'trackDocumentStatuses' => TrackDocument::STATUSES,
            'userDepartments' => User::DEPARTMENTS
        ]);
    }

    /**
     * Delete track document
     *
     * @Route("/track/document/{id}/delete", methods="DELETE", name="track_document_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     *
     * @return JsonResponse
     */
    public function delete(Request $request, TrackDocument $trackDocument): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $this->entityManager->remove($trackDocument);
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Copy track document
     *
     * @Route("/track/document/{id}/copy", methods="POST", name="track_document_copy", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     *
     * @return JsonResponse
     */
    public function copy(Request $request, TrackDocument $trackDocument): JsonResponse
    {
        if ($this->isCsrfTokenValid('copy-item', $request->request->get('_token'))) {

            $trackDocumentNew = new TrackDocument();

            $trackDocumentNew
                ->setName($trackDocument->getName())
                ->setStatus(TrackDocument::IN_DEVELOPING)
                ->setProduct($trackDocument->getProduct())
                ->setDateStart($trackDocument->getDateStart())
                ->setDateEnd($trackDocument->getDateEnd())
                ->setRendition($trackDocument->getRendition());

            $trackDocumentNew->setUser($this->getUser());

            $this->entityManager->persist($trackDocumentNew);


            foreach($trackDocument->getTracks() as $track) {
                $trackNew = new Track();

                $trackNew
                    ->setTrackDocument($trackDocumentNew)
                    ->setIndexNumber((int)$track->getIndexNumber())
                    ->setDepartment($track->getDepartment())

                    ->setTimeCycle((float)$track->getTimeCycle())
                    ->setTimeProcessing((float)$track->getTimeProcessing())
                    ->setTimePiece((float)$track->getTimePiece())
                    ->setTechnologicalOperation($track->getTechnologicalOperation())
                    ->setNumberOperation($track->getNumberOperation())

                    ;

                $this->entityManager->persist($trackNew);

            }

            $this->entityManager->flush();

        }

        return new JsonResponse(['message' => $this->translator->trans('item.copy_successfully')]);
    }
}
