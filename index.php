<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

	$user_data = check_login($con);
    include("header.php");
?>


	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>
    <img alt="php" src="img/php1.png"/>
    <img alt="php" src="img/php2.png"/>
    <img alt="php" src="img/php3.png"/>
    <img alt="php" src="img/php4.png"/>
    <img alt="php" src="img/php5.png"/>
    <img alt="php" src="img/php6.png"/>
    <img alt="php" src="img/php7.png"/>
    <img alt="php" src="img/php8.png"/>
    <img alt="php" src="img/php9.png"/>
    <img alt="php" src="img/php10.png"/>
	<br>
    <a href="login.php">login</a>
	Hello, <?php echo $user_data['user_name']; ?>



    