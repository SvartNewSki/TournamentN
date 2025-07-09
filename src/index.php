<?php

use core\models\BaseView;
use core\controllers\app;
use core\controllers\Route\Route;
use core\Router\Router;
use core\models\Db;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config/app.php";

$db = Db::getInstance();
$q = "SELECT * from tournament.news WHERE title = :name ";
$res = $db->queryAssociative($q, ["name" => "Test"]);
var_dump($res);


$router = new Router();
require_once __DIR__ . '/routes/web.php';
$router->dispatch($_SERVER["REQUEST_METHOD"],$_SERVER["REQUEST_URI"]);