<?php

class Post extends Controller
{
    private $errors = array();
    private $topic_id = 0;
    private $title = "";
    private $body = "";

    // Must have Init()
    function Init()
    {
        $postsModel = $this->model("Posts");

        $this->view("posts/index", ["posts" => $postsModel->getAllPosts()]);
    }

    function Create()
    {
        $topicModel = $this->model('Topics');
        $postModel = $this->model("Posts");

        if (isset($_POST['save-post'])) {
            $this->errors = $postModel->ValidatePost($_POST);

            if (count($this->errors) === 0) {
                unset($_POST['save-post'], $_POST['topic_id']);
                $_POST['body'] = htmlentities($_POST['body']);
                $_POST['published'] = isset($_POST['published']) ? 1 : 0;
                $_POST['user_id'] = $_SESSION['id'];
                $_POST['image'] = 'https://dean2020.edu.vn/wp-content/uploads/2020/04/lap-trinh-vien.jpg';
                $postModel->CreatePost($_POST);
                $_SESSION['message'] = 'Bài viết đã được tạo thành công';
                $_SESSION['type'] = 'success';
                header('location: ' . BASE_URL_ADMIN . '/post');
                exit();
            } else {
                $this->name = $_POST['name'];
                $this->description = $_POST['description'];
            }
        }

        $this->view("posts/create", [
            "errors" => $this->errors,
            "topic_id" => $this->topic_id,
            "topics" => $topicModel->GetAllTopics(),
            "title" => $this->title,
            "body" => $this->body
        ]);
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

        $this->view("posts/edit", ["errors" => $this->errors, "topic" => $topic]);
    }

    function Delete($topic_id)
    {
        dd($_POST);
        $topicModel = $this->model("Topics");

        $topicModel->DeleteTopic($topic_id);
        $_SESSION['message'] = 'Chủ đề đã được xóa thành công';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/posts/index.php');
    }
}
