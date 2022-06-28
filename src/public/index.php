<?php

namespace App;

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;
use Dotenv\Dotenv;
use App\Controllers\{
    TestController,
};

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('VIEW_PATH', __DIR__ . '/../views');

$router = new Router();

$router
    ->get('/', [TestController::class, 'processRequest']);


echo $router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
