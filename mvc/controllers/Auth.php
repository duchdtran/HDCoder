<?php

class Auth extends Controller{

    // Must have Init()
    function Init(){
        $this->view("login", []);

        echo $_POST;
        // if(isset($_POST("login-btn"))){
        //     echo "ok";
        // }
    }
}
?>