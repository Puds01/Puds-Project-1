<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_id = $_SESSION["admin_id"];
    $admin_username = $_SESSION["admin_username"];
    $content = $_POST["content"];

    try {
        require_once "dbh.php";
        // Process

        $query = "INSERT INTO tbl_announcement (admin_id, admin_username, public_feed_content) VALUES (:admin_id, :admin_username, :content);";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":admin_id", $admin_id);
        $stmt->bindParam(":admin_username", $admin_username);
        $stmt->bindParam(":content", $content);
        $stmt->execute();

        header ("Location: ../public feed.php");

        $pdo = NULL;
        $stmt = NULL;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header ("Location: ../public feed.php");
    die();
}