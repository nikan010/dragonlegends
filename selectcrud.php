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
<th>type</th>
<th>prijs</th>
<th>foto</th>
<th>edit</th>
<th>delete</th>
<th>id</th>
</tr>
";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['merk'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['prijs'] . "</td>";
    echo "<td><img src='img/" . $row['foto'] . "'></td>";
    echo "<td><a href='edit.php?id=" . $row['id'] . "'>" . "wijzig</a></td>";
    echo "<td><a href='delete.php?id=" . $row['id'] . "'>" . "verwijder</a></td>";
    echo "<td>". $row['id'] . "</td>";
}
echo "</table>";
?>