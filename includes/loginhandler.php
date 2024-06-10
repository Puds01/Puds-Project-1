<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once 'dbh.php';
        require_once 'login_model.php';
        require_once 'login_contr.php';

        // ERROR HANDLERS
        $errors = [];

        if (is_input_empty($email, $password)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $email);

        if (is_email_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        if (!is_email_wrong($result) && is_password_wrong($password, $result["admin_password"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once "config.php";

        if ($errors) {
            $_SESSION["error_login"] = $errors;

            header ("Location: ../login.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["admin_id"];
        session_id($sessionId);

        $_SESSION["admin_id"] = $result["admin_id"];
        $_SESSION["admin_username"] = htmlspecialchars($result["admin_username"]);
        
        $_SESSION["last_regeneration"] = time();

        header("Location: ../public feed.php?login=success");
        $pdo = NULL;
        $stmt = NULL;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header ("Location: ../login.php");
    die();
}