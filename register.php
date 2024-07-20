<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id="title">Yoga</h1>
    </header>
    <div class="form_box">
        <div class="top">
            <h2>Register</h2>
        </div>

        <form action="login.php" method="post">
            <?php include('error.php') ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" size="40">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" size="40">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1" size="40">
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2" size="40">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Register</button>
            </div>
            <p class="input-group">
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
</body>
</html>