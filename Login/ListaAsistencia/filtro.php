<?php
sleep(1);
include('config.php');



$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));


$sqlTrabajadores = ("SELECT * FROM asistencia WHERE  `fecha` = '$fechaInit' ");
$query = mysqli_query($con, $sqlTrabajadores);
//print_r($sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA</th>
            <th scope="col">CONTACTO</th>
            <th scope="col">PROYECTO</th>
            <th scope="col">CORREO</th>
        </tr>
    </thead>
    <form action="DescargarReporte_x_fecha_PDF.php" method="post" accept-charset="utf-8">
                  <div class="row">
                    
                    
                    
                 
              
            
    <?php

    $i = 1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
        <tbody>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $dataRow['nombre']; ?></td>
                <td><?php echo $dataRow['fecha']; ?></td>
                <td><?php echo $dataRow['contacto']; ?></td>
                <td><?php echo $dataRow['proyecto']; ?></td>
                <td><?php echo $dataRow['correo']; ?></td>

            </tr>
        </tbody>
    <?php } ?>
</table>
 </div>
                </form>
              </div>
              
