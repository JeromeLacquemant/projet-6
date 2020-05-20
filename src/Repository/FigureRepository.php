<?php

namespace App\Repository;

use App\Entity\Figure;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Figure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Figure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Figure[]    findAll()
 * @method Figure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FigureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Figure::class);
    }

/**
 * Our new getAllPosts() method
 *
 * 1. Create & pass query to paginate method
 * 2. Paginate will return a `\Doctrine\ORM\Tools\Pagination\Paginator` object
 * 3. Return that object to the controller
 *
 * @param integer $currentPage The current page (passed from controller)
 *
 * @return \Doctrine\ORM\Tools\Pagination\Paginator
 */
public function getAllPosts($currentPage = 1)
{
    // Create our query
    $query = $this->createQueryBuilder('p')
        ->orderBy('p.created', 'DESC')
        ->getQuery();

    // No need to manually get get the result ($query->getResult())

    $paginator = $this->paginate($query, $currentPage);

    return $paginator;
}

/**
 * Paginator Helper
 *
 * Pass through a query object, current page & limit
 * the offset is calculated from the page and limit
 * returns an `Paginator` instance, which you can call the following on:
 *
 *     $paginator->getIterator()->count() # Total fetched (ie: `5` posts)
 *     $paginator->count() # Count of ALL posts (ie: `20` posts)
 *     $paginator->getIterator() # ArrayIterator
 *
 * @param Doctrine\ORM\Query $dql   DQL Query Object
 * @param integer            $page  Current page (defaults to 1)
 * @param integer            $limit The total number per page (defaults to 5)
 *
 * @return \Doctrine\ORM\Tools\Pagination\Paginator
 */
public function paginate($dql, $page = 1, $limit = 5)
{
    $paginator = new Paginator($dql);

    $paginator->getQuery()
        ->setFirstResult($limit * ($page - 1)) // Offset
        ->setMaxResults($limit); // Limit

    return $paginator;
}


    // /**
    //  * @return Figure[] Returns an array of Figure objects
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
    public function findOneBySomeField($value): ?Figure
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
