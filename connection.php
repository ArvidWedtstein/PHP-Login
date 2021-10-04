<?php
$serverName = "localhost";
$dBUserName = "arvidbxr_phptest";
$dBPassword = "php.test";
$dBName = "arvidbxr_wp750";

if (!$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName)) {
    die("failed to connect!")
}
/*$conn = new mysqli($serverName, $dBUserName, $dBPassword, $dbName);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}*/


/*$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$sql = "INSERT INTO `users` (`usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES ('$name', '$email', '$username', '$pwd');";
	if ($conn->multi_query($sql) === TRUE) {
		echo "New user created successfully";
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

header("location: ../index.php");
echo "<p style="color: white">User Created</p>"
exit();*/
?>


