<?php

class User extends Controller
{
    private $errors =  array();
    private $username = "";
    private $password = "";
    private $email = "";
    private $passwordConf = "";

    // Must have Init()
    function Init()
    {
        $userModel = $this->model("Users");

        $this->view("users/index", ["users" => $userModel->GetAllTopics()]);
    }

    function Create()
    {
        if (isset($_POST['save-user'])) {
            $userModel = $this->model("Users");

            $this->errors = $userModel->validateUser($_POST, true);

            if (count(($this->errors)) === 0) {
                unset($_POST['save-user'], $_POST['passwordConf']);

                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $userModel->Register($_POST);

                $_SESSION['message'] = 'User đã được tạo thành công';
                $_SESSION['type'] = 'success';
                header('location: ' . BASE_URL_ADMIN . '/user');
                exit();
            } else {
                $this->username = $_POST['username'];
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->passwordConf = $_POST['passwordConf'];
            }
        }

        $this->view("users/create", ["errors" => $this->errors, "username" => $this->username, "password" => $this->password, "email" => $this->email, "passwordConf" => $this->passwordConf]);
    }

    function Edit($user_id)
    {
        $userModel = $this->model("Users");

        $user = $userModel->GetUserByID($user_id);

        $this->username = $user['username'];
        $this->password = $user['password'];
        $this->email = $user['email'];
        $this->passwordConf = $user['password'];

        if (isset($_POST['update-user'])) {
            $this->errors = $userModel->validateUser($_POST, false);

            if (count($this->errors) === 0) {
                $id = $_POST['id'];
                unset($_POST['update-user'], $_POST['id']);
                $user->UpdateUserByID($id, $_POST);
                $_SESSION['message'] = 'User đã được sửa thành công';
                $_SESSION['type'] = 'success';
                header('location: ' . BASE_URL_ADMIN . '/user');
                exit();
            } else {
                $this->username = $_POST['username'];
                $this->password = $_POST['password'];
                $this->email = $_POST['email'];
                $this->passwordConf = $_POST['passwordConf'];
            }
        }

        $this->view("users/edit", ["errors" => $this->errors, "username" => $this->username, "password" => $this->password, "email" => $this->email, "passwordConf" => $this->passwordConf]);
    }

    function Delete($user_id)
    {
        $userModel = $this->model("Users");

        $userModel->DeleteUser($user_id);
        $_SESSION['message'] = 'User đã được xóa thành công';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/user/');
    }
}
