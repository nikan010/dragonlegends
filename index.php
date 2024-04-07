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
    background-size: cover;
    background-position: center;
    height: 100vh;
    color: white;
    background-image: url('https://i.stack.imgur.com/kx8MT.gif');
    background-size: cover;
    background-repeat: inherit;
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
            background-image: url("img/waaijer.jpg");
            
        }

        .box:nth-child(2) {
            background-image: url("img/groot cake.jpg");
        }

        .box:nth-child(3) {
            background-image: url("img/small cake.jpg");
        }

        .box:nth-child(4) {
            background-image: url("img/thunderking.jpg");
        }

        .box:nth-child(5) {
            background-image: url("img/fire fun.jpg");
        }

        .box:nth-child(6) {
            background-image: url("img/nitraten.jpg");
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
.footer {
    background-color: #333;
    color: #fff;
    padding: 50px 0;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-section {
    flex: 1;
    margin-bottom: 20px;
}

.about h2, .links h2, .contact-form h2 {
    margin-bottom: 10px;
}

.contact {
    margin-top: 20px;
}

.contact span {
    display: block;
}

.socials {
    margin-top: 20px;
}

.socials a {
    color: #fff;
    margin-right: 10px;
}

.footer-bottom {
    background-color: #222;
    text-align: center;
    padding: 10px 0;
    font-size: 14px;
}

.footer-bottom a {
    color: #fff;
    text-decoration: none;
}
</style>
<body>
<div class="navbar">
        <a href="https://www.techniekcollegerotterdam.nl/"><img class="pipi" src="img/logo.png" width="15%" alt="TCR"></a>
        <div class="nav-links">
        <a href="homepcrud.php">CRUD Vuurwerk</a>
        <a href="homepcrudbestellingen.php">CRUD Bestellingen</a>
        <a href="logout.php">logout</a>
       
            </div>
    </div>
    <h1>This is the index page</h1>
        <br>
    hello, <?php echo $user_data['user_name']; ?>
    <div class="container">    
  
        <div class="box" onclick="location.href='waaijer.php';">
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
    <p>shout out naar furkie21 voor deze webshop we konden nu helemaal niks doen</p>
    <p>dragonlegends zijn een groep vrienden van 4. we hebben het hier over <br>Milan van Deelen, Micheal Davelaar, Furkan Sarikaya en Yvan van dijk.</p>
    <p>wij moeten een opdracht maken voor school vandaar deze webshop</p>
    <footer class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h2>Over Ons</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non suscipit enim.</p>
            <div class="contact">
                <span><i class="fas fa-envelope"></i> example@example.com</span>
                <span><i class="fas fa-phone"></i> 123-456-7890</span>
            </div>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-section links">
            <h2>Links</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Over Ons</a></li>
                <li><a href="#">Diensten</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section contact-form">
            <h2>Contacteer Ons</h2>
            <form action="#" method="post">
                <input type="email" name="email" class="text-input contact-input" placeholder="Jouw email adres...">
                <textarea rows="4" name="message" class="text-input contact-input" placeholder="Jouw bericht..."></textarea>
                <button type="submit" class="btn btn-big contact-btn">
                    <i class="fas fa-envelope"></i>
                    Verzenden
                </button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 MijnWebsite | Alle rechten voorbehouden
    </div>
</footer>
</body>
</html>