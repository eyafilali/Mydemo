<?php

namespace App\Repository;

use App\Entity\Enseignat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enseignat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enseignat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enseignat[]    findAll()
 * @method Enseignat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnseignatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enseignat::class);
    }

    // /**
    //  * @return Enseignat[] Returns an array of Enseignat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enseignat
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
