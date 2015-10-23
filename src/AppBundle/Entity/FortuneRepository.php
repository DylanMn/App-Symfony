<?php

namespace AppBundle\Entity;
use Pagerfanta\Adapter\DoctrineORMAdapter;

class FortuneRepository extends \Doctrine\ORM\EntityRepository
{
  public function findLasts() {
      $queryBuilder = $this->createQueryBuilder('F')
        ->orderBy("F.createdAt","ASC");
        return new DoctrineORMAdapter($queryBuilder);
  }


  public function findDaily() {
    $b = new \DateTime('2015-10-23 00:00:00');
    $e = new \DateTime('2015-10-23 23:59:59');
    // $c = new \Datetime(("d")+1);
  //$b  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
  // \dump($c);

  //$e = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));

    return $this->createQueryBuilder('F')
        ->orderBy("F.createdAt", "DESC")
        ->setParameter("begin", $b)
        ->setParameter("end", $e)
        ->where("F.createdAt between :begin AND :end")
        ->setMaxResults(10)
        ->getQuery()
        ->getResult();
    }

  public function bestRated() {
    return $this->createQueryBuilder('F')
      ->orderBy("F.upVote/F.downVote", "DESC")
      ->setMaxResults(10)
      ->getQuery()
      ->getResult();
  }

  public function worstRated() {
    return $this->createQueryBuilder('F')
      ->orderBy("F.downVote/F.upVote", "DESC")
      ->setMaxResults(10)
      ->getQuery()
      ->getResult();
  }

  public function findByAuthor($author) {
    return $this->createQueryBuilder('F')
      ->orderBy("F.createdAt", "DESC" )
      ->where("F.author = :author")
      ->setParameter("author", $author)
      ->setMaxResults(10)
      ->getQuery()
      ->getResult();
  }

  public function getQuoteId($id) {
    return $this->createQueryBuilder('F')
      ->orderBy("F.id", "DESC" )
      ->where("F.id = :id")
      ->setParameter("id", $id)
      ->getQuery()
      ->getResult();
  }

  public function getCategorie($categorie) {
    return $this->createQueryBuilder('F')
      ->orderBy("F.categorie", "DESC" )
      ->where("F.categorie = :categorie")
      ->setParameter("categorie", $categorie)
      ->getQuery()
      ->getResult();
  }





  // public function getcomments() {
  //   return $this->createQueryBuilder('F')
  //     ->orderBy("F.createdAt", "DESC")
  //     ->setMaxResults(10)
  //     ->getQuery()
  //     ->getResult();
  // }


}
