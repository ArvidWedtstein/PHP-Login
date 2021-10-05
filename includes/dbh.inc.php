<?php
$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "arvidbxr_wp750";

$con = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$con) {
    die("failed to connect!: " . mysqli_connect_error());
} 

?>


