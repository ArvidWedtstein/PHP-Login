<?php
$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "arvidbxr_wp750";


if (!$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName)) {
    die("failed to connect!");
} 

?>


