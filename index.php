<?php
session_start();
        include("connection.php");
        include("functions.php");

        $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
</head>
<style>
     body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('img/HDBackground.png');
    background-size: cover;
    background-position: center;
    height: 100vh;
    color: white;
}
    .box {
            width: calc(33.33% - 20px); 
            height: 200px; 
            margin-bottom: 20px;
            background-color: #f0f0f0;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden; 
            background-size: cover; 
            background-position: center; 
        }

        /* Bij elk vak voeg je een achtergrondafbeelding toe */
        .box:nth-child(1) {
            background-image: url("fotos/waaijer box foto.jpg");
        }

        .box:nth-child(2) {
            background-image: url("fotos/big cake.jpg");
        }

        .box:nth-child(3) {
            background-image: url("fotos/small cake.jpg");
        }

        .box:nth-child(4) {
            background-image: url("fotos/thunderking.jpg");
        }

        .box:nth-child(5) {
            background-image: url("fotos/fire");
        }

        .box:nth-child(6) {
            background-image: url("fotos/nitraten.jpg");
        }

        .navbar {
     display: flex;
     justify-content: space-between;
     align-items: center;
     padding: 15px;
    background-color: rgba(0, 0, 0, 0.5);
    
    width: 100%;
    box-sizing: border-box;
    
    
    
}

.navbar a {
    color: white;
    text-decoration: solid;
    margin-right: 15px;
    font-family: Lato-Bold;
    font-size: 20px;
}   
.dropdown {
    display: inline-block;
}

.dropbtn {
    color: white;
    text-decoration: none;
    background-color: transparent;
    border: none;
    padding-right: 15px;
    cursor: pointer;
    font-family: Lato-Bold;
    font-size: 20px;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(0, 0, 0, 0.5);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 15px;
    
}

.dropdown-content a:hover {
    background-color: #AA0000;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<body>
<div class="navbar">
        <a href="https://www.techniekcollegerotterdam.nl/"><img class="pipi" src="img/tcrlogo.png" alt="TCR"></a>
        <div class="nav-links">
        <a href="logout.php">logout</a>
            </div>
    </div>
    <h1>This is the index page</h1>
        <br>
    hello, <?php echo $user_data['user_name']; ?>
    <div class="container">    
  
        <div class="box">
            
            <h2>Vak 1</h2>
        </div>
        <div class="box">
            <h2>Vak 2</h2>
        </div>
        <div class="box">
            <h2>Vak 3</h2>
        </div>
        <div class="box">
            <h2>Vak 4</h2>
        </div>
        <div class="box">
            <h2>Vak 5</h2>
        </div>
        <div class="box">
            <h2>Vak 6</h2>
        </div>
    </div>
            <br>
    <h1>informatie over dragonlegends</h1>
</body>
</html>