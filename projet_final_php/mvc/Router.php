<?php

class Router
{
    public function route($uri)
    {
        $routes = [
            '/' => ['TodoController', 'index'],
            '/add' => ['TodoController', 'add'],
            '/toggle' => ['TodoController', 'toggle']
        ];

        $uri = strtok($uri, '?'); // Retire les paramètres GET

        if (array_key_exists($uri, $routes)) {
            $controllerName = $routes[$uri][0];
            $method = $routes[$uri][1];
            require_once "controllers/$controllerName.php";
            $controller = new $controllerName();
            $controller->$method();
        } else {
            require_once 'views/error404.php';
        }
    }
}
