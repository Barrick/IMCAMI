<!DOCTYPE html>
<html>
   <head>
        <title> Imagenes Registradas</title>
   </head>

       <link rel="stylesheet" href="css/estilo_tablas.css">
    <link rel="shortcut icon" href="img/logoImcami.png" type="image/x-icon">



<script>
           function alerta ()
        {
            var statusConfirm = confirm("¿Realmente quieres modificar el registro?");
        }
           function alerta2 ()
        {
            var statusConfirm = confirm("¿Realmente quieres eliminar el registro?");
        }
           function alerta3 ()
        {
            var statusConfirm = confirm("¿Realmente quieres agregar?");
        }
           function alerta4 ()
        {
            var statusConfirm = confirm("¿Realmente quieres consultar?");
        }
           
        </script>
    <body>
    <center>
        <table border="3">
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
                    <th colspan="2">Acciones</th>
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
                        
                        <th><a onclick="alerta()" href="control_gastos.php">Agregar Gastos</th>
                        <th><a onclick="alerta()" href="control_gastos.php">Generar Ecxel</th>

                    </tr>
                
                <?php
                }
                
                ?>
            </tbody>
        </table>
    </center> 
    </body>
    
</html>