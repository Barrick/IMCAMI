<?php
/**conexion a BD */
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "login";
$conex = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($conex,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($conex, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

//bd_groomers
//minitienda


?>