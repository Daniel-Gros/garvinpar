<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class CarRepository extends EntityRepository
{
  public function findRandomCar()
  {
    return $this->createQueryBuilder('c')
      ->setMaxResults(1)
      ->getQuery()
      ->getOneOrNullResult();
  }
}
