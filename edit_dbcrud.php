<?php
//functie is de data ubdaten van het mapje vuurwerk

//test of de data is gepost
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);

    //doe een update in de database

    //conect database
    include "connectcrud.php";

    //UPDATE `vuurwerk` SET `merk` = '12', `kruidgewicht` = '11', `schoten` = '1', 
    //`brandtijd` = '1', `effect` = '1', `kleuren` = '1', `stijghoogte` = '1', `articlenummer` = '1' 
    // WHERE `vuurwerk`.`vuurwerkid` = 1;

    $sql = "
            UPDATE vuurwerk SET
            foto = :foto,
            naam = :naam,
            merk = :merk,
            soort = :soort,
            kruidgewicht = :kruidgewicht,
            prijs = :prijs,
            schoten = :schoten,
            brandtijd = :brandtijd,
            effect = :effect,
            kleuren = :kleuren,
            stijghoogte = :stijghoogte,
            articlenummer = :articlenummer            
      WHERE vuurwerkid = :vuurwerkid";

    //prepare query
    $stmt = $conn->prepare($sql);

    //bind parameters
    $stmt->bindParam(':foto', $_POST['foto']);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':merk', $_POST['merk']);
    $stmt->bindParam(':soort', $_POST['soort']);
    $stmt->bindParam(':kruidgewicht', $_POST['kruidgewicht']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->bindParam(':schoten',$_POST['schoten']);
    $stmt->bindParam(':brandtijd', $_POST['brandtijd']);
    $stmt->bindParam(':effect', $_POST['effect']);
    $stmt->bindParam(':kleuren', $_POST['kleuren']);
    $stmt->bindParam(':stijghoogte', $_POST['stijghoogte']);
    $stmt->bindParam(':articlenummer', $_POST['articlenummer']);
    $stmt->bindParam(':vuurwerkid', $_POST['vuurwerkid']);
    

    //execute query
    $status = $stmt->execute();

    if ($status) {
        header("Location: homepcrud.php");
    } else {
        echo "Update is fout gegaan <br>";
    }
}