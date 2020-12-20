<?php

class DB
{
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "hdcoder";

    function __construct()
    {
        $this->con = new MySQLi($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->con->connect_error) {
            die('Database connection error: ' . $this->con->connect_error);
        }
    }

    function executeQuery($sql, $data)
    {
        $stmt = $this->con->prepare($sql);
        $value = array_values(($data));
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        return $stmt;
    }

    function query($sql)
    {
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

    function selectAll($table, $conditions = [])
    {
        $sql = "SELECT * FROM $table";

        if (empty($conditions)) {
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        } else {
            $i = 0;
            foreach ($conditions as $key => $value) {
                if ($i === 0) {
                    $sql = $sql . " WHERE $key=?";
                } else {
                    $sql = $sql . " AND $key=?";
                }
                $i++;
            }
            $stmt = $this->executeQuery($sql, $conditions);
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
    }

    function selectOne($table, $conditions)
    {
        $sql = "SELECT * FROM $table";

        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $sql = $sql . " LIMIT  1";

        $stmt = $this->executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    }

    function create($table, $data)
    {
        $sql = "INSERT INTO $table SET ";

        $i = 0;
        foreach ($data as $key => $value) {
            if ($i == 0) {
                $sql = $sql . " $key=?";
            } else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        $stmt = $this->executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $id;
    }


    function update($table, $id, $data){
        global $conn;
    
        $sql = "UPDATE $table SET ";
    
        $i = 0;
        foreach($data as $key => $value){
            if($i == 0){
                $sql = $sql . " $key=?";
            } else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
    
        $sql = $sql . " WHERE id=?";
        $data['id'] = $id;
        $stmt = $this->executeQuery($sql, $data);
        return $stmt->affected_rows;
    }

    function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=?";

        $stmt = $this->executeQuery($sql, ['id' => $id]);
        return $stmt->affected_rows;
    }
}
