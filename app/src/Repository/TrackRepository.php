<?php

namespace App\Repository;

use App\Entity\Track;
use App\Entity\TrackDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Track|null find($id, $lockMode = null, $lockVersion = null)
 * @method Track|null findOneBy(array $criteria, array $orderBy = null)
 * @method Track[]    findAll()
 * @method Track[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Track::class);
    }

    // Get the total number of elements
    public function countElements(int $trackDocumentId = null)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.track_document = :trackDocumentId')
            ->join('t0.department', 't1')
            ->join('t0.technological_operation', 't2')
            ->setParameter('trackDocumentId', $trackDocumentId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTData($arrParametrs, int $trackDocumentId = null): array
    {
        list($start, $length, $orders, $search, $columns) = $arrParametrs;

        // Create Main Query
        $query = $this->createQueryBuilder('t0');

        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');

        $query->join('t0.department', 't1');
        $query->join('t0.technological_operation', 't2');

        $countQuery->join('t0.department', 't1');
        $countQuery->join('t0.technological_operation', 't2');

        // Fields Search
        if ($search['value'] !== '') {
            // $searchItem is what we are looking for
            $searchItem = $search['value'];
            $searchQuery = 't1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.number_department LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t0.time_cycle LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.time_processing LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.time_piece LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t2.code_operation LIKE \'%' . $searchItem . '%\'';

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
                    /*case 'date_specification':
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
                        }*/
                }
            }
        }


        $query->orderBy('t0.index_number', 'ASC');

        // Execute
        //
        $query->andWhere('t0.track_document = :trackDocumentId');
        $query->setParameter('trackDocumentId', $trackDocumentId);

        $countQuery->andWhere('t0.track_document = :trackDocumentId');
        $countQuery->setParameter('trackDocumentId', $trackDocumentId);

        //
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            $columns,
            $results,
            $countResult,
            $this->countElements($trackDocumentId)
        ];
    }

    public function getMaxIndexNumber(int $trackDocumentId = null): int
    {
        $maxIndexNumber = (int)$this
            ->createQueryBuilder('t0')
            ->select("max(t0.index_number)")
            ->where('t0.track_document = :trackDocumentId')
            ->setParameter('trackDocumentId', $trackDocumentId)
            ->getQuery()
            ->getSingleScalarResult();
        return $maxIndexNumber;
    }

    public function getTrackHalfDown(TrackDocument $trackDocument, Track $track)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.track_document = :trackDocumentId')
            ->andWhere('t0.index_number > :trackIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('trackDocumentId', $trackDocument->getId())
            ->setParameter('trackIndexNumber', $track->getIndexNumber())
            ->getQuery()
            ->getResult();
    }

    public function getTrackUp(TrackDocument $trackDocument, Track $track)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.track_document = :trackDocumentId')
            ->andWhere('t0.index_number < :trackIndexNumber')
            ->orderBy('t0.index_number', 'DESC')
            ->setParameter('trackDocumentId', $trackDocument->getId())
            ->setParameter('trackIndexNumber', $track->getIndexNumber())
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getTrackDown(TrackDocument $trackDocument, Track $track)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.track_document = :trackDocumentId')
            ->andWhere('t0.index_number > :trackIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('trackDocumentId', $trackDocument->getId())
            ->setParameter('trackIndexNumber', $track->getIndexNumber())
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getTrackHalfDownWithout(TrackDocument $trackDocument, Track $track, int $newIndexNumber)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.track_document = :trackDocumentId')
            ->andWhere('t0.index_number <> :withoutIndexNumber')
            ->andWhere('t0.index_number >= :newIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('trackDocumentId', $trackDocument->getId())
            ->setParameter('withoutIndexNumber', $track->getIndexNumber())
            ->setParameter('newIndexNumber', $newIndexNumber)
            ->getQuery()
            ->getResult();
    }

    public function getTrackHalfUpWithout(TrackDocument $trackDocument, Track $track, int $newIndexNumber)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.track_document = :trackDocumentId')
            ->andWhere('t0.index_number <> :withoutIndexNumber')
            ->andWhere('t0.index_number <= :newIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('trackDocumentId', $trackDocument->getId())
            ->setParameter('withoutIndexNumber', $track->getIndexNumber())
            ->setParameter('newIndexNumber', $newIndexNumber)
            ->getQuery()
            ->getResult();
    }

    public function getTrackPoints(TrackDocument $trackDocument)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select('t1.id, t1.name, t1.number_area')
            ->join('t0.department', 't1')
            ->where('t0.track_document = :trackDocumentId')
            ->setParameter('trackDocumentId', $trackDocument->getId())
            ->orderBy('t0.index_number', 'ASC')
            ->getQuery()
            ->getResult();
    }
//->groupBy('t1.id, t1.name, t1.number_area')
    public function getTracks(TrackDocument $trackDocument)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.track_document = :trackDocumentId')
            ->setParameter('trackDocumentId', $trackDocument->getId())
            ->orderBy('t0.index_number', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
