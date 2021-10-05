<?php
include_once('header.php');

?>
<style>


section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height:100vh;
    background: linear-gradient(to bottom, #f1f4f9, #dff1ff);
}

section .color {
    position: absolute;   
    filter: blur(150px);
}

section .color:nth-child(1) {
    top: -350px;
    width: 600px;
    height: 600px;
    background: #ff359b;
}
section .color:nth-child(2) {
    bottom: -150px;
    left: 100px;
    width: 600px;
    height: 600px;
    background: #fffd87;
}
section .color:nth-child(3) {
    bottom: 50px;
    right: 100px;
    width: 300px;
    height: 300px;
    background: #00d2ff;
}


.form {
    position: relative;
    width: 100%;
    height: 100%;
    padding: 40px;
    padding: 10px;
    background: linear-gradient(315deg, #ffec61, #f321d7);
}
.form::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(315deg, #ffec61, #f321d7);
    filter: blur(25px);
    transform: translateY(30px);
}

.form h2 {
    position: relative;
    color: #ffffff;
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 40px;
}

.form h2::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 80px;
    height: 4px;
    background: #ffffff;
}

.form .inputBox {
    width: 100%;
    margin-top: 20px;
}

.form .inputBox input {
    width: 80%;
    background: rgba(0, 0, 0, 0.5);
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #ffffff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}
.form .inputBox input::placeholder {
    color: #ffffff;
}
.form .inputBox input[type="submit"] {
    background: #000000;
    color: #666666;
    max-width: 60px;
    cursor: pointer;
    margin-bottom: 20px;
    font-weight: 600;
} 

</style>
<section class="signup-form">
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
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