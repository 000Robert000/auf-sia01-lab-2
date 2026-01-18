<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['login_time'] = date("Y-m-d H:i:s");
        header("Location: welcome.php");
        exit();
    }
}

header("Location: login-form.php?msg=Invalid username or password");
?>
