<?php

namespace App\Repository;

use App\Entity\CartePostal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CartePostal>
 *
 * @method CartePostal|null find($id, $lockMode = null, $lockVersion = null)
 * @method CartePostal|null findOneBy(array $criteria, array $orderBy = null)
 * @method CartePostal[]    findAll()
 * @method CartePostal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartePostalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartePostal::class);
    }

//    /**
//     * @return CartePostal[] Returns an array of CartePostal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CartePostal
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
