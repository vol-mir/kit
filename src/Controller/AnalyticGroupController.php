<?php

namespace App\Controller;

use App\Entity\AnalyticGroup;
use App\Form\AnalyticGroupType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class AnalyticGroupController extends AbstractController
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
     * @Route("/analytic/groups",  methods="GET", name="analytic_group_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('analytic_group/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/analytic/group/datatables", methods="POST", name="analytic_group_datatables")
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
        $results = $em->getRepository(AnalyticGroup::class)->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $em->getRepository(AnalyticGroup::class)->countAnalyticGroups();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $analyticGroup) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('analytic_group_show', ['id' => $analyticGroup->getId()]),
                                'urlName' => $analyticGroup->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $isBuh= in_array('ROLE_BUH', $this->getUser()->getRoles(), true);
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('analytic_group_show', ['id' => $analyticGroup->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                            if ($isAdmin || $isBuh) {
                                $urlEdit = $this->generateUrl('analytic_group_edit', ['id' => $analyticGroup->getId()]);
                                $idDelete = $analyticGroup->getId();
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
     * Creates a new analytic_group
     *
     * @Route("/analytic/group/new", methods="GET|POST", name="analytic_group_new")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $analyticGroup = new AnalyticGroup();
        $form = $this->createForm(AnalyticGroupType::class, $analyticGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($analyticGroup);
            $em->flush();

            $this->addFlash('success', $translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('analytic_group_new');
            }

            return $this->redirectToRoute('analytic_group_index');
        }

        return $this->render('analytic_group/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the analytic_group
     *
     * @Route("/analytic/group/{id}/edit", methods="GET|POST", name="analytic_group_edit", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param AnalyticGroup $analyticGroup
     * @param TranslatorInterface $translator
     *
     * @return Response
     */
    public function edit(Request $request, AnalyticGroup $analyticGroup, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(AnalyticGroupType::class, $analyticGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', $translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('analytic_group_edit', ['id' => $analyticGroup->getId()]);
            }

            return $this->redirectToRoute('analytic_group_index');
        }

        return $this->render('analytic_group/edit.html.twig', [
            'form' => $form->createView(),
            'analyticGroup' => $analyticGroup
        ]);
    }

    /**
     * Show analytic_group for product
     *
     * @Route("/analytic/group/{id}", methods="GET", name="analytic_group_show", requirements={"id" = "\d+"})
     *
     * @param AnalyticGroup $analyticGroup
     *
     * @return Response
     */
    public function show(AnalyticGroup $analyticGroup): Response
    {
        return $this->render('analytic_group/show.html.twig', [
            'analyticGroup' => $analyticGroup,
        ]);
    }

    /**
     * Delete analyticGroup for product
     *
     * @Route("/analytic/group/{id}/delete", methods="DELETE", name="analytic_group_delete", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param AnalyticGroup $analyticGroup
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function delete(Request $request, AnalyticGroup $analyticGroup, TranslatorInterface $translator): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($analyticGroup->getProducts()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($analyticGroup);
            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('item.deleted_successfully')]);
    }
}
