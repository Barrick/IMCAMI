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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Personal</title>
	<link rel="shortcut icon" href="/index/images/IMCAMI3.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="estiloPnuevo.css">
</head>
<body>
	<header>
		
    
   
		<nav class="navegacion">
			<ul class="menu">
				
				
				<li><a href="#">Asistencias</a>
					<ul class="submenu">
						<li><a href="/index/LoginClientes/Asistencia/formAsist.php">Agregar Asistencias</a></li>
					</ul>
				</li>
				
				<li><a href="/index/LoginClientes/logout.php">Cerrar Sesion</a></li>
			</ul>
		</nav>
		<section class="texto-header">
         <?php echo "<h1>Bienvenido " . $_SESSION['username'] . "</h1>"; ?>
         <h2>Pagina de Personal</h2>
	</header>
</body>
</html>