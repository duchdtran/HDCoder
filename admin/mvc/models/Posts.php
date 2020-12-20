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

    public function CreatePost($post){
        $post_id = $this->create($this->table, $post);
        return $post_id;
    }

    public function GetPostById($post_id){
        $post = $this->selectOne($this->table, ['id' => $post_id]);
        return $post;
    }

    public function UpdatePostByID($post_id, $post){
        return $this->update($this->table, $post_id, $post);
    }

    public function DeletePost($post_id)
    {
        $this->delete($this->table, $post_id);
    }

    public function ValidatePost($post, $checkExistingUser = false){
        $errors = array();
        if (empty($post['title'])) {
            array_push($errors, 'Tiêu đề không được bỏ trống');
        }
    
        if (empty($post['body'])) {
            array_push($errors, 'Nội dung không được bỏ trống');
        }

        $existingUser = $this->selectOne($this->table, ['title' => $post['title']]);
        if($existingUser && $checkExistingUser){
            array_push($errors, 'Tiêu đề đã tồn tại');
        }

        return $errors;
    }
}
