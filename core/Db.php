<?php

class Db
{
    public $conn;

    private $servername = "localhost";
    private $db_name = "user_credentials";
    private $db_username = "root";
    private $db_password = "";

    function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->db_name",
                $this->db_username,
                $this->db_password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed" . $e->getMessage();
        }
    }
}