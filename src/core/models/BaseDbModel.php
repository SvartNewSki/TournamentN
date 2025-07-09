<?php
namespace core\models;

use core\controllers\AppController;

class BaseDbModel
{
    public ?object $db;

    public function __construct() {
        $this->db = (Db::getInstance(AppController::$config["db"]))->conn;
    }

}