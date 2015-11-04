<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;

class BookingRepository extends EntityRepository
{
    public function findAllArray()
    {
        $qb = $this->_em->createQueryBuilder('c');

        $qb
            ->select('c')
            ->from('App\Entity\Booking', 'c')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findOneArray($id)
    {
        $qb = $this->_em->createQueryBuilder('c');

        $qb
            ->select('c')
            ->from('App\Entity\Booking', 'c')
            ->where('c.id = :id')
            ->setParameters([
                'id' => $id,
            ])
        ;

        return $qb->getQuery()->getArrayResult();
    }




}