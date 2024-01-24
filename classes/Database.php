<?php

class Database {
    private $mysqli;
    public $sql;
    public $rows;
    // public $escape_string;

    public function __construct() {
        $this->mysqli = new mysqli('localhost', 'root', '12345', 'a_cws');
    }


    public function select($sql){

        // $this->sql = $result = $this->mysqli->query($sql);
        $this->sql = $this->mysqli->query($sql);
        $this->rows = $this->sql->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($sql){
        $this->sql = $this->mysqli->query($sql);
    }

    public function update($sql){
        $this->sql = $this->mysqli->query($sql);
    }

    public function delete($sql){
        $this->sql = $this->mysqli->query($sql);
    }

    public function escape($string) {
        return $this->mysqli->real_escape_string(addslashes(trim($string)));
    }


    public function __destruct() {
        $this->mysqli->close();
    }

        
}