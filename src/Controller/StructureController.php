<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Specification;
use App\Entity\Structure;
use App\Repository\StructureRepository;
use App\Repository\StructureReplacementRepository;
use App\Entity\StructureReplacement;
use App\Form\StructureProductType;
use App\Form\StructureSectionType;
use App\Form\StructureMaterialType;
use App\Form\StructureDocumentType;
use App\Services\StructureService;
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
 * Class StructureController
 * @package App\Controller
 *
 * @Route("/specification/{specification_id}/edit", requirements={"specification_id" = "\d+"});
 * @ParamConverter("specification", options={"id" = "specification_id"})
 * @Security("is_granted('ROLE_USER')")
 */
class StructureController extends AbstractController
{

    private $entityManager;

    private $translator;

    private $structureService;

    private $structureRepository;

    private $structureReplacementRepository;

    public function __construct(EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        StructureService $structureService,
        StructureRepository $structureRepository,
        StructureReplacementRepository $structureReplacementRepository)
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->structureService = $structureService;
        $this->structureRepository = $structureRepository;
        $this->structureReplacementRepository = $structureReplacementRepository;
    }

    /**
     * Data for tables
     *
     * @Route("/structure/datatables", methods="POST", name="structure_datatables")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return JsonResponse
     */
    public function listDatatableAction(Request $request, Specification $specification): JsonResponse
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

        $resultsSQL = $this->structureRepository->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions, $specification->getId());

        // Returned objects are of type Town
        $objects = $resultsSQL["results"];
        // Get total number of objects
        $totalObjectsCount = $this->structureRepository->countStructure($specification->getId());
        // Get total number of filtered data
        $filteredObjectsCount = $resultsSQL["countResult"];

        $data = [];
        foreach ($objects as $structure) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'indexNumber':
                        {
                            $elementTemp = $structure->getIndexNumber();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'format':
                        {
                            $elementTemp = $structure->getFormat()?$this->translator->trans(Structure::FORMATS[$structure->getFormat()]):"";
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'area':
                        {
                            $elementTemp = $structure->getArea();
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'position':
                        {
                            $elementTemp = $structure->getPosition()?:"";
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'name':
                        {
                            $elementTemp = $structure->getProduct()->getName();

                            $urlOpen = "";

                            if ($structure->getProduct()->getIntype() === Product::INTYPE_SPECIFICATION_SECTION) {
                                $elementTemp = '<u>' . $structure->getProduct()->getName() . '</u>';
                                $urlOpen = "";
                            }  else if ($structure->getProduct()->getIntype() === Product::INTYPE_DOCUMENT) {
                                $urlGenerate = $this->generateUrl('document_show', ['id' => $structure->getProduct()->getId()]);
                                $urlOpen = "<a href='" . $urlGenerate . "' title=" . $elementTemp . ">" . $elementTemp . "</a>";
                            }  else if ($structure->getProduct()->getIntype() === Product::INTYPE_MATERIAL) {
                                $urlGenerate = $this->generateUrl('material_show', ['id' => $structure->getProduct()->getId()]);
                                $urlOpen = "<a href='" . $urlGenerate . "' title=" . $elementTemp . ">" . $elementTemp . "</a>";
                            }  else if ($structure->getProduct()->getIntype() === Product::INTYPE_PRODUCT) {
                                $urlGenerate = $this->generateUrl('product_show', ['id' => $structure->getProduct()->getId()]);
                                $urlOpen = "<a href='" . $urlGenerate . "' title=" . $elementTemp . ">" . $elementTemp . "</a>" . ($structure->getComment()?'<br>'.$structure->getComment():'');
                            }

                            $dataTemp[] = $urlOpen?$urlOpen:$elementTemp;
                            break;
                        }
                    case 'designation':
                        {
                            $elementTemp = $structure->getProduct()->getDesignation();

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'amount':
                        {
                            $elementTemp = $structure->getAmount()?:"";
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'note':
                        {
                            $elementTemp = $structure->getNote();
                            $structureMainId = null;
                            $structureReplacementId = null;

                            list($structureMainId, $structureReplacementId) = $this->structureService->arrIdsMainReplacement($structure->getId());

                            $sructureRepl =$this->entityManager->getRepository(StructureReplacement::class)->getListStructureReplacement($structureMainId, $structureReplacementId);

                            if ($sructureRepl['countResult'] > 0) {

                                foreach ($sructureRepl['results'] as $structureTempRepl) {
                                    if (strlen($elementTemp) > 0) {
                                        $elementTemp .= ',';
                                    }
                                    $elementTemp .= ' замена на поз. ';
                                    if ($structureReplacementId != $structureTempRepl->getStructureReplacement()->getId()) {
                                        $elementTemp .= $structureTempRepl->getStructureReplacement()->getPosition();
                                    } else {
                                        $elementTemp .= $structureTempRepl->getStructureMain()->getPosition();
                                    }

                                }

                            }


                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlReplacement =  '';
                            $urlEdit = '';
                            $idDelete = '';
                            $idUp = '';
                            $idDown = '';
                            $idMove = '';

                            $isClose = $specification->getClose()?$specification->getClose():0;
                            $spcStatus = $specification->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || ($isOGK && $isClose == 0)) {
                                if ($structure->getProduct()->getIntype() === Product::INTYPE_PRODUCT) {
                                    $urlReplacement = $this->generateUrl('structure_element_replacement', ['id' => $structure->getId(),'specification_id' => $structure->getSpecification()->getId()]);
                                    $urlEdit = $this->generateUrl('structure_product_edit', ['id' => $structure->getId(),'specification_id' => $structure->getSpecification()->getId()]);
                                } else if ($structure->getProduct()->getIntype() === Product::INTYPE_SPECIFICATION_SECTION) {
                                    $urlReplacement = '';
                                    $urlEdit = $this->generateUrl('structure_section_edit', ['id' => $structure->getId(),'specification_id' => $structure->getSpecification()->getId()]);
                                } else if ($structure->getProduct()->getIntype() === Product::INTYPE_MATERIAL) {
                                    $urlReplacement = $this->generateUrl('structure_element_replacement', ['id' => $structure->getId(),'specification_id' => $structure->getSpecification()->getId()]);
                                    $urlEdit = $this->generateUrl('structure_material_edit', ['id' => $structure->getId(),'specification_id' => $structure->getSpecification()->getId()]);
                                } else if ($structure->getProduct()->getIntype() === Product::INTYPE_DOCUMENT) {
                                    $urlReplacement = '';
                                    $urlEdit = $this->generateUrl('structure_document_edit', ['id' => $structure->getId(),'specification_id' => $structure->getSpecification()->getId()]);
                                }
                                $idDelete = $structure->getId();
                                $idUp = $structure->getId();
                                $idDown = $structure->getId();
                                $idMove = $structure->getId();
                            }

                            $elementTemp = $this->render('default/table_group_btn_udmred.html.twig', [
                                'urlReplacement' => $urlReplacement,
                                'urlEdit' => $urlEdit,
                                'idDelete' => $idDelete,
                                'idUp' => $idUp,
                                'idDown' => $idDown,
                                'idMove' => $idMove,

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
            'specification' => $specification,
        ];


        // Send all this stuff back to DataTables
        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

    /**
     * Creates a new product position in structure of the specification
     *
     * @Route("/structure/product/new", methods="GET|POST", name="structure_product_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return RedirectResponse|Response
     */
    public function newProduct(Request $request, Specification $specification): Response
    {
        $structure = new Structure();
        $structure->setSpecification($specification);
        $form = $this->createForm(StructureProductType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newIndexNumber = $this->structureRepository->getMaxIndexNumber($specification->getId());
            $structure->setIndexNumber($newIndexNumber + 1);
            $this->entityManager->persist($structure);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_product_new',[
                    'specification_id' => $specification->getId()
                ]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/new_product.html.twig', [
            'form' => $form->createView(),
            'specification' => $specification
        ]);
    }

    /**
     * Creates a new section position in structure of the specification
     *
     * @Route("/structure/section/new", methods="GET|POST", name="structure_section_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return RedirectResponse|Response
     */
    public function newSection(Request $request, Specification $specification): Response
    {
        $structure = new Structure();
        $structure->setSpecification($specification);
        $form = $this->createForm(StructureSectionType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newIndexNumber = $this->structureRepository->getMaxIndexNumber($specification->getId());
            $structure->setIndexNumber($newIndexNumber + 1);
            $this->entityManager->persist($structure);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_section_new',[
                    'specification_id' => $specification->getId()
                ]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/new_section.html.twig', [
            'form' => $form->createView(),
            'specification' => $specification
        ]);
    }

    /**
     * Creates a new material position in structure of the specification
     *
     * @Route("/structure/material/new", methods="GET|POST", name="structure_material_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return RedirectResponse|Response
     */
    public function newMaterial(Request $request, Specification $specification): Response
    {
        $structure = new Structure();
        $structure->setSpecification($specification);
        $form = $this->createForm(StructureMaterialType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newIndexNumber = $this->structureRepository->getMaxIndexNumber($specification->getId());
            $structure->setIndexNumber($newIndexNumber + 1);
            $this->entityManager->persist($structure);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_material_new',[
                    'specification_id' => $specification->getId()
                ]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/new_material.html.twig', [
            'form' => $form->createView(),
            'specification' => $specification
        ]);
    }

    /**
     * Creates a new document position in structure of the specification
     *
     * @Route("/structure/document/new", methods="GET|POST", name="structure_document_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return RedirectResponse|Response
     */
    public function newDocument(Request $request, Specification $specification): Response
    {
        $structure = new Structure();
        $structure->setSpecification($specification);
        $form = $this->createForm(StructureDocumentType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newIndexNumber = $this->structureRepository->getMaxIndexNumber($specification->getId());
            $structure->setIndexNumber($newIndexNumber + 1);
            $this->entityManager->persist($structure);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_document_new',[
                    'specification_id' => $specification->getId()
                ]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/new_document.html.twig', [
            'form' => $form->createView(),
            'specification' => $specification
        ]);
    }

    /**
     * Edit the product position in structure of the specification
     *
     * @Route("/structure/{id}/product/edit", methods="GET|POST", name="structure_product_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return Response
     */
    public function editProduct(Request $request, Specification $specification, Structure $structure): Response
    {
        $form = $this->createForm(StructureProductType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_product_edit', ['id' => $structure->getId(),'specification_id' => $specification->getId()]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/edit_product.html.twig', [
            'form' => $form->createView(),
            'structure' => $structure,
            'specification' => $specification
        ]);
    }


    /**
     * Data for tables
     *
     * @Route("/structure/{structureMainId}/replacement/datatables", methods="POST", name="structure_replacement_datatables", requirements={"structureMainId" = "\d+"})
     *
     * @param Request $request
     * @param Specification $specification
     * @param int $structureMainId
     *
     * @return JsonResponse
     */
    public function listReplacementDatatableAction(Request $request, Specification $specification, int $structureMainId = null): JsonResponse
    {

        list($structureMainId, $structureReplacementId) = $this->structureService->arrIdsMainReplacement($structureMainId);

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

        // $em = $this->getDoctrine()->getManager();
        $resultsSQL =  $this->structureReplacementRepository->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions, $structureMainId, $structureReplacementId);

        // Returned objects are of type Town
        $objects = $resultsSQL["results"];
        // Get total number of objects
        $totalObjectsCount =  $this->structureReplacementRepository->countStructureReplacement($structureMainId, $structureReplacementId);
        // Get total number of filtered data
        $filteredObjectsCount = $resultsSQL["countResult"];

        $data = [];
        foreach ($objects as $structure) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'indexNumber':
                        {
                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getIndexNumber();
                            } else {
                                $elementTemp = $structure->getStructureMain()->getIndexNumber();
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'format':
                        {
                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getFormat()?$translator->trans(Structure::FORMATS[$structure->getStructureReplacement()->getFormat()]):"";
                            } else {
                                $elementTemp = $structure->getStructureMain()->getFormat()?$translator->trans(Structure::FORMATS[$structure->getStructureMain()->getFormat()]):"";
                            }

                            $elementTemp = "";
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'area':
                        {
                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getArea();
                            } else {
                                $elementTemp = $structure->getStructureMain()->getArea();
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'position':
                        {

                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getPosition()?:"";
                            } else {
                                $elementTemp = $structure->getStructureMain()->getPosition()?:"";
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'name':
                        {
                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getProduct()->getName();
                            } else {
                                $elementTemp = $structure->getStructureMain()->getProduct()->getName();
                            }


                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'designation':
                        {
                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getProduct()->getDesignation();
                            } else {
                                $elementTemp = $structure->getStructureMain()->getProduct()->getDesignation();
                            }


                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'amount':
                        {
                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getAmount()?:"";
                            } else {
                                $elementTemp = $structure->getStructureMain()->getAmount()?:"";
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'note':
                        {
                            $elementTemp = "";

                            if ($structureReplacementId != $structure->getStructureReplacement()->getId()) {
                                $elementTemp = $structure->getStructureReplacement()->getNote();
                            } else {
                                $elementTemp = $structure->getStructureMain()->getNote();
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlReplacement =  '';
                            $urlEdit = '';
                            $idDelete = '';
                            $idUp = '';
                            $idDown = '';
                            $idMove = '';

                            $isClose = $specification->getClose()?$specification->getClose():0;
                            $spcStatus = $specification->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || ($isOGK && $isClose == 0)) {
                                $idDelete = $structure->getId();
                            }

                            $elementTemp = $this->render('default/table_group_btn_udmred.html.twig', [
                                'urlReplacement' => $urlReplacement,
                                'urlEdit' => $urlEdit,
                                'idDelete' => $idDelete,
                                'idUp' => $idUp,
                                'idDown' => $idDown,
                                'idMove' => $idMove,

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
     * Replacement element new
     *
     * @Route("/structure/replacement/add",  methods="POST", name="structure_element_replacement_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return JsonResponse
     */
    public function newReplacementElement(Request $request, Specification $specification): JsonResponse
    {
        if (!$this->isCsrfTokenValid('structure-element-replacement-add', $request->request->get('_token'))) {
            die;
        }

        $structureReplacementId = json_decode($request->request->get('structureReplacementId'), true);

        $structureMainId = json_decode($request->request->get('structureMainId'), true);

        $structureReplacement = $this->structureRepository->find($structureReplacementId);
        $structureMain = $this->structureRepository->find($structureMainId);


        $structureRepl = new StructureReplacement();

        $structureRepl->setStructureMain($structureMain);
        $structureRepl->setStructureReplacement($structureReplacement);


        $structureReplacement->setMainReplacement(false);

        $this->entityManager->persist($structureRepl);
        $this->entityManager->persist($structureReplacement);
        $this->entityManager->flush();


        return new JsonResponse(['message' => $this->translator->trans('items.edited_successfully')]);
    }

    /**
     * Replacement the element position in structure of the specification
     *
     * @Route("/structure/{id}/element/replacement", methods="GET|POST", name="structure_element_replacement", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return Response
     */
    public function replacementStructureElement(Request $request, Specification $specification, Structure $structure): Response
    {
        $elementsReplacement = $this->structureRepository->getStructureSpecificationReplacement($specification->getId());

        return $this->render('specification/structure/replacement_element.html.twig', [
            'structure' => $structure,
            'specification' => $specification,
            'elementsReplacement' => $elementsReplacement
        ]);
    }

    /**
     * Edit the section position in structure of the specification
     *
     * @Route("/structure/{id}/section/edit", methods="GET|POST", name="structure_section_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return Response
     */
    public function editSection(Request $request, Specification $specification, Structure $structure): Response
    {
        $form = $this->createForm(StructureSectionType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_section_edit', ['id' => $structure->getId(),'specification_id' => $specification->getId()]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/edit_section.html.twig', [
            'form' => $form->createView(),
            'structure' => $structure,
            'specification' => $specification
        ]);
    }

    /**
     * Edit the material position in structure of the specification
     *
     * @Route("/structure/{id}/material/edit", methods="GET|POST", name="structure_material_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return Response
     */
    public function editMaterial(Request $request, Specification $specification, Structure $structure): Response
    {
        $form = $this->createForm(StructureMaterialType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_material_edit', ['id' => $structure->getId(),'specification_id' => $specification->getId()]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/edit_material.html.twig', [
            'form' => $form->createView(),
            'structure' => $structure,
            'specification' => $specification
        ]);
    }

    /**
     * Edit the document position in structure of the specification
     *
     * @Route("/structure/{id}/document/edit", methods="GET|POST", name="structure_document_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return Response
     */
    public function editDocument(Request $request, Specification $specification, Structure $structure): Response
    {
        $form = $this->createForm(StructureDocumentType::class, $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('structure_document_edit', ['id' => $structure->getId(),'specification_id' => $specification->getId()]);
            }

            return $this->redirectToRoute('specification_edit', [
                'id' => $specification->getId()
            ]);
        }

        return $this->render('specification/structure/edit_document.html.twig', [
            'form' => $form->createView(),
            'structure' => $structure,
            'specification' => $specification
        ]);
    }

    /**
     * Delete position in structure of the specification
     *
     * @Route("/structure/{id}/delete", methods="DELETE", name="structure_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Specification $specification, Structure $structure): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {
            $this->entityManager->remove($structure);

            $structureHalfDownElements = $this->structureRepository->getStructureHalfDown($specification, $structure);

            $newSrartIndex = $structure->getIndexNumber();
            foreach ($structureHalfDownElements as $structureElement) {

                $structureElement->setIndexNumber($newSrartIndex);

                $newSrartIndex++;

                $this->entityManager->persist($structureElement);
            }
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }


    /**
     * Delete structure replacement element
     *
     * @Route("/structure/{id}/replacement/delete", methods="DELETE", name="structure_replacement_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param StructureReplacement $structureReplacement
     *
     * @return JsonResponse
     */
    public function deleteStructureReplacement(Request $request, Specification $specification, StructureReplacement $structureReplacement): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            $structure = $structureReplacement->getStructureReplacement();
            $structure->setMainReplacement(true);
            $this->entityManager->persist($structure);

            $this->entityManager->remove($structureReplacement);
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }


    /**
     * Up structure element
     *
     * @Route("/structure/{id}/up", methods="POST", name="structure_elem_up", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return JsonResponse
     */
    public function upStructure(Request $request, Specification $specification, Structure $structure): JsonResponse
    {
        if ($this->isCsrfTokenValid('structure-item-up', $request->request->get('_token'))) {

            $structureIndexNumber = $structure->getIndexNumber();


            $structureUpElement = $this->structureRepository->getStructureUp($specification, $structure);

            if ($structureUpElement) {

                $upIndexNumber = $structureUpElement->getIndexNumber();
                $structureUpElement->setIndexNumber($structure->getIndexNumber());
                $structure->setIndexNumber($upIndexNumber);

                $this->entityManager->persist($structure);
                $this->entityManager->persist($structureUpElement);

                $this->entityManager->flush();

            }


        }

        return new JsonResponse(['message' => 'Элемент перемещен вверх']);
    }

    /**
     * Down structure element
     *
     * @Route("/structure/{id}/adown", methods="POST", name="structure_elem_adown", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     *
     * @return JsonResponse
     */
    public function adownStructure(Request $request, Specification $specification, Structure $structure): JsonResponse
    {
        if ($this->isCsrfTokenValid('structure-item-adown', $request->request->get('_token'))) {

            $structureIndexNumber = $structure->getIndexNumber();


            $structureDownElement = $this->structureRepository->getStructureDown($specification, $structure);

            if ($structureDownElement) {

                $downIndexNumber = $structureDownElement->getIndexNumber();
                $structureDownElement->setIndexNumber($structure->getIndexNumber());
                $structure->setIndexNumber($downIndexNumber);

                $this->entityManager->persist($structure);
                $this->entityManager->persist($structureDownElement);

                $this->entityManager->flush();

            }


        }

        return new JsonResponse(['message' => 'Элемент перемещен вниз']);
    }

    /**
     * Move structure element
     *
     * @Route("/structure/{id}/move/{newIndexNumber}/new-index", methods="POST", name="structure_elem_down", requirements={"id" = "\d+", "newIndexNumber" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     * @param Structure $structure
     * @param int $newIndexNumber
     *
     * @return JsonResponse
     */
    public function moveStructure(Request $request, Specification $specification, Structure $structure, int $newIndexNumber): JsonResponse
    {
        if ($this->isCsrfTokenValid('structure-item-move', $request->request->get('_token'))) {

            if ($structure->getIndexNumber() > $newIndexNumber) {
                $structureHalfDownElements = $this->structureRepository->getStructureHalfDownWithout($specification, $structure, $newIndexNumber);

                $structure->setIndexNumber($newIndexNumber++);
                $startIndex = $newIndexNumber;

                foreach ($structureHalfDownElements as $structureElement) {
                    $structureElement->setIndexNumber($startIndex);
                    $this->entityManager->persist($structureElement);
                    $startIndex++;
                }

                $this->entityManager->persist($structure);
                $this->entityManager->flush();
            } else if ($structure->getIndexNumber() < $newIndexNumber) {
                $structureHalfUpElements = $this->structureRepository->getStructureHalfUpWithout($specification, $structure, $newIndexNumber);

                $structure->setIndexNumber($newIndexNumber++);
                $startIndex = 1;

                foreach ($structureHalfUpElements as $structureElement) {
                    $structureElement->setIndexNumber($startIndex);
                    $this->entityManager->persist($structureElement);
                    $startIndex++;
                }

                $this->entityManager->persist($structure);
                $this->entityManager->flush();
            }
        }

        return new JsonResponse(['message' => 'Элемент перемещен']);
    }
}
