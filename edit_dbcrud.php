<?php
//functie is de data ubdaten van het mapje vuurwerk

//test of de data is gepost
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);

//doe een update in de database

//conect database
include "connectcrud.php";

  $sql = "
        UPDATE vuurwerk SET
        merk = :merk,
        kruidgewicht = :kruidgewicht,
        prijs = :prijs
        schoten = :schoten,
        brandtijd = :brandtijd,
        effect = :effect,
        kleuren = :kleuren,
        stijghoogte = :stijghoogte,
        articlenummer = :articlenummer,
  WHERE vuurwerk id = :vuurwerk id";

  //prepare query
  $stmt = $conn->prepare($sql);
  //uitvoeren
  $status = $stmt->execute([
    ':merk'=>$_POST['merk'],
    ':kruidgewicht'=>$_POST['kruidgewicht'],
    ':prijs'=>$_POST['prijs'],
    ':schoten'=>$_POST['schoten'],
    ':brandtijd'=>$_POST['brandtijd'],
    ':effect'=>$_POST['effect'],
    ':kleuren'=>$_POST['kleuren'],
    ':stijghoogte'=>$_POST['stijghoogte'],
    ':articlenummer'=>$_POST['articlenummer'],
    ':vuurwerk id'=>$_POST['vuurwerk id'],
  ]);

  if ($status) {
    header("Location: homepcrud.php");
    } else {
        echo "Update is fout gegaan <br>";
    }
}
?>