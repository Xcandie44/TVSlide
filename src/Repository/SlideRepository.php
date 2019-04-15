<?php

namespace App\Repository;

use App\Entity\Slide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @method Slide|null find($id, $lockMode = null, $lockVersion = null)
 * @method Slide|null findOneBy(array $criteria, array $orderBy = null)
 * @method Slide[]    findAll()
 * @method Slide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SlideRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Slide::class);
    }

    // /**
    //  * @return Slide[] Returns an array of Slide objects
    //  */
    /* */
    public function getActiveSlidesArray($url)
    {

        return $this->createQueryBuilder('s')
            ->innerJoin('s.buildings','b')
            ->andWhere('s.isActive = '.true)
            ->andWhere('s.showFrom < :date')
            ->andWhere('s.showFor > :date')
            ->andWhere('b.url = :url')
            ->select('s.id')
            ->addSelect('s.title')
            ->addSelect('s.url')
            ->addSelect('s.duration')
            ->addSelect('s.format')
            ->addSelect('s.width')
            ->addSelect('s.height')
            ->addSelect('s.format')
            ->orderBy('s.priority', 'DESC')
            ->setParameter('date', new \DateTime())
            ->setParameter('url', $url)
            ->getQuery()
            ->getArrayResult()
        ;
    }
    public function getPreviousSlidePriority($priority)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.isActive = '.true)
            ->andWhere('s.priority < '.$priority)
            ->setMaxResults(1)
            ->orderBy('s.priority', 'DESC')
            ->getQuery()
            ->execute()
        ;
    }
    public function getNextSlidePriority($priority)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.isActive = '.true)
            ->andWhere('s.priority > '.$priority)
            ->setMaxResults(1)
            ->orderBy('s.priority', 'DESC')
            ->getQuery()
            ->execute()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Slide
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
