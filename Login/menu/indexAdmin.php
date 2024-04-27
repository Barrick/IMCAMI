<?php 

session_start();

if (!isset($_SESSION['username'])) {
    /*header("Location: index.php");*/
	header("Location: /index/index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Administrador</title>
	
	<link rel="stylesheet" type="text/css" href="estiloAdmin.css">
	<link rel="shortcut icon" href="/index/images/IMCAMI3.png" type="image/x-icon">
	
</head>
<body>
	<header>
		
    
   
		<nav class="navegacion">
			<ul class="menu">
				
				<li><a href="#">Registrar</a>
					<ul class="submenu">
						<li><a href="/index/Login/register.php">Administrador</a></li>
						<li><a href="/index/Login/registerPer.php">Personal</a></li>
					</ul>
				</li>
				<li><a href="#">Asistencias</a>
					<ul class="submenu">
						<li><a href="/index/Login/ListaAsistencia/formAsist.php">Agregar Asistencias</a></li>
						<li><a href="/index/Login/ListaAsistencia/index.php">Ver Asistencias</a></li>
					</ul>
				</li>
				<li><a href="#">Proyectos</a>
					<ul class="submenu">
						<li><a href="/index/Login/AgregProy/agregar.php">Agregar Proyecto</a></li>
						<li><a href="/index/Login/AgregProy/consultar_proyectos.php">Consultar Proyecto</a></li>
					</ul>
				</li>
				<li><a href="">Gastos</a>
					<ul class="submenu">
						<li><a href="/index/Login/Gastos/control_gastos.php">Agregar Gastos</a></li>
						<li><a href="/index/Login/Gastos/ver_gastos.php">Ver Gastos</a></li>
					</ul>
				</li>
				<li><a href="/index/Login/logout.php">Cerrar Sesion</a></li>
			</ul>
		</nav>
		<section class="texto-header">
         <?php echo "<h1>Bienvenido " . $_SESSION['username'] . "</h1>"; ?>
         <h2>Pagina de Administrador</h2>
		</section>
	</header>
</body>
</html>