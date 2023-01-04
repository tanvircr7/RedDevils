<?php
include 'config.php';
session_start();
error_reporting(0);

if(isset($_SESSION['username'])) {
    header("Location: home.php");
}


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $remember_me = $_POST['remember_me'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        
        if(isset($remember_me)) {
            setcookie("email", $email, time()+60*60);
        }
        //echo $_COOKIE['email'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Email does not exist...')</script>";
    }
}


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="welcomestyle.css">

    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <form  action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login with email</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <div class="input-group">
                <input type="radio" id="radio" name="remember_me" style="height:15px; width:15px; vertical-align: middle;">
                <label for="radio">Remember Me</label><br>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here...</a></p>
        </form>
    </div>
</body>
</html>