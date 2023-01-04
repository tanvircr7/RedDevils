<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
            <h3>The Nav</h3>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Home</a>
            </li>
        </ul>
    </nav>
</body>
</html>