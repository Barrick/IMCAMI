


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="/index/Login/stylePr.css">
  <link rel="shortcut icon" href="/index/images/IMCAMI3.png" type="image/x-icon">

  <title>Registro Proyectos</title>
</head>
<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Agregar Proyecto</p>
      <div class="input-group">
        <input type="text" placeholder="Ingresar OC" name="occ" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Ingresar Empresa" name="empre" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Ingresar Nombre del Proyecto" name="nombre" value="" required>
            </div>
            <div class="input-group">
        <input type="text" placeholder="Ingresar Complemento" name="comp" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Ingresar Estado del Proyecto" name="estado" value="" required>
      </div>
      <div class="input-group">
        <button name="register" class="btn">Registrar</button>
      </div>
      <p><a href="/index/Login/menu/indexAdmin.php">Regresar a la pagina pricipal</a>.</p>
    </form>
  </div>
</body>
</html>

<?php 

include("conexion.php");


  
if (isset($_POST['register'])) {

  $oc = $_POST['occ'];
  $empresa = $_POST['empre'];
  $nombre_p = $_POST['nombre'];
  $complemento = $_POST['comp'];
  $estado_p = $_POST['estado'];
  

  

    $sql = "INSERT INTO registro_proyectos(oc, empresa, nombre_proyecto, complemento, estado_proyecto) VALUES ('$oc','$empresa','$nombre_p','$complemento','$estado_p')";
    
      $result = mysqli_query($conex, $sql);
      if ($result) {
        //$alert='<p>Registro Exitoso Completado.</p>';
        echo "<script>alert('Registro Exitoso Completado.')</script>";

        
        
      } else {
        echo "<script>alert('Ups! Algo Salio Mal')</script>";
      }
}

?>