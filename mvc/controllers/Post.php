<?php
 
 class Post extends Controller{
    function Init($post_id){
        $topicModel = $this->model("Topics");
        $postModel = $this->model("Posts");

        $this->view("post", ["post" => $postModel->GetPostById($post_id), 
        "popular" => $postModel->GetPostPage(1),
        "topics" => $topicModel->GetAllTopics()]);
    }
 }