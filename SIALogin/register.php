<?php
include "db.php";

$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Check if username or email exists
$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' OR username='$username'");

if (mysqli_num_rows($check) > 0) {
    header("Location: registration-form.php?msg=Email or Username already exists");
    exit();
}

// Insert user into database
$sql = "INSERT INTO users (fullname, email, username, password)
        VALUES ('$fullname', '$email', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: login-form.php?msg=Registration successful");
} else {
    header("Location: registration-form.php?msg=Registration failed");
}
?>
