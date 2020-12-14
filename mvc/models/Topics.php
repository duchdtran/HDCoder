<?php
class Topics extends DB
{
    public function GetAllTopics()
    {
        $topics = ['Android', 'Flutter', 'PHP', 'IOS'];

        return $topics;
    }
}
