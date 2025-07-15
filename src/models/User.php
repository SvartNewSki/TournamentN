<?php
namespace app\models;

use core\models\AppUser;
use core\models\Auth;
use core\models\BaseDbModel;
use core\models\Db;

class User extends BaseDbModel
{
    public ?string $username = null;
    public ?string $email = null;
    public ?string $login = null;
    public ?string $password = null;
    public ?string $created_at = null;
    public ?string $token = null;
    public ?int $id = null;
     public static function getTableName(){
        return "tournament.user";
    }

    public static function get()
    {
        $result = Db::getInstance()
        ->conn
        ->createQueryBuilder()
        ->select('id', 'login','username', 'password', 'created_at')
        ->from(self::getTableName())
        ->fetchAllAssociativeIndexed();

        return $result;
    }

    public function LoginUser(): bool
    {
        $account = AppUser::getUserByLogin($this->login);

            if ($account && AppUser::validatePassword($this->password)) {
                $this->load($account->getAttributes());
                $this->token = bin2hex(random_bytes(32));
                
                 if($this->save()) {
                    Auth::setToken($this->token);
                    return true;
                } 
            }
            return false;
    }
}