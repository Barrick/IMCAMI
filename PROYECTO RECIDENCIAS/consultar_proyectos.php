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
                <th colspan="8"><a href="admin.php" onclick="alerta3()" >Salir</a></th>
                            </tr>
                
                    <th>Id</th>
                    <th>OC</th>
                    <th>Empresa</th>
                    <th>Proyecto</th>
                    <th>Complemento</th>
                    <th>Estado</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion.php");
                $query= "SELECT * FROM registro_proyectos";
                $resultado= $conex->query($query);
                while($row = $resultado->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['oc']; ?></td>
                        <td><?php echo $row['empresa']; ?></td>
                        <td><?php echo $row['nombre_proyecto']; ?></td>
                        <td><?php echo $row['complemento']; ?></td>
                        <td><?php echo $row['estado_proyecto']; ?></td>
                        
                        <th><a onclick="alerta()" href="modificar.php?id=<?php echo $row['id']; ?>">Editar</th>
                        <th><a onclick="alerta2()"  href="control_gastos.php?id=<?php echo $row['id']; ?>" >Gastos</a></th>

                    </tr>
                
                <?php
                }
                
                ?>
            </tbody>
        </table>
    </center> 
    </body>
    
</html>