<?php

namespace App\Controller;

use App\Entity\ProductCategory;
use App\Form\ProductCategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProductCategoryController extends AbstractController
{
    private $translator;

    public function __construct(
        TranslatorInterface $translator
    )
    {
        $this->translator = $translator;
    }

    /**
     * Index page
     *
     * @Route("/product/categories",  methods="GET", name="product_category_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('product_category/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/product/categories/datatables", methods="POST", name="product_category_datatables")
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
        $results = $em->getRepository(ProductCategory::class)->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $em->getRepository(ProductCategory::class)->countProductCategory();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $product_category) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('product_category_show', ['id' => $product_category->getId()]),
                                'urlName' => $product_category->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('product_category_show', ['id' => $product_category->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                            if ($isAdmin || $isOGK || $isOGT) {
                                $urlEdit = $this->generateUrl('product_category_edit', ['id' => $product_category->getId()]);
                                $idDelete = $product_category->getId();
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
     * Creates a new category for product entity
     *
     * @Route("/product/category/new", methods="GET|POST", name="product_category_new")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $product_category = new ProductCategory();
        $form = $this->createForm(ProductCategoryType::class, $product_category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product_category);
            $em->flush();

            $this->addFlash('success', $translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_category_new');
            }

            return $this->redirectToRoute('product_category_index');
        }

        return $this->render('product_category/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the category for product entity
     *
     * @Route("/product/category/{id}/edit", methods="GET|POST", name="product_category_edit", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param CategoryProduct $product_category
     * @param TranslatorInterface $translator
     *
     * @return Response
     */
    public function edit(Request $request, ProductCategory $product_category, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ProductCategoryType::class, $product_category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', $translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_category_edit', ['id' => $product_category->getId()]);
            }

            return $this->redirectToRoute('product_category_index');
        }

        return $this->render('product_category/edit.html.twig', [
            'form' => $form->createView(),
            'product_category' => $product_category
        ]);
    }

    /**
     * Show category for product
     *
     * @Route("/product/category/{id}", methods="GET", name="product_category_show", requirements={"id" = "\d+"})
     *
     * @param CategoryProduct $product_category
     *
     * @return Response
     */
    public function show(ProductCategory $product_category): Response
    {
        return $this->render('product_category/show.html.twig', [
            'productCategory' => $product_category,
        ]);
    }

    /**
     * Delete category for product
     *
     * @Route("/product/category/{id}/delete", methods="DELETE", name="product_category_delete", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param CategoryProduct $product_category
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function delete(Request $request, ProductCategory $product_category, TranslatorInterface $translator): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($product_category->getProducts()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($product_category);
            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('item.deleted_successfully')]);
    }
}
