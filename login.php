<?php
include_once('header.php');

?>

<section class="signup-form">
    <div class="signup">
        <h2>Log In</h2>
        <form class="form" action="includes/login.inc.php" method="post">
            <div class="inputBox">
                <input type="text" name="name" placeholder="Username/Email">
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
</section>

<?php

include_once('footer.php');

?>