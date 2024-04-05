
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .productcontainer {
            border: 5px solid;
            border-radius: 5px;
            background-color: transparent;
            border-style: round;
            padding: 10px;
            margin-top: 70px;
            margin-left: 70px;
            width: 200px;
            position: absolute;
            top: 60px;
            left: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            color: #000;
        }
      
    </style>
</head>
<body>
<div class="productcontainer">
<?php
//conect database
include "connectcrud.php";

//maak een query
//get the product ID from the URL parameter
$articlenummer = isset($_GET['vuurwerkid']) ? intval($_GET['vuurwerkid']) : 0;

//maak een query
$sql = "SELECT * FROM vuurwerk WHERE articlenummer";
//prepare  query
$stmt = $conn->prepare($sql);
//bind the product ID parameter
$stmt->bindParam(':articlenummer', $articlenummer);
//uitvoeren
$stmt->execute();
//ophalen alle data
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//check if a product was found
if (count($result) > 0) {
    //get the product data
    $product = $result[0];

    //display the product data
    echo "<br>";
    echo "<table border=1px>";
    echo "<tr>";
    echo "<li>naam: " . $product['naam'] . "</li>";
    echo "<li>merk: " . $product['merk'] . "</li>";
    echo "<li>soort: " . $product['soort'] . "</li>";
    echo "<li>kruidgewicht: " . $product['kruidgewicht'] . "</li>";
    echo "<li>prijs: " . $product['prijs'] . "</li>";
    echo "<li>schoten: " . $product['schoten'] . "</li>";
    echo "<li>brandtijd: " . $product['brandtijd'] . "</li>";
    echo "<li>effect: " . $product['effect'] . "</li>";
    echo "<li>kleuren: " . $product['kleuren'] . "</li>";
    echo "<li>stijghoogte: " . $product['stijghoogte'] . "</li>";
    echo "<li>articlenummer: " . $product['articlenummer'] . "</li>";
    echo "</tr>";
    echo "</table>";
} else {
    echo "Product not found.";
}
?>
        </div>
</div>
</body>
</html>