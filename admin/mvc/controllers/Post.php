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

    function Edit($post_id)
    {
        $postModel = $this->model("Posts");
        $topicModel = $this->model("Topics");

        $post = $postModel->GetpostByID($post_id);
        $post['body'] = html_entity_decode($post['body']);

        if (isset($_POST['update-post'])) {
            $this->errors = $postModel->validatePost($_POST);

            if (count($this->errors) === 0) {
                $id = $_POST['id'];
                unset($_POST['update-post'], $_POST['id']);

                if ($postModel->UpdatePostByID($id, $_POST) == 1) {
                    $_SESSION['message'] = 'Bài viết đã được sửa thành công';
                    $_SESSION['type'] = 'success';
                    header('location: ' . BASE_URL_ADMIN . '/post/index');
                    exit();
                } else {
                    $_SESSION['message'] = 'Bài viết cập nhật không thành công';
                    $_SESSION['type'] = 'error';
                    header('location: ' . BASE_URL_ADMIN . '/post/index');
                    exit();
                }
            } else {
                $this->id = $_POST['id'];
                $this->title = $_POST['title'];
                $this->body = $_POST['body'];
            }
        }

        $this->view("posts/edit", ["errors" => $this->errors, "post" => $post, "topics" => $topicModel->getAllTopics()]);
    }

    function Delete($post_id)
    {
        $postModel = $this->model("Posts");

        $postModel->DeletePost($post_id);
        $_SESSION['message'] = 'Bài viết đã được xóa thành công';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/post');
    }
}
