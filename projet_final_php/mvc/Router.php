<?php

class Router
{
    private $routes = [];

    public function add($route, $action)
    {
        $this->routes[$route] = $action;
    }

    public function dispatch($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            list($controller, $method) = explode('@', $this->routes[$uri]);

            if ($controller === 'TodoController') {
                require_once 'TodoController.php';
                $controllerInstance = new TodoController();
                $controllerInstance->$method();
            } else {
                echo "Controller $controller non trouvé.";
            }
        } else {
            require 'error404.php';
        }
    }
}
