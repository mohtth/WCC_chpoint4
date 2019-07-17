<?php

namespace App\Repository;

use App\Entity\PrixBill;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PrixBill|null find($id, $lockMode = null, $lockVersion = null)
 * @method PrixBill|null findOneBy(array $criteria, array $orderBy = null)
 * @method PrixBill[]    findAll()
 * @method PrixBill[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrixBillRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PrixBill::class);
    }

    // /**
    //  * @return PrixBill[] Returns an array of PrixBill objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PrixBill
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
