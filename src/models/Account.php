<?php
namespace app\models;

use core\models\AppUser;
use core\models\Auth;
use core\models\BaseDbModel;

class Account extends BaseDbModel{

    public ?int $id = null;
    public ?string $login = null;
    public ?string $username = null;
    public ?string $password = null;
    public ?string $created_at = null;
    public ?string $token = null;

    public function getTableName()
    {
        return "account";
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