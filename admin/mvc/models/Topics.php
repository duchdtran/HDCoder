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

    public function DeleteTopic($topic_id)
    {
        $this->delete($this->table, $topic_id);
    }

    public function ValidateTopic($topic){
        $errors = array();
        if (empty($topic['name'])) {
            array_push($errors, 'Name is required');
        }
    
        if (empty($topic['description'])) {
            array_push($errors, 'Description is required');
        }

        $existingUser = $this->selectOne($this->table, ['name' => $topic['name']]);
        if($existingUser){
            array_push($errors, 'Name already exists');
        }

        return $errors;
    }
}
