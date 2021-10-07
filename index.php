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
        <h1>Main Page</h1>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h2>Well, hello there " . $_SESSION["useruid"] . "</h2>";
            }

        ?>
        <br>
        
    </div>
</section>



<?php

include("footer.php");

?>