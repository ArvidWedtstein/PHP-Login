<?php
	include_once 'header.php';
?>
<head>
	<title>Login</title>
</head>
<section class="login-form">
  <h2>Log In</h2>
	<div class="login">
	<form action="includes/login.inc.php" method="post">
	  	<input type="text" name="name" placeholder="Email/Username...">
	  	<input type="password" name="pwd" placeholder="Password...">
		<button type="submit" name="submit">Log in</button>
	</form>
  </div>
	
</section>

<?php
	include_once 'footer.php';
?>