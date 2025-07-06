<?php

namespace app\controllers;

use core\models\BaseView;

class TournamentController{
    
    public function index(){
        BaseView::render('tournament');
    }
}