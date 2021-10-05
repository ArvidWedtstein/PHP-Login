<?php
include_once('header.php');

?>
<style>
<?php include 'css/index.css'; ?>
</style>
<section class="signup-form">
    <div class="signup">
        <h2>Log In</h2>
        <form class="form" action="includes/login.inc.php" method="post">
            <div class="inputBox">
                <input type="text" name="uid" placeholder="Username/Email">
            </div>
            <div class="inputBox">
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="inputBox">
                <button type="submit" name="submit">Log In</button>
            </div>
            <div class="inputBox">
                <a href="signup.php">Don't have a account? Sign Up Now</a>
            </div>  
        </form>
    </div>
    <!--<div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>-->
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>You have to fill in all fields</p>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information</p>";
            }
        }
    ?>
</section>

<?php

include_once('footer.php');

?>