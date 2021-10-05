<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

    include_once("header.php");
?>
<style>
<?php include 'css/index.css'; ?>
</style>
<section>
    <div class="loginbox">
        <h1 class="profiletxt">Profile</h1>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h2>Username: " . $_SESSION["useruid"] . "</h2>";
                echo "<input placeholder='Change Username' name='newusername'/>"
            }
            
            

        ?>

    </div>
</section>



<?php

include("footer.php");

?>