<?php

class DBConnection
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "portfolio _website";

    public $conn;

    public function getConnection()
    {
        return $this->conn;
    }

    public function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->server};dbname={$this->database};charset=utf8mb4",
                $this->username,
                $this->password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $ex) {
            die("Connection is Failed! " . $ex->getMessage());
        }
    }
}
