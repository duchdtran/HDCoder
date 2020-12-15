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

        for ($i = 0; $i < count($posts); $i++) {
            $user = $usersModel->GetUserByID($posts[$i]['user_id']);
            $posts[$i]['author'] = $user['username'];
 
        }        

        $this->view("home", [
            "Topics" => $topics,
            "Posts" => $posts,
        ]);
    }
}
