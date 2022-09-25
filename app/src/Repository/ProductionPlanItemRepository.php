<?php

namespace App\Repository;

use App\Interfaces\ListDatatableInterface;
use App\Entity\ProductionPlanItem;
use App\Entity\ProductionPlan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductionPlanItem>
 *
 * @method ProductionPlanItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductionPlanItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductionPlanItem[]    findAll()
 * @method ProductionPlanItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductionPlanItemRepository extends ServiceEntityRepository implements ListDatatableInterface
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
     * @param  int|null $idDoc
     * @return array
     */
    public function getListForDataTable($start, $length, $orders, $search, $columns, $idDoc = null): array
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

            $searchQuery .= ' or t1.designation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.name LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t3.name LIKE \'%' . $searchItem . '%\'';


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

                    case "designation":
                        $query->orderBy("t1.designation", $order["dir"]);
                        break;
                    case "rendition":
                        $query->orderBy("t2.name", $order["dir"]);
                        break;
                    case "unit":
                        $query->orderBy("t3.name", $order["dir"]);
                        break;
                }
            }
        }

        // Execute
        $query->andWhere('t0.production_plan = :productionPlanId');
        $query->setParameter('productionPlanId', $idDoc);

        $countQuery->andWhere('t0.production_plan = :productionPlanId');
        $countQuery->setParameter('productionPlanId', $idDoc);

        $listObjects = $query->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        $listCount = $countQuery->getQuery()->getSingleScalarResult();

        return [
            'listObjects' => $listObjects,
            'listCount' => $listCount,
            'countRecords' => $this->getCountRecords()
        ];
    }

    public function getMaxIndexNumber(int $productionPlanId = null): int
    {
        $maxIndexNumber = (int)$this
            ->createQueryBuilder('t0')
            ->select("max(t0.index_number)")
            ->where('t0.production_plan = :productionPlan')
            ->setParameter('productionPlan', $productionPlanId)
            ->getQuery()
            ->getSingleScalarResult();
        return $maxIndexNumber;
    }

    public function getProductionPlanItemHalfDown(ProductionPlan $productionPlan, ProductionPlanItem $productionPlanItem)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.production_plan = :productionPlantId')
            ->andWhere('t0.index_number > :productionPlanItemIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('productionPlantId', $productionPlan->getId())
            ->setParameter('productionPlanItemIndexNumber', $productionPlanItem->getIndexNumber())
            ->getQuery()
            ->getResult();
    }
}
