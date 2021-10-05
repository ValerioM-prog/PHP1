<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="Font-Awesome-master\css\all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <div class="container">
        <div class="1 w1 wrapper">
            <div class="2 logo">
                <div><h1>Splice.</h1></div>
            </div>
            <div class="2 navigation">
                <div><nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">Promotions</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </nav></div>
                <div class="search"><input type="text" placeholder="Seach"></div>
            </div>
            <div class="2 user-control">
                <div class="3 user-info"><i class="user fas fa-user-circle"></i>Name</div>
                <div class="3 user-login">
                        <?php
                            if (isset($_SESSION["usersUid"])) {
                                echo "<button type='button' class='button-login'><a href='profile.php'>Profile</a></button>";
                                echo "<button type='button' class='button-login'><a href='includes/logout.inc.php'>Log Out</a></button>";
                            }
                            else {
                                echo "<button type='button' class='button-login'><a href='login.php'>Log In</a></button>";
                                echo "<button type='button' class='button-login'><a href='signup.php'>Sign Up</a></button>";
                            }
                        ?>
                        
                </div>
                <div class="3 user-mobile">
                    <div class="open-menu"><i class="fa fa-bars"></i></div>
                    <div class="close-menu"><i class="fa fa-times"></i></div>                        
                    <div class="close-log-menu"><i class="fa fa-times"></i></div>
                </div>
            </div>
        </div>
        <div class="1 w2 wrapper">