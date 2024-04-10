<?php
    // auteur: Michael Davelaar
    // functie: nieuw product toevoegen

    echo "<h1>Voeg nieuwe klant toe</h1>";

    require_once('functionsklant.php');
	 
    // Test of er op de voeg toe knop is gedrukt 
    if(isset($_POST) && isset($_POST['voeg'])){

        // Test of insert gelukt is
        if(insertklant($_POST) == true){
            echo "<script>alert('Klant is toegevoegd!')</script>";
        } else {
            echo '<script>alert("womp womp klant is niet toegevoegd! (fout)")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">
        <input type="hidden"  id="naam" name="klantid" required value="<?php echo $row['klantid']; ?>"><br>

        <label for="naam">Naam:</label>
    <input type="text"  id="klant_naam" name="klant_naam" required><br>

    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres" required><br>

    <label for="prijs">Plaats:</label>
<input type="text" id="plaats" name="plaats" required><br>

    <input type="submit" name="voeg" value="Voeg toe">
  </form>

       
        
        <br><br>
        <a href='main.php'>Home</a>
    </body>
</html>
