<?php

class Topic extends Controller
{
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
            $this->errors = $topicModel->ValidateTopic($_POST);
        
            if (count($this->errors) === 0) {
                unset($_POST['save-topic']);
                $topicModel->CreateTopic($_POST);
                $_SESSION['message'] = 'Topic created successfully';
                $_SESSION['type'] = 'success';
                header('location: ' . BASE_URL_ADMIN . '/topic');
                exit();
            } else {
                $this->name = $_POST['name'];
                $this->description = $_POST['description'];
            }
        }

        $this->view("topics/create", ["name" => $this->name, "description" => $this->description]);
    }

    function Edit($topic_id)
    {
        $topicModel = $this->model("Topics");

        $topic = $topicModel->GetTopicByID($topic_id);

        $this->view("topics/edit", ["topic" => $topic]);

    }

    function Delete($topic_id)
    {
        dd($_POST);
        $topicModel = $this->model("Topics");

        $topicModel->DeleteTopic($topic_id);
    }
}
