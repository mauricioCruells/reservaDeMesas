<?php

namespace App;


require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;
use Dotenv\Dotenv;
use App\Controllers\{
    LandingController,
    TableSelectionController,
    LoginController
};

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('VIEW_PATH', __DIR__ . '/../app/Views/Templates');

$router = new Router();

$router
    ->get('/', [LandingController::class, 'processRequest'])
    ->get('/concert1', [LoginController::class, 'processRequest'])
    ->get('/concert2', [LoginController::class, 'processRequest'])
    ->get('/concert3', [LoginController::class, 'processRequest'])
    ->get('/concert4', [LoginController::class, 'processRequest'])
    ->get('/login', [LoginController::class, 'processRequest'])
    ->post('/login', [LoginController::class, 'processRequest']);

$appRunner = new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
);

$appRunner->run();
