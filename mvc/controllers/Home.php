<?php

class Home extends Controller{

    // Must have Init()
    function Init(){
        $topics = $this->model("Topics");
        $posts = $this->model("Posts");

        $this->view("home", [
            "Topics" => $topics->getAllTopics(),
            "Posts" => $posts->getAllPosts()
        ]);
    }
}
?>