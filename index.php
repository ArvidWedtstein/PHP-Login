<?php
	include_once('header.php');
    session_start();
    include("includes/dbh.inc.php");
    include("includes/functions.php");

    $user_data = check_login($conn);
?>
<head>
	<title>Home</title>
</head>
<body>
	<div class="test">
		<p>Main Page</p>
		
		<img src="./img/php.png">
	</div>
    <a href="signup.php">Sign Up</a>
    <a href="login.php">Log In</a>
</body>
<?php
	include_once('footer.php');
?>