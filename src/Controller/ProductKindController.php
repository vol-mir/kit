<?php

namespace App\Controller;

use App\Entity\ProductKind;
use App\Form\ProductKindType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProductKindController extends AbstractController
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
     * @Route("/product/kinds",  methods="GET", name="product_kind_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('product_kind/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/product/kinds/datatables", methods="POST", name="product_kind_datatables")
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
        $results = $em->getRepository(ProductKind::class)->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $em->getRepository(ProductKind::class)->countProductKind();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $product_kind) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('product_kind_show', ['id' => $product_kind->getId()]),
                                'urlName' => $product_kind->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isOGK= in_array('ROLE_OGK', $this->getUser()->getRoles(), true);
                            $isOGT= in_array('ROLE_OGT', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('product_kind_show', ['id' => $product_kind->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                            if ($isAdmin || $isOGK || $isOGT) {
                                $urlEdit = $this->generateUrl('product_kind_edit', ['id' => $product_kind->getId()]);
                                $idDelete = $product_kind->getId();
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
     * Creates a new kind for product entity
     *
     * @Route("/product/kind/new", methods="GET|POST", name="product_kind_new")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $product_kind = new ProductKind();
        $form = $this->createForm(ProductKindType::class, $product_kind);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product_kind);
            $em->flush();

            $this->addFlash('success', $translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_kind_new');
            }

            return $this->redirectToRoute('product_kind_index');
        }

        return $this->render('product_kind/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the kind for product entity
     *
     * @Route("/product/kind/{id}/edit", methods="GET|POST", name="product_kind_edit", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param KindProduct $product_kind
     * @param TranslatorInterface $translator
     *
     * @return Response
     */
    public function edit(Request $request, ProductKind $product_kind, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ProductKindType::class, $product_kind);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', $translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('product_kind_edit', ['id' => $product_kind->getId()]);
            }

            return $this->redirectToRoute('product_kind_index');
        }

        return $this->render('product_kind/edit.html.twig', [
            'form' => $form->createView(),
            'product_kind' => $product_kind
        ]);
    }

    /**
     * Show kind for product
     *
     * @Route("/product/kind/{id}", methods="GET", name="product_kind_show", requirements={"id" = "\d+"})
     *
     * @param KindProduct $product_kind
     *
     * @return Response
     */
    public function show(ProductKind $product_kind): Response
    {
        return $this->render('product_kind/show.html.twig', [
            'productKind' => $product_kind,
        ]);
    }

    /**
     * Delete kind for product
     *
     * @Route("/product/kind/{id}/delete", methods="DELETE", name="product_kind_delete", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param KindProduct $product_kind
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function delete(Request $request, ProductKind $product_kind, TranslatorInterface $translator): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($product_kind->getProducts()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($product_kind);
            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('item.deleted_successfully')]);
    }
}
