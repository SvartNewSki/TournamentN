<?php
namespace app\models;

use core\models\BaseDbModel;
use core\models\Db;

class Tournament extends BaseDbModel{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?string $start_time = null;
    public ?string $created_at = null;
    public ?string $comments = null;

    public static function getTableName(){
        return "tournament.tournament";
    }
    

    public static function get(){
        $result = Db::getInstance()
        ->conn
        ->createQueryBuilder()
        ->select('id', 'title', 'description', 'start_time', 'created_at', 'comments','discipline')
        ->from(self::getTableName())
        ->orderBy('created_at', 'DESC')
        ->fetchAllAssociativeIndexed();
        return $result;
    }
     public static function getTourInfo($id){
        $tournament = Db::getInstance()
            ->conn
            ->createQueryBuilder()
            ->select('id', 'title', 'description', 'start_time', 'created_at', 'comments','discipline')
            ->from(Tournament::getTableName())
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
            return $tournament;
    }
}