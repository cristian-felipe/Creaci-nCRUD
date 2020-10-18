<?php

namespace App\Repository;

use App\Entity\Filtro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Filtro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Filtro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Filtro[]    findAll()
 * @method Filtro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FiltroRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Filtro::class);
    }

    // /**
    //  * @return Filtro[] Returns an array of Filtro objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Filtro
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
