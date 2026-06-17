<?php
// app/Models/UserModel.php
require_once __DIR__ . '/../../Config/DBConnection.php';

class UserModel {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM admin_login WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}