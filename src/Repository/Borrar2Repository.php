<?php

namespace App\Repository;

use App\Entity\Borrar2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Borrar2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Borrar2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Borrar2[]    findAll()
 * @method Borrar2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Borrar2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Borrar2::class);
    }

    // /**
    //  * @return Borrar2[] Returns an array of Borrar2 objects
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
    public function findOneBySomeField($value): ?Borrar2
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
