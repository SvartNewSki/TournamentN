<?php

$router->addRoute("GET", "/index", "HomeController@index");
$router->addRoute("GET","/user", "UserController@index");
$router->addRoute("GET", "/register", "UserController@register");
$router->addRoute("GET","/auth","UserController@auth");
$router->addRoute("GET","/news","NewsController@index");
$router->addRoute("GET",'/Tournaments',"TournamentController@index");