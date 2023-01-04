<?php
session_start();

if(!isset($_SESSION['username'])) {

    header("Location: welcome.php");
}


?>

<?php
        $connect = mysqli_connect('localhost','root','','login_register');
        $id=$_GET['e'];
        echo $id;
        $blog= "DELETE FROM post WHERE id='$id'";
        $re=mysqli_query($connect,$blog);
        //$data=mysqli_fetch_assoc($re);
        if($re){
            echo "successfully deleted";
            header("Location: home.php");
        }
        else {
            echo "ERROR";
        }

?>
