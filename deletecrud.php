
<?php
if ($_SERVER["REQUEST_METHOD"]  == "GET") {
    echo "Er is gepost<br>";
    print_r($_GET);

    //conect database
include "connectcrud.php";

//maak een query
$sql = "DELETE FROM vuurwerk WHERE id = :id";
//prepare  query
$query = $conn->prepare($sql);
//uitvoeren
$status = $query->execute(
    [
        ':id'=>$_GET['id']
       
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