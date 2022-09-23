<?php

namespace App\Repository;

use App\Interfaces\ListDatatableInterface;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository implements ListDatatableInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // TO DO For Delete
    public function countProduct()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->join('t0.product_group', 't1')
            ->join('t0.product_type', 't2')
            ->join('t0.product_kind', 't3')
            ->join('t0.product_category', 't4')
            ->join('t0.calculation', 't5')
            ->join('t0.analytic_group', 't6')
            ->join('t0.finance_group', 't7')
            ->where("t0.intype = :intype")
            ->setParameter('intype', Product::INTYPE_PRODUCT)
            ->getQuery()
            ->getSingleScalarResult();
    }

    // TO DO For Delete
    public function getRequiredDTDataProduct($start, $length, $orders, $search, $columns, $otherConditions = null): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder('t0');
        $query->join('t0.product_group', 't1');
        $query->join('t0.product_type', 't2');
        $query->join('t0.product_kind', 't3');
        $query->join('t0.product_category', 't4');
        $query->join('t0.calculation', 't5');
        $query->join('t0.analytic_group', 't6');
        $query->join('t0.finance_group', 't7');


        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');
        $countQuery->join('t0.product_group', 't1');
        $countQuery->join('t0.product_type', 't2');
        $countQuery->join('t0.product_kind', 't3');
        $countQuery->join('t0.product_category', 't4');
        $countQuery->join('t0.calculation', 't5');
        $countQuery->join('t0.analytic_group', 't6');
        $countQuery->join('t0.finance_group', 't7');


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
            $searchQuery .= ' or t0.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.designation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t3.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t4.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t5.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t6.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t7.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= " or concat(t0.name, ' ', t0.designation) LIKE '%$searchItem%'";

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
                    case 'id': {
                            $query->orderBy('t0.id', $order['dir']);
                            break;
                        }
                    case 'name': {
                            $query->orderBy('t0.name', $order['dir']);
                            break;
                        }
                    case 'designation': {
                            $query->orderBy('t0.designation', $order['dir']);
                            break;
                        }

                    case 'groups': {
                            $query->orderBy('t1.name', $order['dir']);
                            $query->addOrderBy('t2.name', $order['dir']);
                            $query->addOrderBy('t3.name', $order['dir']);
                            $query->addOrderBy('t4.name', $order['dir']);
                            $query->addOrderBy('t5.name', $order['dir']);
                            $query->addOrderBy('t6.name', $order['dir']);
                            $query->addOrderBy('t7.name', $order['dir']);
                            break;
                        }
                }
            }
        }

        $query->andWhere("t0.intype = :intype");
        $query->setParameter('intype', Product::INTYPE_PRODUCT);

        $countQuery->andWhere("t0.intype = :intype");
        $countQuery->setParameter('intype', Product::INTYPE_PRODUCT);

        // Execute
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }


    public function countSpecificationSection()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where("t0.intype = :intype")
            ->setParameter('intype', Product::INTYPE_SPECIFICATION_SECTION)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTDataSpecificationSection($start, $length, $orders, $search, $columns, $otherConditions = null): array
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
            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);

        // Order
        $query->orderBy('t0.position', 'ASC');
        foreach ($orders as $key => $order) {
            // $order['name'] is the name of the order column as sent by the JS
            if ($order['name'] !== '') {
                $orderColumn = null;

                switch ($order['name']) {
                    case 'name': {
                            $query->orderBy('t0.name', $order['dir']);
                            break;
                        }
                }
            }
        }

        $query->andWhere("t0.intype = :intype");
        $query->setParameter('intype', Product::INTYPE_SPECIFICATION_SECTION);

        $countQuery->andWhere("t0.intype = :intype");
        $countQuery->setParameter('intype', Product::INTYPE_SPECIFICATION_SECTION);

        // Execute
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function countMaterial()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->join('t0.product_group', 't1')
            ->join('t0.product_type', 't2')
            ->join('t0.product_kind', 't3')
            ->join('t0.product_category', 't4')
            ->join('t0.calculation', 't5')
            ->join('t0.analytic_group', 't6')
            ->join('t0.finance_group', 't7')
            ->where("t0.intype = :intype")
            ->setParameter('intype', Product::INTYPE_MATERIAL)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTDataMaterial($start, $length, $orders, $search, $columns, $otherConditions = null): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder('t0');
        $query->join('t0.product_group', 't1');
        $query->join('t0.product_type', 't2');
        $query->join('t0.product_kind', 't3');
        $query->join('t0.product_category', 't4');
        $query->join('t0.calculation', 't5');
        $query->join('t0.analytic_group', 't6');
        $query->join('t0.finance_group', 't7');

        // Create Count Query
        $countQuery = $this->createQueryBuilder('t0');
        $countQuery->select('COUNT(t0)');
        $countQuery->join('t0.product_group', 't1');
        $countQuery->join('t0.product_type', 't2');
        $countQuery->join('t0.product_kind', 't3');
        $countQuery->join('t0.product_category', 't4');
        $countQuery->join('t0.calculation', 't5');
        $countQuery->join('t0.analytic_group', 't6');
        $countQuery->join('t0.finance_group', 't7');

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
            $searchQuery .= ' or t0.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t3.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t4.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t5.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t6.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t7.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= " or concat(t0.name, ' ', t0.designation) LIKE '%$searchItem%'";

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }

        // Limit
        $query->setFirstResult($start)->setMaxResults($length);

        // Order
        $query->orderBy('t0.position', 'ASC');
        foreach ($orders as $key => $order) {
            // $order['name'] is the name of the order column as sent by the JS
            if ($order['name'] !== '') {
                $orderColumn = null;

                switch ($order['name']) {
                    case 'id': {
                            $query->orderBy('t0.id', $order['dir']);
                            break;
                        }
                    case 'name': {
                            $query->orderBy('t0.name', $order['dir']);
                            break;
                        }

                    case 'groups': {
                            $query->orderBy('t1.name', $order['dir']);
                            $query->addOrderBy('t2.name', $order['dir']);
                            $query->addOrderBy('t3.name', $order['dir']);
                            $query->addOrderBy('t4.name', $order['dir']);
                            break;
                        }
                }
            }
        }

        $query->andWhere("t0.intype = :intype");
        $query->setParameter('intype', Product::INTYPE_MATERIAL);

        $countQuery->andWhere("t0.intype = :intype");
        $countQuery->setParameter('intype', Product::INTYPE_MATERIAL);

        // Execute
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function getRequiredSelectProductData($kwd, $page, $limit, $offset)
    {

        $query = $this
            ->createQueryBuilder('p')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_PRODUCT)
            ->orderBy('p.name', 'ASC')
            ->addOrderBy('p.designation', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        // Create Count Query
        $countQuery = $this->createQueryBuilder('p');
        $countQuery
            ->select('COUNT(p)')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_PRODUCT);


        if ($kwd !== '') {
            // $searchItem is what we are looking for
            $searchItem = $kwd;
            $searchQuery = 'p.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or p.designation LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }


        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();


        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function getRequiredSelectMaterialData($kwd, $page, $limit, $offset)
    {

        $query = $this
            ->createQueryBuilder('p')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_MATERIAL)
            ->orderBy('p.name', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        // Create Count Query
        $countQuery = $this->createQueryBuilder('p');
        $countQuery
            ->select('COUNT(p)')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_MATERIAL);


        if ($kwd !== '') {
            // $searchItem is what we are looking for
            $searchItem = $kwd;
            $searchQuery = 'p.name LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }


        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();


        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function getRequiredSelectDocumentData($kwd, $page, $limit, $offset)
    {

        $query = $this
            ->createQueryBuilder('p')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_DOCUMENT)
            ->orderBy('p.name', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        // Create Count Query
        $countQuery = $this->createQueryBuilder('p');
        $countQuery
            ->select('COUNT(p)')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_DOCUMENT);


        if ($kwd !== '') {
            // $searchItem is what we are looking for
            $searchItem = $kwd;
            $searchQuery = 'p.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or p.designation LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }


        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();


        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function getRequiredSelectSectionData($kwd, $page, $limit, $offset)
    {

        $query = $this
            ->createQueryBuilder('p')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_SPECIFICATION_SECTION)
            ->orderBy('p.name', 'ASC')
            ->addOrderBy('p.designation', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        // Create Count Query
        $countQuery = $this->createQueryBuilder('p');
        $countQuery
            ->select('COUNT(p)')
            ->where("p.intype = :intype")
            ->setParameter('intype', Product::INTYPE_SPECIFICATION_SECTION);


        if ($kwd !== '') {
            // $searchItem is what we are looking for
            $searchItem = $kwd;
            $searchQuery = 'p.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or p.designation LIKE \'%' . $searchItem . '%\'';

            $query->andWhere($searchQuery);
            $countQuery->andWhere($searchQuery);
        }


        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();


        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function countDocument()
    {
        return $this
            ->createQueryBuilder('t0')
            ->select("count(t0.id)")
            ->where("t0.intype = :intype")
            ->setParameter('intype', Product::INTYPE_DOCUMENT)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRequiredDTDataDocument($start, $length, $orders, $search, $columns, $otherConditions = null): array
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
            $searchQuery .= ' or t0.designation LIKE \'%' . $searchItem . '%\'';

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
                    case 'name': {
                            $query->orderBy('t0.name', $order['dir']);
                            break;
                        }
                    case 'designation': {
                            $query->orderBy('t0.designation', $order['dir']);
                            break;
                        }
                }
            }
        }

        $query->andWhere("t0.intype = :intype");
        $query->setParameter('intype', Product::INTYPE_DOCUMENT);

        $countQuery->andWhere("t0.intype = :intype");
        $countQuery->setParameter('intype', Product::INTYPE_DOCUMENT);

        // Execute
        $results = $query->getQuery()->getResult();
        $countResult = $countQuery->getQuery()->getSingleScalarResult();

        return [
            "results" => $results,
            "countResult" => $countResult
        ];
    }

    public function findForSelectProduct($id = null, $intype = Product::INTYPE_PRODUCT)
    {
        $query = $this->createQueryBuilder('p');

        if ($id) {
            $query
                ->where("p.id = :id")
                ->setParameter('id', $id);
        } else {
            $query
                ->where("p.intype = :intype")
                ->setParameter('intype', $intype)
                ->orderBy('p.name', 'ASC')
                ->addOrderBy('p.designation', 'ASC')
                ->setMaxResults(1);
        }

        return $query;
    }

    public function findForMultiSelectProduct($ids = null, $intype = Product::INTYPE_PRODUCT)
    {
        $query = $this->createQueryBuilder('p');

        if ($ids) {
            $query
                ->where("p.id in (:ids)")
                ->setParameter('ids', $ids);
        } else {
            $query
                ->where("p.intype = :intype")
                ->setParameter('intype', $intype)
                ->orderBy('p.name', 'ASC')
                ->addOrderBy('p.designation', 'ASC')
                ->setMaxResults(1);
        }

        return $query;
    }


    public function findForExcel($id)
    {
        return $this
            ->createQueryBuilder('p')
            ->where("p.type_avt = :type_avt")
            ->andWhere("p.id_avt = :id_avt")
            ->setParameter('type_avt', 'product')
            ->setParameter('id_avt', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findDetailForExcel($id)
    {
        return $this
            ->createQueryBuilder('p')
            ->where("p.type_avt = :type_avt")
            ->andWhere("p.id_avt = :id_avt")
            ->setParameter('type_avt', 'detail')
            ->setParameter('id_avt', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findMaterialForExcel($id)
    {
        return $this
            ->createQueryBuilder('p')
            ->where("p.type_avt = :type_avt")
            ->andWhere("p.id_avt = :id_avt")
            ->setParameter('type_avt', 'material')
            ->setParameter('id_avt', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findProductForPDO($id)
    {
        return $this
            ->createQueryBuilder('p')
            ->andWhere("p.id_pdo = :id_pdo")
            ->setParameter('id_pdo', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getCountNullProductsForGroup($groups): int
    {
        return $this
            ->createQueryBuilder('t0')
            ->select('count(t0.id)')
            ->where('t0.' . $groups . ' = 1 or t0.' . $groups . ' IS NULL')
            ->andWhere("t0.intype = :intype")
            ->setParameter('intype', Product::INTYPE_PRODUCT)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getCountNullMaterialsForGroup($groups): int
    {
        return $this
            ->createQueryBuilder('t0')
            ->select('count(t0.id)')
            ->where('t0.' . $groups . ' = 1 or t0.' . $groups . ' IS NULL')
            ->andWhere("t0.intype = :intype")
            ->setParameter('intype', Product::INTYPE_MATERIAL)
            ->getQuery()
            ->getSingleScalarResult();
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
            ->leftjoin('t0.product_group', 't1')
            ->leftjoin('t0.product_type', 't2')
            ->leftjoin('t0.product_kind', 't3')
            ->leftjoin('t0.product_category', 't4')
            ->leftjoin('t0.calculation', 't5')
            ->leftjoin('t0.analytic_group', 't6')
            ->leftjoin('t0.finance_group', 't7')
            ->where("t0.intype IN (:intypes)")
            ->setParameter('intypes', [Product::INTYPE_PRODUCT, Product::INTYPE_MATERIAL, Product::INTYPE_DOCUMENT])
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
    public function getListForDataTable($start, $length, $orders, $search, $idDoc = null): array
    {
        // Create Main Query
        $query = $this->createQueryBuilder("t0");
        $query->select("t0.id, t0.designation, t0.name, t0.intype, t1.name as product_group_name, t2.name as product_type_name, t3.name as product_kind_name, t4.name as product_category_name, t5.name as product_calculation_name, t6.name as product_analytic_group_name, t7.name as product_finance_group_name,
                       t1.id as product_group_id, t2.id as product_type_id, t3.id as product_kind_id, t4.id as product_category_id, t5.id as product_calculation_id, t6.id as product_analytic_group_id, t7.id as product_finance_group_id");

        // Create Count Query
        $countQuery = $this->createQueryBuilder("t0");
        $countQuery->select("COUNT(t0)");

        // Join
        $query->leftjoin('t0.product_group', 't1');
        $query->leftjoin('t0.product_type', 't2');
        $query->leftjoin('t0.product_kind', 't3');
        $query->leftjoin('t0.product_category', 't4');
        $query->leftjoin('t0.calculation', 't5');
        $query->leftjoin('t0.analytic_group', 't6');
        $query->leftjoin('t0.finance_group', 't7');

        $countQuery->leftjoin('t0.product_group', 't1');
        $countQuery->leftjoin('t0.product_type', 't2');
        $countQuery->leftjoin('t0.product_kind', 't3');
        $countQuery->leftjoin('t0.product_category', 't4');
        $countQuery->leftjoin('t0.calculation', 't5');
        $countQuery->leftjoin('t0.analytic_group', 't6');
        $countQuery->leftjoin('t0.finance_group', 't7');

        // Fields Search
        if ($search['value'] !== '') {
            // $searchItem is what we are looking for
            $searchItem = $search['value'];
            $searchQuery = 't0.id LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t0.designation LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t1.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t2.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t3.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t4.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t5.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t6.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= ' or t7.name LIKE \'%' . $searchItem . '%\'';
            $searchQuery .= " or concat(t0.name, ' ', t0.designation) LIKE '%$searchItem%'";

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
                    case 'id': {
                            $query->orderBy('t0.id', $order['dir']);
                            break;
                        }
                    case 'name': {
                            $query->orderBy('t0.name', $order['dir']);
                            break;
                        }
                    case 'designation': {
                            $query->orderBy('t0.designation', $order['dir']);
                            break;
                        }

                    case 'groups': {
                            $query->orderBy('t1.name', $order['dir']);
                            $query->addOrderBy('t2.name', $order['dir']);
                            $query->addOrderBy('t3.name', $order['dir']);
                            $query->addOrderBy('t4.name', $order['dir']);
                            $query->addOrderBy('t5.name', $order['dir']);
                            $query->addOrderBy('t6.name', $order['dir']);
                            $query->addOrderBy('t7.name', $order['dir']);
                            break;
                        }
                }
            }
        }

        // Execute
        $query->andWhere("t0.intype IN (:intypes)");
        $query->setParameter('intypes', [Product::INTYPE_PRODUCT, Product::INTYPE_MATERIAL, Product::INTYPE_DOCUMENT]);

        $countQuery->andWhere("t0.intype IN (:intypes)");
        $countQuery->setParameter('intypes', [Product::INTYPE_PRODUCT, Product::INTYPE_MATERIAL, Product::INTYPE_DOCUMENT]);

        $listObjects = $query->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        $listCount = $countQuery->getQuery()->getSingleScalarResult();

        return [
            'listObjects' => $listObjects,
            'listCount' => $listCount,
            'countRecords' => $this->getCountRecords()
        ];
    }
}
