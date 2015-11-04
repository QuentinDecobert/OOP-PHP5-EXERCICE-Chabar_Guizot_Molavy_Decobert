<?php

namespace App\Controller;


class BookingController
{
    public function index()
    {
        /** @var BookingRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Booking');

        return $repo->findAllArray();
    }
    public function create()
    {
        $customer = !empty($_GET['id_client']) ? (int)$_GET['id_client'] : null;
        $concert  = !empty($_GET['id_concert']) ? (int)$_GET['id_concert'] : null;
        $price    = !empty($_GET['price']) ? $_GET['price'] : null;
        $number   = !empty($_GET['place']) ? $_GET['place'] : null;

        $repo1 = $this->entityManager->getRepository('App\\Entity\\Customer');
        $repo2 = $this->entityManager->getRepository('App\\Entity\\Concert');
        $cust = $repo1->find($customer);
        $cons = $repo2->find($concert);

        $booking = new Booking();
        $booking->setNumber($number);
        $booking->setPrice($price);
        $booking->setConcert($cons);
        $booking->setCustomer($cust);

        $this->entityManager->persist($booking);
        $this->entityManager->flush();

    }
    public function find($id)
    {
        /** @var BookingRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Booking');

        return $repo->findOneArray($id);
    }
}
