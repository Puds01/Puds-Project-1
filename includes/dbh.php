<?php
$dsn = "mysql:host=localhost;dbname=db_abc_backup";
$dbuser = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbuser , $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch (PDOException $e) {
    echo "Connecction failed: " . $e->getMessage();
}


