<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Proyecto</title>
    <link rel="stylesheet" href="css/estilo_login_agregar.css">
    <link rel="shortcut icon" href="img/logoImcami.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0
.0/css/bootstrap.min.css">
   
 
 <body>
 <center>
   
<form class=""  action="agregar_proyectos.php" method="post" enctype="multipart/form-data">
     <div class="form-group mx-sm-3">  <h1> Agregar Proyecto </h1> <br><br>
           OC:                  <input type="text"  placeholder="Ingresar OC"                  name="occ"> <br><br>
           Empresa:             <input  type="text" placeholder="Ingresar Empresa"             name="empre"> <br><br>
           Nombre del Proyecto: <input  type="text" placeholder="Ingresar Nombre del Proyecto " name="nombre"> <br><br>
           Complemento:         <input  type="text" placeholder="Ingresar Complemento"          name="comp"> <br><br>
           Estado del Proyecto: <input  type="text" placeholder="Ingresar Estado del Proyecto"  name="estado"> <br><br>
       </div>
<input type="submit"  onclick="alerta()" name="enviar">
<br>

 <br><br>
          
    </form></center>
    </body>
    
</html>