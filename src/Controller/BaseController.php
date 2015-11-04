<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;

abstract class BaseController
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
}