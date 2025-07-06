<?php
namespace app\controllers;

use core\models\BaseView;

class UserController
{
    public function register(){
        BaseView::render('register');
    }

    public function index(){
        $username = 'Amir';
        BaseView::render('user', ['username' => $username]);
    }

    public function auth(){
        BaseView::render('auth');
    }
}