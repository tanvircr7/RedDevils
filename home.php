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
    <title>HOME</title>
</head>
<body>

    <?php echo "Weclome.. ".$_SESSION['username']; ?>
    <a href="logout.php">Logout</a>
</body>
</html>