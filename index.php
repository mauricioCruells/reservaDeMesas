<?php

require './Classes/Router.php';
require './Classes/Presenter.php';


/*  FALTA IMPLEMENTAR SINGLETON PARA CONEXION DE BASE DE DATOS


$db = new PDO('mysql:host=localhost;dbname=my_db', 'root', 'password1234');

$query1 = 'SELECT * FROM users';
$query2 = 'INSERT INTO sadnsjcnjlasdm (skamdlams, iasald, jcsnajclsa, juaoscnsln)
            VALUES(skamdlams, iasald, jcsnajclsa, juaoscnsln)

$stmt = $db->query($query);

var_dump($stmt->fetchAll());
*/




$router = new Router();

$router
    ->get('/reservaDeMesas/', ['Presenter', 'create'])
    ->post('/reservaDeMesas/', ['Presenter', 'store']);

echo $router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
