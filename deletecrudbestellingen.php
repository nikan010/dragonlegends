<?php
// Connect to database
include "connectcrud.php";

// Check if the id is set in the URL
if(isset($_GET['id'])){
    // Prepare and execute the delete query
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
