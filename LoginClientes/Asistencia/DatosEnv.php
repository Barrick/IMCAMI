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