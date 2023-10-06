<?php

namespace App\Repository;

use App\Entity\ProjectAuthor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectAuthor|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectAuthor|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectAuthor[]    findAll()
 * @method ProjectAuthor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectAuthorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectAuthor::class);
    }

    // /**
    //  * @return ProjectAuthor[] Returns an array of ProjectAuthor objects
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
    public function findOneBySomeField($value): ?ProjectAuthor
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
