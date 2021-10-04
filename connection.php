<?php
$serverName = "localhost";
$dBUserName = "arvidbxr_phptest";
$dBPassword = "php.test";
$dBName = "arvidbxr_wp750";

if (!$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName)) {
    die("failed to connect!")
} else {
    echo "connected!!!!!!!!!!!!!!!!!!!!!"
}
/*$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
*/
?>


