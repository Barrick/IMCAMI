<!DOCTYPE html>
<html>
   <head>
        <title>Ver Gastos</title>
   </head>

       <link rel="stylesheet" href="css/estilo_tablas.css">
    <link rel="shortcut icon" href="img/logoImcami.png" type="image/x-icon">
    <link rel="shortcut icon" href="/IMCAMI/index/images/IMCAMI3.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="assets/css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/loader.css">



</head>

<style>
  body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(/IMCAMI/index/Login/.png);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<body>

<br><br>

<div class="container">
    <div class="card">
        <div class="card-header">
          <a href="/IMCAMI/index/Login/menu/indexAdmin.php">Regresar al menu de Administrador</a>
        </div>
        <div class="card-body">
            <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>

    <body>
    <center>

        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <form action="" method="post" accept-charset="utf-8">
                  <div class="row">
                    <div class="col">
                      <input type="date" name="fecha_ingreso" class="form-control"  placeholder="Fecha de Inicio" required>
                    </div>
                    <div class="col">
                      <input type="date" name="fechaFin" class="form-control" placeholder="Fecha Final" required>
                    </div>
                    <div class="col">
                      <span class="btn btn-dark mb-2" id="filtro">Filtrar</span>
                     
                      
                    </div>
                  </div>
                </form>

              </div>
              
              <div class="col-md-12 text-center mt-5">     
                <span id="loaderFiltro">  </span>
              </div>
              
              
            <div class="table-responsive resultadoFiltro">
              <table class="table table-hover" id="tabla">
                <thead>
                  <tr>
                    
                    <th scope="col">Fecha</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Realizo</th>
                    <th scope="col">Solicito</th>
                  </tr>
                </thead>

                
              <?php
              include('conexion.php');
              $sqlTrabajadores = ('SELECT * FROM gastos ORDER BY fecha DESC');
              $query = mysqli_query($conex, $sqlTrabajadores);
              $i =1;
                while ($dataRow = mysqli_fetch_array($query)) { ?>
                <tbody>
                  <tr>
                    
                    <td><?php echo $dataRow['fecha'] ?></td>
                    <td><?php echo $dataRow['proveedor'] ; ?></td>
                    <td><?php echo $dataRow['monto'] ; ?></td>
                    <td><?php echo $dataRow['proyecto'] ; ?></td>
                    <td><?php echo $dataRow['nota'] ; ?></td>
                    <td><?php echo $dataRow['realizo'] ; ?></td>
                    <td><?php echo $dataRow['solicito'] ; ?></td>
                </tr>
                </tbody>
              <?php } ?>
              </table>
            </div>

            </div>
          </div>
      </section>
        
            
    <!-- script para exportar a excel -->
<script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reporte_Gastos_IMCAMI", //Nombre del archivo de Excel
            sheetname: "Gastos_IMCAMI", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="assets/js/material.min.js"></script>
  <script>
  $(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1000);


//FILTRANDO REGISTROS
$("#filtro").on("click", function(e){ 
  e.preventDefault();
  
  loaderF(true);

  var f_ingreso = $('input[name=fecha_ingreso]').val();
  var f_fin = $('input[name=fechaFin]').val();
  console.log(f_ingreso + '' + f_fin);

  if(f_ingreso !="" && f_fin !=""){
    $.post("filtro.php", {f_ingreso, f_fin}, function (data) {
      $("#tableEmpleados").hide();
      $(".resultadoFiltro").html(data);
      loaderF(false);
    });  
  }else{
    $("#loaderFiltro").html('<p style="color:red;  font-weight:bold;">Debe seleccionar ambas fechas</p>');
  }
} );


function loaderF(statusLoader){
    console.log(statusLoader);
    if(statusLoader){
      $("#loaderFiltro").show();
      $("#loaderFiltro").html('<img class="img-fluid" src="assets/img/cargando.svg" style="left:50%; right: 50%; width:50px;">');
    }else{
      $("#loaderFiltro").hide();
    }
  }
});
</script>

    </body>
    
</html>