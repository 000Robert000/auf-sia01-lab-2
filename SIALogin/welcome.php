<?php
session_start();
include "db.php";
if(!isset($_SESSION['is_logged_in'])) header("Location: login-form.php");

$user = $_SESSION['user'];
$result = mysqli_query($conn, "SELECT username,email FROM users");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard">
    <h2>Welcome, <?= $user['fullname']; ?></h2>

    <div class="info-box">
        <p><strong>Username:</strong> <?= $user['username']; ?></p>
        <p><strong>Email:</strong> <?= $user['email']; ?></p>
        <p><strong>Login Time:</strong> <?= $_SESSION['login_time']; ?></p>
    </div>

    <h3>Registered Users</h3>
    <table class="table">
        <tr>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['username']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <form action="logout.php" method="POST">
        <button class="logout">Logout</button>
    </form>
</div>
</body>
</html>
