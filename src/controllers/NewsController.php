<?php

namespace app\controllers;

use core\models\BaseView;

class NewsController{

    public function index(){
        BaseView::render('news');     
    }
}