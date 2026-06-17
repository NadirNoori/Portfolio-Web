<?php
session_start();
// Clear all session variables
$_SESSION = array();
// Destroy the actual session
session_destroy();
// Send back to the login page
header("Location: index.php");
exit();