<?php

namespace App\Repository;

use App\Entity\MaterialNormReplacement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MaterialNormReplacement|null find($id, $lockMode = null, $lockVersion = null)
 * @method MaterialNormReplacement|null findOneBy(array $criteria, array $orderBy = null)
 * @method MaterialNormReplacement[]    findAll()
 * @method MaterialNormReplacement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterialNormReplacementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaterialNormReplacement::class);
    }

    public function getListMaterialNormReplacement(int $materialNormMainId = null, int $materialNormReplacementId = null)
    {
        $countResult = $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.material_norm_main = :materialNormMainId')
            ->orWhere('t0.material_norm_replacement = :materialNormReplacementId')
            ->setParameter('materialNormMainId', $materialNormMainId)
            ->setParameter('materialNormReplacementId', $materialNormReplacementId)
            ->getQuery()
            ->getSingleScalarResult();

        $results = $this
            ->createQueryBuilder('t0')
            ->where('t0.material_norm_main = :materialNormMainId')
            ->orWhere('t0.material_norm_replacement = :materialNormReplacementId')
            ->orderBy('t0.material_norm_main', 'ASC')
            ->orderBy('t0.material_norm_replacement', 'ASC')
            ->setParameter('materialNormMainId', $materialNormMainId)
            ->setParameter('materialNormReplacementId', $materialNormReplacementId)
            ->getQuery()
            ->getResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    // Get the total number of elements
    public function countMaterialNormMainReplacement(int $materialNormMainId = null)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.material_norm_main = :materialNormMainId')
            ->setParameter('materialNormMainId', $materialNormMainId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTData($arrParametrs, int $materialNormMainId = null, int $materialNormReplacementId = null): array
    {
        list($start, $length, $orders, $search, $columns) = $arrParametrs;

        // Create Main Query
        $query = $this->createQueryBuilder('t0');

        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');

        $query->join('t0.material_norm_replacement', 't1');
        $countQuery->join('t0.material_norm_replacement', 't1');

        // Fields Search
        if ($search['value'] !== '') {
            // $searchItem is what we are looking for
            $searchItem = $search['value'];
            // $searchQuery = 't1.name LIKE \'%' . $searchItem . '%\'';
            // $searchQuery .= ' or t1.designation LIKE \'%' . $searchItem . '%\'';

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


        // $query->orderBy('t0.index_number', 'ASC');

        // Execute
        //
        $query->andWhere('t0.material_norm_main = :materialNormMainId or t0.material_norm_replacement = :materialNormReplacementId');
        $query->setParameter('materialNormMainId', $materialNormMainId);
        $query->setParameter('materialNormReplacementId', $materialNormReplacementId);

        $countQuery->andWhere('t0.material_norm_main = :materialNormMainId or t0.material_norm_replacement = :materialNormReplacementId');
        $countQuery->setParameter('materialNormMainId', $materialNormMainId);
        $countQuery->setParameter('materialNormReplacementId', $materialNormReplacementId);

        //
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            $columns,
            $results,
            $countResult,
            $this->countMaterialNormMainReplacement($materialNormMainId)
        ];
    }
}
