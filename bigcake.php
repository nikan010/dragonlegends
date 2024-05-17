<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Stijl voor de wrapper-div */
        .container-wrapper {
            display: flex; /* Flexbox-layout */
            flex-wrap: wrap; /* Laat containers omvallen naar nieuwe rijen indien nodig */
            justify-content: flex-start; /* Plaats containers aan de linkerkant van de wrapper */
            gap: 20px; /* Ruimte tussen containers */
        }
        
        /* Stijl voor de productcontainer */
        .product-container {
            border: 5px solid;
            border-radius: 5px;
            background-color: transparent;
            border-style: round;
            padding: 10px;
            width: 250px; /* Aangepaste breedte voor de container */
            color: white;
        }   
        
        /* Stijl voor de afbeelding */
        .product-container img {
            max-width: 100%; /* Maximale breedte van de afbeelding binnen de container */
            height: auto; /* Behoud de aspect ratio van de afbeelding */
        }
        
        /* stijl voor td */
        td {
            padding: 5px;
        }
        body {
         font-family: Arial, sans-serif;
        background-image: url("img/contact.gif");
        background-attachment: fixed; /* Hiermee wordt de achtergrondafbeelding vastgezet */
        text-align: center;
        background-repeat: no-repeat;
        color: white;
        background-size: cover;
        justify-content: center;
  }
 
    </style>
</head>
<body>
<div class="container-wrapper">
    <?php
    //connectie met de database
    include "connectcrud.php";

    //maak een query
    $sql = "SELECT * FROM vuurwerk WHERE soort = 'waaijer'";

    //voeg zoekfunctionaliteit toe als er een zoekopdracht is ingediend
    if(isset($_GET['search']) && !empty($_GET['search'])) {
        $search = $_GET['search'];
        //zoek op zowel naam als soort
        $sql .= " AND naam LIKE '%$search%'";
    }

    //bereid de query voor
    $stmt = $conn->prepare($sql);

    //uitvoeren
    $stmt->execute();

    //ophalen alle data
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<br>";

    //print de data in aparte containers per product
    foreach ($result as $row) {
        // Begin van de container voor elk product
        echo "<div class='product-container'>";
        echo "<img src='img/" . $row['foto'] . "'>";
        echo "<p><strong>Naam:</strong> " . $row['naam'] . "</p>";
        echo "<p><strong>Merk:</strong> " . $row['merk'] . "</p>";
        echo "<p><strong>Soort:</strong> " . $row['soort'] . "</p>";
        echo "<p><strong>Kruidgewicht:</strong> " . $row['kruidgewicht'] . "</p>";
        echo "<p><strong>Prijs:</strong> " . $row['prijs'] . "</p>";
        echo "<p><strong>Schoten:</strong> " . $row['schoten'] . "</p>";
        echo "<p><strong>Brandtijd:</strong> " . $row['brandtijd'] . "</p>";
        echo "<p><strong>Effect:</strong> " . $row['effect'] . "</p>";
        echo "<p><strong>Kleuren:</strong> " . $row['kleuren'] . "</p>";
        echo "<p><strong>Stijghoogte:</strong> " . $row['stijghoogte'] . "</p>";
        echo "<p><strong>Articlenummer:</strong> " . $row['articlenummer'] . "</p>";

        // Sluit de container voor elk product
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
