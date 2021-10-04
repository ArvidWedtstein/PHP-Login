<?php
session_start();
    include("includes/dbh.inc.php");
    include("includes/functions.php");

	include_once 'header.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $usersName = $_POST["name"];
        $usersEmail = $_POST["email"];
        $usersUid = $_POST["uid"];
        $usersPwd = $_POST["pwd"];

        if (!empty($name) && !empty($pwd) && !is_numeric($username)) {
            // save to database

            $query = "insert into users (usersName, usersEmail, usersUid, usersPwd) values ('$usersName', '$usersEmail', '$usersUid', '$usersPwd')";
            mysqli_query($conn, $query);

            header("Location: login.php");
            die;
        } else {
            echo "Please enter some valid information"
        }
    }
?>
<body>

	<section class="signup-form">
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
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
	</section>
    <!--<?php
        /*if (isset($_GET["error"])) {
                if (isset($_GET["error"] == "emptyinput")) {
                        echo "<p>FILL IN ALL FIELDS</p>";
                }
                else if (isset($_GET["error"] == "invaliduid")) {
                    echo "<p>invalid username</p>"
                }
                else if (isset($_GET["error"] == "invalidemail")) {
                    echo "<p>invalid email</p>"
                }
                else if (isset($_GET["error"] == "passwordsdontmatch")) {
                    echo "<p>Passwords doesn't match</p>"
                }
                else if (isset($_GET["error"] == "stmtfailed")) {
                    echo "<p>AAAAAAAAAAAAAAA. Something went wrong. Try again later</p>"
                }
                else if (isset($_GET["error"] == "usernametaken")) {
                    echo "<p>Username already taken!</p>"
                }
                else if (isset($_GET["error"] == "none")) {
                    echo "<p>You have signed up!</p>"
                }
                else if (isset($_GET["error"] == "none")) {
                    echo "<p>You have signed up!</p>"
                }
            }*/
	    ?>-->
</body>

<?php
	include_once 'footer.php';
?>