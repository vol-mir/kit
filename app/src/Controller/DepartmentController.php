<?php

namespace App\Controller;

use App\Entity\Department;
use App\Form\DepartmentType;
use App\Repository\DepartmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\ORM\EntityManagerInterface;

class DepartmentController extends AbstractController
{
    private $entityManager;

    private $translator;

    private $departmentRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        DepartmentRepository $departmentRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->departmentRepository = $departmentRepository;
    }

    /**
     * Index page
     *
     * @Route("/departments", methods="GET", name="department_index")
     *
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('department/index.html.twig');
    }

    /**
     * Data for tables
     *
     * @Route("/department/datatables", methods="POST", name="department_datatables")
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

        $results = $this->departmentRepository->getRequiredDTDataDepartment($start, $length, $orders, $search, $columns, $otherConditions);

        // Returned objects are of type Town
        $objects = $results["results"];
        // Get total number of objects
        $totalObjectsCount = $this->departmentRepository->countDepartment();
        // Get total number of filtered data
        $filteredObjectsCount = $results["countResult"];

        $data = [];
        foreach ($objects as $department) {
            $dataTemp = [];
            foreach ($columns as $column) {
                switch ($column['name']) {
                    case 'name':
                        {
                            $elementTemp = $this->render('default/table_href.html.twig', [
                                'url' => $this->generateUrl('department_show', ['id' => $department->getId()]),
                                'urlName' => $department->getName()
                            ])->getContent();

                            $dataTemp[] = $elementTemp;
                            break;
                        }

                    case 'parent':
                        {
                            $elementTemp = $department->getParent()?$department->getParent()->getName():'';
                            $dataTemp[] = $elementTemp;
                            break;
                        }
                    case 'control':
                        {
                            $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

                            $urlShow = $this->generateUrl('department_show', ['id' => $department->getId()]);
                            $urlEdit = '';
                            $idDelete = '';

                           if ($isAdmin) {
                                $urlEdit = $this->generateUrl('department_edit', ['id' => $department->getId()]);
                                $idDelete = $department->getId();
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
     * Creates a new department entity
     *
     * @Route("/department/new", methods="GET|POST", name="department_new")
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function new(Request $request): Response
    {
        $department = new Department();
        $form = $this->createForm(DepartmentType::class, $department);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($department);
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.created_successfully'));

            if ($form->getClickedButton() && 'saveAndCreateNew' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('department_new');
            }

            return $this->redirectToRoute('department_index');
        }

        return $this->render('department/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit the department entity
     *
     * @Route("/department/{id}/edit", methods="GET|POST", name="department_edit", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Department $department
     *
     * @return Response
     */
    public function edit(Request $request, Department $department): Response
    {
        $form = $this->createForm(DepartmentType::class, $department);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', $this->translator->trans('item.edited_successfully'));

            if ($form->getClickedButton() && 'saveAndStay' === $form->getClickedButton()->getName()) {

                return $this->redirectToRoute('department_edit', ['id' => $department->getId()]);
            }

            return $this->redirectToRoute('department_index');
        }

        return $this->render('department/edit.html.twig', [
            'form' => $form->createView(),
            'department' => $department
        ]);
    }

    /**
     * Show department
     *
     * @Route("/department/{id}", methods="GET", name="department_show", requirements={"id" = "\d+"})
     *
     * @param Department $department
     *
     * @return Response
     */
    public function show(Department $department): Response
    {
        return $this->render('department/show.html.twig', [
            'department' => $department,
        ]);
    }

    /**
     * Delete department
     *
     * @Route("/department/{id}/delete", methods="DELETE", name="department_delete", requirements={"id" = "\d+"})
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_OGK')")
     *
     * @param Request $request
     * @param Product $department
     *
     * @return JsonResponse
     */
    public function delete(Request $request, Department $department): JsonResponse
    {
        if ($this->isCsrfTokenValid('delete-item', $request->request->get('_token'))) {

            if ($department->getChildrens()->count() > 0) {
                return new JsonResponse(['messageError' => $this->translator->trans('item.deleted_use')]);
            }

            $this->entityManager->remove($department);
            $this->entityManager->flush();
        }

        return new JsonResponse(['messageSuccess' => $this->translator->trans('item.deleted_successfully')]);
    }
}
