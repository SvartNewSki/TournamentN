<?php
namespace app\controllers;

use app\models\News;
use app\models\Tournament;
use core\controllers\WebController;
use core\models\Auth;
use core\models\BaseView;

class HomeController extends WebController
{
    public function index(){
        $news = News::limit(3);
        $tournaments = Tournament::limit(4);
        BaseView::render('main', [
            'news' => $news,
            'tournaments' => $tournaments,
            'images' => [
                "/img/witcher.jpg",
                "/img/sus.jpg",
                "/img/cs2.png",
            ]
        ]);
    }
}