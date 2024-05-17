<?php
// Start de sessie
session_start();

if (!isset($_SESSION['username']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit;
}


// Inclusie van het bestand 'connection.php' dat de databaseverbinding bevat
include("config.php");

// Inclusie van het bestand 'functions.php' dat functies bevat voor de gebruikersauthenticatie
//include("functions.php");

// Controleren of de gebruiker is ingelogd
//$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
// Hiermee word de nav.php bestand opgehaald en word de Navbar geshowed
include "nav.php"
?>
    </div>
</div>

<!-- Titel en welkomstbericht -->
<h1>This is the index page</h1>
<br>


<!-- Vakken -->
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

<!-- Informatie over Dragonlegends -->
<br>
<h1>Informatie over Dragonlegends</h1>
<p>Shout out naar Furkie21 voor deze webshop. We konden nu helemaal niks doen.</p>
<p>Dragonlegends zijn een groep vrienden van 4. We hebben het hier over Milan van Deelen, Micheal Davelaar, Furkan Sarikaya en Yvan van Dijk.</p>
<p>Wij moeten een opdracht maken voor school, vandaar deze webshop.</p>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <!-- Over Ons -->
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
        <!-- Links -->
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
        <!-- Contacteer Ons -->
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
