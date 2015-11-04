<?php

namespace App\Controller;



use App\Entity\Booking;
use App\Entity\BookingRepository;

class BookingController extends BaseController
{
    public function index()
    {
        /** @var BookingRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Booking');

        return $repo->findAllArray();
    }
    public function create()
    {
        $param = json_decode($app->request->getBody());
        $number= $param->number;
        $price = $param->price;
        $concert = $param->concert;
        $customer = $param->customer;


        $booking = new Booking();
        $booking->setNumber($number);
        $booking->setPrice($price);
        $booking->setConcert($concert);
        $booking->setCustomer($customer);

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
