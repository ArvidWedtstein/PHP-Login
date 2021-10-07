<?php


if (isset($_POST["submit"])) {
    $newusername = $_POST["newusername"];

    require("dbh.inc.php");
    require("functions.inc.php");


    if (emptyInputUpdateUsername($newusername) !== false) {
        header("Location: ../settings.php?error=emptyinput");
        exit();
    }

    if (invalidUid($newusername) !== false) {
        header("Location: ../settings.php?error=invaliduid");
        exit();
    }
    if (uidExists($con, $newusername, $newusername) !== false) {
        header("Location: ../settings.php?error=usernametaken");
        exit();
    }

    renameUser($con, $newname);
} else {
    header("Location: ../settings.php");
    exit();
}




?>