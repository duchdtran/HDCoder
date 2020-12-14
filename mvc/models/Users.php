<?php
class Topics extends DB
{
    protected $table = "users";

    public function ValidateLogin($username, $password)
    {
        $user = $this->selectOne($this->table, ['username' => $username]);
        $result = false;
        if ($user && password_verify($password, $user['password'])) {
            $result = true;
        } 
        return $result;
    }

    public function GetUserByID($user_id){
        $user = $this->selectOne($this->table, ["id" => $user_id]);
        return $user;
    }
}
