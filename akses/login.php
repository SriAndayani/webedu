<?php
session_start();
// Process login form submission here
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
        <div class="register">
            <span>Don't have an account? <a href="register.php">Sign up now</a></span>
        </div>
    </form>
</body>
</html>
