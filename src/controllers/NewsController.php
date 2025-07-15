<?php

namespace app\controllers;
use core\controllers\WebController;
use app\models\News;
use core\models\BaseView;

class NewsController extends WebController
{
    
    public function index(){
        // $topic = new News();
        // $topic->title="first";
        // $topic->description="dessc";
        // $topic->image="aaaa";
        // $topic->created_at='now';
        // $topic->save();
        
        // $topic = new News();
        // $topic->id=3;
        // $topic->title="second";
        // $topic->description="mi sdelali";
        // $topic->image="aaaa";
        // $topic->created_at='now';
        // $topic->save();
        $news = News::get();
        BaseView::render('news',  [
            "news" => $news,
        ]);
    }

    public function add(){
        $topic = new News();
        $topic->title="first";
        $topic->description="dessc";
        $topic->image="aaaa";
        $topic->created_at='now';
        $topic->save();
    }
    public function article($id){
        $article = News::getNewsInfo($id);
        BaseView::render('article', [
            "article" => $article,
        ]);
    }
    public function page($id){
        $article = News::getNewsInfo($id);
        BaseView::render('article', [
            "article" => $article,
        ]);
    }

    
}
