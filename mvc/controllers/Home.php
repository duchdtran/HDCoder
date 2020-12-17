<?php

class Home extends Controller
{

    // Must have Init()
    function Init()
    {
        $topicsModel = $this->model("Topics");
        $postsModel = $this->model("Posts");

        $this->view("home", [
            "Topics" => $topicsModel->getAllTopics(),
            "Posts" => $postsModel->getAllPosts(),
        ]);
    }
}
