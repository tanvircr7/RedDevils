<?php
session_start();

if(!isset($_SESSION['username'])) {

    header("Location: welcome.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
    
    <title>HOME</title>
</head>


<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        nav{
            display: flex;
            justify-content: space-around;
            align-items: center; 
            min-height: 8vh;
            font-family: Poppin, sans-serif;
            background-color: #5D4954;
            position: fixed; /* Set the navbar to fixed position */
            top: 0; /* Position the navbar at the top of the page */
            width: 100%; /* Full width */
        }
        .logo {
            color: rgb(226, 226, 226);
            text-transform: uppercase;
            letter-spacing: 5px;
            font-size: 20px;
        }
        .nav-links{
            display: flex;
            justify-content: space-around;
            width: 30%;
        }
        .nav-links li{
            list-style: none;
        }
        .nav-links a{
            color: rgb(226, 226, 226);
            text-decoration: none;
            letter-spacing: 3px;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
    <body>
        <nav>
            <div class="logo">
                <h3>Plaantik</h3>
            </div>
            <ul class="nav-links">
                <li>
                    <?php echo "Weclome.. ".$_SESSION['username']; ?>
                </li>
                <li>
                    <a href="profile.php">Profile</a>
                </li>
                <li>
                    <a href="postblog.php">POST</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </body>

    <!-- <p>Cookie : <?php //echo $_COOKIE['email']; ?></p> -->


   
    <div class="container">
    <div class="row">
        <div class="grid-container">
    <?php
                      $connect = mysqli_connect('localhost', 'root', '', 'login_register');
                     // $hospitalname = $_GET['state'];
                      $sel= "SELECT * FROM post";
                      $Q=mysqli_query($connect,$sel);
                      while($data=mysqli_fetch_assoc($Q)){

                  ?>
    
    
    <div class="grid-item">
        <div class="card">
    
            
            <!-- <img class="center" width="50%" height="50%" src="uploads/<?//= $data['car_photo']; ?>"> -->
                <div class="container">
                <h1><?= $data['title'] ?></h1>
                <p class="username"><?= $data['username'] ?></p>
                <p class="sneakpeek"><?= $data['write_post'] ?></p>
                <p><button><a href="view_single_post.php?v= <?= $data['id']; ?>">View...</a></button></p>
       
                </div>
                    
                    
        </div>
        </div>     
    
        <?php } ?>
 
    </div>
    </div>
</div>
</body>
</html>











</body>
</html>