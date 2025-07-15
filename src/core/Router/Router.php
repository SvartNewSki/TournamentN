<?php
namespace core\Router;

use Exception;
use ReflectionMethod;

class Router {
    private $routes = array();

    public function addRoute($method, $url, $action){
        $this->routes[$method][$url] = $action;
    }

    public function dispatch(string $method, string $url){
        if (isset($this->routes[$method][$url])) {
            return $this->callAction($this->routes[$method][$url]);
        }
        foreach ($this->routes[$method] as $route => $action){
            if ($this->matchRoute($route, $url, $params)) {
                return $this->callAction($action, $params);
            }
        }
        echo "404";
        die;
    }

    private function matchRoute($route, $url, &$params) {
        $params = [];
        $pattern = preg_replace('/\{([^}]+)\}/', '(?P<$1>[^/]+)', $route);
        $pattern = "#^$pattern$#";

        if (!preg_match($pattern, $url, $matches)) {
            return false;
        }

        foreach ($matches as $key => $value) {
            if (is_string($key)){
                $params[$key] = $value;
            }
        }
        return true;
    }

    private function callAction($action, $params = []){
        [$controller, $method] = explode("@", $action);
        $controller = "app\\controllers\\" . $controller;
        $controllerInstance = new $controller();

        $reflectionMethod = new ReflectionMethod($controllerInstance, $method);
        $methodParams = $reflectionMethod->getParameters();

        $args = [];
        foreach ($methodParams as $param){
            $name = $param->getName();
            if (isset($params[$name]))
                $args[] = $params[$name];
            else throw new Exception("Missing parameter: $name");
        }
        return $controllerInstance->$method(...$args);
    }
}