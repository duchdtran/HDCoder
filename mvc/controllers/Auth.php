<?php

class Auth extends Controller{

    // Must have Init()
    function Init(){
        $this->view("login", []);
    }

    function Login(){
        $this->view("login", []);

        if(isset($_POST["login-btn"])){
            unset($_POST['login-btn']);
            dd($_POST);
        }
    }

    function Register(){
        $this->view("register", []);
    }
}
?>