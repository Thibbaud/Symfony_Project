<?php

namespace App\Repository;

use App\Entity\Lists;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Lists|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lists|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lists[]    findAll()
 * @method Lists[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Lists::class);
    }

    /**
     * @return Lists[] Returns an array of Lists objects
     */
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Lists
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findList(){

        return $this->createQueryBuilder('u')
            ->andWhere('u.author_id_id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
            ;

    }
}
