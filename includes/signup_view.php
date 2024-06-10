<?php

declare (strict_types=1);

function signup_input() 
{
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["error_signup"]["username_taken"])) {
        echo '
        <form action="includes/registerhandler.php" method="POST" class="form1">
        	<div class="input-design1">
                <input class = "input1" type = "text" name = "username" placeholder = "Username" value ="
                
                
                
                
                
                ' . $_SESSION["signup_data"]["username"] . '">
        ';
    } else {
        echo '<input class = "input1" type = "text" name = "username" placeholder = "Username">';
    }
    
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["error_signup"]["email_used"]) && !isset($_SESSION["error_signup"]["invalid_email"])) {
        echo '<input class = "input1" type = "text" name = "email" placeholder = "Email" value ="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input class = "input1" type = "text" name = "email" placeholder = "Email">';
    }
    echo '<input type = "password" name = "password" placeholder = "Password">';
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