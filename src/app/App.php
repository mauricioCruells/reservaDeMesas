<?php

namespace App;

use App\Exceptions\RouteNotFoundexception;
use App\Views\StaticView;

class App
{
    private static DB $db;

    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
        static::$db = new DB($config->db);
    }

    public static function db()
    {
        return static::$db;
    }

    public function run()
    {
        try {
            echo $this->router->resolve($this->request['uri'], $this->request['method']);
        } catch (RouteNotFoundexception) {
            http_response_code(404);
            echo StaticView::make('errors/404');
        }
    }
}
