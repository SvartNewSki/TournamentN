<?php

use app\controllers\UserController;
use core\models\BaseView;
use core\controllers\app;
use core\controllers\Route\Route;
use core\models\Db;
use core\Router\Router;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config/app.php";

// $db = Db::getInstance();
// $q = "SELECT * from tournament.user WHERE username = :username";
// $res = $db->queryAssociative($q, ['username' => "Amo"]);
// var_dump($res);



$router = new Router();
require_once __DIR__ . '/routes/web.php';
$router->dispatch($_SERVER["REQUEST_METHOD"],$_SERVER["REQUEST_URI"]);