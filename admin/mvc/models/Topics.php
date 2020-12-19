<?php
class Topics extends DB
{
    protected $table = "topics";

    public function GetAllTopics()
    {
        $topics = $this->selectAll($this->table);
        return $topics;
    }

    public function CreateTopic($topic){
        $topic_id =  $this->create($this->table, $topic);
        return $topic_id;
    }

    public function GetTopicByID($topic_id){
        $topic = $this->selectOne($this->table, ['id' => $topic_id]);
        return $topic;
    }

    public function UpdateTopicByID($topic_id, $topic){
        $topic_id = $this->update('topics', $topic_id, $topic);
        return $topic_id;
    }

    public function DeleteTopic($topic_id)
    {
        $this->delete($this->table, $topic_id);
    }

    public function ValidateTopic($topic, $checkExistingUser = false){
        $errors = array();
        if (empty($topic['name'])) {
            array_push($errors, 'Tên chủ đề không được bỏ trống');
        }
    
        if (empty($topic['description'])) {
            array_push($errors, 'Mô tả chủ đề không được bỏ trống');
        }

        $existingUser = $this->selectOne($this->table, ['name' => $topic['name']]);
        if($existingUser && $checkExistingUser){
            array_push($errors, 'Tên chủ đề đã tồn tại');
        }

        return $errors;
    }
}
