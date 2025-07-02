<?php

use core\models\BaseView;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config/app.php";



$view = new BaseView();
// $view->layout = 'tournaments';
$view->render();


$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'views/layouts/main.php';
} elseif ($uri === '/about') {
    require 'views/layouts/Tournaments.php';
} else {
    require 'pages/404.php';
}
