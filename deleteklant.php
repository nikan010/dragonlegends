<?php
// auteur: Michael Davelaar
// functie: Verwijdert product die aangegeven word

include 'functionsklant.php';

// Haalt bier uit de database
if(isset($_GET['klantid'])){

    // Kijkt of insert goed gelukt is
    if(deleteklant($_GET['klantid']) == true){
        echo '<script>alert("klantid: ' . $_GET['klantid'] . ' is verwijderd!")</script>';
        echo "<script> location.replace('mainklant.php'); </script>";
    } else {
        echo '<script>alert("womp womp klant is niet verwijderd")</script>';
    }
}
?>

