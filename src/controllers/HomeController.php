<?php
namespace app\controllers;

use core\models\BaseView;

class HomeController
{
    public function index(){
        BaseView::render('main');
    }
}