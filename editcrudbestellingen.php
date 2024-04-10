<?php
    if (isset($_GET['id'])){

        echo "mijn id is: " . $_GET['id'];

        //opvragen data van het id (record uit de tabel fietsen)
        //select * FROM vuuwerk WHERE bestelling_id = $_GET['id']
        
//conect database
include "connectcrud.php";


//maak een query
$sql = "SELECT * FROM bestelling WHERE bestelling_id = :bestelling_id";
//prepare  query
$stmt = $conn->prepare($sql);
//uitvoeren
$stmt->execute([':bestelling_id' => $_GET['id']]);
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
    <title>Bestelling Formulier</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>

<h1>Bestelling Aanpassen</h1>
<!-- hier is de tabel voor het editen van de informatie van de bestellingen -->
<form action="edit_bestellingencrud.php" method="post">

<input type="hidden" id="bestelling_id" name="bestelling_id" required value="<?php echo $result['bestelling_id']; ?>"><br>

    <label for="klantid">KlantenID:</label>
    <input type="text" id="klantid" name="klantid" required value="<?php echo $result['klantid']; ?>"><br>

    <label for="artikelnummer">Artikelnummer:</label>
    <input type="text" id="artikelnummer" name="artikelnummer" required value="<?php echo $result['artikelnummer']; ?>"><br>
      
    <label for="aantal">Aantal:</label>
    <input type="text" id="aantal" name="aantal" required value="<?php echo $result['aantal']; ?>"><br>

    <label for="bedrag">Bedrag:</label>
    <input type="text" id="bedrag" name="bedrag" required value="<?php echo $result['bedrag']; ?>"><br>


    <input type="submit" value="Toevoegen">
</form>

</body>
</html>