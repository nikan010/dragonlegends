<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welkom</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['username'])): ?>
            <h1>Welkom, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <?php if ($_SESSION['is_admin']): ?>
                <p>U bent een beheerder.</p>
            <?php endif; ?>
            <a href="logout.php">Uitloggen</a>
        <?php else: ?>
            <a href="login.php">Inloggen</a>
            <a href="sign_up.php">Registreren</a>
        <?php endif; ?>
    </div>
</body>
</html>
