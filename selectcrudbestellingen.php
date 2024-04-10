<?php
//conect database
include "connectcrud.php";

//maak een query
$sql = "SELECT * FROM bestelling";
//prepare  query
$stmt = $conn->prepare($sql);
//uitvoeren
$stmt->execute();
//ophalen alle data
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<br>";


//print de data in een rij
echo "<table border=1px>";

echo "<tr>
<th>Artikelnummer</th>
<th>Aantal</th>
<th>Bedrag</th>
<th>Klanten ID</th>
<th>Wijzig</th>
<th>Verwijder</th>
<th>Bestelling ID</th>
</tr>
";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['artikelnummer'] . "</td>";
    echo "<td>" . $row['aantal'] . "</td>";
    echo "<td>" . $row['bedrag'] . "</td>";   
    echo "<td>" . $row['klantid'] . "</td>";  
    echo "<td><a href='editcrudbestellingen.php?id=" . $row['bestelling_id'] . "'>" . "wijzig</a></td>";
    echo "<td><a href='deletecrudbestellingen.php?id=" . $row['bestelling_id'] . "'>" . "verwijder</a></td>";
    echo "<td>". $row['bestelling_id'] . "</td>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< Updated upstream
    <style>
=======
</head>
<style>
        /*stijl voor de body */
>>>>>>> Stashed changes
 body {
            background-image: url("img/background.jpeg");
            text-align: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }
            /*stijl voor de table */
table {
            margin-left: auto;
            margin-right: auto;
            border: 3px solid white;
            background-color: transparent; /* Dit zorgt ervoor dat de achtergrondkleur van de tabel transparant is */
        }
</style>
</head>

<body>
    
</body>
</html>