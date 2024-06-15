<?php
include 'includes/dbh.php';
require_once 'includes/config.php';
require_once 'includes/login_view.php';

    $query = "SELECT * FROM tbl_announcement ORDER BY public_feed_id DESC";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cdff7ebe3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="icon" type="image/png" href="Images/logo1.png">
    <title>ABC Manufacturing</title>
</head>
<body>
    <div id="loader"></div>
    <div class="container1">
        <img src="Images/icon1.png" alt="Icon" class="icon1">
        </a>
    </div>
    <div class="side-nav">

        <img src="Images/logo2.png" alt="Logo" class="logo2">
        <button class="dropdown-btn">Administration
            <i class="fa-solid fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="employee registration.php">Employee Registration</a>
        </div>
        <button class="dropdown-btn">Utility
            <i class="fa-solid fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="camera.php">Live Camera</a>
        </div>
        <button class="dropdown-btn">Report Management
            <i class="fa-solid fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="activity history.php">Activity History</a>
            <a href="public feed.php">Public Feed</a>
        </div>
        <button class="dropdown-btn">RFID Center
            <i class="fa-solid fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="support.php">RFID Support</a>
            <a href="rfid management.php">RFID Management</a>
        </div>
        <form action="includes/logout.php" method="POST">
            <button class="dropdown-btn">Sign out</button>
        </form>
    </div>

        <div class="title-container">
            <p><span class="auto-type"></span></p>
            <?php
            output_username();
            ?>
        </div>


        <div class="A-container">
            <form action = "includes/create_post.php" method = "POST">
            <h2 class="A-title">CREATE ANNOUNCEMENT</h2>
            <textarea required type="text" name="content" placeholder="What's on your mind, Admin?"></textarea>
            <button>Post</button>
            </form>
            <br>
            <?php
             if (!empty($result)) {
                foreach ($result as $row) {
                    if (isset($row['public_feed_content'])) {
                        echo '#' .  $row['public_feed_id'] . " " . $row ['admin_username'] .     '<br>';
                        echo '<textarea readonly>' . $row['public_feed_content'] . '</textarea><br>' .date("H:i:sA",strtotime  ($row ['public_feed_time'])) . '<br>' .$row['public_feed_date'] .     '<br><br><br>';
                    } else {
                        echo 'No content available<br>';
                    }
                }
            } else {
                echo 'No announcements found.';
            }
            ?>
        </div>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6vBWzP2n_5Y?si=0oCEzv3B8a26Owfd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.getElementsByClassName("dropdown-btn");
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
});

        var typed = new Typed(".auto-type",{
            strings : ["Report Management", "Public Feed"],
            typeSpeed : 150,
            backSpeed : 150,
            looped : true
         })

        var loader = document.getElementById("loader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

    </script>



</body>

</html>
