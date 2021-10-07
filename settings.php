<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

    include_once("header.php");
?>
<style>
<?php include 'css/index.scss'; ?>
</style>
<section class="signup-form">
    <div class="signup">
        <form class="form" action="includes/settings.inc.php" method="post">
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h1 class='profiletxt'>Settings</h1>";
                echo "<h2>Username: " . $_SESSION["useruid"] . "</h2>";
                echo "<br>";
                echo "<input placeholder='Change Username' name='newusername'/>";
                echo "<button type='submit' name='submit'>Change Username</button>";
            } else {
                echo "<a class='profiletxt' href='login.php'>Log In to be able to change your username</a>";
            }
        ?>
		</form>
    </div>
</section>




<?php

include("footer.php");

?>