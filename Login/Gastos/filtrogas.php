<?php
sleep(1);
include('config.php');

/**
 * Nota: Es recomendable guardar la fecha en formato año - mes y dia (2022-08-25)
 * No es tan importante que el tipo de fecha sea date, puede ser varchar
 * La funcion strtotime:sirve para cambiar el forma a una fecha,
 * esta espera que se proporcione una cadena que contenga un formato de fecha en Inglés US,
 * es decir año-mes-dia e intentará convertir ese formato a una fecha Unix dia - mes - año.
*/

$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));

$sqlTrabajadores = ("SELECT * FROM gastos WHERE  `fecha` BETWEEN '$fechaInit' AND '$fechaFin' ORDER BY fecha_ingreso ASC");
$query = mysqli_query($conex, $sqlTrabajadores);
//print_r($sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE Y APELLIDO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">SUELDO</th>
            <th scope="col">FECHA DE INGRESO</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
        <tbody>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $dataRow['nombre'] . ' ' . $dataRow['apellido']; ?></td>
                <td><?php echo $dataRow['email']; ?></td>
                <td><?php echo $dataRow['telefono']; ?></td>
                <td><?php echo '$ ' . $dataRow['sueldo']; ?></td>
                <td><?php echo $dataRow['fecha_ingreso']; ?></td>
            </tr>
        </tbody>
    <?php } ?>
</table>



<?php
sleep(1);
include('config.php');



$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));


$sqlTrabajadores = ("SELECT * FROM gastos WHERE  `fecha` = '$fechaInit' ");
$query = mysqli_query($con, $sqlTrabajadores);
//print_r($sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

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
                <td><button  type="submit" class="btn btn-danger mb-2">Descargar Reporte</button></td>

            </tr>
        </tbody>
    <?php } ?>
</table>
 </div>
                </form>
              </div>