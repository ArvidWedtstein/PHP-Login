<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>AH YES PHP</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>