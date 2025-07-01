<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    
    if(strlen($login) < 3) {
        echo "login error";
        exit;
    }
    if(strlen($username) < 4) {
        echo "name error";
        exit;
    }
    if(strlen($email) < 4 && !str_contains($email, '@')) {
        echo "email error";
        exit;
    }
    if(strlen($password) < 4) {
        echo "password error";
        exit;
    }
    echo $login;
    // Password
    $salt = '1231';
    $password = md5($salt.$password);
    // DB
    require "db.php";

   
    // insert
    $sql = 'INSERT INTO users (login, username, email, password) VALUES(?,?,?,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $username, $email, $password]);

    header('location: /');