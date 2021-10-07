<?php
include_once('header.php');
?>
<style>
<?php include 'css/index.scss'; ?>
</style>
<section class="signup-form">
    <div class="signup">
        <form class="form" action="includes/login.inc.php" method="post">
            <h2>Log In</h2>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='errortxt'>You have to fill in all fields</p>";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<p class='errortxt'>Incorrect login information</p>";
                    }
                }
            ?>
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
                <a href="signup.php">Don't have an account? Sign Up Now</a>
            </div>  
        </form>
    </div>
</section>

<?php

include_once('footer.php');

?>