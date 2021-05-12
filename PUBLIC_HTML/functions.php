<?php

function emptyInputSignup($fname, $lname, $userName, $email, $passwd, $confirmPasswd) {
    $result =0;
    if (empty($fname) || empty($lname) || empty($userName) || empty($email) || empty($passwd) || empty($confirmPasswd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidUsername($userName) {
    $result = 0;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    $result = 0;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function passwdMatch($passwd, $confirmPasswd) {
    $result = 0;
    if ($passwd !== $confirmPasswd) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function usernameExists($conn, $userName, $email) {
    $sql = "SELECT * FROM Customer WHERE Username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");
    }
    mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}
function createUser($conn, $fname, $lname, $email, $passwd, $userName) {
    $sql = "INSERT INTO Customer (F_name, L_name, Email, Password, Username) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");
    }
    $hashedPasswd = password_hash($passwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $hashedPasswd, $userName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: signup.php?error=none");
    exit();
}
?>
