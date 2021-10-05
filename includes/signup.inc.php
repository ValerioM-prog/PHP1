<?php

if (!isset($_POST["submit"])) {
    header("location: ../signup.php");
    exit();    
}
else {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $userid = $_POST["userid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $userid, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyInput");
        exit();
    }
    if (invalidUid($name) !== false) {
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (pwdmatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsDontMatch");
        exit();
    }
    if (uidExists($conn, $userid, $email) !== false) {
        header("location: ../signup.php?error=usernameTaken");
        exit();
    }

    createUser($conn, $name, $email, $userid, $pwd);
}