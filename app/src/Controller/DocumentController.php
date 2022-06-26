<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Specification;
use App\Repository\ProductRepository;
use App\Form\DocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class DocumentController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class DocumentController extends AbstractController
{

    private $entityManager;

    private $translator;

    private $productRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        ProductRepository $productRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->productRepository = $productRepository;
    }

    /**
     * Index page
     *
     * @Route("/documentas", methods="GET", name="document_index")
     *
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('document/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/document/datatables", methods="POST", name="document_datatables")
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

        $results = $this->productRepository->getRequiredDTDataDocument($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->productRepository->countDocument();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $document) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('document_show', ['id' => $document->getId()]),
                                'urlName' => $document->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'designation':
                        {
                            $elementTemp = $document->getDesignation();
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('document_show', ['id' => $document->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                           if ($isAdmin || $isOGK) {
                                $urlEdit = $this->generateUrl('document_edit', ['id' => $document->getId()]);
                                $idDelete = $document->getId();
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
     * Creates a new document entity
     *
     * @Route("/document/new", methods="GET|POST", name="document_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $document = new Product();
        $document->setIntype(Product::INTYPE_DOCUMENT);
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($document);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('document_new');
            }

            return $this->redirectToRoute('document_index');
        }

        return $this->render('document/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the document entity
     *
     * @Route("/document/{id}/edit", methods="GET|POST", name="document_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Product $document
     *
     * @return Response
     */
    public function edit(Request $request, Product $document): Response
    {
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('document_edit', ['id' => $document->getId()]);
            }

            return $this->redirectToRoute('document_index');
        }

        return $this->render('document/edit.html.twig', [
            'form' => $form->createView(),
            'document' => $document
        ]);
    }

    /**
     * Show document
     *
     * @Route("/document/{id}", methods="GET", name="document_show", requirements={"id" = "\d+"})
     *
     * @param Product $document
     *
     * @return Response
     */
    public function show(Product $document): Response
    {
        return $this->render('document/show.html.twig', [
            'document' => $document,
            'specificationStatuses' => Specification::STATUSES,
        ]);
    }

    /**
     * Delete document
     *
     * @Route("/document/{id}/delete", methods="DELETE", name="document_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Product $document
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Product $document): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($document->getSpecifications()->count() > 0 || $document->getStructures()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $this->entityManager->remove($document);
            $this->entityManager->flush();
        }

        return new JsonResponse(['messageSuccess' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Data for select
     *
     * @Route("/select/document", methods="POST", name="select_document")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listSelectDocumentAction(Request $request): JsonResponse
    {
        // Get the parameters from DataTable Ajax Call
        if ($request->getMethod() === 'POST') {
            $page = (int)$request->request->get('page');
            $kwd = $request->request->get('q');
        } else // If the request is not a POST one, die hard
        {
            die;
        }

        $limit = 25;
        $offset = ($page - 1) * $limit;

        $results = $this->productRepository->getRequiredSelectDocumentData($kwd, $page, $limit, $offset);

        $objects = $results["results"];
        $count = $results["countResult"];

        // determine if they are more results or not
        $endCount = $offset + $limit;
        $morePages = $count > $endCount;

        $data = [];
        foreach ($objects as $product) {
            $data[] = [
                'id' => $product->getId(),
                'text' => $product->getName() . ' ' . $product->getDesignation()
            ];
        }


        // Construct response
        $response = [
            'results' => $data,
            'pagination' => [
                'more' => $morePages
            ]
        ];


        // Send all this stuff back to DataTables
        $returnResponse = new JsonResponse();
        $returnResponse->setData($response);

        return $returnResponse;
    }

}
