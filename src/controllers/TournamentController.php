<?php

namespace app\controllers;

use app\models\Tournament;
use core\controllers\WebController;
use core\models\BaseView;

class TournamentController extends WebController
{
    
    public function index(){
        $tours = Tournament::get();
        BaseView::render('tournament', [
            "tours" => $tours,
        ]);
    }
    public function page($id){
        $tournament = Tournament::getTourInfo($id);
        BaseView::render('TournamentPage', [
            "tournament" => $tournament,
        ]);
    }

}
