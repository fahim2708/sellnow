<?php
try {
    $dbPath = __DIR__ . '/../database/database.sqlite';
    $pdo = new PDO('sqlite:' . $dbPath);
    echo "SQLite PDO works ✅";
} catch (Throwable $e) {
    echo "SQLite PDO failed ❌<br>";
    echo $e->getMessage();
}
