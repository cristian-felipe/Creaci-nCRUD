<?php

namespace App\Repository;

use App\Entity\Menu1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Menu1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Menu1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Menu1[]    findAll()
 * @method Menu1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Menu1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Menu1::class);
    }

    // /**
    //  * @return Menu1[] Returns an array of Menu1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Menu1
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
