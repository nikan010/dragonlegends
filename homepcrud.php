<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>
<nav>
<?php 
include "nav.php"
?>
</nav>

    <h1>Vuurwerk producten lijst</h1>
    <img src="img/img1.jpg" alt="">
    <a href="insertcrud.php">toevoegen</a>
  
    <?php
    
    include "selectcrud.php"
    
    ?>
</body>
</html>