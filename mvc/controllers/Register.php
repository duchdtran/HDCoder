<?php

class Register extends Controller
{

    private $errors =  array();
    private $username = "";
    private $password = "";
    private $email = "";
    private $passwordConf = "";

    function loginUser($user)
    {
        session_start(); 
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';

        if ($_SESSION['admin']) {
            header('location: ' . BASE_URL_ADMIN . '/post');
        } else {
            header('location: ' . BASE_URL . '/home');
        }

        exit();
    }

    // Must have Init()
    function Init()
    {
        if (isset($_POST['register-btn'])) {
            $userModel = $this->model("Users");

            $this->errors = $userModel->validateUser($_POST);

            if (count(($this->errors)) === 0) {
                unset($_POST['register-btn'], $_POST['passwordConf']);
                $_POST['admin'] = 0;
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $user = $userModel->Register($_POST);

                $this->loginUser($user);
            } else {
                $this->username = $_POST['username'];
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->passwordConf = $_POST['passwordConf'];
            }
        }  

        $this->view("register", ["errors" => $this->errors, "username" => $this->username, "password" => $this->password, "email" => $this->email, "passwordConf" => $this->passwordConf]);
    } 
}
