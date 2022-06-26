<?php

namespace App\Controller;

use App\Entity\ProductType;
use App\Form\ProductTypeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProductTypeController extends AbstractController
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
     * @Route("/product/types",  methods="GET", name="product_type_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('product_type/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/product/types/datatables", methods="POST", name="product_type_datatables")
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
        $results = $em->getRepository(ProductType::class)->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $em->getRepository(ProductType::class)->countProductType();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $product_type) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('product_type_show', ['id' => $product_type->getId()]),
                                'urlName' => $product_type->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('product_type_show', ['id' => $product_type->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                            if ($isAdmin || $isOGK || $isOGT) {
                                $urlEdit = $this->generateUrl('product_type_edit', ['id' => $product_type->getId()]);
                                $idDelete = $product_type->getId();
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
     * Creates a new type for product entity
     *
     * @Route("/product/type/new", methods="GET|POST", name="product_type_new")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $product_type = new ProductType();
        $form = $this->createForm(ProductTypeType::class, $product_type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product_type);
            $em->flush();

            $this->addFlash('success', $translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_type_new');
            }

            return $this->redirectToRoute('product_type_index');
        }

        return $this->render('product_type/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the type for product entity
     *
     * @Route("/product/type/{id}/edit", methods="GET|POST", name="product_type_edit", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param TypeProduct $product_type
     * @param TranslatorInterface $translator
     *
     * @return Response
     */
    public function edit(Request $request, ProductType $product_type, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ProductTypeType::class, $product_type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', $translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_type_edit', ['id' => $product_type->getId()]);
            }

            return $this->redirectToRoute('product_type_index');
        }

        return $this->render('product_type/edit.html.twig', [
            'form' => $form->createView(),
            'product_type' => $product_type
        ]);
    }

    /**
     * Show type for product
     *
     * @Route("/product/type/{id}", methods="GET", name="product_type_show", requirements={"id" = "\d+"})
     *
     * @param TypeProduct $product_type
     *
     * @return Response
     */
    public function show(ProductType $product_type): Response
    {
        return $this->render('product_type/show.html.twig', [
            'productType' => $product_type,
        ]);
    }

    /**
     * Delete type for product
     *
     * @Route("/product/type/{id}/delete", methods="DELETE", name="product_type_delete", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param TypeProduct $product_type
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function delete(Request $request, ProductType $product_type, TranslatorInterface $translator): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($product_type->getProducts()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($product_type);
            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('item.deleted_successfully')]);
    }
}
