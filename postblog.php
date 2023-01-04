<?php
include 'config.php';
session_start();
error_reporting(0);

if(isset($_POST['submit'])) {
    $text = $_POST['write_post'];
    $title = $_POST['title'];
    $username = $_SESSION['username'];
    echo $identity; echo $username;

    if(TRUE){
        $sql = "INSERT INTO post (username, write_post, title) VALUES ('$username', '$text', '$title'); ";
        
        $result = mysqli_query($conn, $sql);

    } else {
        echo "<script>alert('Something went wrong..')</script>";
    }
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
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="profile.php">POST</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </body>
    

    <div class="container">
        <form action="postblog.php" method="POST" class="postbox">
            <div class="input-group">
                <input type="text" placeholder="hook your audience" name="title" value="<?php echo $_POST['title']; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="write here" name="write_post" 
                value="<?php echo $_POST['write_post']; ?>" required>
            </div>
            
            <div class="input-group">
                <button name="submit" class="btn">POST</button>
            </div>        </form>
    </div>
    


</body>
</html>