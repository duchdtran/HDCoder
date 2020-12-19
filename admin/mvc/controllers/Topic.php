<?php

class Topic extends Controller
{
    private $errors = array();
    private $name = "";
    private $description = "";

    // Must have Init()
    function Init()
    {
        $postsModel = $this->model("Topics");

        $this->view("topics/index", ["topics" => $postsModel->GetAllTopics()]);
    }

    function Create()
    {
        if(isset($_POST['save-topic'])){
            $topicModel = $this->model("Topics");
            $this->errors = $topicModel->ValidateTopic($_POST, true);
        
            if (count($this->errors) === 0) {
                unset($_POST['save-topic']);
                $topicModel->CreateTopic($_POST);
                $_SESSION['message'] = 'Chủ đề đã được tạo thành công';
                $_SESSION['type'] = 'success';
                header('location: ' . BASE_URL_ADMIN . '/topic');
                exit();
            } else {
                $this->name = $_POST['name'];
                $this->description = $_POST['description'];
            }
        }

        $this->view("topics/create", ["errors" => $this->errors, "name" => $this->name, "description" => $this->description]);
    }

    function Edit($topic_id)
    {
        $topicModel = $this->model("Topics");

        $topic = $topicModel->GetTopicByID($topic_id);

        if (isset($_POST['update-topic'])) {
            $this->errors = $topicModel->validateTopic($_POST);
        

            dd($this->errors);
            if (count($this->errors) === 0) {
                $id = $_POST['id'];
                unset($_POST['update-topic'], $_POST['id']);
                $topicModel->UpdateTopicByID($id, $_POST);
                $_SESSION['message'] = 'Chủ đề đã được sửa thành công';
                $_SESSION['type'] = 'success';
                header('location: ' . BASE_URL_ADMIN . '/topic/index');
                exit();
            } else {
                $this->id = $_POST['id'];
                $this->name = $_POST['name'];
                $this->description = $_POST['description'];
            }
           
        }

        $this->view("topics/edit", ["errors" => $this->errors, "topic" => $topic]);

    }

    function Delete($topic_id)
    {
        $topicModel = $this->model("Topics");

        $topicModel->DeleteTopic($topic_id);
        $_SESSION['message'] = 'Chủ đề đã được xóa thành công';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
    }
}
