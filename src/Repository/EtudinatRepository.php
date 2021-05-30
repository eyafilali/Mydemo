<?php

namespace App\Repository;

use App\Entity\Etudinat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Etudinat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etudinat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etudinat[]    findAll()
 * @method Etudinat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudinatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etudinat::class);
    }

    // /**
    //  * @return Etudinat[] Returns an array of Etudinat objects
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
    public function findOneBySomeField($value): ?Etudinat
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
