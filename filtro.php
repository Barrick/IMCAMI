<?php
sleep(1);
include('conexion.php');

/**
 * Nota: Es recomendable guardar la fecha en formato año - mes y dia (2022-08-25)
 * No es tan importante que el tipo de fecha sea date, puede ser varchar
 * La funcion strtotime:sirve para cambiar el forma a una fecha,
 * esta espera que se proporcione una cadena que contenga un formato de fecha en Inglés US,
 * es decir año-mes-dia e intentará convertir ese formato a una fecha Unix dia - mes - año.
*/

$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));

$sqlTrabajadores = ("SELECT * FROM gastos WHERE  `fecha` BETWEEN '$fechaInit' AND '$fechaFin' ORDER BY fecha ASC");
$query = mysqli_query($conex, $sqlTrabajadores);
//print_r($sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

<table class="table table-hover">
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
    $i = 1;
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