<?php

class Post extends Controller
{

    // Must have Init()
    function Init()
    {
        $postsModel = $this->model("Posts");

        $this->view("posts/index", ["posts" => $postsModel->getAllPosts()]);
    }

    function Create()
    {
        $this->view("posts/create", []);
    }

    function Edit()
    {
        $this->view("posts/edit", []);

    }
}
