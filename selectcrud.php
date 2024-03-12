<?php
//conect database
include "connectcrud.php";

//maak een query
$sql = "SELECT * FROM vuurwerk";
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
<th>merk</th>
<th>kruidgewicht</th>
<th>prijs</th>
<th>schoten</th>
<th>brandtijd</th>
<th>effect</th>
<th>kleuren</th>
<th>stijghoogte</th>
<th>articlenummer</th>
<th>foto</th>
<th>edit</th>
<th>delete</th>
<th>vuurwerk id</th>
</tr>
";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['merk'] . "</td>";
    echo "<td>" . $row['kruidgewicht'] . "</td>";
    echo "<td>" . $row['prijs'] . "</td>";
    echo "<td>" . $row['schoten'] . "</td>";
    echo "<td>" . $row['brandtijd'] . "</td>";
    echo "<td>" . $row['effect'] . "</td>";
    echo "<td>" . $row['kleuren'] . "</td>";
    echo "<td>" . $row['stijghoogte'] . "</td>";
    echo "<td>" . $row['articlenummer'] . "</td>";
    echo "<td><img src='fotos/waaijer box foto.jpg" .  "'></td>";
    echo "<td><a href='edit.php?id=" . $row['vuurwerk id'] . "'>" . "wijzig</a></td>";
    echo "<td><a href='delete.php?id=" . $row['vuurwerk id'] . "'>" . "verwijder</a></td>";
    echo "<td>". $row['vuurwerk id'] . "</td>";
}
echo "</table>";
?>