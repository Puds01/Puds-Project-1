<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    try {
        require_once "dbh.php";
        require_once "signup_model.php";
        require_once "signup_contr.php";

        // ERROR HANDLERS
        $errors = [];

        if (is_input_empty($username, $email, $password)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid Email used!";
        }
        if (is_username_registered($pdo, $username)) {
            $errors["username_taken"] = "Username is already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email is already registered!";
        }

        require_once "config.php";

        if ($errors) {
            $_SESSION["error_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header ("Location: ../register.php");
            die();
        }
        // Process
        create_user($pdo, $email, $password, $username);

        header ("Location: ../login.php?signup=success");

        $pdo = NULL;
        $stmt = NULL;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../register.php");
    die();
}