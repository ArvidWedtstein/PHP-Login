<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

    include("header.php");
?>
<section class="index">
    <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p>Well, hello there " . $_SESSION["useruid"] . "</p>";
        }

    ?>


	<h1>This is the index page</h1>
	<br>

</section>



<?php

include("footer.php");

?>