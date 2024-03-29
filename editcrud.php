<?php
    if (isset($_GET['id'])){

        echo "mijn id is: " . $_GET['id'];

        //opvragen data van het id (record uit de tabel fietsen)
        //select * FROM vuuwerk WHERE vuurwerkid = $_GET['id']
        
//conect database
include "connectcrud.php";

//maak een query
$sql = "SELECT * FROM vuurwerk WHERE vuurwerkid = :vuurwerkid";
//prepare  query
$stmt = $conn->prepare($sql);
//uitvoeren
$stmt->execute([':vuurwerkid'=>$_GET['vuurwerkid']]);
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

    <input type="hidden" id="vuurwerkid" name="vuurwerkid" required value="<?php echo $result['vuurwerkid']; ?>"><br>

    <label for="merk">Merk:</label>
    <input type="text" id="merk" name="merk" required value="<?php echo $result['merk']; ?>"><br>

    <label for="kruidgewicht">kruidgewicht:</label>
    <input type="text" id="kruidgewicht" name="kruidgewicht" required value="<?php echo $result['kruidgewicht']; ?>"><br>

    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs" required value="<?php echo $result['prijs']; ?>"><br>

    <label for="schoten">schoten:</label>
    <input type="number" id="schoten" name="schoten" required value="<?php echo $result['schoten']; ?>"><br>

    <label for="brandtijd">brandtijd:</label>
    <input type="text" id="brandtijd" name="brandtijd" required value="<?php echo $result['brandtijd']; ?>"><br>
    
    <label for="effect">effect:</label>
    <input type="text" id="effect" name="effect" required value="<?php echo $result['effect']; ?>"><br>
    
    <label for="kleuren">kleuren:</label>
    <input type="text" id="kleuren" name="kleuren" required value="<?php echo $result['kleuren']; ?>"><br>
    
    <label for="stijghoogte">stijghoogte:</label>
    <input type="text" id="stijghoogte" name="stijghoogte" required value="<?php echo $result['stijghoogte']; ?>"><br>

    <label for="articlenummer">articlenummer:</label>
    <input type="text" id="articlenummer" name="articlenummer" required value="<?php echo $result['articlenummer']; ?>"><br>
    
    <label for="foto">Foto URL:</label>
    <input type="text" id="foto" name="foto"><br>

    <input type="submit" value="Toevoegen">
</form>

</body>
</html>