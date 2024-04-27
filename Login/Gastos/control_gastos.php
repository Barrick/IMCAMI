<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="/IMCAMI/index/Login/styleG.css">
  <link rel="shortcut icon" href="/IMCAMI/index/images/IMCAMI3.png" type="image/x-icon">

  <title>Agregar Gastos</title>
</head>
<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Agregar Gastos</p>
      <div class="input-group">
        <input type="date" placeholder="Fecha" name="fecha" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Proveedor" name="proveedor" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Monto" name="monto" value="" required>
            </div>
            <div class="input-group">
        <input type="text" placeholder="Proyecto" name="proyecto" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Nota" name="nota" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Quien Realiza" name="realizo" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Quien Solicita" name="solicito" value="" required>
      </div>
      <div class="input-group">
        <button name="register" class="btn">Registrar</button>
      </div>
      <p><a href="/IMCAMI/index/Login/menu/indexAdmin.php">Regresar a la pagina pricipal</a>.</p>
    </form>
  </div>
</body>
</html>


<?php 

include("conexion.php");


  
if (isset($_POST['register'])) {

  $fecha = $_POST['fecha'];
  $proveedor = $_POST['proveedor'];
  $monto = $_POST['monto'];
  $proyecto = $_POST['proyecto'];
  $nota = $_POST['nota'];
  $realizo = $_POST['realizo'];
  $solicito = $_POST['solicito'];
  

  

    $sql = "INSERT INTO gastos(fecha, proveedor, monto, proyecto, nota, realizo, solicito) VALUES ('$fecha','$proveedor','$monto','$proyecto','$nota','$realizo','$solicito')";
    
      $result = mysqli_query($conex, $sql);
      if ($result) {
        //$alert='<p>Registro Exitoso Completado.</p>';
        echo "<script>alert('Registro Exitoso Completado.')</script>";

        
        
      } else {
        echo "<script>alert('Ups! Algo Salio Mal')</script>";
      }
}