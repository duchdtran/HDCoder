<?php
class Users extends DB
{
    private $table = "users";

    public function GetAllTopics()
    {
        $user = $this->selectAll($this->table);
        return $user;
    }

    public function Register($users){
        $user_id = $this->create($this->table, $users);
        $user = $this->selectOne($this->table, ['id' => $user_id]);

        return $user;
    }

    public function Login($users)
    {
        $result = null;
        $user = $this->selectOne($this->table, ['username' => $users['username']]);
        if ($user && password_verify($users['password'], $user['password'])) {
            $result = $user;
        } 
        return $result;
    }

    public function GetUserByID($user_id){
        $user = $this->selectOne($this->table, ["id" => $user_id]);
        return $user;
    }

    public function ValidateUser($user){
        $errors = array();
        if (empty($user['username'])) {
            array_push($errors, 'Username is required');
        }
    
        if (empty($user['email'])) {
            array_push($errors, 'Email is required');
        }
    
        if (empty($user['password'])) {
            array_push($errors, 'Password is required');
        }
    
        if ($user['password'] !== $user['passwordConf']) {
            array_push($errors, 'Password do not match');
        }

        $existingUser = $this->selectOne('users', ['email' => $user['email']]);
        if($existingUser){
            array_push($errors, 'Email already exists');
        }

        return $errors;
    }

    public function ValidateLogin($user){
        $errors = array();
        if (empty($user['username'])) {
            array_push($errors, 'Username is required');
        }
        if (empty($user['password'])) {
            array_push($errors, 'Password is required');
        }

        return $errors;
    }
}
