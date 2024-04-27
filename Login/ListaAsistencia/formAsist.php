<!DOCTYPE html>
<html>
<head>
	<title>Asistencia</title>
	<link rel="stylesheet" type="text/css" href="estilosA.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="">
		table, th{
			border: 1px solid black;
		}

		body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(/index/Login/FondProy.png);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    
}

.input{
	background-color: transparent; 
}



	</style>
</head>
<body>
	
	<center>
	<h1>Formato de Asistencias</h1>
	</center>
	<div class="formulario">
	<form method="POST" action="FormAsist.php">
		<input type="hidden" name="dato" value="insertar">
		<table>
			<tr>
				<td>Nombre del Cliente: </td>
				<td> <input type="text" name="nombrecli"  required></td>
			
				<td>Fecha: </td>
				<td> <input type="date" name="fecha" required=""></td>
			</tr>
			<tr>
				<td>Contacto: </td>
				<td> <input type="text"  name="contacto" required=""></td>
			
				<td>Proyecto: </td>
				<td> <input type="text"  name="proyecto" required=""></td>
			</tr>
			<tr>
				<td>Direccion: </td>
				<td> <input type="text"  name="direccion" required=""></td>
			
				<td>Correo: </td>
				<td> <input type="text"  name="correo" required=""></td>
			</tr>
		<!--	<tr>
				<td> <input type="submit" value="Guardar" name=""></td>
			</tr> -->
		</table>
		<br>
		<br>

		<table>

				<th>Partida</th>
				<th>Equipo</th>
				<th>Descripcion</th>
				<th>Observaciones</th>

				<tr>
					<td><input type="text" name="partida" required=""></td>
					<td><input type="text"  name="equipo" required=""></td>
					<td><input type="text"  name="descripcion" required=""></td>
					<td><input type="text"  name="observaciones" required=""></td>
				</tr>

				<tr>
					<td><input type="text" name="part"></td>
					<td><input type="text" name="equi"></td>
					<td><input type="text" name="descrip"></td>
					<td><input type="text" name="observ"></td>
				</tr>
			 
		</table>
		<br>
		
		<input class="input" type="submit" value="Guardar" name="register">


	</form>
	</dir>
	 <p><a href="/index/Login/menu/indexAdmin.php">Regresar al menu de Admnistrador</a></p>

</body>
</html>

<?php
/*	
$nombre = $_POST['nombrecli'];
$fecha = $_POST['fecha'];
$contacto = $_POST['contacto'];
$proyecto = $_POST['proyecto'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$partida = $_POST['partida'];
$equipo = $_POST['equipo'];
$descripcion = $_POST['descripcion'];
$observaciones = $_POST['observaciones'];
$part = $_POST['part'];
$equi = $_POST['equi'];
$descrip = $_POST['descrip'];
$observ = $_POST['observ'];

if(!empty($nombre) || !empty($fecha) || !empty($contacto) || !empty($proyecto) || !empty($direccion) || !empty($correo) || !empty($partida) || !empty($equipo) || !empty($descripcion) || !empty($observaciones) ){

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "login";

	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()) {
		die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{

		$INSERT = "INSERT INTO asistencia (nombre,fecha,contacto,proyecto,direccion,correo,partida,equipo,descripcion,observaciones,part,equi,descrip,observ) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$stmt = $conn->prepare($INSERT);
		$stmt ->bind_param("ssssssssssssss", $nombre,$fecha,$contacto,$proyecto,$direccion,$correo,$partida,$equipo,$descripcion,$observaciones,$part,$equi,$descrip,$observ);
		$stmt->execute();
		echo "<script>alert('Registro Exitoso Completado.')</script>";
	}
}
else{
	echo "Te falta algun dato por llenar";
	die();
}
$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "login";

	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()) {
		die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
	}

*/

	include("conexion.php");


	
if (isset($_POST['register'])) {

	$nombre = $_POST['nombrecli'];
	$fecha = $_POST['fecha'];
	$contacto = $_POST['contacto'];
	$proyecto = $_POST['proyecto'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$partida = $_POST['partida'];
	$equipo = $_POST['equipo'];
	$descripcion = $_POST['descripcion'];
	$observaciones = $_POST['observaciones'];
	$part = $_POST['part'];
	$equi = $_POST['equi'];
	$descrip = $_POST['descrip'];
	$observ = $_POST['observ'];

	

		$sql = "INSERT INTO asistencia (nombre, fecha, contacto, proyecto, direccion, correo, partida, equipo, descripcion, observaciones, part, equi, descrip, observ) VALUES ('$nombre', '$fecha', '$contacto', '$proyecto', '$direccion', '$correo', '$partida', '$equipo', '$descripcion', '$observaciones', '$part', '$equi', '$descrip', '$observ')";
		
			$result = mysqli_query($conn, $sql);
			if ($result) {
				//$alert='<p>Registro Exitoso Completado.</p>';
				echo "<script>alert('Registro Exitoso Completado.')</script>";
				$nombre = "";
				$fecha = "";
				
				
			} else {
				echo "<script>alert('Ups! Algo Salio Mal')</script>";
			}
}




		
		
		
		




?>

