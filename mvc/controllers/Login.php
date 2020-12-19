<?php

class Login extends Controller
{

    private $errors =  array();
    private $username = "";
    private $password = "";

    function loginUser($user)
    {
        session_start(); 
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'Bạn đã đăng nhập';
        $_SESSION['type'] = 'success';

        if ($_SESSION['admin']) {
            header('location: ' . BASE_URL_ADMIN .'/post');
        } else {
            header('location: ' . BASE_URL . '/home');
        }

        exit();
    }

    // Must have Init()

    function Init()
    {
        if (isset($_POST["login-btn"])) {
            $userModel = $this->model("Users");
            $this->errors = $userModel->ValidateLogin($_POST);

            unset($_POST['login-btn']);

            $user = $userModel->Login($_POST);

            if (isset($user)) {
                $this->loginUser($user);
            } else {
                $this->username = $_POST['username'];
                $this->password = $_POST['password'];
            }
        }

        $this->view("login", ["errors" => $this->errors, "username" => $this->username, "password" => $this->password]); 
    }
}
