<?php
    // auteur: Michael Davelaar
    // functie: Update een product

    require_once('functionsklant.php');

    // Test of de wijzig knop is geklikt 
    if(isset($_POST['wijzig'])){

        // Test of de update goed is gegaan
        if(updateklant($_POST) == true){
            echo "<script>alert('Klant is gewijzigd!')</script>";
        } else {
            echo '<script>alert("womp womp klant is niet gewijzigd! (fout)")</script>';
        }
    }

    // Test of klantid is meegegeven in de URL
    if(isset($_GET['klantid'])){  
        // Haalt alle info van de betreffende klantid $_GET['klantid']
        $klantid = $_GET['klantid'];
        $row = getklant($klantid);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="klant.css">
  <title>Wijzig product</title>
</head>
<body>
  <h2>Wijzig product</h2>
  <form method="post">
<!-- Zorgt ervoor dat de correcte informatie ingevoerd word -->
<input type="hidden"  id="klantid" name="klantid" required value="<?php echo $row['klantid']; ?>"><br>

    <label for="naam">Naam:</label>
    <input type="text"  id="klant_naam" name="klant_naam" required value="<?php echo $row['klant_naam']; ?>"><br>

    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres" required value="<?php echo $row['adres']; ?>"><br>

    <label for="plaats">Plaats:</label>
    <input type="text" id="plaats" name="plaats" required value="<?php echo $row['plaats']; ?>"><br>

    <input type="submit" name="wijzig" value="Wijzig">
  </form>
  <br><br>
  <!-- Stuurt je terug naar main page -->
  <a href='mainklant.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen klantid opgegeven<br>";
    }
?>