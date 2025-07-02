<?php

use core\models\BaseView;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config/app.php";


$view = new BaseView();
echo $view->render();