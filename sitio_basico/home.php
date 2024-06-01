<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['first_name']) . ' ' . htmlspecialchars($_SESSION['last_name']); ?>!</h2>
    <hr>
    
    <?php include 'menu.php'; ?>
    <form method="POST" action="logout.php">
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>