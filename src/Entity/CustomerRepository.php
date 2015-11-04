<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;

class CustomerRepository extends EntityRepository
{
    public function findAllArray()
    {
        $qb = $this->_em->createQueryBuilder('c');

        $qb
            ->select('c')
            ->from('App\Entity\Customer', 'c')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findOneArray($id)
    {
        $qb = $this->_em->createQueryBuilder('c');

        $qb
            ->select('c')
            ->from('App\Entity\Customer', 'c')
            ->where('c.id = :id')
            ->setParameters([
                'id' => $id,
            ])
        ;

        return $qb->getQuery()->getArrayResult();
    }




}