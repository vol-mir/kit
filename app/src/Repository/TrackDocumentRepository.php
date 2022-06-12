<?php

namespace App\Repository;

use App\Entity\TrackDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrackDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackDocument[]    findAll()
 * @method TrackDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackDocument::class);
    }

    // Get the total number of elements
    public function countTrackDocument()
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
            $query->where($otherConditions);
            $countQuery->where($otherConditions);
        }

        // Fields Search
        if ($search['value'] !== '') {
            // $searchItem is what we are looking for
            $searchItem = $search['value'];
            $searchQuery = 't0.id LIKE \'%' . $searchItem . '%\'';
            $searchQuery = 't1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.designation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t3.first_name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t3.last_name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t3.middle_name LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= " or concat(t1.name, ' ', t1.designation) LIKE '%$searchItem%'";


            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }


        foreach ($columns as $key => $column) {
            if ($column['name'] !== '') {
                switch ($column['name']) {
                    case 'status_document':
                        {
                            $columnSearch = $column['search'];
                            if ($columnSearch['value'] !== '') {
                                $searchQuery = 't0.status LIKE \'%' . $columnSearch['value'] . '%\'';

                                $query->andWhere($searchQuery);
                                $countQuery->andWhere($searchQuery);
                            }
                            break;
                        }
                }
            }

        }

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);

        // Order
        foreach ($orders as $key => $order) {
            // $order['name'] is the name of the order column as sent by the JS
            if ($order['name'] !== '') {
                $orderColumn = null;

                switch ($order['name']) {
                    case 'id_document':
                        {
                            $query->orderBy('t0.id', $order['dir']);
                            break;
                        }
                    case 'date_start':
                        {
                            $query->orderBy('t0.date_start', $order['dir']);
                            break;
                        }
                    case 'date_end':
                        {
                            $query->orderBy('t0.date_end', $order['dir']);
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


    public function findDocumentForPDO($idProduct)
    {
        return $this
            ->createQueryBuilder('p')
            ->andWhere("p.product = :idProduct")
            ->setParameter('idProduct', $idProduct)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getActualTrackDocuments($productId, $date, $status = 3)
    {
        return $this
            ->createQueryBuilder('t0')
            ->join('t0.rendition', 't2')
            ->where('t0.product = :productId')
            ->andWhere('t0.date_start <= :date or t0.date_end is NULL')
            ->andWhere('t0.date_end >= :date or t0.date_end is NULL')
            ->andWhere('t0.status = :status')
            ->setParameter('productId', $productId)
            ->setParameter('date', $date)
            ->setParameter('status', $status)
            ->getQuery()
            ->getResult();
    }

    public function getActualTrackDocument($productId, $date, $renditionId, $status = 3)
    {
        return $this
            ->createQueryBuilder('t0')
            ->join('t0.rendition', 't2')
            ->where('t0.product = :productId')
            ->andWhere('t0.date_start <= :date or t0.date_end is NULL')
            ->andWhere('t0.date_end >= :date or t0.date_end is NULL')
            ->andWhere('t0.status = :status')
            ->andWhere('t2.id = :renditionId')
            ->setParameter('productId', $productId)
            ->setParameter('date', $date)
            ->setParameter('status', $status)
            ->setParameter('renditionId', $renditionId)
            ->orderBy('t0.date_start', 'desc')
            ->addOrderBy('t0.date_end', 'desc')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
    }

}
