<?php

namespace App\Repository;

use App\Entity\StructureReplacement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StructureReplacement|null find($id, $lockMode = null, $lockVersion = null)
 * @method StructureReplacement|null findOneBy(array $criteria, array $orderBy = null)
 * @method StructureReplacement[]    findAll()
 * @method StructureReplacement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StructureReplacementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StructureReplacement::class);
    }

    public function countStructureMainReplacement(int $structureMainId)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.structure_main = :structureMainId')
            ->setParameter('structureMainId', $structureMainId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getListStructureReplacement(int $structureMainId = null, int $structureReplacementId = null)
    {
        $countResult = $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.structure_main = :structureMainId')
            ->orWhere('t0.structure_replacement = :structureReplacementId')
            ->setParameter('structureMainId', $structureMainId)
            ->setParameter('structureReplacementId', $structureReplacementId)
            ->getQuery()
            ->getSingleScalarResult();

        $results = $this
            ->createQueryBuilder('t0')
            ->where('t0.structure_main = :structureMainId')
            ->orWhere('t0.structure_replacement = :structureReplacementId')
            ->orderBy('t0.structure_main', 'ASC')
            ->orderBy('t0.structure_replacement', 'ASC')
            ->setParameter('structureMainId', $structureMainId)
            ->setParameter('structureReplacementId', $structureReplacementId)
            ->getQuery()
            ->getResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    // Get the total number of elements
    public function countStructureReplacement(int $structureMainId = null, int $structureReplacementId = null)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.structure_main = :structureMainId')
            ->orWhere('t0.structure_replacement = :structureReplacementId')
            ->join('t0.structure_replacement', 't1')
            ->setParameter('structureMainId', $structureMainId)
            ->setParameter('structureReplacementId', $structureReplacementId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions = null, int $structureMainId = null, int $structureReplacementId = null): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder('t0');

        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');

        $query->join('t0.structure_replacement', 't1');
        $countQuery->join('t0.structure_replacement', 't1');

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
            //$searchQuery = 't2.name LIKE \'%' . $searchItem . '%\'';
            //$searchQuery .= ' or t2.designation LIKE \'%' . $searchItem . '%\'';

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

        // Execute
        //
        $query->andWhere('t0.structure_main = :structureMainId or t0.structure_replacement = :structureReplacementId');
        $query->setParameter('structureMainId', $structureMainId);
        $query->setParameter('structureReplacementId', $structureReplacementId);

        $countQuery->andWhere('t0.structure_main = :structureMainId or t0.structure_replacement = :structureReplacementId');
        $countQuery->setParameter('structureMainId', $structureMainId);
        $countQuery->setParameter('structureReplacementId', $structureReplacementId);


        //
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }
}
