<?php

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


    public function resolve(string $requestMethod, string $requestUri)
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$requestMethod][$route];

        return call_user_func($action); //  ['CLASE', 'METODO']
    }
}
