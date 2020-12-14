<?php
class Posts extends DB
{
    protected $table = "posts";

    public function GetAllPosts()
    {
        $posts = $this->selectAll($this->table);
        return $posts;
    }
}
