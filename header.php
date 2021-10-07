<!DOCTYPE html>
<html>	
    <head>
        <link rel="stylesheet" href="css/index.scss">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    </head>
<body>
<div class="navigation">
    <ul>
    
        <li class="list <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '';?>">
            <a href="index.php">
                <span class="icon"><i class="fas fa-igloo"></i></span>
                <span class="title">Home</span>
            </a>
        </li>
        <li class="list <?php echo basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'active' : '';?>">
            <a href="profile.php">
                <span class="icon"><i class="fas fa-id-badge"></i></span>
                <span class="title">Profile</span>
            </a>
        </li>
        <li class="list <?php echo basename($_SERVER['PHP_SELF']) == 'messages.php' ? 'active' : '';?>">
            <a href="#">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <span class="title">Messages</span>
            </a>
        </li>
        <li class="list <?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : '';?>">
            <a href="settings.php">
                <span class="icon"><i class="fas fa-cogs"></i></span>
                <span class="title">Settings</span>
            </a>
        </li>
        <?php
            if (isset($_SESSION["useruid"])) {
                if (basename($_SERVER['PHP_SELF']) == 'logout.inc.php') {
                    echo "<li class='list active'><a href='includes/logout.inc.php'><span class='icon'><img alt='signout' width='50px' src='img/logout.png'/></span><span class='title'>Sign Out</span></a></li>"; 
                } else {
                    echo "<li class='list'><a href='includes/logout.inc.php'><span class='icon'><img alt='signout' width='50px' src='img/logout.png'/></span><span class='title'>Sign Out</span></a></li>"; 
                }
                      
            } else {
                if (basename($_SERVER['PHP_SELF']) == 'signup.php') {
                    echo "<li class='list active'><a href='signup.php'><span class='icon'><img alt='signout' width='50px' src='img/login.png'/></span><span class='title'>Sign Up</span></a></li>";
                } else {
                    echo "<li class='list'><a href='signup.php'><span class='icon'><img alt='signout' width='50px' src='img/login.png'/></span><span class='title'>Sign Up</span></a></li>";
                }
                if (basename($_SERVER['PHP_SELF']) == 'login.php') {
                    echo "<li class='list active'><a href='login.php'><span class='icon'><img alt='signout' width='50px' src='img/login.png'/></span><span class='title'>Log In</span></a></li>";
                } else {
                    echo "<li class='list'><a href='login.php'><span class='icon'><img alt='signout' width='50px' src='img/login.png'/></span><span class='title'>Log In</span></a></li>";
                }
            }
        ?>
    </ul>
</div>


