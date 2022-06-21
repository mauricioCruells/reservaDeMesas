<?php

require './Classes/Router.php';
require './Classes/Table.php';
require './Classes/Reservation.php';


$router = new Router();

$router
    ->get('/reservaDeMesas/', ['Table', 'selectTable'])
    ->post('/reservaDeMesas/', ['Reservation', 'processReservation']);

echo $router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
