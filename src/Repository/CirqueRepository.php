<?php

namespace App\Repository;

use App\Entity\Cirque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cirque|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cirque|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cirque[]    findAll()
 * @method Cirque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CirqueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cirque::class);
    }

    // /**
    //  * @return Cirque[] Returns an array of Cirque objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cirque
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
