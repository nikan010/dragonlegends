<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vuurwerk Formulier</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>

<h1>Vuurwerk Toevoegen</h1>

<form action="" method="post">
  <input type="hidden" id="vuurwerkid" name="vuurwerkid" required value="<?php echo $result['vuurwerkid']; ?>"><br>

<label for="merk">Merk:</label>
<input type="text" id="merk" name="merk" required><br>

<label for="kruidgewicht">kruidgewicht:</label>
<input type="text" id="kruidgewicht" name="kruidgewicht" required><br>

<label for="prijs">Prijs:</label>
<input type="number" id="prijs" name="prijs" required><br>

<label for="schoten">schoten:</label>
<input type="number" id="schoten" name="schoten" required><br>

<label for="brandtijd">brandtijd:</label>
<input type="text" id="brandtijd" name="brandtijd" required><br>

<label for="effect">effect:</label>
<input type="text" id="effect" name="effect" required><br>

<label for="kleuren">kleuren:</label>
<input type="text" id="kleuren" name="kleuren" required><br>

<label for="stijghoogte">stijghoogte:</label>
<input type="text" id="stijghoogte" name="stijghoogte" required><br>

<label for="articlenummer">articlenummer:</label>
<input type="text" id="articlenummer" name="articlenummer" required><br>

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
$sql = "INSERT INTO vuurwerk (merk, kruidgewicht, prijs, schoten, brandtijd, effect, kleuren, stijghoogte, articlenummer) 
VALUES (:merk, :kruidgewicht, :prijs, :schoten, :brandtijd, :effect, :kleuren, :stijghoogte, :articlenummer);";
//prepare  query
$query = $conn->prepare($sql);
//uitvoeren
$status = $query->execute(
    [
    ':merk'=>$_POST['merk'],
    ':kruidgewicht'=>$_POST['kruidgewicht'] . 'g',
    ':prijs'=>$_POST['prijs'],
    ':schoten'=>$_POST['schoten'],
    ':brandtijd'=>$_POST['brandtijd'] . 's',
    ':effect'=>$_POST['effect'],
    ':kleuren'=>$_POST['kleuren'],
    ':stijghoogte'=>$_POST['stijghoogte'] . 'm',
    ':articlenummer'=>$_POST['articlenummer'],
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