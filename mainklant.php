<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="klant.css">
    <link rel="stylesheet" href="nav.css">
</head>
<body>
<div class="navbar">
    <a href="https://www.techniekcollegerotterdam.nl/"><img class="pipi" src="img/logo.png" width="15%" alt="TCR"></a>
    <!-- Navbar -->
    <div class="nav-links">
        <a href="index.php">Home Pagina</a>   
        <a href="homepcrud.php">CRUD Vuurwerk</a>
        <a href="homepcrudbestellingen.php">CRUD Bestellingen</a>
        <a href="mainklant.php">CRUD Klant</a>
        <a href="logout.php">logout</a>
    </div>
</div>

<?php
    // auteur: Michael Davelaar 
    // functie: main page crud product 

    // Initialisatie
    include 'functionsklant.php';

    // Main

    // Roept functie aan
    crudklant();
?>
</body>
</html>
