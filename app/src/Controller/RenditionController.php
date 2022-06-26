<?php

namespace App\Controller;

use App\Entity\Rendition;
use App\Form\RenditionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class RenditionController extends AbstractController
{
    /**
     * Index page
     *
     * @Route("/renditions", methods="GET", name="rendition_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('rendition/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/rendition/datatables", methods="POST", name="rendition_datatables")
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
        $results = $em->getRepository(Rendition::class)->getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $em->getRepository(Rendition::class)->countRendition();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $rendition) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('rendition_edit', ['id' => $rendition->getId()]),
                                'urlName' => $rendition->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'control':
                        {
                            $elementTemp = $this->render('default/table_group_btn.html.twig', [
                                'urlEdit' => $this->generateUrl('rendition_edit', ['id' => $rendition->getId()]),
                                'idDelete' => $rendition->getId()
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
     * Creates a new rendition entity
     *
     * @Route("/rendition/new", methods="GET|POST", name="rendition_new")
     *
     * @param Request $request
     * @param TranslatorInterface $translator
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request, TranslatorInterface $translator): Response
    {
        $rendition = new Rendition();
        $form = $this->createForm(RenditionType::class, $rendition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rendition);
            $em->flush();

            $this->addFlash('success', $translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('rendition_new');
            }

            return $this->redirectToRoute('rendition_index');
        }

        return $this->render('rendition/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the rendition entity
     *
     * @Route("/rendition/{id}/edit", methods="GET|POST", name="rendition_edit", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param Rendition $rendition
     * @param TranslatorInterface $translator
     *
     * @return Response
     */
    public function edit(Request $request, Rendition $rendition, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(RenditionType::class, $rendition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', $translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('rendition_edit', ['id' => $rendition->getId()]);
            }

            return $this->redirectToRoute('rendition_index');
        }

        return $this->render('rendition/edit.html.twig', [
            'form' => $form->createView(),
            'rendition' => $rendition
        ]);
    }

    /**
     * Delete rendition
     *
     * @Route("/rendition/{id}/delete", methods="DELETE", name="rendition_delete", requirements={"id" = "\d+"})
     *
     * @param Request $request
     * @param Rendition $rendition
     * @param TranslatorInterface $translator
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Rendition $rendition, TranslatorInterface $translator): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rendition);
            $em->flush();
        }

        return new JsonResponse(['message' => $translator->trans('item.deleted_successfully')]);
    }
}
