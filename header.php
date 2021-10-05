
<!DOCTYPE html>
<html>	
    <head>
        <link rel="stylesheet" href="css/index.css">
    </head>
<body>
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