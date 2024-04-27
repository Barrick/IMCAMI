<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>
            <div class="col">
                      <input type="date" name="fecha_ingreso" class="form-control"  placeholder="Fecha de Inicio" required>
                    </div>
                    
                    

    <body>
    <center>
        <a onclick="alerta()" href="control_gastos.php">Agregar Gastos</a>
            <table id="tabla" class="table table-border table-hover">
            <thead>
                <tr>
                <th colspan="7"><a href="admin.php" onclick="alerta3()" >Salir</a></th>
                <th colspan="3"><a href="#" onclick="alerta4()" >Enviar</a></th>

                            </tr>
                
                    <th>Fecha</th>
                    <th>Proveedor</th>
                    <th>Monto</th>
                    <th>Proyecto</th>
                    <th>Nota</th>
                    <th>Realizo</th>
                    <th>Solicito</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion.php");
                $query= "SELECT * FROM gastos";
                $resultado= $conex->query($query);
                while($row = $resultado->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $row['fecha']; ?></td>
                        <td><?php echo $row['proveedor']; ?></td>
                        <td><?php echo $row['monto']; ?></td>
                        <td><?php echo $row['proyecto']; ?></td>
                        <td><?php echo $row['nota']; ?></td>
                        <td><?php echo $row['realizo']; ?></td>
                        <td><?php echo $row['solicito']; ?></td>
                        
                        
                        

                    </tr>
                
                <?php
                }
                
                ?>
            </tbody>
        </table>
    </center> 
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