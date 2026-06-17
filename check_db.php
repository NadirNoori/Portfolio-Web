<?php
$dbs = array('portfolio _website', 'portfolio_website');
foreach ($dbs as $db) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=$db;charset=utf8mb4", "root", "");
        echo "OK:$db\n";
        $pdo = null;
    } catch (Exception $e) {
        echo "FAIL:$db -> " . $e->getMessage() . "\n";
    }
}
?>
