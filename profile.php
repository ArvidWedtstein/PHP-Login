<?php 
session_start();

	include("includes/dbh.inc.php");
	include("includes/functions.inc.php");

    include_once("header.php");
?>
<style>
.loginbox {
    position: relative;
    width: 300px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(0,0,0, 0.5);
    overflow: hidden;
}

.loginbox::before {
    content: '';
    position: absolute;
    width: 150px;
    height: 140%;
    background: linear-gradient(#00ccff, #d400d4);
    animation: rotate 4s linear infinite;
}

.loginbox::after {
    content: '';
    position: absolute;
    inset: 8px;
    background: #0e1538;
    border-radius: 16px;
}
@keyframes rotate {
    0% {
        transform: rotate(0deg);
        filter: hue-rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
        filter: hue-rotate(360deg);
    }
}

.loginbox h2 h1 {
    position: relative;
    color: #ffffff;
    font-size: 3em;
    z-index: 10;
}
</style>
<section>
    <div class="loginbox">
        <h1 class="profiletxt">Profile</h1>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h2>Username: " . $_SESSION["useruid"] . "</h2>";
                echo "<input placeholder='Change Username' name='newusername'/>
            }
            
            

        ?>

    </div>
</section>



<?php

include("footer.php");

?>