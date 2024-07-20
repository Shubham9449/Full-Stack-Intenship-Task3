<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id="title">Yoga</h1>
    </header>
    <div class="form_box">
        <div class="top">
            <h2>Log In</h2>
        </div>

        <form action="login.php" method="post">
            <?php include('error.php') ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" size="40">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" size="40">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p class="input-group">
                Not a member yet? <a href="register.php">SignUp</a>
            </p>
        </form>
    </div>
</body>
</html>