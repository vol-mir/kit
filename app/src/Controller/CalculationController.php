<?php

namespace App\Controller;

use App\Entity\Calculation;
use App\Form\CalculationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class CalculationController extends AbstractController
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
     * @Route("/calculations",  methods="GET", name="calculation_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('calculation/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/calculation/datatables", methods="POST", name="calculation_datatables")
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
        $results = $em->getRepository(Calculation::class)->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $em->getRepository(Calculation::class)->countCalculation();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $calculation) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('calculation_show', ['id' => $calculation->getId()]),
                                'urlName' => $calculation->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isPeo= in_array('ROLE_PEO', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('calculation_show', ['id' => $calculation->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                            if ($isAdmin || $isPeo) {
                                $urlEdit = $this->generateUrl('calculation_edit', ['id' => $calculation->getId()]);
                                $idDelete = $calculation->getId();
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
     * Creates a new calculation
     *
     * @Route("/calculation/new", methods="GET|POST", name="calculation_new")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $calculation = new Calculation();
        $form = $this->createForm(CalculationType::class, $calculation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($calculation);
            $em->flush();

            $this->addFlash('success', $translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('calculation_new');
            }

            return $this->redirectToRoute('calculation_index');
        }

        return $this->render('calculation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the calculation
     *
     * @Route("/calculation/{id}/edit", methods="GET|POST", name="calculation_edit", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param Calculation $calculation
     * @param TranslatorInterface $translator
     *
     * @return Response
     */
    public function edit(Request $request, Calculation $calculation, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(CalculationType::class, $calculation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', $translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('calculation_edit', ['id' => $calculation->getId()]);
            }

            return $this->redirectToRoute('calculation_index');
        }

        return $this->render('calculation/edit.html.twig', [
            'form' => $form->createView(),
            'calculation' => $calculation
        ]);
    }

    /**
     * Show calculation for product
     *
     * @Route("/calculation/{id}", methods="GET", name="calculation_show", requirements={"id" = "\d+"})
     *
     * @param Calculation $calculation
     *
     * @return Response
     */
    public function show(Calculation $calculation): Response
    {
        return $this->render('calculation/show.html.twig', [
            'calculation' => $calculation,
        ]);
    }

    /**
     * Delete calculation for product
     *
     * @Route("/calculation/{id}/delete", methods="DELETE", name="calculation_delete", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param Calculation $calculation
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Calculation $calculation, TranslatorInterface $translator): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($calculation->getProducts()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($calculation);
            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('item.deleted_successfully')]);
    }
}
