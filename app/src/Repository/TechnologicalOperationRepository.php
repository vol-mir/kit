<?php

namespace App\Repository;

use App\Entity\TechnologicalOperation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TechnologicalOperation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TechnologicalOperation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TechnologicalOperation[]    findAll()
 * @method TechnologicalOperation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechnologicalOperationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TechnologicalOperation::class);
    }

    public function countTechnologicalOperation()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
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
            $searchQuery = 't0.name LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t0.id LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.code_operation LIKE \'%' . $searchItem . '%\'';

            $searchQuery .= ' or t0.type_operation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.code_type_operation LIKE \'%' . $searchItem . '%\'';

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
                    case 'id_operation':
                        {
                            $query->orderBy('t0.id', $order['dir']);
                            break;
                        }
                    case 'code_operation':
                        {
                            $query->orderBy('t0.code_operation', $order['dir']);
                            break;
                        }

                    case 'name_operation':
                        {
                            $query->orderBy('t0.name', $order['dir']);
                            break;
                        }
                    case 'type_operation':
                        {
                            $query->orderBy('t0.type_operation', $order['dir']);
                            break;
                        }

                    case 'code_type_operation':
                        {
                            $query->orderBy('t0.code_type_operation', $order['dir']);
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
}
