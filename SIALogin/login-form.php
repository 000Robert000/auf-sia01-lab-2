<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="left">
        <h1>SIA Lab 2</h1>
        <p>Welcome back! Login to access the system dashboard and view all registered users.</p>
    </div>
    <div class="right">
        <h2>Login</h2>

        <?php if(isset($_GET['msg'])): ?>
            <div class="message error"><?= $_GET['msg']; ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <div class="link">
            <a href="registration-form.php">Create new account</a>
        </div>
    </div>
</div>
</body>
</html>
