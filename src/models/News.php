<?php
namespace app\models;

use core\models\BaseDbModel;
use core\models\Db;

class News extends BaseDbModel{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?string $image = null;
    public ?string $created_at = null;

    public static function getTableName(){
        return "tournament.news";
    }
    

    public static function get(){
        $result = Db::getInstance()
        ->conn
        ->createQueryBuilder()
        ->select('id', 'title', 'description', 'image', 'created_at')
        ->from(self::getTableName())
        ->orderBy('created_at', 'DESC')
        ->fetchAllAssociativeIndexed();
        return $result;
    }
    public static function getNewsInfo($id){
        $article = Db::getInstance()
            ->conn
            ->createQueryBuilder()
            ->select('id', 'title', 'description', 'image', 'created_at')
            ->from(News::getTableName())
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
            return $article;
    }
   
}