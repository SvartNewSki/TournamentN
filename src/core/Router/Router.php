<?php
namespace core\Router;

use Controller;
use core\controllers\HomeController;

class Router
{
    protected $routes = [];
    public function addRoute(string $method, string $url, string $action)
    {
        $this->routes[$method][$url] = $action;
    }

    public function dispatch(string $method, string $url)
    {
        if (!isset($this->routes[$method][$url])) {
            echo "404";
            var_dump($this->routes);
            return;
        }
        [$controller, $action]=explode("@", $this->routes[$method][$url]);
        $controller = "app\\controllers\\" . $controller;
        $controllerInstance = new $controller();
        $controllerInstance->$action();
        
    }
}