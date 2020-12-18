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

    public function GetPostById($post_id){
        $post = $this->selectOne($this->table, ['id' => $post_id]);
        return $post;
    }
}
