<?php

namespace App\Repository;

use App\Entity\Borrar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Borrar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Borrar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Borrar[]    findAll()
 * @method Borrar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BorrarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Borrar::class);
    }

    // /**
    //  * @return Borrar[] Returns an array of Borrar objects
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
    public function findOneBySomeField($value): ?Borrar
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
