<?php

class Home extends Controller
{

    private $search_keyword = "";
    private $count_posts;

    // Must have Init()
    function Init()
    {
        $this->Page(1);
    }

    function Page($page_id){
        $topicsModel = $this->model("Topics");
        $postsModel = $this->model("Posts");

        $posts = array();

        if(isset($_POST['search-term'])){
            $posts = $postsModel->SearchPost($_POST['search-term'], $page_id);
            $this->search_keyword = $_POST['search-term'];
            $this->count_posts =  round($postsModel->GetCountPost($this->search_keyword)/ 10);
        } elseif(!empty($this->search_keyword)){
            $posts = $postsModel->SearchPost($this->search_keyword, $page_id);
            $this->search_keyword = $this->search_keyword;
            $this->count_posts =  round($postsModel->GetCountPost($this->search_keyword)/ 10) ;

        }
        else{
            $posts = $postsModel->getPostPage($page_id);
            $this->search_keyword = "";
            $this->count_posts = round($postsModel->GetCountPosts() / 10);
        }


        $this->view("home", [
            "SearchKeyword" => $this->search_keyword,
            "Topics" => $topicsModel->getAllTopics(),
            "PopularPost" => $postsModel->getAllPosts(),
            "Posts" => $posts,
            "CurrentPost" => $page_id,
            "CountPosts" => $this->count_posts,
        ]);
    }
}
