<?php

class Home extends Controller
{

    // Must have Init()
    function Init()
    {
        $topicsModel = $this->model("Topics");
        $postsModel = $this->model("Posts");
        $usersModel = $this->model("Users");

        $topics = $topicsModel->getAllTopics();
        $posts = $postsModel->getAllPosts();

        $this->view("home", [
            "Topics" => $topics,
            "Posts" => $posts,
        ]);
    }
}
