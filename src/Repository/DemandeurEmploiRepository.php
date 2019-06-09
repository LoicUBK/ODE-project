<?php

namespace App\Repository;

use App\Entity\DemandeurEmploi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DemandeurEmploi|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeurEmploi|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandeurEmploi[]    findAll()
 * @method DemandeurEmploi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeurEmploiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DemandeurEmploi::class);
    }

    // /**
    //  * @return DemandeurEmploi[] Returns an array of DemandeurEmploi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DemandeurEmploi
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
