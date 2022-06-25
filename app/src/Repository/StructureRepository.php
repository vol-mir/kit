<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\Structure;
use App\Entity\Specification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * @method Structure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Structure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Structure[]    findAll()
 * @method Structure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StructureRepository extends ServiceEntityRepository
{
    private $log;

    public function __construct(ManagerRegistry $registry,LoggerInterface $logger)
    {
        parent::__construct($registry, Structure::class);
        $this->log = $logger;

    }

    // Get the total number of elements
    public function countStructure(int $specificationId = null)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.specification = :specificationId')
            ->join('t0.product', 't1')
            ->setParameter('specificationId', $specificationId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTData($start, $length, $orders, $search, $columns, $otherConditions = null, int $specificationId = null): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder('t0');

        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');

        $query->join('t0.product', 't1');
        $countQuery->join('t0.product', 't1');

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
            $searchQuery = 't1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.designation LIKE \'%' . $searchItem . '%\'';

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
        $query->andWhere('t0.specification = :specificationId');
        $query->setParameter('specificationId', $specificationId);

        $countQuery->andWhere('t0.specification = :specificationId');
        $countQuery->setParameter('specificationId', $specificationId);

        //
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function getRequiredDTDataSQL($start, $length, $orders, $search, $columns, $otherConditions = null, int $specificationId = null): array
    {
        $rsm = new ResultSetMapping();

        $rsm->addScalarResult('id', 'id');
        $rsm->addScalarResult('index_number', 'index_number');
        $rsm->addScalarResult('format', 'format');
        $rsm->addScalarResult( 'area', 'area');
        $rsm->addScalarResult( 'position', 'position');
        $rsm->addScalarResult( 'amount', 'amount');
        $rsm->addScalarResult('note', 'note');
        $rsm->addScalarResult('name', 'name');
        $rsm->addScalarResult('designation', 'designation');
        $rsm->addScalarResult('specification_id', 'specification_id');
        $rsm->addScalarResult('type', 'type');

        $rsmCount = new ResultSetMapping();
        $rsmCount->addScalarResult('cnt', 'cnt');

        $str = "SELECT  s0.id,  s0.index_number, s0.specification_id,  s0.content_id,  s0.format,  s0.area,  s0.position,  s0.amount,  s0.note, c0.type, "
            . "c0.name, c0.designation "
            . "FROM structures AS s0 INNER JOIN content AS c0 ON s0.content_id=c0.id  WHERE s0.specification_id=:specificationId ";

        $strCount = "SELECT  count(s0.id) as cnt "
            . "FROM structures AS s0 INNER JOIN content AS c0 ON s0.content_id=c0.id  WHERE s0.specification_id=:specificationId ";

        // Fields Search
        if ($search['value'] !== '') {
            // $searchItem is what we are looking for
            $searchItem = $search['value'];
            $searchQuery = 's0.format LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or s0.area LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or s0.position LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or c0.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or c0.designation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or s0.amount LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or s0.note LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or s0.index_number LIKE \'%' . $searchItem . '%\'';

            $str .= " AND ( " . $searchQuery . ") ";
            $strCount .= " AND ( " . $searchQuery . ") ";
        }

        // Order
        $strOrder = "";
        foreach ($orders as $key => $order) {
            if ($order['name'] !== '') {
                $orderColumn = null;

                switch ($order['name']) {
                    case 'indexNumber':
                        {
                            $strOrder = " ORDER BY s0.index_number " . $order['dir'];
                            break;
                        }
                    case 'format':
                        {
                            $strOrder = " ORDER BY s0.format " . $order['dir'];
                            break;
                        }
                    case 'area':
                        {
                            $strOrder = " ORDER BY s0.area " . $order['dir'];
                            break;
                        }
                    case 'position':
                        {
                            $strOrder = " ORDER BY s0.position " . $order['dir'];
                            break;
                        }
                    case 'name':
                        {
                            $strOrder = " ORDER BY c0.name " . $order['dir'];
                            break;
                        }
                    case 'designation':
                        {
                            $strOrder = " ORDER BY c0.designation " . $order['dir'];
                            break;
                        }
                    case 'amount':
                        {
                            $strOrder = " ORDER BY s0.amount " . $order['dir'];
                            break;
                        }
                    case 'note':
                        {
                            $strOrder = " ORDER BY s0.note " . $order['dir'];
                            break;
                        }

                }
            }
        }

        if ($strOrder) {
            $str .= $strOrder . " ";
        } else {
            $str .= " ORDER BY s0.index_number ASC ";
        }

        //limit
        if ($length !== null) {
            $str .= " LIMIT " . $length . " ";
            $strCount .= " LIMIT " . $length . " ";
        }
        if ($start !== null) {
            $str .= " OFFSET " . $start . " ";
            $strCount .= " OFFSET " . $start . " ";
        }

        // Create Main Query
        $query = $this->getEntityManager()->createNativeQuery($str, $rsm);
        $query->setParameter('specificationId', $specificationId);

        $queryCount = $this->getEntityManager()->createNativeQuery($strCount, $rsmCount);
        $queryCount->setParameter('specificationId', $specificationId);

        // Execute
        $results = $query->getResult();
        $countResult = $queryCount->getSingleScalarResult();


        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function getMaxPosition(int $specificationId = null): int
    {
        $maxPosition = (int)$this
            ->createQueryBuilder('t0')
            ->select("max(t0.position)")
            ->where('t0.specification = :specificationId')
            ->setParameter('specificationId', $specificationId)
            ->getQuery()
            ->getSingleScalarResult();
        return $maxPosition;
    }

    public function getMaxIndexNumber(int $specificationId = null): int
    {
        $maxIndexNumber = (int)$this
            ->createQueryBuilder('t0')
            ->select("max(t0.index_number)")
            ->where('t0.specification = :specificationId')
            ->setParameter('specificationId', $specificationId)
            ->getQuery()
            ->getSingleScalarResult();
        return $maxIndexNumber;
    }

    public function getStructureSpecificationReplacement(int $specificationId = null)
    {
        return $this
            ->createQueryBuilder('t0')
            ->join('t0.product', 't1')
            ->where('t0.specification = :specificationId')
            ->andWhere("t1.intype IN (:ids)")
            ->andWhere("t0.main_replacement = :mainReplacement")
            ->setParameter('ids', [Product::INTYPE_PRODUCT, Product::INTYPE_MATERIAL])
            ->setParameter('mainReplacement', true)
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('specificationId', $specificationId)
            ->getQuery()
            ->getResult();
    }

    public function getStructureUp(Specification $specification, Structure $structure)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.specification = :specificationId')
            ->andWhere('t0.index_number < :structureIndexNumber')
            ->orderBy('t0.index_number', 'DESC')
            ->setParameter('specificationId', $specification->getId())
            ->setParameter('structureIndexNumber', $structure->getIndexNumber())
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getStructureDown(Specification $specification, Structure $structure)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.specification = :specificationId')
            ->andWhere('t0.index_number > :structureIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('specificationId', $specification->getId())
            ->setParameter('structureIndexNumber', $structure->getIndexNumber())
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getStructureHalfDown(Specification $specification, Structure $structure)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.specification = :specificationId')
            ->andWhere('t0.index_number > :structureIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('specificationId', $specification->getId())
            ->setParameter('structureIndexNumber', $structure->getIndexNumber())
            ->getQuery()
            ->getResult();
    }

    public function getStructureHalfDownWithout(Specification $specification, Structure $structure, int $newIndexNumber)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.specification = :specificationId')
            ->andWhere('t0.index_number <> :withoutIndexNumber')
            ->andWhere('t0.index_number >= :newIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('specificationId', $specification->getId())
            ->setParameter('withoutIndexNumber', $structure->getIndexNumber())
            ->setParameter('newIndexNumber', $newIndexNumber)
            ->getQuery()
            ->getResult();
    }

    public function getStructureHalfUpWithout(Specification $specification, Structure $structure, int $newIndexNumber)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.specification = :specificationId')
            ->andWhere('t0.index_number <> :withoutIndexNumber')
            ->andWhere('t0.index_number <= :newIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('specificationId', $specification->getId())
            ->setParameter('withoutIndexNumber', $structure->getIndexNumber())
            ->setParameter('newIndexNumber', $newIndexNumber)
            ->getQuery()
            ->getResult();
    }

    public function getStructures(Specification $specification)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.specification = :specificationId')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('specificationId', $specification->getId())
            ->getQuery()
            ->getResult();
    }


    public function getCountNullStructures(): int
    {
        return $this
            ->createQueryBuilder('t0')
            ->select('count(t0.id)')
            ->join('t0.product', 't1')
            ->where('t0.amount = 0 or t0.amount IS NULL')
            ->andWhere("t1.intype IN (:ids)")
            ->setParameter('ids', [Product::INTYPE_PRODUCT, Product::INTYPE_MATERIAL])
            ->getQuery()
            ->getSingleScalarResult();
    }


    public function getRowsNullStructures()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select('t2.id')
            ->join('t0.product', 't1')
            ->join('t0.specification', 't2')
            ->where('t0.amount = 0 or t0.amount IS NULL')
            ->andWhere("t1.intype IN (:ids)")
            ->setParameter('ids', [Product::INTYPE_PRODUCT, Product::INTYPE_MATERIAL])
            ->groupBy('t2.id')
            ->getQuery()
            ->getArrayResult();
    }



    public function getActualStructure($productId, $date, $status = 3, $renditionId = null)
    {

        $query = $this
            ->createQueryBuilder('t0')
            ->select('MAX(t1.date_specification)')
            ->join('t0.specification', 't1')
            ->where('t1.product = :productId')
            ->andWhere('t1.date_specification <= :date')
            ->andWhere('t1.status = :status')
            ->setParameter('productId', $productId)
            ->setParameter('date', $date)
            ->setParameter('status', $status);

        if ($renditionId) {
            $query
                ->andWhere('t1.rendition = :renditionId')
                ->setParameter('renditionId', $renditionId);
        }

        $query->orderBy('t1.date_specification', 'desc')->setMaxResults(1);

        $dateMax = $query->getQuery()->getResult();

        $query = $this
            ->createQueryBuilder('t0')
            ->join('t0.specification', 't1')
            ->where('t1.product = :productId')
            ->andWhere('t1.date_specification = :date')
            ->andWhere('t1.status = :status')
            ->setParameter('productId', $productId)
            ->setParameter('date', $dateMax)
            ->setParameter('status', $status);

        if ($renditionId) {
            $query
                ->andWhere('t1.rendition = :renditionId')
                ->setParameter('renditionId', $renditionId);
        }

        $result = $query->getQuery()->getResult();

        return $result;
    }
}
