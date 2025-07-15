<?php
namespace core\controllers;

use core\models\AppUser;
use core\models\BaseView;

class WebController
{
    public ?object $view;

    public function __construct()
    {
        $this->view = new BaseView();
        $this->user = AppUser::getUserByToken();
    }

    public function get()
    {
        return $_GET;
    }

    public function post()
    {
        return $_POST;
    }

        public function isPost()
    {
        return $_SERVER["REQUEST_METHOD"] == "POST";
    }

    public function isGet()
    {
        return $_SERVER["REQUEST_METHOD"] == "GET";
    }

     public function redirect($url)
    {
        header("Location: " . $url);
        exit;
    }

}