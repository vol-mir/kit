<?php

namespace App\Repository;

use App\Entity\NeedPurchasedProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NeedPurchasedProduct>
 *
 * @method NeedPurchasedProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method NeedPurchasedProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method NeedPurchasedProduct[]    findAll()
 * @method NeedPurchasedProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NeedPurchasedProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NeedPurchasedProduct::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(NeedPurchasedProduct $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(NeedPurchasedProduct $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
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
        $query->select("t0.id, t0.amount_all, t0.balance_buy, t0.balance_manufacture, t0.context, t0.prefix, t0.amount_result, t1.name, t1.designation, t1.id as product_id, t2.name as unit ");

        // Create Count Query
        $countQuery = $this->createQueryBuilder("t0");
        $countQuery->select("COUNT(t0)");

        // Join
        $query->leftjoin('t0.product', 't1');
        $countQuery->leftjoin('t0.product', 't1');

        $query->leftjoin('t1.unit', 't2');
        $countQuery->leftjoin('t1.unit', 't2');

        // Fields Search
        if ($search['value'] !== '') {
            $searchItem = $search['value'];
            $searchQuery = 't1.id LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.designation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.amount_all LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.balance_buy LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.balance_manufacture LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.amount_result LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);

        // Order
        foreach ($orders as $key => $order) {
            if ($order["name"] !== "") {
                switch ($order["name"]) {
                    case "product_id":
                        $query->orderBy("t1.id", $order["dir"]);
                        break;
                    case "designation":
                        $query->orderBy("t1.designation", $order["dir"]);
                        break;
                    case "name":
                        $query->orderBy("t1.name", $order["dir"]);
                        break;
                    case "amount_all":
                        $query->orderBy("t0.amount_all", $order["dir"]);
                        break;
                    case "balance_buy":
                        $query->orderBy("t0.balance_buy", $order["dir"]);
                        break;
                    case "balance_manufacture":
                        $query->orderBy("t0.balance_manufacture", $order["dir"]);
                        break;
                    case "amount_result":
                        $query->orderBy("t0.amount_result", $order["dir"]);
                        break;
                    case "unit":
                        $query->orderBy("t2.name", $order["dir"]);
                        break;
                }
            }
        }

        $countQuery->andWhere('t0.production_plan = :productionPlanId');
        $countQuery->setParameter('productionPlanId', $idDoc);

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
