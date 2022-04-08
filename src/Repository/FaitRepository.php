<?php

namespace App\Repository;

use App\Entity\Fait;
use App\Entity\FaitSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;


/**
 * @method Fait|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fait|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fait[]    findAll()
 * @method Fait[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fait::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Fait $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Fait $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Fait[] Returns an array of Fait objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fait
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    

    public function faitSearch($criteria)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.canal = :canal')
            ->setParameter('canal', $criteria->getCanal())
            ->andWhere('c.geographie = :geographie')
            ->setParameter('geographie', $criteria->getGeographie())
            ->getQuery()
            ->getResult()
        ;
    }


    public function findAllVisibleQuery(FaitSearch $search)
    {   
        $query = $this->createQueryBuilder('f'); 
        
        if ($search->getCanal()) {
            $query = $query
                ->andWhere('f.canal === :canal')
                ->setParameter('canal', $search->getCanal());
        }
        
        if ($search->getGeographie()) {
            $query = $query
                ->andhere('f.geographie === :geographie')
                ->setParameter('geographie', $search->getGeographie());
        }

        return $query->getQuery();

    }
}
