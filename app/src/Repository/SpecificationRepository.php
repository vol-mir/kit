<?php

namespace App\Repository;

use App\Entity\Specification;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Specification|null find($id, $lockMode = null, $lockVersion = null)
 * @method Specification|null findOneBy(array $criteria, array $orderBy = null)
 * @method Specification[]    findAll()
 * @method Specification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpecificationRepository extends ServiceEntityRepository
{


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Specification::class);
    }

    // Get the total number of elements
    public function countSpecification()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->join('t0.product', 't1')
            ->join('t0.rendition', 't2')
            ->join('t0.user', 't3')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions = null): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder('t0');

        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');

        $query->join('t0.product', 't1');
        $query->join('t0.rendition', 't2');
        $query->join('t0.user', 't3');
        $countQuery->join('t0.product', 't1');
        $countQuery->join('t0.rendition', 't2');
        $countQuery->join('t0.user', 't3');

        // Other conditions than the ones sent by the Ajax call ?
        if ($otherConditions === null) {
            // No
            // However, add a "always true" condition to keep an uniform treatment in all cases
            $query->where("1=1");
            $countQuery->where("1=1");
        } else {
            // Add condition
            //$query->where($otherConditions);
            //$countQuery->where($otherConditions);

            $query->andWhere("t0.id IN (:idErrorSpecifications)");
            $query->setParameter('idErrorSpecifications', $otherConditions);

            $countQuery->andWhere("t0.id IN (:idErrorSpecifications)");
            $countQuery->setParameter('idErrorSpecifications', $otherConditions);
        }

        // Fields Search
        if ($search['value'] !== '') {
            // $searchItem is what we are looking for
            $searchItem = $search['value'];
            $searchQuery = 't0.id LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.designation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t3.first_name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t3.last_name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t3.middle_name LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= " or concat(t1.name, ' ', t1.designation) LIKE '%$searchItem%'";


            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);

        // Order
        foreach ($orders as $key => $order) {
            // $order['name'] is the name of the order column as sent by the JS
            if ($order['name'] !== '') {
                $orderColumn = null;

                switch ($order['name']) {
                    case 'id_specification':
                        {
                            $query->orderBy('t0.id', $order['dir']);
                            break;
                        }
                    case 'date_specification':
                        {
                            $query->orderBy('t0.date_specification', $order['dir']);
                            break;
                        }
                    case 'product_name':
                        {
                            $query->orderBy('t1.name', $order['dir']);
                            break;
                        }
                    case 'product_designation':
                        {
                            $query->orderBy('t1.designation', $order['dir']);
                            break;
                        }
                    case 'rendition':
                        {
                            $query->orderBy('t2.name', $order['dir']);
                            break;
                        }

                    case 'user':
                        {
                            $query->orderBy('t3.last_name', $order['dir']);
                            $query->addOrderBy('t3.first_name', $order['dir']);
                            $query->addOrderBy('t3.middle_name', $order['dir']);
                            break;
                        }
                }
            }
        }

        // Execute
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    // Get the total number of elements
    public function lastSpecification($productId)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("t0.id")
            ->where('t0.product = :productId')
            ->setParameter('productId', $productId)
            ->orderBy('t0.date_specification', 'desc')
            ->getQuery()
            ->getArrayResult();
    }

    // Get the total number of elements
    public function getActualSpecification($productId, $date, $status = 3, $renditionId = null)
    {
        $query = $this
            ->createQueryBuilder('t0')
            ->where('t0.product = :productId')
            ->andWhere('t0.date_specification < :date')
            ->andWhere('t0.status = :status')
            ->setParameter('productId', $productId)
            ->setParameter('date', $date)
            ->setParameter('status', $status);

        if ($renditionId) {
            $query
                ->andWhere('t0.rendition = :renditionId')
                ->setParameter('renditionId', $renditionId);
        }

        $query->orderBy('t0.date_specification', 'desc')
            ->setMaxResults(1);

        $result = $query->getQuery()->getOneOrNullResult();

        return $result;
    }


    public function findSpecificationForExcel($id)
    {
        return $this
            ->createQueryBuilder('p')
            ->andWhere("p.id_avt = :id_avt")
            ->setParameter('id_avt', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getProductRenditions($productId, $date, $status = 3)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select('t2.id, t2.name')
            ->join('t0.rendition', 't2')
            ->where('t0.product = :productId')
            ->andWhere('t0.date_specification < :date')
            ->andWhere('t0.status = :status')
            ->setParameter('productId', $productId)
            ->setParameter('date', $date)
            ->setParameter('status', $status)
            ->groupBy('t2.id, t2.name')
            ->getQuery()
            ->getResult();
    }

}
