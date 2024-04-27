<?php 

include ("conexion.php");

if (isset($_POST['Registrar'])) {

	if(strlen($_POST['fecha']) >= 1 &&
strlen($_POST['proveedor']) >= 1 &&
strlen($_POST['monto']) >= 1 &&
strlen($_POST['proyecto']) >= 1 &&
strlen($_POST['nota']) >= 1 &&
strlen($_POST['realizo']) >= 1 &&
strlen($_POST['solicito']) >=1)
{
	$oc = trim($_POST['fecha']);
	$empresa = trim($_POST['proveedor']);
	$nombre_p = trim($_POST['monto']);
	$complemento = trim($_POST['proyecto']);
	$estado_p = trim($_POST['nota']);
	$estado_r = trim($_POST['realizo']);
	$estado_s = trim($_POST['solicito']);
	$consu = "INSERT INTO gastos(fecha, proveedor, monto, proyecto, nota, realizo, solicito) VALUES ('$oc','$empresa','$nombre_p','$complemento','$estado_p', '$estado_r', '$estado_s')";
	$resul = mysqli_query($conex,$consu);
	if ($resul){
		
	header("location: /IMCAMI/index/Login/Gastos/control_gastos.php");
		
	} else {
		?>
				<h3 class='bad'> error </h3>
        <?php
    }
     
     } else{
    	?>
    			<h3 class='bad'> complete </h3>
    			<?php


    }

}
?>