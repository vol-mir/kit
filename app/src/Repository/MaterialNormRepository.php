<?php

namespace App\Repository;

use App\Entity\MaterialNorm;
use App\Entity\NormDocument;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MaterialNorm|null find($id, $lockMode = null, $lockVersion = null)
 * @method MaterialNorm|null findOneBy(array $criteria, array $orderBy = null)
 * @method MaterialNorm[]    findAll()
 * @method MaterialNorm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterialNormRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaterialNorm::class);
    }

    // Get the total number of elements
    public function countElements(int $normDocumentId = null)
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where('t0.norm_document = :normDocumentId')
            ->join('t0.material', 't1')
            ->setParameter('normDocumentId', $normDocumentId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTData($arrParametrs, int $normDocumentId = null): array
    {
        list($start, $length, $orders, $search, $columns) = $arrParametrs;

        // Create Main Query
        $query = $this->createQueryBuilder('t0');

        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');

        $query->join('t0.material', 't1');
        $countQuery->join('t0.material', 't1');

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
        $query->andWhere('t0.norm_document = :normDocumentId');
        $query->setParameter('normDocumentId', $normDocumentId);

        $countQuery->andWhere('t0.norm_document = :normDocumentId');
        $countQuery->setParameter('normDocumentId', $normDocumentId);

        //
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            $columns,
            $results,
            $countResult,
            $this->countElements($normDocumentId)
        ];
    }

    public function getMaxIndexNumber(int $normDocumentId = null): int
    {
        $maxIndexNumber = (int)$this
            ->createQueryBuilder('t0')
            ->select("max(t0.index_number)")
            ->where('t0.norm_document = :normDocumentId')
            ->setParameter('normDocumentId', $normDocumentId)
            ->getQuery()
            ->getSingleScalarResult();
        return $maxIndexNumber;
    }

    public function getMaterialNormHalfDown(NormDocument $normDocument, MaterialNorm $materialNorm)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.norm_document = :normDocumentId')
            ->andWhere('t0.index_number > :materialNormIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('normDocumentId', $normDocument->getId())
            ->setParameter('materialNormIndexNumber', $materialNorm->getIndexNumber())
            ->getQuery()
            ->getResult();
    }

    public function getMaterialNormDocumentReplacement(int $normDocumentId = null)
    {
        return $this
            ->createQueryBuilder('t0')
            ->join('t0.material', 't1')
            ->where('t0.norm_document = :normDocumentId')
            ->andWhere("t1.intype IN (:ids)")
            ->andWhere("t0.main_replacement = :mainReplacement")
            ->setParameter('ids', [Product::INTYPE_MATERIAL])
            ->setParameter('mainReplacement', true)
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('normDocumentId', $normDocumentId)
            ->getQuery()
            ->getResult();
    }

    public function getMaterialNormUp(NormDocument $normDocument, MaterialNorm $materialNorm)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.norm_document = :normDocumentId')
            ->andWhere('t0.index_number < :materialNormIndexNumber')
            ->orderBy('t0.index_number', 'DESC')
            ->setParameter('normDocumentId', $normDocument->getId())
            ->setParameter('materialNormIndexNumber', $materialNorm->getIndexNumber())
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getMaterialNormDown(NormDocument $normDocument, MaterialNorm $materialNorm)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.norm_document = :normDocumentId')
            ->andWhere('t0.index_number > :materialNormIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('normDocumentId', $normDocument->getId())
            ->setParameter('materialNormIndexNumber', $materialNorm->getIndexNumber())
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getMaterialNormHalfDownWithout(NormDocument $normDocument, MaterialNorm $materialNorm, int $newIndexNumber)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.norm_document = :normDocumentId')
            ->andWhere('t0.index_number <> :withoutIndexNumber')
            ->andWhere('t0.index_number >= :newIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('normDocumentId', $normDocument->getId())
            ->setParameter('withoutIndexNumber', $materialNorm->getIndexNumber())
            ->setParameter('newIndexNumber', $newIndexNumber)
            ->getQuery()
            ->getResult();
    }

    public function getMaterialNormHalfUpWithout(NormDocument $normDocument, MaterialNorm $materialNorm, int $newIndexNumber)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.norm_document = :normDocumentId')
            ->andWhere('t0.index_number <> :withoutIndexNumber')
            ->andWhere('t0.index_number <= :newIndexNumber')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('normDocumentId', $normDocument->getId())
            ->setParameter('withoutIndexNumber', $materialNorm->getIndexNumber())
            ->setParameter('newIndexNumber', $newIndexNumber)
            ->getQuery()
            ->getResult();
    }

    public function getMaterialNorms(NormDocument $normDocument)
    {
        return $this
            ->createQueryBuilder('t0')
            ->where('t0.norm_document = :normDocumentId')
            ->orderBy('t0.index_number', 'ASC')
            ->setParameter('normDocumentId', $normDocument->getId())
            ->getQuery()
            ->getResult();
    }


    public function findMaterialNormForExcel($normDocument, $material)
    {
        return $this
            ->createQueryBuilder('p')
            ->where("p.material = :material")
            ->andWhere("p.norm_document = :normDocument")
            ->setParameter('material', $material)
            ->setParameter('normDocument', $normDocument)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function getActualNormMaterials($productId, $date, $status = 3, $renditionId = null)
    {

        $query = $this
            ->createQueryBuilder('t0')
            ->select('MAX(t1.date_document)')
            ->join('t0.norm_document', 't1')
            ->where('t1.product = :productId')
            ->andWhere('t1.date_document <= :date')
            ->andWhere('t1.status = :status')
            ->setParameter('productId', $productId)
            ->setParameter('date', $date)
            ->setParameter('status', $status);

        if ($renditionId) {
            $query
                ->andWhere('t1.rendition = :renditionId')
                ->setParameter('renditionId', $renditionId);
        }

        $query->orderBy('t1.date_document', 'desc')->setMaxResults(1);

        $dateMax = $query->getQuery()->getResult();

        $query = $this
            ->createQueryBuilder('t0')
            ->join('t0.norm_document', 't1')
            ->where('t1.product = :productId')
            ->andWhere('t1.date_document = :date')
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
