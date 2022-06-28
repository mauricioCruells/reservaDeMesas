<?php

namespace App;

use App\Exceptions\RouteNotFoundexception;

class Router
{
    private array $routes;

    public function register(string $requestMethod, string $route, array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;

        return $this;
    }

    public function get(string $route, array $action)
    {
        return $this->register('GET', $route, $action);
    }

    public function post(string $route, array $action)
    {
        return $this->register('POST', $route, $action);
    }


    public function resolve(string $requestMethod, string $requestUri, array $params = [])
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$requestMethod][$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundexception();
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {

                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], $params); //  ['CLASE', 'METODO']
                }
            }
        }

        throw new RouteNotFoundexception();
    }
}
