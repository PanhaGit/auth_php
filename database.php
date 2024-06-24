<?php
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "php_auth";
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);

        if ($this->conn->connect_error) {
            die("Connection fialed" . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
