<?php

namespace core\models;

use app\models\User;
use core\controllers\AppController;

class Auth
{
    public static function setToken(string $token)
    {
        setcookie("identity", $token, time() + 30 * 24 * 3600, "/");
    }

    public static function getUserByToken(): ?array
    {
        if ($token = static::getToken()) {
            $userTableName = User::getTableName();
            $sql = "SELECT * FROM $userTableName WHERE token = :token";
            $db = Db::getInstance();
            $result = $db->queryAssociative($sql, ["token" => $token]);
            
            return $result[0] ?? null;
        }

        return null;
    }

    public static function getToken()
    {
        return $_COOKIE["identity"] ?? null;
    }

    public static function resetToken()
    {
        setcookie("identity", "", 5 , "/");
    }    
}