<?php
namespace app\controllers;

use core\models\BaseView;

class SiteController 
{
    public ?object $view;

    public function __construct()
    {
        $this->view = new BaseView();
    }

    public function actionIndex()
    {
        return $this->view->render();
    }
}