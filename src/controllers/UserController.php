<?php
namespace app\controllers;

use app\models\User;
use core\models\BaseView;
use app\models\Account;
use core\controllers\WebController;
use core\models\AppUser;
use core\models\Auth;

class UserController extends WebController
{
    public function register(){
        $reg = User::get();
        BaseView::render('register', [
            "reg" => $reg,
        ]);
    }

    public function index(){
        $user = Auth::getUserByToken();
        $username = $user['username'];
        BaseView::render('user', ['username' => $username]);
    }

    public function auth(){
        BaseView::render('auth');
    }

    public function handleRegister()
    {
       $user = new User();
       $user->username = $_POST['username'];
       $user->login = $_POST['username'];
       $user->email = $_POST['email'];
       $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
       $user->created_at = date("Y-m-d H:i:s");
       $user->token = bin2hex(random_bytes(32));
       $user->save();
       header('Location: /index');
    }

    public function login()
    {
        $account = new User();
        $account->load($this->post());
        if ($account->loginUser()) {
            return $this->redirect("/index");
        }
        return $this->redirect("/auth?error=true");
    }
    public function actionLogout()
    {
        if ($this->isGet()) {
            if ($account = AppUser::getUserByToken()) {
                $account->token = null;
                $account->save();
                Auth::resetToken();
            }            
        }

        return $this->redirect("/index");
    }
}