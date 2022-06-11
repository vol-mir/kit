<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Form\SpecificationSectionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class ProductController
 * @package App\Controller
 *
 * @Security("is_granted('ROLE_USER')")
 */
class SpecificationSectionController extends AbstractController
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
     * @Route("/specification/sections", name="specification_section_index")
     *
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('specification_section/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/specification/sections/datatables", methods="POST", name="specification_section_datatables")
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

        $em = $this->getDoctrine()->getManager();
        $results = $this->productRepository->getRequiredDTDataSpecificationSection($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->productRepository->countSpecificationSection();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $specificationSection) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('specification_section_show', ['id' => $specificationSection->getId()]),
                                'urlName' => $specificationSection->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('specification_section_show', ['id' => $specificationSection->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                            if ($isAdmin || $isOGK) {
                                $urlEdit = $this->generateUrl('specification_section_edit', ['id' => $specificationSection->getId()]);
                                $idDelete = $specificationSection->getId();
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
     * Creates a new section specification entity
     *
     * @Route("/specification/section/new", methods="GET|POST", name="specification_section_new")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $specificationSection = new Product();
        $specificationSection->setIntype(Product::INTYPE_SPECIFICATION_SECTION);
        $form = $this->createForm(SpecificationSectionType::class, $specificationSection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($specificationSection);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('specification_section_new');
            }

            return $this->redirectToRoute('specification_section_index');
        }

        return $this->render('specification_section/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Show section specification
     *
     * @Route("/specification/section/{id}", methods="GET", name="specification_section_show", requirements={"id" = "\d+"})
     *
     * @param Product $specificationSection
     *
     * @return Response
     */
    public function show(Product $specificationSection): Response
    {
        return $this->render('specification_section/show.html.twig', [
            'specificationSection' => $specificationSection,
        ]);
    }

    /**
     * Edit the section specification entity
     *
     * @Route("/specification/section/{id}/edit", methods="GET|POST", name="specification_section_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Product $specificationSection
     *
     * @return Response
     */
    public function edit(Request $request, Product $specificationSection): Response
    {
        $form = $this->createForm(SpecificationSectionType::class, $specificationSection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('specification_section_edit', ['id' => $specificationSection->getId()]);
            }

            return $this->redirectToRoute('specification_section_index');
        }

        return $this->render('specification_section/edit.html.twig', [
            'form' => $form->createView(),
            'specification_section' => $specificationSection
        ]);
    }


    /**
     * Delete section specification
     *
     * @Route("/specification/section/{id}/delete", methods="DELETE", name="specification_section_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Product $Product
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Product $product): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($product->getStructures()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $this->entityManager->remove($product);
            $this->entityManager->flush();
        }

        return new JsonResponse(['messageSuccess' => $this->translator->trans('item.deleted_successfully')]);
    }

    /**
     * Data for select
     *
     * @Route("/select/section", methods="POST", name="select_section")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listSelectSectionAction(Request $request): JsonResponse
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

        $results = $this->productRepository->getRequiredSelectSectionData($kwd, $page, $limit, $offset);

        $objects = $results["results"];
        $count = $results["countResult"];

        // determine if they are more results or not
        $endCount = $offset + $limit;
        $morePages = $count > $endCount;

        $data = [];
        foreach ($objects as $product) {
            $data[] = [
                'id' => $product->getId(),
                'text' => $product->getName()
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
