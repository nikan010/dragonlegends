
<style>
 body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    box-sizing: border-box;
    margin: 0; /* Zorgt ervoor dat er geen extra ruimte is aan de randen van de navbar */
    height: 75px; /* Zorgt ervoor dat de navbar een vaste hoogte heeft */
}

.navbar a {
    color: white;
    text-decoration: none; /* Moet 'none' zijn in plaats van 'solid', omdat 'solid' geen geldige waarde is */
    margin-right: 15px;
    font-family: Lato-Bold;
    font-size: 20px;
}

.navbar img {
    width: 100px; /* Dit had je al goed gezet, zorgt voor een vaste breedte van het logo */
}




}

</style>
<body>
<div class="navbar">
        <a href="https://www.techniekcollegerotterdam.nl/"><img class="pipi" src="img/logo.png" width="15%" alt="TCR"></a>
        <div class="nav-links">
         <a href="index.php">Home Pagina</a>   
        <a href="homepcrud.php">CRUD Vuurwerk</a>
        <a href="homepcrudbestellingen.php">CRUD Bestellingen</a>
        <a href="logout.php">logout</a>
       
            </div>
            