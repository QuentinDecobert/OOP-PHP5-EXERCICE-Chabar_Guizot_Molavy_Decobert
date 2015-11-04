<?php

namespace App\Entity;

/**
 * @Entity
 * @Table(name="concert")
 */
class Concert
{
    /**
     * @var integer
     *
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="title", type="string", length=50)
     */
    private $title;

    /**
     * @var string
     *
     * @Column(name="place", type="string", length=50)
     */
    private $place;

    /**
     * @var string
     *
     * @Column(name="datetime", type="datetime")
     */
    private $datetime;

    /**
     * @var string
     *
     * @Column(name="artist", type="string", length=50)
     */
    private $artist;

    /**
     * @var string
     *
     * @Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var float
     *
     * @Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @Column(name="city", type="string", length=50)
     */
    private $city;

    /**
     * @var string
     *
     * @Column(name="country", type="string", length=50)
     */
    private $country;

    /**
     * @var string
     *
     * @Column(name="picture", type="string", length=100)
     */
    private $picture;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param string $datetime
     */
    public function setDateTime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}