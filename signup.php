<?php
include_once('header.php');

?>
<style>
<?php include 'css/index.css'; ?>
</style>
<section class="signup-form">
    <div class="signup">
        <form class="form" action="includes/signup.inc.php" method="post">
            <h2>Signup Form</h2>
            <div class="inputBox">
                <input type="text" name="name" placeholder="Full name...">
            </div>
            <div class="inputBox">
                <input type="text" name="email" placeholder="Email...">
            </div>
            <div class="inputBox">
                <input type="text" name="uid" placeholder="Username...">
            </div>
            <div class="inputBox">
                <input type="password" name="pwd" placeholder="Password...">
            </div>
            <div class="inputBox">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
            </div>
            <div class="inputBox">
				<button type="submit" name="submit">Signup</button>
			</div>
		</form>
    </div>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>You have to fill in all fields</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a valid username</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a valid email</p>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords don't match</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something didn't go as planned, try again later!</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>That username is already taken</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            } 
        }
    ?>
</section>



<?php

include_once('footer.php');

?>