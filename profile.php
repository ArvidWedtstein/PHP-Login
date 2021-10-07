<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

    include_once("header.php");
?>
<style>
<?php include 'css/index.scss'; ?>
</style>
<section>
    <div class="box">
        
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h1 class='profiletxt'>Profile</h1>";
                echo "<h2>Username: " . $_SESSION["useruid"] . "</h2>";
            } else {
                echo "<a class='profiletxt' href='login.php'>Log In to view your profile</a>";
            }
            
            
            

        ?>

    </div>
</section>



<?php

include("footer.php");

?>