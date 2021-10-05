<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

    include("header.php");
?>


	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>
	<br>
    <a href="login.php">login</a>




<?php

include("footer.php");

?>