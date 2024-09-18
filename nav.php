
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="nav.css">
    <title>Home Pagina</title>
  
</head>
<body>
    <div class="navbar">
        <a href="https://www.techniekcollegerotterdam.nl/"><img class="pipi" src="img/logo.png" width="15%" alt="TCR"></a>
        <div class="nav-links">
            <a href="index.php">Home Pagina</a>
            <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
                <a href="homepcrud.php">CRUD Vuurwerk</a>
                <a href="homepcrudbestellingen.php">CRUD Bestellingen</a>
                <a href="mainklant.php">CRUD Klant</a>
            <?php endif; ?>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
