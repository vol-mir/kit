<?php

namespace App\Controller;

use App\Entity\Specification;
use App\Entity\Structure;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\SpecificationRepository;
use App\Form\SpecificationType;
use App\Entity\StructureReplacement;
use App\Repository\StructureRepository;
use App\Services\StructureService;
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
 * Class SpecificationController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class SpecificationController extends AbstractController
{
    private $entityManager;

    private $translator;

    private $structureService;

    private $specificationRepository;

    private $structureRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        StructureService $structureService,
        SpecificationRepository $specificationRepository,
        StructureRepository $structureRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->structureService = $structureService;
        $this->specificationRepository = $specificationRepository;
        $this->structureRepository = $structureRepository;
    }


    /**
     * Index page
     *
     * @Route("/specifications",  methods="GET", name="specification_index")
     *
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('specification/specification_document/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/specification/datatables", methods="POST", name="specification_datatables")
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
        $specificationsWithError = $request->request->has('specifications_with_error')?$request->request->get('specifications_with_error'):null;

        $otherConditions = null;

        if ($specificationsWithError) {

            $otherConditions = $this->structureRepository->getRowsNullStructures();

        }

        $results = $this->specificationRepository->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->specificationRepository->countSpecification();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $specification) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {

                    case 'id_specification':
                        {
                            $elementTemp = $specification->getId();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'date_specification':
                        {
                            $elementTemp = $specification->getDateSpecification()?$specification->getDateSpecification()->format('d.m.Y'):"";

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'status_specification':
                        {
                            //$elementTemp = $specification->getStatus()? $translator->trans(Specification::STATUSES[$specification->getStatus()]):"";

                            switch ($specification->getStatus()) {
                                case 1:
                                    $elementTemp = "<span class='badge badge-primary'>" . $this->translator->trans(Specification::STATUSES[$specification->getStatus()]) . "</span>";
                                    break;
                                case 20:
                                    $elementTemp = "<span class='badge badge-warning'>" . $this->translator->trans(Specification::STATUSES[$specification->getStatus()]) . "</span>";
                                    break;
                                case 30:
                                    $elementTemp = "<span class='badge badge-light'>" . $this->translator->trans(Specification::STATUSES[$specification->getStatus()]) . "</span>";
                                    break;
                                case 40:
                                    $elementTemp = "<span class='badge badge-dark'>" . $this->translator->trans(Specification::STATUSES[$specification->getStatus()]) . "</span>";
                                    break;
                                case 3:
                                    $elementTemp = "<span class='badge badge-success'>" . $this->translator->trans(Specification::STATUSES[$specification->getStatus()]) . "</span>";
                                    break;
                                case 60:
                                    $elementTemp = "<span class='badge badge-danger'>" . $this->translator->trans(Specification::STATUSES[$specification->getStatus()]) . "</span>";
                                    break;
                                default:
                                    $elementTemp = "<span class='badge badge-secondary'>" . $this->translator->trans(Specification::STATUSES[$specification->getStatus()]) . "</span>";
                            }

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'product_name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('specification_show', ['id' => $specification->getId()]),
                                'urlName' => $specification->getProduct()->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'product_designation':
                        {
                            $elementTemp = $specification->getProduct()->getDesignation();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'rendition':
                        {
                            $elementTemp = $specification->getRendition()->getName();
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'user':
                        {
                            $elementTemp = '<small>' . $specification->getUser()->getFullName() . ', ' . $this->translator->trans(User::DEPARTMENTS[$specification->getUser()->getDepartment()]) . ', время создания: ' . $specification->getCreatedAt()->format('d.m.Y H:i') . '</small>';
                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            if ($specificationsWithError) {
                                $urlShow =  $this->generateUrl('specification_show', ['id' => $specification->getId(), 'list_error' => 'true']);
                            } else {
                                $urlShow =  $this->generateUrl('specification_show', ['id' => $specification->getId()]);
                            }

                            $urlEdit = '';
                            $idDelete = '';
                            $idCopy = '';

                            $isClose = $specification->getClose()?$specification->getClose():0;
                            $spcStatus = $specification->getStatus();

                            if ($isAdmin) {
                               $isClose = 0;
                            }

                            if ($isAdmin || $isOGK) {
                                if ($specificationsWithError) {
                                    $idCopy = '';
                                } else {
                                    $idCopy = $specification->getId();
                                }
                            }

                            if ($isAdmin || ($isOGK && $isClose == 0)) {
                                if ($specificationsWithError) {
                                    $urlEdit = $this->generateUrl('specification_edit', ['id' => $specification->getId(), 'list_error' => 'true']);
                                } else {
                                    $urlEdit = $this->generateUrl('specification_edit', ['id' => $specification->getId()]);
                                }
                            }


                            if (($isAdmin || ($isOGK && $isClose == 0)) && $spcStatus == 1) {
                                if ($specificationsWithError) {
                                    $idDelete = '';
                                } else {
                                    $idDelete = $specification->getId();
                                }
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
     * Creates a new Specification entity
     *
     * @Route("/specification/new", methods="GET|POST", name="specification_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $specification = new Specification();

        $specification->setUser($this->getUser());

        $form = $this->createForm(SpecificationType::class, $specification);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->entityManager->persist($specification);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('specification_new');
            }

            return $this->redirectToRoute('specification_edit', ['id' => $specification->getId()]);
        }

        return $this->render('specification/specification_document/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Show specification
     *
     * @Route("/specification/{id}", methods="GET", name="specification_show", requirements={"id" = "\d+"})
     *
     * @param Specification $specification
     *
     * @return Response
     */
    public function show(Specification $specification): Response
    {
        return $this->render('specification/specification_document/show.html.twig', [
            'specification' => $specification,
            'specificationStatuses' => Specification::STATUSES,
            'userDepartments' => User::DEPARTMENTS
        ]);
    }

    /**
     * Edit the specification entity
     *
     * @Route("/specification/{id}/edit", methods="GET|POST", name="specification_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return Response
     */
    public function edit(Request $request, Specification $specification): Response
    {
        $form = $this->createForm(SpecificationType::class, $specification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            $specificationsWithError = $request->query->get('list_error');

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                if ($specificationsWithError) {
                    return $this->redirectToRoute('specification_edit', ['id' => $specification->getId(), 'list_error' => 'true']);
                }
                return $this->redirectToRoute('specification_edit', ['id' => $specification->getId()]);
            }

            if ($specificationsWithError) {
                return $this->redirectToRoute('specification_index_error');
            }

            return $this->redirectToRoute('specification_index');
        }

        return $this->render('specification/specification_document/edit.html.twig', [
            'form' => $form->createView(),
            'specification' => $specification,
            'specificationStatuses' => Specification::STATUSES,
        ]);
    }

    /**
     * Delete specification
     *
     * @Route("/specification/{id}/delete", methods="DELETE", name="specification_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Specification $specification): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {
            $this->entityManager->remove($specification);
            $this->entityManager->flush();
        }

        return new JsonResponse(['message' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Invoice page
     *
     * @Route("/specification/{id}/print",  methods="GET", name="print_specification")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return JsonResponse
     */
    public function invoice(Request $request, Specification $specification, LoggerInterface $logger, TranslatorInterface $translator)
    {
        //get structure for specification
        $em = $this->getDoctrine()->getManager();
        $structures = $em->getRepository(Structure::class)->getStructures($specification);

        $arrPrint = [];

        foreach ($structures as $structure) {

            if ($structure->getProduct()->getIntype() == Product::INTYPE_SPECIFICATION_SECTION) {

                $arrStr = [];
                $arrStr['structureFormat'] = '';
                $arrStr['structureArea'] = '';
                $arrStr['structurePosition'] = '';
                $arrStr['productDesignation'] = '';
                $arrStr['productName'] = '';
                $arrStr['structureAmount'] = '';
                $arrStr['structureNote'] = '';
                $arrStr['sectionUnderline'] = 0;
                $arrStr['baseLine'] = 1;
                $arrPrint[] = $arrStr;

                $sectionName = $structure->getProduct()->getName();
                $parts = $this->str_split_words($sectionName, 28);

                foreach ($parts as $part) {
                    $arrStr = [];
                    $arrStr['structureFormat'] = '';
                    $arrStr['structureArea'] = '';
                    $arrStr['structurePosition'] = '';
                    $arrStr['productDesignation'] = '';
                    $arrStr['productName'] = $part;
                    $arrStr['structureAmount'] = '';
                    $arrStr['structureNote'] = '';
                    $arrStr['sectionUnderline'] = 1;
                    $arrStr['baseLine'] = 1;
                    $arrPrint[] = $arrStr;
                }

                $arrStr = [];
                $arrStr['structureFormat'] = '';
                $arrStr['structureArea'] = '';
                $arrStr['structurePosition'] = '';
                $arrStr['productDesignation'] = '';
                $arrStr['productName'] = '';
                $arrStr['structureAmount'] = '';
                $arrStr['structureNote'] = '';
                $arrStr['sectionUnderline'] = 0;
                $arrStr['baseLine'] = 1;
                $arrPrint[] = $arrStr;

            } else {

                $elementTemp = $structure->getNote();

                // получим замены
                $structureMainId = null;
                $structureReplacementId = null;

                list($structureMainId, $structureReplacementId) = $this->structureService->arrIdsMainReplacement($structure->getId());

                $sructureRepl =$em->getRepository(StructureReplacement::class)->getListStructureReplacement($structureMainId, $structureReplacementId);

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

                $parts1 = $this->str_split_words(trim($structure->getProduct()->getDesignation()), 28);

                $parts2Name = $this->str_split_words(trim($structure->getProduct()->getName()), 28);
                $parts2Comment = $this->str_split_words(trim($structure->getComment()), 28);
                $parts2 = $parts2Name;
                if ($structure->getComment() && count($parts2Comment) > 0) {
                    $parts2 = array_merge($parts2Name, $parts2Comment);
                }
                $parts3 = $this->str_split_words(trim($elementTemp), 30);

                $countParts = [count($parts1), count($parts2), count($parts3)];
                $max = max($countParts);

                $structureFormat = $structure->getFormat()?$translator->trans(Structure::FORMATS[$structure->getFormat()]):'';
                $structureArea = $structure->getArea();
                $structurePosition = $structure->getPosition()?:'';
                $structureAmount = $structure->getAmount();

                $arrStr = [];
                $arrStr['structureFormat'] = $structureFormat;
                $arrStr['structureArea'] = $structureArea;
                $arrStr['structurePosition'] = $structurePosition;
                $arrStr['productDesignation'] = $parts1[0];
                $arrStr['productName'] = $parts2[0];
                $arrStr['structureAmount'] = $structureAmount;
                $arrStr['structureNote'] = $parts3[0];
                $arrStr['sectionUnderline'] = 0;
                $arrStr['baseLine'] = 1;
                $arrPrint[]=$arrStr;


                for ($iStr = 1; $iStr < $max; $iStr++) {
                    $arrStr = [];
                    $arrStr['structureFormat'] = '';
                    $arrStr['structureArea'] = '';
                    $arrStr['structurePosition'] = '';
                    $arrStr['productDesignation'] = isset($parts1[$iStr])?$parts1[$iStr]:'';
                    $arrStr['productName'] = isset($parts2[$iStr])?$parts2[$iStr]:'';
                    $arrStr['structureAmount'] = '';
                    $arrStr['structureNote'] = isset($parts3[$iStr])?$parts3[$iStr]:'';
                    $arrStr['sectionUnderline'] = 0;
                    $arrStr['baseLine'] = 0;
                    $arrPrint[]=$arrStr;
                }

            }
        }

        $rowCurrent = 2;
        $alignment_center = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER;
        $styleArrayEqual = [
            'font' => [
                'underline' => true,
            ],
        ];

        $pages = ceil((count($arrPrint)+3)/31);

        $spreadsheetNew = new Spreadsheet();
        $spreadsheetNew->removeSheetByIndex(0);

        for ($p=0; $p<$pages; $p++) {

            $endRows = 28 + $p * 31;

            if (count($arrPrint) < $endRows) {
                $endRows = count($arrPrint);
            }

            if (!$p) {
                $spreadsheet = IOFactory::load('Specification.xlsx');
                $sheet = $spreadsheet->getSheetByName('page1');
                $beginRows = 0;

                $sheet->getCell('K30')->setValue($specification->getProduct()->getDesignation());
                $sheet->getCell('K33')->setValue($specification->getProduct()->getName());
                $sheet->getCell('P34')->setValue($p + 1);
                $sheet->getCell('S34')->setValue($pages);
                $sheet->setTitle("page".($p + 1));
            } else {
                $spreadsheet = IOFactory::load('Specification.xlsx');
                $sheet = $spreadsheet->getSheetByName('pageN');

                $sheet->getCell('K33')->setValue($specification->getProduct()->getDesignation());
                $sheet->getCell('S34')->setValue($p + 1);

                $beginRows = 28 + $p * 31 - 31;
                $sheet->setTitle("page".($p + 1));
            }


            $rowCurrent = 2;

            for ($i = $beginRows; $i < $endRows; $i++) {

                $arrStr = $arrPrint[$i];

                $sheet->getCell('C'.$rowCurrent)->setValue($arrStr['structureFormat']);
                $sheet->getCell('D'.$rowCurrent)->setValue($arrStr['structureArea']);
                $sheet->getCell('F'.$rowCurrent)->setValue($arrStr['structurePosition']);
                $sheet->getCell('H'.$rowCurrent)->setValue($arrStr['productDesignation']);
                $sheet->getCell('L'.$rowCurrent)->setValue($arrStr['productName']);
                if ($arrStr['sectionUnderline']) {
                    $sheet->getCell('L'.$rowCurrent)->getStyle()->getAlignment()->setHorizontal($alignment_center);
                    $sheet->getCell('L'.$rowCurrent)->getStyle()->applyFromArray($styleArrayEqual);
                }
                $sheet->getCell('Q'.$rowCurrent)->setValue($arrStr['structureAmount']?$arrStr['structureAmount']:'');
                $sheet->getCell('R'.$rowCurrent)->setValue($arrStr['structureNote']);

                $rowCurrent++;
            }


            $spreadsheetNew->addExternalSheet($sheet->copy());
        }

        $writer = IOFactory::createWriter($spreadsheetNew, 'Xlsx');
        $response =  new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            }
        );
        $response->headers->set('Content-Type', 'application/vnd.ms-excel');
        $response->headers->set('Content-Disposition', 'attachment;filename="Specification.xlsx"');
        $response->headers->set('Cache-Control','max-age=0');
        return $response;
    }

    function str_split_unicode($str, $l = 0) {
        if ($l > 0) {
            $ret = array();
            $len = mb_strlen($str, "UTF-8");
            for ($i = 0; $i < $len; $i += $l) {
                $ret[] = mb_substr($str, $i, $l, "UTF-8");
            }
            return $ret;
        }
        return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    }

    function str_split_words($str, $l = 0) {
        if ($l > 0) {
            $len = strlen($str);
            if ($len <= $l) return [$str];
            $words = preg_split("/\s+/", $str);
            $rez = [];

            foreach  ($words as $word) {
                $lastElement = count($rez)>0?$rez[array_key_last($rez)]:null;
                if ($lastElement && (strlen($lastElement) <= $l - 1)) {
                    $rez[array_key_last($rez)] .= ' ' . $word;
                } else {
                    $rez[] = $word;

                }

            }
            return $rez;

        }
        return [$str];

    }

    /**
     * Copy specification
     *
     * @Route("/specification/{id}/copy", methods="POST", name="specification_copy", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Specification $specification
     *
     * @return JsonResponse
     */
    public function copy(Request $request, Specification $specification): JsonResponse
    {
        if ($this->isCsrfTokenValid('copy-item', $request->request->get('_token'))) {

            $specificationNew = new Specification();

            $specificationNew
                ->setName($specification->getName())
                ->setStatus(Specification::IN_DEVELOPING)
                ->setProduct($specification->getProduct())
                ->setDateSpecification(new \DateTime())
                ->setRendition($specification->getRendition());

            $specificationNew->setUser($this->getUser());

            $this->entityManager->persist($specificationNew);


            foreach($specification->getStructures() as $structure) {
                $structureNew = new Structure();

                $structureNew
                    ->setFormat($structure->getFormat())
                    ->setArea($structure->getArea())
                    ->setPosition((int)$structure->getPosition())
                    ->setAmount((float)$structure->getAmount())
                    ->setNote($structure->getNote())
                    ->setSpecification($specificationNew)
                    ->setIndexNumber((int)$structure->getIndexNumber())
                    ->setProduct($structure->getProduct())
                    ->setComment($structure->getComment());

                $this->entityManager->persist($structureNew);

            }

            $this->entityManager->flush();

        }

        return new JsonResponse(['message' => $this->translator->trans('item.copy_successfully')]);
    }


    /**
     * Index page
     *
     * @Route("/specifications/error",  methods="GET", name="specification_index_error")
     *
     * @return Response
     */
    public function indexError(): Response
    {

        return $this->render('specification/specification_document/index_with_error.html.twig');
    }

}
