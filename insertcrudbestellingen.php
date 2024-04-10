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
<nav>
<?php 
include "nav.php"
?>
</nav>

<h1>Bestelling Toevoegen</h1>

<form action="" method="post">
  <input type="hidden" id="bestelling_id" name="bestelling_id" required value="<?php echo $result['bestelling_id']; ?>"><br>

<label for="klantid">Klanten ID:</label>
<input type="text" id="klantid" name="klantid"><br>

<label for="artikelnummer">Artikel Nummer:</label>
<input type="text" id="artikelnummer" name="artikelnummer" required><br>

<label for="aantal">Aantal:</label>
<input type="text" id="aantal" name="aantal" required><br>

<label for="bedrag">Bedrag:</label>
<input type="text" id="bedrag" name="bedrag" required><br>

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
$sql = "INSERT INTO bestelling (klantid, artikelnummer, aantal, bedrag) 
VALUES (:klantid, :artikelnummer, :aantal, :bedrag);";
//prepare  query
$query = $conn->prepare($sql);
//uitvoeren
$status = $query->execute(
    [
    ':klantid'=>$_POST['klantid'],
    ':artikelnummer'=>$_POST['artikelnummer'],
    ':aantal'=>$_POST['aantal'],
    ':bedrag'=>$_POST['bedrag'],  
    ]
);
if($status == true){
    echo "<script>alert(toevoegen is gelukt)</script>";
    echo "<script>location.replace(homep.php); </script>";
    header("Location: homepcrudbestellingen.php");
} else {
    echo "<script>alert(toevoegen is niet gelukt)</script>";
}
}

?>