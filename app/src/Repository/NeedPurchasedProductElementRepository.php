<?php

namespace App\Repository;

use App\Entity\NeedPurchasedProductElement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NeedPurchasedProductElement>
 *
 * @method NeedPurchasedProductElement|null find($id, $lockMode = null, $lockVersion = null)
 * @method NeedPurchasedProductElement|null findOneBy(array $criteria, array $orderBy = null)
 * @method NeedPurchasedProductElement[]    findAll()
 * @method NeedPurchasedProductElement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NeedPurchasedProductElementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NeedPurchasedProductElement::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(NeedPurchasedProductElement $entity, bool $flush = true): void
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
    public function remove(NeedPurchasedProductElement $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return NeedPurchasedProductElement[] Returns an array of NeedPurchasedProductElement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NeedPurchasedProductElement
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
