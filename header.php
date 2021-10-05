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
                echo "<li class='list'><a href='includes/logout.inc.php'><span class='icon'><img alt='signout' width='50px' src='img/logout.png'/></span><span class='title'>Sign Out</span></a></li>";
            } else {
                echo "<li class='list'><a href='signup.php'><span class='icon'><img alt='signout' width='50px' src='img/login.png'/></span><span class='title'>Sign Up</span></a></li>";
                echo "<li class='list'><a href='login.php'><span class='icon'><img alt='signout' width='50px' src='img/login.png'/></span><span class='title'>Log In</span></a></li>";
            }
        ?>
    </ul>
</div>
