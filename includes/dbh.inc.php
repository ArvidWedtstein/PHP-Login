<?php
 session_start();
/*$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "arvidbxr_wp750";*/

//$conn = new mysqli($serverName, $dBUserName, $dBPassword)

$serverName = "localhost";
$dBUserName = "arvidbxr_phptest";
$dBPassword = "php.test";
$dBName = "arvidbxr_wp750";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

/*$sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES ($name, $email, $username, $pwd);";
	if ($conn->multi_query($sql) === TRUE) {
		echo "New user created successfully";
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();*/
?>

