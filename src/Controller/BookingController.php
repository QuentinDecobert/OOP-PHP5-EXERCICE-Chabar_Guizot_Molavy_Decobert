<?php

namespace App\Controller;



//use App\Entity\Booking;
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

      //  $param = json_decode($app->request->getBody());
       /* $number= $param->number;
        $price = $param->price;
        $concert = $param->concert;
        $customer = $param->customer;
        $customer = !empty($_GET['id_client']) ? (int)$_GET['id_client'] : null;
        $concert  = !empty($_GET['id_concert']) ? (int)$_GET['id_concert'] : null;
        $price    = !empty($_GET['price']) ? $_GET['price'] : null;
        $number   = !empty($_GET['place']) ? $_GET['place'] : null;
6beef601b87ae40afcbde1fd563acdb18b540b20

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
*/
    }
    public function find($id)
    {
        /** @var BookingRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Booking');

        return $repo->findOneArray($id);
    }
}



