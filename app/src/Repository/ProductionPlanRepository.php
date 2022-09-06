<?php

namespace App\Repository;

use App\Interfaces\ListDatatableInterface;
use App\Entity\ProductionPlan;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method ProductionPlan|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductionPlan|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductionPlan[]    findAll()
 * @method ProductionPlan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductionPlanRepository extends ServiceEntityRepository implements ListDatatableInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductionPlan::class);
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
     * @param  int|null $idDoc
     * @return array
     */
    public function getListForDataTable($start, $length, $orders, $search, $idDoc = null): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder("t0");
        $query->select("t0.id, t0.id_erp, t0.date_erp, t0.account_type, t0.date_begin_erp, t0.date_end_erp, t1.last_name");

        // Create Count Query
        $countQuery = $this->createQueryBuilder("t0");
        $countQuery->select("COUNT(t0)");

        // Join
        $query->join('t0.user', 't1');
        $countQuery->join('t0.user', 't1');

        // Fields Search
        if ($search['value'] !== '') {
            $searchItem = $search['value'];
            $searchQuery = 't0.id LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.id_erp LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);

        // Order
        foreach ($orders as $key => $order) {
            if ($order["name"] !== "") {
                switch ($order["name"]) {
                    case "id_document":
                        $query->orderBy("t0.id", $order["dir"]);
                        break;
                    case "id_erp":
                        $query->orderBy("t0.id_erp", $order["dir"]);
                        break;

                    case "date_erp":
                        $query->orderBy("t0.date_erp", $order["dir"]);
                        break;
                    case "date_begin_erp":
                        $query->orderBy("t0.date_begin_erp", $order["dir"]);
                        break;

                    case "date_end_erp":
                        $query->orderBy("t0.date_end_erp", $order["dir"]);
                        break;
                    case "account_type":
                        $query->orderBy("t0.account_type", $order["dir"]);
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

    public function getRequiredSelectProductionPlansData($kwd, $page, $limit, $offset)
    {

         $query = $this
            ->createQueryBuilder('p')
            ->orderBy('p.id_erp', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

         // Create Count Query
        $countQuery = $this->createQueryBuilder('p');
        $countQuery->select('COUNT(p)');


        if ($kwd !== '') {
            // $searchItem is what we are looking for
            $searchItem = $kwd;
            $searchQuery = 'p.id_erp LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }


        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();


        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }
}
