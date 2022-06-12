<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Specification;
use App\Entity\Structure;
use App\Entity\MaterialNorm;
use App\Entity\StructureReplacement;
use App\Entity\NormDocument;
use App\Entity\MaterialNormReplacement;
use App\Form\MaterialNormType;
use App\Repository\MaterialNormRepository;
use App\Repository\MaterialNormReplacementRepository;
use App\Form\StructureSectionType;
use App\Form\StructureMaterialType;
use App\Form\StructureDocumentType;
use App\Services\StructureService;
use App\Services\MaterialNormService;
use App\Services\MaterialNormReplacementService;
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
 * Class MaterialNormController
 * @package App\Controller
 *
 * @Route("/norm/document/{norm_document_id}/edit", requirements={"norm_document_id" = "\d+"});
 * @ParamConverter("normDocument", options={"id" = "norm_document_id"})
 * @Security("is_granted('ROLE_USER')")
 */
class MaterialNormController extends AbstractController
{

	private $entityManager;

	private $translator;

	private $materialNormService;

	private $dataTablec;

    private $materialNormRep;

    private $materialNormReplacementRep;

    private $materialNormReplacementService;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        MaterialNormService $materialNormService,
        DataTableService $dataTableService,
        MaterialNormRepository $materialNormRep,
        MaterialNormReplacementRepository $materialNormReplacementRep,
        MaterialNormReplacementService $materialNormReplacementService
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->materialNormService = $materialNormService;
        $this->dataTableService = $dataTableService;
        $this->materialNormRep = $materialNormRep;
        $this->materialNormReplacementRep = $materialNormReplacementRep;
        $this->materialNormReplacementService = $materialNormReplacementService;
    }

    /**
     * Data for tables
     *
     * @Route("/consumption/datatables", methods="POST", name="consumption_datatables")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return JsonResponse
     */
    public function listDatatableAction(Request $request, NormDocument $normDocument): JsonResponse
    {
    	if ($request->getMethod() === 'POST') {
            $draw = (int)$request->request->get('draw');
        } else // If the request is not a POST one, die hard
        {
            die;
        }

    	$arrDataTableRequestParametrs = $this->dataTableService->getDataTableFromRequestParametrs($request);

        $results = $this->materialNormRep->getRequiredDTData($arrDataTableRequestParametrs, $normDocument->getId());

        list($columns, $objects, $totalObjectsCount, $filteredObjectsCount) = $results;

        $data = $this->materialNormService->getDataForDataTable($columns, $objects, $normDocument, $this->getUser());

        $response = [
            'draw' => $draw,
            'recordsTotal' => $totalObjectsCount,
            'recordsFiltered' => $filteredObjectsCount,
            'data' => $data,
            'normDocument' => $normDocument,
        ];

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    /**
     * Data for tables
     *
     * @Route("/consumption/{materialNormMainId}/replacement/datatables", methods="POST", name="consumption_replacement_datatables", requirements={"materialNormMainId" = "\d+"})
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return JsonResponse
     */
    public function listReplacementDatatableAction(Request $request, NormDocument $normDocument, int $materialNormMainId = null, LoggerInterface $logger): JsonResponse
    {
        if ($request->getMethod() === 'POST') {
            $draw = (int)$request->request->get('draw');
        } else // If the request is not a POST one, die hard
        {
            die;
        }
        $logger->info($materialNormMainId);

        list($materialNormMainId, $materialNormReplacementId) = $this->materialNormService->arrIdsMainReplacement($materialNormMainId);

        $arrDataTableRequestParametrs = $this->dataTableService->getDataTableFromRequestParametrs($request);

        $results = $this->materialNormReplacementRep->getRequiredDTData($arrDataTableRequestParametrs, $materialNormMainId, $materialNormReplacementId);

        list($columns, $objects, $totalObjectsCount, $filteredObjectsCount) = $results;

        $data = $this->materialNormReplacementService->getDataForDataTable($columns, $objects, $materialNormReplacementId, $normDocument, $this->getUser());

        $response = [
            'draw' => $draw,
            'recordsTotal' => $totalObjectsCount,
            'recordsFiltered' => $filteredObjectsCount,
            'data' => $data,
            'normDocument' => $normDocument,
        ];

        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }


    /**
     * Creates a new material position in consumption of the norm document
     *
     * @Route("/consumption/material/new", methods="GET|POST", name="consumption_material_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return RedirectResponse|Response
     */
    public function newMaterial(Request $request, NormDocument $normDocument): Response
    {
        $materialNorm = new MaterialNorm();
        $materialNorm->setNormDocument($normDocument);
        $form = $this->createForm(MaterialNormType::class, $materialNorm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newIndexNumber = $this->materialNormRep->getMaxIndexNumber($normDocument->getId());
            $materialNorm->setIndexNumber($newIndexNumber + 1);
            $this->entityManager->persist($materialNorm);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('consumption_material_new',[
                    'norm_document_id' => $normDocument->getId()
                ]);
            }

            return $this->redirectToRoute('norm_document_edit', [
                'id' => $normDocument->getId()
            ]);
        }

        return $this->render('norm/material_norm/new.html.twig', [
            'form' => $form->createView(),
            'normDocument' => $normDocument
        ]);
    }

    /**
     * Edit the material position in consumption of the norm document
     *
     * @Route("/consumption/{id}/material/edit", methods="GET|POST", name="consumption_material_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNorm $materialNorm
     *
     * @return Response
     */
    public function editMaterial(Request $request, NormDocument $normDocument, MaterialNorm $materialNorm): Response
    {
        $form = $this->createForm(MaterialNormType::class, $materialNorm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('consumption_material_edit', ['id' => $materialNorm->getId(),'norm_document_id' => $normDocument->getId()]);
            }

            return $this->redirectToRoute('norm_document_edit', [
                'id' => $normDocument->getId()
            ]);
        }

        return $this->render('norm/material_norm/edit.html.twig', [
            'form' => $form->createView(),
            'normDocument' => $normDocument,
            'materialNorm' => $materialNorm
        ]);
    }

    /**
     * Delete position in consumption of the norm document
     *
     * @Route("/consumption/{id}/delete", methods="DELETE", name="consumption_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNorm $materialNorm
     *
     * @return JsonResponse
     */
    public function delete(Request $request, NormDocument $normDocument, MaterialNorm $materialNorm): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $this->entityManager->remove($materialNorm);

            $materialNormHalfDownElements = $this->materialNormRep->getMaterialNormHalfDown($normDocument, $materialNorm);

            $newSrartIndex = $materialNorm->getIndexNumber();
            foreach ($materialNormHalfDownElements as $materialNormElement) {

                $materialNormElement->setIndexNumber($newSrartIndex);

                $newSrartIndex++;

                $this->entityManager->persist($materialNormElement);

            }
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Replacement the element position in material norm of the norm document
     *
     * @Route("/consumption/{id}/element/replacement", methods="GET|POST", name="consumption_element_replacement", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNorm $materialNorm
     *
     * @return Response
     */
    public function replacementMaterialNormElement(Request $request, NormDocument $normDocument, MaterialNorm $materialNorm): Response
    {

        $elementsReplacement = $this->materialNormRep->getMaterialNormDocumentReplacement($normDocument->getId());

        return $this->render('norm/material_norm/replacement_element.html.twig', [
            'normDocument' => $normDocument,
            'materialNorm' => $materialNorm,
            'elementsReplacement' => $elementsReplacement
        ]);
    }

    /**
     * Replacement element new
     *
     * @Route("/consumption/replacement/add",  methods="POST", name="consumption_element_replacement_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     *
     * @return JsonResponse
     */
    public function newReplacementElement(Request $request, NormDocument $normDocument): JsonResponse
    {
        if (!$this->isCsrfTokenValid('material-norm-element-replacement-add', $request->request->get('_token'))) {
            die;
        }

        $materialNormReplacementId = json_decode($request->request->get('materialNormReplacementId'), true);

        $materialNormMainId = json_decode($request->request->get('materialNormMainId'), true);


        $materialNormReplacement = $this->materialNormRep->find($materialNormReplacementId);
        $materialNormMain = $this->materialNormRep->find($materialNormMainId);


        $materialNormRepl = new MaterialNormReplacement();

        $materialNormRepl->setMaterialNormMain($materialNormMain);
        $materialNormRepl->setMaterialNormReplacement($materialNormReplacement);


        $materialNormReplacement->setMainReplacement(false);

        $this->entityManager->persist($materialNormRepl);
        $this->entityManager->persist($materialNormReplacement);
        $this->entityManager->flush();

        return new JsonResponse(['message' => $this->translator->trans('items.edited_successfully')]);
    }

    /**
     * Delete consumption replacement element
     *
     * @Route("/consumption/{id}/replacement/delete", methods="DELETE", name="consumption_replacement_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNormReplacement $materialNormReplacement
     *
     * @return JsonResponse
     */
    public function deleteMaterialNormReplacement(Request $request, NormDocument $normDocument, MaterialNormReplacement $materialNormReplacement): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $materialNorm = $materialNormReplacement->getMaterialNormReplacement();
            $materialNorm->setMainReplacement(true);
            $this->entityManager->persist($materialNorm);

            $this->entityManager->remove($materialNormReplacement);
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Up consumption element
     *
     * @Route("/consumption/{id}/up", methods="POST", name="consumption_elem_up", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNorm $mterialNorm
     *
     * @return JsonResponse
     */
    public function upMaterialNorm(Request $request, NormDocument $normDocument, MaterialNorm $materialNorm): JsonResponse
    {
        if ($this->isCsrfTokenValid('material-norm-item-up', $request->request->get('_token'))) {

            $materialNormIndexNumber = $materialNorm->getIndexNumber();

            $materialNormUpElement = $this->materialNormRep->getMaterialNormUp($normDocument, $materialNorm);

            if ($materialNormUpElement) {

                $upIndexNumber = $materialNormUpElement->getIndexNumber();
                $materialNormUpElement->setIndexNumber($materialNorm->getIndexNumber());
                $materialNorm->setIndexNumber($upIndexNumber);

                $this->entityManager->persist($materialNorm);
                $this->entityManager->persist($materialNormUpElement);

                $this->entityManager->flush();

            }


        }

        return new JsonResponse(['message' => 'Элемент перемещен вверх']);
    }

    /**
     * Down consumption element
     *
     * @Route("/consumption/{id}/adown", methods="POST", name="consumption_elem_adown", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNorm $mterialNorm
     *
     * @return JsonResponse
     */
    public function adownMaterialNorm(Request $request, NormDocument $normDocument, MaterialNorm $materialNorm): JsonResponse
    {
        if ($this->isCsrfTokenValid('material-norm-item-adown', $request->request->get('_token'))) {

            $materialNormIndexNumber = $materialNorm->getIndexNumber();

            $materialNormDownElement = $this->materialNormRep->getMaterialNormDown($normDocument, $materialNorm);

            if ($materialNormDownElement) {

                $downIndexNumber = $materialNormDownElement->getIndexNumber();
                $materialNormDownElement->setIndexNumber($materialNorm->getIndexNumber());
                $materialNorm->setIndexNumber($downIndexNumber);

                $this->entityManager->persist($materialNorm);
                $this->entityManager->persist($materialNormDownElement);

                $this->entityManager->flush();

            }


        }

        return new JsonResponse(['message' => 'Элемент перемещен вниз']);
    }

    /**
     * Move consumption element
     *
     * @Route("/consumption/{id}/move/{newIndexNumber}/new-index", methods="POST", name="consumption_elem_down", requirements={"id" = "\d+", "newIndexNumber" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGT')")
     *
     * @param Request $request
     * @param NormDocument $normDocument
     * @param MaterialNorm $mterialNorm
     * @param int $newIndexNumber
     *
     * @return JsonResponse
     */
    public function moveMaterialNorm(Request $request, NormDocument $normDocument, MaterialNorm $materialNorm, int $newIndexNumber): JsonResponse
    {
        if ($this->isCsrfTokenValid('material-norm-item-move', $request->request->get('_token'))) {

            if ($materialNorm->getIndexNumber() > $newIndexNumber) {
                $materialNormHalfDownElements = $this->materialNormRep->getMaterialNormHalfDownWithout($normDocument, $materialNorm, $newIndexNumber);

                $materialNorm->setIndexNumber($newIndexNumber++);
                $startIndex = $newIndexNumber;

                foreach ($materialNormHalfDownElements as $materialNormElement) {
                    $materialNormElement->setIndexNumber($startIndex);
                    $this->entityManager->persist($materialNormElement);
                    $startIndex++;
                }

                $this->entityManager->persist($materialNorm);
                $this->entityManager->flush();
            } else if ($materialNorm->getIndexNumber() < $newIndexNumber) {
                $materialNormHalfUpElements = $this->materialNormRep->getMaterialNormHalfUpWithout($normDocument, $materialNorm, $newIndexNumber);

                $materialNorm->setIndexNumber($newIndexNumber++);
                $startIndex = 1;

                foreach ($materialNormHalfUpElements as $materialNormElement) {
                    $materialNormElement->setIndexNumber($startIndex);
                    $this->entityManager->persist($materialNormElement);
                    $startIndex++;
                }

                $this->entityManager->persist($materialNorm);
                $this->entityManager->flush();
            }
        }

        return new JsonResponse(['message' => 'Элемент перемещен']);
    }
}
