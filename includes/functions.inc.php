<?php

function emptyInputSignup($name, $userid, $email, $pwd, $pwdRepeat) {
    $result;

    if (empty($name) || empty($userid) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = TRUE;
    }
    else {
        $result = FALSE;
    }
    return $result;
}

function invalidUid($userid) {
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $userid)) {
        $result = TRUE;
    }
    else {
        $result = FALSE;
    }
    return $result;
}

function invalidEmail($email) {
    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = TRUE;
    }
    else {
        $result = FALSE;
    }
    return $result;
}

function pwdmatch($pwd, $pwdRepeat) {
    $result;

    if ($pwd !== $pwdRepeat) {
        $result = TRUE;
    }
    else {
        $result = FALSE;
    }
    return $result;
}

function uidExists($conn, $userid, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $userid, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = FALSE;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $userid, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $userid, $hashedPwd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;

    if (empty($username) || empty($pwd)) {
        $result = TRUE;
    }
    else {
        $result = FALSE;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../signup.php?error=wrongLogin");
        exit();
    }
    elseif ($checkPwd === true) {
        session_start();
        $_SESSION["usersID"] = $uidExists["usersID"];
        $_SESSION["usersUid"] = $uidExists["usersUid"];

        header("location: ../index.php");
        exit();
    }
}