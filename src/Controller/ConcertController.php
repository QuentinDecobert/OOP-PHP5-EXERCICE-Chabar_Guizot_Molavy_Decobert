<?php

namespace App\Controller;


class ConcertController extends BaseController
{
    public function index()
    {
        /** @var ConcertRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Concert');

        return $repo->findAllArray();
    }

    public function create()
    {
        /*
            $title = $param->title;
            $datetime = $param->datetime;
            $artist =  $param->artist;
            $place = $param->place;
            $price = $param->price;
            $type = $param->type;
            $city = $param->city;
            $country = $param->country;
            $picture = $param->picture;


        $concert = new Concert();
        $concert->setTitle($title);
        $concert->setDatetime($datetime);
        $concert->setArtist($artist);
        $concert->setPlace($place);
        $concert->setPrice($price);
        $concert->setType($type);
        $concert->setCity($city);
        $concert->setCountry($country);
        $concert->setPicture($picture);

        $this->entityManager->persist($concert);
        $this->entityManager->flush();*/
    }
    public function find($id)
    {
        /** @var ConcertRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Concert');

        return $repo->findOneArray($id);
    }
}
