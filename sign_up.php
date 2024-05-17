<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $is_admin = isset($_POST['is_admin']) ? 1 : 0;

    try {
        $stmt = $conn->prepare("INSERT INTO users (username, password, is_admin) VALUES (:username, :password, :is_admin)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':is_admin', $is_admin);
        $stmt->execute();
        $_SESSION['user_id'] = $conn->lastInsertId();
        $_SESSION['username'] = $username;
        $_SESSION['is_admin'] = $is_admin;
        header("Location: index.php");
        exit;
    } catch(PDOException $e) {
        if ($e->getCode() == 23000) {
            $error = "Gebruikersnaam bestaat al.";
        } else {
            $error = "Registratie mislukt: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registreren</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="sign_up.php">
        <input type="text" name="username" placeholder="Gebruikersnaam" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <label><input type="checkbox" name="is_admin"> Is admin</label>
        <button type="submit">Registreren</button>
    </form>
</body>
</html>
