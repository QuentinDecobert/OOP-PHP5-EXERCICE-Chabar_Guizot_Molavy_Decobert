<?php

namespace App\Controller;


use App\Entity\Customer;
use App\Entity\CustomerRepository;

class CustomerController extends BaseController
{
    public function index()
    {
        /** @var CustomerRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Customer');

        return $repo->findAllArray();
    }

    public function find($id)
    {
        /** @var CustomerRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Customer');

        return $repo->findOneArray($id);
    }

    public function create()
    {
        $param = json_decode($app->request->getBody());
        $username = $param->username;
        $lastname = $param->lastName;
        $firstname =  $param->firstName;
        $password = $param->password;
        $email = $param->email;


        $customer = new Customer();
        $customer->setUsername($username);
        $customer->setLastName($lastname);
        $customer->setFirstName($firstname);
        $customer->setEmail($email);
        $customer->setPassword($password);

        $this->entityManager->persist($customer);
        $this->entityManager->flush();
    }

    public function login()
    {
        $username = !empty($_GET['username']) ? $_GET['username'] : null;
        $password = !empty($_GET['password']) ? $_GET['password'] : null;

        if (empty($username) || empty($password))
            return [];

        /** @var CustomerRepository $repo */
        $repo = $this->entityManager->getRepository('App\\Entity\\Customer');

        $count = (int) $repo->login($username, $password);

        if ($count > 0)
            return ['connected'];
        else
            return [];
    }
}
