<?php

declare (strict_types=1);

function get_user(object $pdo, string $username) 
{
    $query = "SELECT admin_username FROM tbl_admin_account WHERE admin_username = :username;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function get_email(object $pdo, string $email) 
{
    $query = "SELECT admin_email FROM tbl_admin_account WHERE admin_email = :email;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}

function set_user($pdo, $email, $password, $username)
{
    $query = "INSERT INTO tbl_admin_account (admin_email, admin_password, admin_username) VALUES (:email, :password, :username);";

    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->execute();
}