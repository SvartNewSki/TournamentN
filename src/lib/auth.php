<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 3) {
    echo "login error";
    exit;
}
if(strlen($password) < 4) {
    echo "password error";
    exit;
}

$salt = '1231';
$password = md5($salt.$password);

require "db.php";

/// Auth

$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);
if ($query->rowCount() == 0) 
    echo "Такого пользователя нет";
else{
    setcookie('login',$login, time() + 3600 * 24 * 30, "/");
    header('location: /user.php');
}