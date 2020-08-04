<?php

class DB {

    public $db;

    public function __construct() {
        require_once("config.php");
        $this->db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET."", DB_USER, DB_PASS);
    }

    public function query($sql) {
        return $this->db->query($sql);
    }
}

?>