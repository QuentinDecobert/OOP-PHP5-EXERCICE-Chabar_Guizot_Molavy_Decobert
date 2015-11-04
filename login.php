<?php

$entityManager = require __DIR__.'/bootstrap.php';

$method = $_SERVER['REQUEST_METHOD'];
$ctrl   = new \App\Controller\CustomerController($entityManager);

$data = $ctrl->login();

header('Content-Type: application/json');
echo json_encode($data);