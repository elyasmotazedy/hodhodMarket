<?php

class DB {

    private $host;
    private $dbName;
    private $user;
    private $password;
    private $conn;

    public function __construct($host, $dbName, $user, $password) {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect() {
        $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbName}",$this->user,$this->password);
        if($this->conn) {
            return true;
        }
    }

    public function query($query) {
        return $this->conn->query($query);
    }

    public function closeCursor($stmt) {
        $stmt->closeCursor();
    }

    public function close() {
        $conn = null;
    }

}
$DB = new DB("localhost","hodhod","root","");
$DB->connect();
