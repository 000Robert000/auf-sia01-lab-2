<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="left">
        <h1>SIA Lab 2</h1>
        <p>Wassup u can register to access the PHP Login & Registration System and see all registered users.</p>
    </div>
    <div class="right">
        <h2>Create Account</h2>

        <?php if(isset($_GET['msg'])): ?>
            <div class="message error"><?= $_GET['msg']; ?></div>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>

        <div class="link">
            <a href="login-form.php">Already have an account? Login</a>
        </div>
    </div>
</div>
</body>
</html>
