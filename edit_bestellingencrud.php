<?php
//functie is de data updaten van het mapje bestelling

//test of de data is gepost
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);

    //doe een update in de database

    //conect database
    include "connectcrud.php";


    $sql = "
            UPDATE bestelling SET
            artikelnummer = :artikelnummer,
            klantid = :klantid,
            bedrag = :bedrag,
            aantal = :aantal      
      WHERE bestelling_id = :bestelling_id";

    //prepare query
    $stmt = $conn->prepare($sql);

    //bind parameters
    $stmt->bindParam(':artikelnummer', $_POST['artikelnummer']);
    $stmt->bindParam(':klantid', $_POST['klantid']);
    $stmt->bindParam(':bedrag', $_POST['bedrag']);
    $stmt->bindParam(':bestelling_id', $_POST['bestelling_id']);
    $stmt->bindParam(':aantal', $_POST['aantal']);


    //execute query
    $status = $stmt->execute();

    if ($status) {
        header("Location: homepcrudbestellingen.php");
    } else {
        echo "Update is fout gegaan <br>";
    }
}