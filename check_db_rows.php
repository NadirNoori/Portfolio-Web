<?php
$pdo = new PDO('mysql:host=localhost;dbname=portfolio _website;charset=utf8mb4', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

foreach (['admin_login', 'admin'] as $table) {
    try {
        $stmt = $pdo->query("SHOW TABLES LIKE '$table'");
        echo "TABLE_EXISTS:$table => " . (($stmt->rowCount() > 0) ? 'yes' : 'no') . "\n";
    } catch (Exception $e) {
        echo "TABLE_CHECK_FAIL:$table -> " . $e->getMessage() . "\n";
    }
}

try {
    $stmt = $pdo->query('SELECT table_name FROM information_schema.tables WHERE table_schema = "portfolio _website"');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "TABLE:" . $row['table_name'] . "\n";
    }
} catch (Exception $e) {
    echo 'SCHEMA_ERROR: ' . $e->getMessage() . "\n";
}

try {
    $stmt = $pdo->query('SELECT email, password FROM admin_login LIMIT 5');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo 'ROW:' . json_encode($row) . "\n";
    }
} catch (Exception $e) {
    echo 'QUERY_ERROR: ' . $e->getMessage() . "\n";
}
?>
