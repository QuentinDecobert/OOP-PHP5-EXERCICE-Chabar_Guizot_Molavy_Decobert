<?php

$entityManager = require __DIR__.'/bootstrap.php';

$method = $_SERVER['REQUEST_METHOD'];
$id     = !empty($_GET['id']) ? $_GET['id'] : null;
$ctrl   = new \App\Controller\BookingController($entityManager);

if ('GET' === $method && null === $id) {
    $data = $ctrl->index();
} elseif ('GET' === $method) {
    $data = $ctrl->find($id);
} elseif ('POST' === $method) {
    $data = $ctrl->create();
} else {
    $data = ['No data'];
}


header('Content-Type: application/json');
echo json_encode($data);