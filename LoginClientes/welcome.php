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

    <p>¿Que es lo que deseas realizar?</p>
    <p><a href="Asistencia/formAsist.php">Formato de Asistencia</a></p>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>