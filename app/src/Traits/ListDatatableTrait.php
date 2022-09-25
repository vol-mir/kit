<?php

namespace App\Traits;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

trait ListDatatableTrait {

    /**
     * @var EntityManagerInterface|null
     */
    private $entityManager;

    /**
 	 * @required
 	 */
 	public function setEntityManager(EntityManagerInterface $entityManager) {
    	$this->entityManager = $entityManager;
	}

    public function getListDatatable(Request $request, $idDoc = null, $entity): array {

        // Get the parameters from DataTable Ajax Call
        $draw = (int)$request->request->get('draw');
        $start = (int)$request->request->get('start');
        $length = (int)$request->request->get('length');
        $search = (array)$request->request->get('search');
        $orders = (array)$request->request->get('order');
        $columns = (array)$request->request->get('columns');

        // Orders
        foreach ($orders as $key => $order) {
            $orderColumn = $order['column'];
            $orders[$key]['name'] = $columns[$orderColumn]['name'];
        }

        $results = $this->entityManager
            ->getRepository($entity)
            ->getListForDataTable($start, $length, $orders, $search, $columns, $idDoc);

        return [
            'draw' => $draw,
            'recordsTotal' => $results['countRecords'],
            'recordsFiltered' => $results['listCount'],
            'data' => $results['listObjects'],
        ];
    }
}