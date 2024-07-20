<?php
session_start();
$username ="";
$email ="";
$errors = array();
$db = mysqli_connect('local host', 'root', 'gayathri@29', 'bms');
if (isset($_POST['reg_user'])){
    $username = mysql_real_escape_string($db, $_POST['username']);
    $email = mysql_real_escape_string($db, $_POST['email']);
    $password_1 = mysql_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysql_real_escape_string($db, $_POST['password_2']);
    if(empty($username)){array_push($errors, "Username is requried");}
    if(empty($email)){array_push($errors, "Email is required");}
    if(empty($password_1)){array_push($errors, "Passrord is required");}
    if($password_1 != $password_2){
        array_push($errors, "The two passwords don't match");
    }
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR password_1='password_1'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if($user){
        if($uer['username'] === $usernsme) {
            array_push($errors, "Username already exists");
        }
        if($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }
    if(count($errors) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO users (username, email, password)
                   VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        header('location: login.php');
    }
}
if(isset($_POST['login_user'])){
    $username = mysql_real_escape_string($db, $_POST['username']);
    $password = mysql_real_escape_string($db, $_POST['password']);
    if(empty($username)){
        array_push($errors, "username is required");
    }
    if(empty($password)){
        array_push($errors, "password is required");
    }
    if (count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password ='$password_1'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.html');
        }else{
            array_push($errors, "Wrong username/password combination.");
        }
    }
}