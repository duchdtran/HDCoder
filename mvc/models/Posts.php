<?php
class Posts extends DB
{
    protected $table = "posts";

    public function GetAllPosts()
    {
        $sql =  "SELECT p.*, u.username AS 'author' FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=1";
        $posts = $this->query($sql);

        return $posts;
    }

    public function GetCountPosts(){
        $sql = "SELECT COUNT(*) FROM $this->table  WHERE published=1";
        $count = $this->query($sql);

        return $count[0]['COUNT(*)'];
    }

    public function GetPostPage($post_id)
    {
        $page = ($post_id - 1) * 10;
        $sql =  "SELECT p.*, u.username AS 'author' FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=1 LIMIT $page, 10";
        $posts = $this->query($sql);

        return $posts;
    }

    public function GetPostById($post_id){
        $post = $this->selectOne($this->table, ['id' => $post_id]);
        return $post;
    }

    public function SearchPost($keyword, $page = 1){
        $sql =  "SELECT p.*, u.username AS 'author' FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=1 AND p.body LIKE '%$keyword%' LIMIT $page, 10";
        $posts = $this->query($sql);

        return $posts;
    }

    public function GetCountPost($keyword){
        $sql =  "SELECT COUNT(*) FROM posts WHERE published=1 AND body LIKE '%$keyword%'";
        $count_posts = $this->query($sql);


        return $count_posts[0]['COUNT(*)'];
    }
}
