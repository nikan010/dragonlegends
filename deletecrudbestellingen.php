<?php
// Connect to database
include "connectcrud.php";

// Bekijkt of de ID wordt meegegeven in de URL
if(isset($_GET['id'])){
    // Bereid en execute de query voor
    $sql = "DELETE FROM bestelling WHERE bestelling_id = :bestelling_id";
    $stmt = $conn->prepare($sql);
    $status = $stmt->execute([':bestelling_id' => $_GET['id']]);

    if($status){
        echo "<script>alert('Verwijderen is gelukt');</script>";
        echo "<script>location.href = 'homepcrudbestellingen.php';</script>";
    } else {
        print_r($stmt->errorInfo());
    }
}
?>
