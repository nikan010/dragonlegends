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

<form action="" method="post">
    <label for="merk">Merk:</label>
    <input type="text" id="merk" name="merk" required><br>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required><br>

    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs" required><br>

    <label for="foto">Foto URL:</label>
    <input type="text" id="foto" name="foto"><br>

    <input type="submit" value="Toevoegen">
</form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    echo "Er is gepost<br>";
    print_r($_POST);

    //conect database
include "connectcrud.php";

//maak een query
$sql = "INSERT INTO fietsen (merk, kruidgewicht, prijs, schoten, brandtijd, effect, kleuren, stijghoogte, articlenummer) 
VALUES (:merk, :type, :prijs, :foto);";
//prepare  query
$query = $conn->prepare($sql);
//uitvoeren
$status = $query->execute(
    [
        ':merk'=>$_POST['merk'],
        ':type'=>$_POST['type'],
        ':prijs'=>$_POST['prijs'],
        ':foto'=>$_POST['foto']
    ]
);
if($status == true){
    echo "<script>alert(toevoegen is gelukt)</script>";
    echo "<script>location.replace(homep.php); </script>";
    header("Location: homepcrud.php");
} else {
    echo "<script>alert(toevoegen is niet gelukt)</script>";
}
}

?>