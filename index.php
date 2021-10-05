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
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h2>Well, hello there " . $_SESSION["useruid"] . "</h2>";
            }

        ?>

        <br>
        <h1>This is the index page</h1>
        <br>
    </div>
</section>



<?php

include("footer.php");

?>