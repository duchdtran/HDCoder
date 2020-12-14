<?php
class Topics extends DB
{
    protected $table = "topics";

    public function GetAllTopics()
    {
        
        $topics = $this->selectAll($this->table);
        return $topics;
    }
}
