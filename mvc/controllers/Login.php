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
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';

        if ($_SESSION['admin']) {
            header('location: ' . BASE_URL_ADMIN .'/posts/index.php');
        } else {
            header('location: ' . BASE_URL . '/home');
        }

        exit();
    }

    // Must have Init()

    function Init()
    {
        $this->view("login", ["errors" => $this->errors, "username" => $this->username, "password" => $this->password]);


        if (isset($_POST["login-btn"])) {
            $userModel = $this->model("Users");
            $this->errors = $userModel->ValidateLogin($_POST);

            unset($_POST['login-btn']);

            $user = $userModel->Login($_POST);

            if (isset($user)) {
                $this->loginUser($user);
            } else {
                echo "Login Fail";
                $this->username = $_POST['username'];
                $this->password = $_POST['password'];
            }
        }
    }
}
