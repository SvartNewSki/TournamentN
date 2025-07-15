<?php

$router->addRoute("GET", "/index", "HomeController@index");
$router->addRoute("GET","/user", "UserController@index");
$router->addRoute("GET", "/register", "UserController@register");
$router->addRoute("GET", "/exit", "UserController@actionLogout");
$router->addRoute("GET","/auth","UserController@auth");
$router->addRoute("GET","/news","NewsController@index");
$router->addRoute("GET",'/Tournaments',"TournamentController@index");
$router->addRoute("POST", "/register", "UserController@handleRegister");
$router->addRoute("POST","/auth","UserController@login");

$router->addRoute("GET","/news/{id}","NewsController@article");
$router->addRoute("GET",'/tournament/{id}',"TournamentController@page");