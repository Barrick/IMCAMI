<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php echo "<h1>Bienvenido " . $_SESSION['username'] . "</h1>"; ?>
    <p>A quien deseas registrar</p>
    <p><a href="registerPers.php">Personal</a>. <a href="registerclient.php">Clientes</a></p>

    <p>Esto es para registrar algun jefe</p>
    <p><a href="register.php">Registra el nuevo jefe aqui</a></p>

    <p>Puedes observar las asistencias</p>
    <p><a href="ListaAsistencia/index.php">Ver asistencias</a></p>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>