<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_rfid = $_POST["employee_rfid"];
    $employee_email = $_POST["employee_email"];
    $employee_password = $_POST["employee_password"];
    $employee_username = $_POST["employee_username"];
    $employee_name = $_POST["employee_name"];
    $employee_position = $_POST["employee_position"];
    $employee_department = $_POST["employee_department"];

    try {
        require_once "dbh.php";
        // Process

        $query = "INSERT INTO tbl_employee_account (employee_rfid, employee_email, employee_password, employee_username, employee_name, employee_position, employee_department) VALUES (:employee_rfid, :employee_email, :employee_password, :employee_username, :employee_name, :employee_position, :employee_department);";

        $stmt = $pdo->prepare($query);

        $options = [
            'cost' => 12
        ];
        $hashedPassword = password_hash($employee_password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":employee_rfid", $employee_rfid);
        $stmt->bindParam(":employee_email", $employee_email);
        $stmt->bindParam(":employee_password", $hashedPassword);
        $stmt->bindParam(":employee_username", $employee_username);
        $stmt->bindParam(":employee_name", $employee_name);
        $stmt->bindParam(":employee_position", $employee_position);
        $stmt->bindParam(":employee_department", $employee_department);
        $stmt->execute();

        header ("Location: ../employee registration.php");

        $pdo = NULL;
        $stmt = NULL;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../employee registration.php");
    die();
}