<?php
// auteur: Michael Davelaar
// functie: Alle functies van de website

include_once "connectcrudklant.php";

 function connectDb(){
    $servername = SERVERNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $dbname = DATABASE;
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //echo "Connected successfully";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

 }

 
 // Selecteert de data uit opgegeven table
 function getData($table){
    // Connect database
    $conn = connectDb();

    // Select data uit de opgegeven table methode query
    // query: is een prepare en execute in 1 zonder placeholders
    // $result = $conn->query("SELECT * FROM $table")->fetchAll();

    // Select data uit de opgegeven table methode prepare
    $sql = "SELECT * FROM $table";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();

    return $result;
 }

 // Selecteert de rij van de opgeven klantid uit de table product
 function getklant($klantid){
    // Connect database
    $conn = connectDb();

    // Select data uit de opgegeven table methode prepare
    $sql = "SELECT * FROM " . CRUD_TABLE . " WHERE klantid = :klantid";
    $query = $conn->prepare($sql);
    $query->execute([':klantid'=>$klantid]);
    $result = $query->fetch();

    return $result;
 }


 function ovzklant(){

    // Haal alle product record uit de tabel 
    $result = getData(CRUD_TABLE);
    
    //print table
    printTable($result);
    
 }

 
// Function 'PrintTable' print een HTML-table met data uit $result.
function printTable($result){
    // Zet de hele table in een variable $table en print hem 1 keer 
    $table = "<table>";

    // Print header table

    // Haalt de kolommen uit de eerste [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th>" . $header . "</th>";   
    }

    // print elke rij van de tabel
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}


function crudklant() {
    // Menu-item insert
    $txt = "<h1>Crud klant</h1><nav><a href='insert_klant.php'>Voeg nieuw product toe</a></nav><br>";
    echo $txt;

    // Get data from the database
    $result = getData(CRUD_TABLE);

    // Check if $result is an array and not empty before calling printCrudklant
    if (is_array($result) && !empty($result)) {
        // Print table
        printCrudklant($result);
    } else {
        echo "No data found."; // Handle case where no data is retrieved
    }
}

// Function 'printCrudklant' print een HTML-table met data uit $result 
// En wijzig + verwijder knop
function printCrudklant($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table>";

    // Print header table

    // Haalt de kolommen uit de eerste rij [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th>" . $header . "</th>";   
    }
    // Voegt actie kopregel toe
    $table .= "<th colspan=2>Actie</th>";
    $table .= "</th>";

    // Print elke rij
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // Print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";  
        }
        
        // Wijzig knopje
        $table .= "<td>
            <form method='post' action='updateklant.php?klantid=$row[klantid]' >       
                <button>Wijzg</button>	 
            </form></td>";

        // Delete knopje
        $table .= "<td>
            <form method='post' action='deleteklant.php?klantid=$row[klantid]' >       
                <button>Verwijder</button>	 
            </form></td>";

        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}


function updateklant($row){
   
    // Maakt database connectie
    $conn = connectDb();

    // Maakt een query 
    $sql = "UPDATE " . CRUD_TABLE .
    " SET 
        klant_naam = :klant_naam, 
        adres = :adres,
        plaats = :plaats
    WHERE klantid = :klantid";

    // Prepare query
    $stmt = $conn->prepare($sql);

    // Uitvoeren
    $stmt->execute([
        ':klant_naam' => $row['klant_naam'],
        ':adres' => $row['adres'],
        ':plaats' => $row['plaats'],
        ':klantid' => $row['klantid']
    ]);

    // Test of de database actie is gelukt
    $retVal = ($stmt->rowCount() == 1) ? true : false ;
    return $retVal;
}


function insertklant($post){
    // Maakt database connectie
    $conn = connectDb();

    // Maakt een query 
    $sql = "
        INSERT INTO " . CRUD_TABLE . " (klant_naam, adres, plaats)
        VALUES (:klant_naam, :adres, :plaats) 
    ";

    // Prepare query
    $stmt = $conn->prepare($sql);
    // Uitvoeren
    $stmt->execute([
        ':klant_naam'=>$_POST['klant_naam'],
        ':adres'=>$_POST['adres'],
        ':plaats'=>$_POST['plaats']
    ]);

    
    // Test of de database actie is gelukt
    $retVal = ($stmt->rowCount() == 1) ? true : false ;
    return $retVal;  
}

function deleteklant($klantid){

    // Connect database
    $conn = connectDb();
    
    // Maakt een query 
    $sql = "
    DELETE FROM " . CRUD_TABLE . 
    " WHERE klantid = :klantid";

    // Prepare query
    $stmt = $conn->prepare($sql);

    // Uitvoeren
    $stmt->execute([
    ':klantid'=>$_GET['klantid']
    ]);

    // Test of de database actie is gelukt
    $retVal = ($stmt->rowCount() == 1) ? true : false ;
    return $retVal;
}

?>