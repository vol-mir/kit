<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Specification;
use App\Entity\Structure;
use App\Entity\Track;
use App\Entity\TrackDocument;
use App\Repository\TrackRepository;
use App\Form\TrackType;
use App\Services\TrackService;
use App\Services\DataTableService;
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
 * Class TrackController
 * @package App\Controller
 *
 * @Route("/track/document/{track_document_id}/edit", requirements={"track_document_id" = "\d+"});
 * @ParamConverter("trackDocument", options={"id" = "track_document_id"})
 * @Security("is_granted('ROLE_USER')")
 */
class TrackController extends AbstractController
{

	private $entityManager;

	private $translator;

	private $trackService;

	private $dataTablec;

    private $trackRep;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        TrackService $trackService,
        DataTableService $dataTableService,
        TrackRepository $trackRep
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->trackService = $trackService;
        $this->dataTableService = $dataTableService;
        $this->trackRep = $trackRep;
    }

    /**
     * Data for tables
     *
     * @Route("/track/datatables", methods="POST", name="track_datatables")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     *
     * @return JsonResponse
     */
    public function listDatatableAction(Request $request, TrackDocument $trackDocument): JsonResponse
    {
    	if ($request->getMethod() === 'POST') {
            $draw = (int)$request->request->get('draw');
        } else // If the request is not a POST one, die hard
        {
            die;
        }

    	$arrDataTableRequestParametrs = $this->dataTableService->getDataTableFromRequestParametrs($request);

        $results = $this->trackRep->getRequiredDTData($arrDataTableRequestParametrs, $trackDocument->getId());

        list($columns, $objects, $totalObjectsCount, $filteredObjectsCount) = $results;

        $data = $this->trackService->getDataForDataTable($columns, $objects, $trackDocument, $this->getUser());

        $response = [
            'draw' => $draw,
            'recordsTotal' => $totalObjectsCount,
            'recordsFiltered' => $filteredObjectsCount,
            'data' => $data,
            'trackDocument' => $trackDocument,
        ];

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    /**
     * Creates a new track position in track document
     *
     * @Route("/track/new", methods="GET|POST", name="track_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return RedirectResponse|Response
     */
    public function newTrack(Request $request, TrackDocument $trackDocument): Response
    {
        $track = new Track();
        $track->setTrackDocument($trackDocument);
        $form = $this->createForm(TrackType::class, $track);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newIndexNumber = $this->trackRep->getMaxIndexNumber($trackDocument->getId());
            $track->setIndexNumber($newIndexNumber + 1);
            $this->entityManager->persist($track);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('track_new',[
                    'track_document_id' => $trackDocument->getId()
                ]);
            }

            return $this->redirectToRoute('track_document_edit', [
                'id' => $trackDocument->getId()
            ]);
        }

        return $this->render('track/track/new.html.twig', [
            'form' => $form->createView(),
            'trackDocument' => $trackDocument
        ]);
    }

    /**
     * Edit the material position in consumption of the norm document
     *
     * @Route("/track/{id}/edit", methods="GET|POST", name="track_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNorm $materialNorm
     *
     * @return Response
     */
    public function editTrack(Request $request, TrackDocument $trackDocument, Track $track): Response
    {
        $form = $this->createForm(TrackType::class, $track);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('track_edit', ['id' => $track->getId(),'track_document_id' => $trackDocument->getId()]);
            }

            return $this->redirectToRoute('track_document_edit', [
                'id' => $trackDocument->getId()
            ]);
        }

        return $this->render('track/track/edit.html.twig', [
            'form' => $form->createView(),
            'trackDocument' => $trackDocument,
            'track' => $track
        ]);
    }

    /**
     * Delete position in track of the track document
     *
     * @Route("/track/{id}/delete", methods="DELETE", name="track_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     * @param Track $track
     *
     * @return JsonResponse
     */
    public function delete(Request $request, TrackDocument $trackDocument, Track $track): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $this->entityManager->remove($track);

            $trackHalfDownElements = $this->trackRep->getTrackHalfDown($trackDocument, $track);

            $newSrartIndex = $track->getIndexNumber();
            foreach ($trackHalfDownElements as $trackElement) {

                $trackElement->setIndexNumber($newSrartIndex);

                $newSrartIndex++;

                $this->entityManager->persist($trackElement);

            }
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Up track element
     *
     * @Route("/track/{id}/up", methods="POST", name="track_elem_up", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     * @param Track $track
     *
     * @return JsonResponse
     */
    public function upTrack(Request $request, TrackDocument $trackDocument, Track $track): JsonResponse
    {
        if ($this->isCsrfTokenValid('track-item-up', $request->request->get('_token'))) {

            $trackIndexNumber = $track->getIndexNumber();

            $trackUpElement = $this->trackRep->getTrackUp($trackDocument, $track);

            if ($trackUpElement) {

                $upIndexNumber = $trackUpElement->getIndexNumber();
                $trackUpElement->setIndexNumber($track->getIndexNumber());
                $track->setIndexNumber($upIndexNumber);

                $this->entityManager->persist($track);
                $this->entityManager->persist($trackUpElement);

                $this->entityManager->flush();

            }


        }

        return new JsonResponse(['message' => 'Элемент перемещен вверх']);
    }

    /**
     * Down track element
     *
     * @Route("/track/{id}/adown", methods="POST", name="track_elem_adown", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     * @param Track $track
     *
     * @return JsonResponse
     */
    public function adownTrack(Request $request, TrackDocument $trackDocument, Track $track): JsonResponse
    {
        if ($this->isCsrfTokenValid('track-item-adown', $request->request->get('_token'))) {

            $trackIndexNumber = $track->getIndexNumber();

            $trackDownElement = $this->trackRep->getTrackDown($trackDocument, $track);

            if ($trackDownElement) {

                $downIndexNumber = $trackDownElement->getIndexNumber();
                $trackDownElement->setIndexNumber($track->getIndexNumber());
                $track->setIndexNumber($downIndexNumber);

                $this->entityManager->persist($track);
                $this->entityManager->persist($trackDownElement);

                $this->entityManager->flush();

            }


        }

        return new JsonResponse(['message' => 'Элемент перемещен вниз']);
    }

    /**
     * Move track element
     *
     * @Route("/track/{id}/move/{newIndexNumber}/new-index", methods="POST", name="track_elem_down", requirements={"id" = "\d+", "newIndexNumber" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param TrackDocument $trackDocument
     * @param Track $track
     * @param int $newIndexNumber
     *
     * @return JsonResponse
     */
    public function moveTrack(Request $request, TrackDocument $trackDocument, Track $track, int $newIndexNumber): JsonResponse
    {
        if ($this->isCsrfTokenValid('track-item-move', $request->request->get('_token'))) {

            if ($track->getIndexNumber() > $newIndexNumber) {
                $trackHalfDownElements = $this->trackRep->getTrackHalfDownWithout($trackDocument, $track, $newIndexNumber);

                $track->setIndexNumber($newIndexNumber++);
                $startIndex = $newIndexNumber;

                foreach ($trackHalfDownElements as $trackElement) {
                    $trackElement->setIndexNumber($startIndex);
                    $this->entityManager->persist($trackElement);
                    $startIndex++;
                }

                $this->entityManager->persist($track);
                $this->entityManager->flush();
            } else if ($track->getIndexNumber() < $newIndexNumber) {
                $trackHalfUpElements = $this->trackRep->geTrackHalfUpWithout($trackDocument, $track, $newIndexNumber);

                $track->setIndexNumber($newIndexNumber++);
                $startIndex = 1;

                foreach ($trackHalfUpElements as $trackElement) {
                    $trackElement->setIndexNumber($startIndex);
                    $this->entityManager->persist($trackElement);
                    $startIndex++;
                }

                $this->entityManager->persist($track);
                $this->entityManager->flush();
            }
        }

        return new JsonResponse(['message' => 'Элемент перемещен']);
    }
}
