<?php 

include ("conexion.php");

if (isset($_POST['enviar'])) {

	if(strlen($_POST['occ']) >= 1 &&
strlen($_POST['empre']) >= 1 &&
strlen($_POST['nombre']) >= 1 &&
strlen($_POST['comp']) >= 1 &&
strlen($_POST['estado']) >=1)
{
	$oc = trim($_POST['occ']);
	$empresa = trim($_POST['empre']);
	$nombre_p = trim($_POST['nombre']);
	$complemento = trim($_POST['com']);
	$estado_p = trim($_POST['estado']);
	$consu = "INSERT INTO registro_proyectos(oc, empresa, nombre_proyecto, complemento, estado_proyecto) VALUES ('$oc','$empresa','$nombre_p','$complemento','$estado_p')";
	$resul = mysqli_query($conex,$consu);
	if ($resul){
		
	header("location:admin.php");
		
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