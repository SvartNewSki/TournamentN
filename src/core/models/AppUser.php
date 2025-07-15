<?php

namespace core\models;

use app\models\User;

class AppUser extends BaseDbModel{
    private ?object $_user = null;
    private ?object $_db = null;
    private static ?self $_self = null;
    private static bool $isGuest = true;

    public function __construct()
    {
        parent::__construct();
        $this->_db = Db::getInstance();
    }

    public static function getInstance()
    {
        if (self::$_self === null) {
            self::$_self = new self();
        }
        return self::$_self;
    }

    public static function getAppUser()
    {
        $self = self::getInstance();
        return $self->_user;
    }

     private function getUser()
    {
        return $this->_user;
    }

    public function getDb()
    {
        return $this->_db;
    }

     public static function isGuest(): bool
    {
        return self::$isGuest;
    }

    public static function validatePassword(string $password): bool
    {
        
        $self = self::getInstance();
        $user = $self->getUser();
        return $user && password_verify($password, $user->password);
    }


    public static function getUserByLogin($login): ?object
    {
        $self = self::getInstance();
        $self->createUser();
        $sql = "SELECT * FROM " 
        . $self->getUser()::getTableName() 
        . " WHERE login = :login";
        
        $result = $self->getDb()->queryAssociative($sql, ["login" => $login]);
        if (!empty($result[0])) {
            
            $self->getUser()->load($result[0]);
            // var_dump($self->getUser());
            self::$isGuest = false;
            return clone $self->getUser();
        }
        $self->setUser(null);
        return null;
    }
      private function createUser()
    {
        if ($this->_user === null) {
            $accountClass = User::class;
            $this->_user = new $accountClass;
        }
        return $this->_user;
    }

     private function setUser(?object $user)
    {
        $this->_user = $user
            ? clone $user
            : null;
    }

       public static function getUserByToken(): ?object
    {
        $self = self::getInstance();
        if ($user = Auth::getUserByToken()) {
            $self->createUser()->load($user);
            $self::$isGuest = false;
            return clone $self->getUser();
        } else {
            $self->setUser(null);
        }

        return null;
    }
}