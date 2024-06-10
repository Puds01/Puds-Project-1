<?php
require_once 'includes/config.php';
require_once 'includes/signup_view.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="icon" type="image/png" href="Images/logo1.png">
    <title>ABC Manufacturing</title>
</head>
<body>
    <a href = "login.php">Login</a>
    <br>
    <br>
    <div class="container1">
        <img src="Images/icon1.png" alt="Icon" class="icon1">
    </div>
    
    <img src="Images/design1.png" alt="Design" class="design1">

    <div class="container2">
    	<div class="in-container1">
    		<img src="Images/logo2.png" alt="Logo" class="logo2">

        	<form action="includes/registerhandler.php" method="POST" class="form1">
        		<div class="input-design1">
                    <input type = "text" name = "email" placeholder ="" required class="input1">
			        <label class="label1">Email</label>
			    </div>

                <div class="input-design1">
                    <input type = "text" name = "username" placeholder ="" required class="input1">
			        <label class="label1">Username</label>
			    </div>
			    <div class="input-design2">
                <input type = "password" name = "password" placeholder = "" class="input2" required>
                &nbsp;&nbsp;&nbsp;&nbsp;
			    <label class="label2">Password</label>

                <button type ="submit" class="submit"  >Register</button>
                <?php
                check_signup_errors();
                ?>
                <br><br>    
        
                </div>
        	</form>
            <a href = "login.php"><button class="submit">Login here</button></a>
        </div>  
    </div>
    <form action="includes/registerhandler.php" method="POST">
        <?php
        signup_input();
        ?>
        <button>Register</button>
    </form>


</body>

</html>