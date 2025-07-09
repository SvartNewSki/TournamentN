<?php
namespace core\models;

use Doctrine\DBAL\DriverManager;

class Db{
    
    public $conn;
    private static ?object $_self = null;
    private function __construct()
    {
        $this->conn = DriverManager::getConnection(require_once FILE_CONFIG_DB);
    }

    public static function getInstance(){
        if (self::$_self === null) {
            self::$_self = new self(); 
        }
        return self::$_self;
    }
}