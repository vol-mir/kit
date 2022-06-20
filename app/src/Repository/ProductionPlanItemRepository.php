<?php

namespace App\Repository;

use App\Entity\ProductionPlanItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductionPlanItem>
 *
 * @method ProductionPlanItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductionPlanItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductionPlanItem[]    findAll()
 * @method ProductionPlanItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductionPlanItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductionPlanItem::class);
    }

    /**
     * Get count records
     * @return void
     */
    public function getCountRecords()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Get list for DT
     * @param  int $start
     * @param  int $length
     * @param  array $orders
     * @param  array $search
     * @return array
     */
    public function getListForDataTable($start, $length, $orders, $search): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder("t0");
        $query->select("t0.id, t0.index_number, t0.amount, t1.name, t1.designation, t2.name as rendition, t3.name as unit");

        // Create Count Query
        $countQuery = $this->createQueryBuilder("t0");
        $countQuery->select("COUNT(t0)");

        // Join
        $query->join('t0.product', 't1');
        $countQuery->join('t0.product', 't1');
        $query->join('t0.rendition', 't2');
        $countQuery->join('t0.rendition', 't2');

        $query->join('t1.unit', 't3');
        $countQuery->join('t1.unit', 't3');

        // Fields Search
        if ($search['value'] !== '') {
            $searchItem = $search['value'];
            $searchQuery = 't0.id LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.index_number LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.amount LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);

        // Order
        foreach ($orders as $key => $order) {
            if ($order["name"] !== "") {
                switch ($order["name"]) {
                    case "id":
                        $query->orderBy("t0.id", $order["dir"]);
                        break;
                    case "index_number":
                        $query->orderBy("t0.index_number", $order["dir"]);
                        break;
                    case "amount":
                        $query->orderBy("t0.amount", $order["dir"]);
                        break;
                }
            }
        }

        // Execute
        $listObjects = $query->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        $listCount = $countQuery->getQuery()->getSingleScalarResult();

        return [
            'listObjects' => $listObjects,
            'listCount' => $listCount,
            'countRecords' => $this->getCountRecords()
        ];
    }
}
