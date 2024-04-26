<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuurwerk zoeken</title>
</head>
<body>
<form action="" method="GET">
    <label for="search">Zoek:</label>
    <input type="text" id="search" name="search" placeholder="Voer naam of soort in">
    <button type="submit">Zoeken</button>
</form>

<?php
//connectie met de database
include "connectcrud.php";

//maak een query
$sql = "SELECT * FROM vuurwerk";

//voeg zoekfunctionaliteit toe als er een zoekopdracht is ingediend
if(isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
    //zoek op zowel naam als soort
    $sql .= " WHERE naam LIKE '%$search%' OR soort LIKE '%$search%'";
}

//bereid de query voor
$stmt = $conn->prepare($sql);

//uitvoeren
$stmt->execute();

//ophalen alle data
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br>";

//print de data in een rij
echo "<table border=1px>";

echo "<tr>
<th>foto</th>
<th>naam</th>
<th>merk</th>
<th>soort</th>
<th>kruidgewicht</th>
<th>prijs</th>
<th>schoten</th>
<th>brandtijd</th>
<th>effect</th>
<th>kleuren</th>
<th>stijghoogte</th>
<th>articlenummer</th>
<th>edit</th>
<th>delete</th>
<th>vuurwerkid</th>
</tr>";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td><img src='img/" . $row['foto'] . "'></td>";
    echo "<td>" . $row['naam'] . "</td>";
    echo "<td>" . $row['merk'] . "</td>";
    echo "<td>" . $row['soort'] . "</td>";
    echo "<td>" . $row['kruidgewicht'] . "</td>";
    echo "<td>" . $row['prijs'] . "</td>";
    echo "<td>" . $row['schoten'] . "</td>";
    echo "<td>" . $row['brandtijd'] . "</td>";
    echo "<td>" . $row['effect'] . "</td>";
    echo "<td>" . $row['kleuren'] . "</td>";
    echo "<td>" . $row['stijghoogte'] . "</td>";
    echo "<td>" . $row['articlenummer'] . "</td>";    
    echo "<td><a href='editcrud.php?id=" . $row['vuurwerkid'] . "'>" . "wijzig</a></td>";
    echo "<td><a href='deletecrud.php?id=" . $row['vuurwerkid'] . "'>" . "verwijder</a></td>";
    echo "<td>". $row['vuurwerkid'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
