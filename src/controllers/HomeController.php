<?php
namespace app\controllers;

use core\controllers\WebController;
use core\models\Auth;
use core\models\BaseView;

class HomeController extends WebController
{
    public function index(){
        BaseView::render('main');
        
    }
}