<?php

declare (strict_types=1);

function signup_input() 
{
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["error_signup"]["username_taken"])) {
        echo '
        <div class="input-design1">
        <input required class = "input1" type = "text" name = "username" placeholder = "" value ="' . $_SESSION["signup_data"]["username"] . 
        '"><label class="label1">Username</label>
        </div>
        ';
    } else {
        echo '<div class="input-design1">
        <input required class = "input1" type = "text" name = "username" placeholder = "">
        <label class="label1">Username</label></div>';
    }
    
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["error_signup"]["email_used"]) && !isset($_SESSION["error_signup"]["invalid_email"])) {
        echo '
        	<div class="input-design1">
                <input required class = "input1" type = "text" name = "email" placeholder = "" value ="' . $_SESSION["signup_data"]["email"] . '">
                <label class="label1">Email</label></div>
        ';
    } else {
        echo '
        <div class="input-design1">
        <input required class = "input1" type = "text" name = "email" placeholder = "">
        <label class="label1">Email</label></div>';
    }
    echo '
    <div class="input-design2">
    <input required class = "input2" type = "password" name = "password" placeholder = "">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <label class="label2">Password</label>';
}

function check_signup_errors() 
{
    if (isset($_SESSION['error_signup'])) {
        $errors = $_SESSION['error_signup'];
        
        echo "<br>";

        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }
        unset($_SESSION['error_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p> Signup Success!</p>';

    }
}