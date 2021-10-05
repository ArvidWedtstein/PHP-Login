
<!DOCTYPE html>
<html>	
    <head>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    </head>
<body>
<div class="navigation">
    <ul>
        <li class="list active">
            <a href="#">
                <span class="icon"><i class="fas fa-igloo"></i></span>
                <span class="title">Home</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><i class="fas fa-id-badge"></i></span>
                <span class="title">Profile</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <span class="title">Messages</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"><i class="fas fa-cogs"></i></span>
                <span class="title">Settings</span>
            </a>
        </li>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li class='list'><a href='includes/logout.inc.php'><span class='icon'></span><span class='list'>Sign Out</span></a></li>";
            } else {
                echo "<li><a href='signup.php'>Sign Up</a></li>";
                echo "<li><a href='login.php'>Log In</a></li>";
            }
        ?>
    </ul>
</div>
<nav>
    <div class="wrapper">
        <a href="index.php"><img src="img/php1.png" width="50px" alt="php">PHP</a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Stuff</a></li>
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                } else {
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Log In</a></li>";
                }

            ?>
        </ul>
    </div>
</nav>
<?php
session_start();
?>