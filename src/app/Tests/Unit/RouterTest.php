<?php

namespace App\Tests\Unit;

use App\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function testRouteIsRegistered()
    {
        $router = new Router();

        $router->register('GET', '/testRoute', ['testController', 'testMethod']);


        $expected = [
            'GET' => [
                '/testRoute' => ['testController', 'testMethod'],
            ]
        ];

        $this->assertEquals($expected, $router->getRoutes());
    }

    public function testPostRouteIsRegistered()
    {
        $router = new Router();

        $router->post('/testRoute', ['testController', 'testMethod']);


        $expected = [
            'POST' => [
                '/testRoute' => ['testController', 'testMethod'],
            ]
        ];

        $this->assertEquals($expected, $router->getRoutes());
    }

    public function testGetRouteIsRegistered()
    {
        $router = new Router();

        $router->get('/testRoute', ['testController', 'testMethod']);


        $expected = [
            'GET' => [
                '/testRoute' => ['testController', 'testMethod'],
            ]
        ];

        $this->assertEquals($expected, $router->getRoutes());
    }

    public function testNoRoutesRegistered()
    {
        $router = new Router();

        $this->assertEmpty($router->getRoutes());
    }
}
