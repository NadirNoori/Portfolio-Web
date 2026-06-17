<?php
require_once __DIR__ . '/../../Config/DBConnection.php';
require_once __DIR__ . '/../Models/adminmodel.php';
session_start();

class LoginController {
    public function processLogin($email, $password) {
        $db = new DBConnection();
        $pdo = $db->getConnection();

        $userModel = new UserModel($pdo);
        $user = $userModel->findByEmail($email);

        $storedPassword = $user['password'] ?? '';
        $isValidPassword = password_verify($password, $storedPassword)
            || ($storedPassword !== '' && $password === $storedPassword);

        if ($user && $isValidPassword) {
            $_SESSION['loggedin'] = true;
            $_SESSION['admin_email'] = $user['email'];
            return true;
        }

        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new LoginController();
    if ($controller->processLogin($_POST['email'], $_POST['password'])) {
        header("Location: ../../admin/adminDashboard.php");
    } else {
        header("Location: ../../admin/index.php?error=1");
    }
    exit;
}