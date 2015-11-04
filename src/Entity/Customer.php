<?php

namespace App\Entity;

/**
 * @Entity(repositoryClass="App\Entity\CustomerRepository")
 * @Table(name="customer")
 */
class Customer
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
     * @Column(name="username", type="string", length=50)
     */
    private $username;

    /**
     * @var string
     *
     * @Column(name="last_name", type="string", length=75)
     */
    private $lastName;

    /**
     * @var string
     *
     * @Column(name="first_name", type="string", length=75)
     */
    private $firstName;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=100)
     */
    private $password;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
