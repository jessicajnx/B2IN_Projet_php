<?php

namespace App\Core;

class Router {
    public static function route($url) {
        $routes = [
            '/' => ['controller' => 'TaskController', 'method' => 'listTasks'],
            '/add' => ['controller' => 'TaskController', 'method' => 'addTask'],
            '/update' => ['controller' => 'TaskController', 'method' => 'updateTask'],
            '/delete' => ['controller' => 'TaskController', 'method' => 'deleteTask'],
        ];

        if (array_key_exists($url, $routes)) {
            $controllerName = 'App\\Controller\\' . $routes[$url]['controller'];
            $method = $routes[$url]['method'];

            $controller = new $controllerName();
            $controller->$method();
        } else {
            http_response_code(404);
            echo "404 - Page not found";
        }
    }
}
