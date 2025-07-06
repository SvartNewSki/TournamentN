<?php
namespace core\controllers\Route;

class RouteConfiguration
{
   public string $route;
   public string $controller;
   public string $action;
   private string $name;
   private string $middleware;

   public function __construct(string $route, string $controller, string $action)
   {
    $this->route = $route;
    $this->controller = $controller;
    $this->action= $action;
   }

   public function name($name)
   {
    $this->name = $name;
   }
   public function middleware($middleware)
   {
    $this->middleware = $middleware;
   }
}