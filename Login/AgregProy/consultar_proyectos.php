<!DOCTYPE html>
<html>
   <head>
        <title>Consulta Proyectos</title>
   </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/estilo_tablas.css">
    
    <link rel="shortcut icon" href="/index/images/IMCAMI3.png" type="image/x-icon">
    <link rel="shortcut icon" href="/IMCAMI/index/images/IMCAMI3.png" type="image/x-icon">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-mywebsite-urian-viera.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/material.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/home1.css">
    
</head>


    <body>
     <center>   

        <div id="demo-content">
          <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
          <div id="content"> </div>
        </div>


        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center" style="padding:100px 0px;">
              <h3 class="text-center" style="font-size:40px; color:#333; font-weight:900;">
               Consulta de Proyectos
              </h3>
              
            </div>
          </div>
        </div>



      <section>
          <div class="container">
            <br><br><br>
            <div class="row">
              <a href="/index/Login/menu/indexAdmin.php">Regresar al menu de Administrador</a>
              
            <div class="table-responsive resultadoFiltro">

              <table class="table table-hover" id="tableEmpleados">
                
                <thead>
                  <tr>
                    
                    <th scope="col">OC</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
              <?php
              include('conexion.php');
              $sqlTrabajadores = ('SELECT * FROM registro_proyectos');
              $query = mysqli_query($conex, $sqlTrabajadores);
              $i =1;
                while ($dataRow = mysqli_fetch_array($query)) { ?>
                  <tbody>
                    <tr>
                    
                    <td><?php echo $dataRow['oc']; ?></td>
                    <td><?php echo $dataRow['empresa']; ?></td>
                    <td><?php echo $dataRow['nombre_proyecto'] ; ?></td>
                    <td><?php echo $dataRow['complemento'] ; ?></td>
                    <td><?php echo $dataRow['estado_proyecto'] ; ?></td>
                     <!-- hay que agregar el archivo para modificar los registros de la tabla -->
                    <th><a href="modificar.php?id=<?php echo $dataRow['id']; ?>">Editar</th>
                    
                </tr>
                </tbody>
              <?php } ?>
              </table>
            </div>

            </div>
          </div>

      </section>
            </div><br><br><br>
        
    </center> 
    </body>
    
</html>