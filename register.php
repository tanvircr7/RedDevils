<?php
include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])) {
    header("Location: home.php");
}




if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password==$cpassword){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0) {
            echo "<script>alert('Email already exists...')</script>";
        } else {
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";

            $result = mysqli_query($conn, $sql);
            if($result) {
                echo "<script>alert('Registration Successful')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Something went wrong...')</script>";
            }
        }

    } else {
        echo "<script>alert('Passwords Not Matching')</script>";
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

    <title>Register From</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" 
               value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="welcome.php">Login Here...</a></p>
        </form>
    </div>
</body>
</html>