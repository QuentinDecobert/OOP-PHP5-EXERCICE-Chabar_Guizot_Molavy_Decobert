<?php

namespace App\Entity;

/**
 * @Entity
 * @Table(name="booking")
 */
class Booking
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
     * @var integer
     *
     * @Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var float
     *
     * @Column(name="price", type="float")
     */
    private $price;

    /**
     * @var Concert
     *
     * @ManyToOne(targetEntity="Concert")
     */
    private $concert;

    /**
     * @var Customer
     *
     * @ManyToOne(targetEntity="Customer")
     */
    private $customer;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }


    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->number;
    }


    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->number = $number;
    }

    /**
     * @return Concert
     */
    public function getConcert()
    {
        return $this->concert;
    }

    /**
     * @param Concert $concert
     */
    public function setConcert($concert)
    {
        $this->concert = $concert;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
}
