<?php
    if (isset($_GET['id'])){

        echo "mijn id is: " . $_GET['id'];

        //opvragen data van het id (record uit de tabel fietsen)
        //select * FROM fietsen WHERE id = $_GET['id']
        
//conect database
include "connectcrud.php";

//maak een query
$sql = "SELECT * FROM fietsen WHERE id = :id";
//prepare  query
$stmt = $conn->prepare($sql);
//uitvoeren
$stmt->execute([':id'=>$_GET['id']]);
//ophalen alle data
$result = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fietsen Formulier</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>

<h1>Fietsen Toevoegen</h1>

<form action="edit_db.php" method="post">

    <input type="hidden" id="merk" name="id" required value="<?php echo $result['id']; ?>"><br>
    <label for="merk">Merk:</label>
    <input type="text" id="merk" name="merk" required value="<?php echo $result['merk']; ?>"><br>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required value="<?php echo $result['type']; ?>"><br>

    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs" required value="<?php echo $result['prijs']; ?>"><br>

    <label for="foto">Foto URL:</label>
    <input type="text" id="foto" name="foto"><br>

    <input type="submit" value="Toevoegen">
</form>

</body>
</html>