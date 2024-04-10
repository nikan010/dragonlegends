<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<nav>
    <?php
include "nav.php"
?>
</nav>
<body>
    <h1>Bestellingen Overzicht</h1>
    <img src="img/img1.jpg" alt="">
    <a href="insertcrudbestellingen.php">toevoegen</a>
    <?php
    
    include "selectcrudbestellingen.php"
    
    ?>
</body>
</html>