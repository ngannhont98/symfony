<?php

namespace App\Repository;

use App\Entity\Book2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Book2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book2[]    findAll()
 * @method Book2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Book2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book2::class);
    }

    // /**
    //  * @return Book2[] Returns an array of Book2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Book2
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
