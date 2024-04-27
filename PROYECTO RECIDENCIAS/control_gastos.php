<<!DOCTYPE html>
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
                
                
            </thead>
            <tbody>
                <tr>
           <div class="form-group mx-sm-3">  <h1> Control de Gastos </h1> <br><br>
            <form class=""  action="enviar_gastos.php" method="post" enctype="multipart/form-data">
           <td>Fecha:                 <input type="date"  name="fecha"><br></td>
           <td>Proveedor:             <input  type="text" placeholder="#"             name="proveedor"><br></td>
           <td>Monto: <input  type="text" placeholder="#" name="monto"> <br></td>
           <td>Proyecto:         <input  type="text" placeholder="#"          name="proyecto"> <br></td>
           <td>Nota: <input  type="text" placeholder="#"  name="nota"> <br></td>
           <td>Realizo: <input  type="text" placeholder="#"  name="realizo"> <br></td>
           <td>Solicito: <input  type="text" placeholder="#"  name="solicito"> <br></td>
            <th><input type="submit"  onclick="alerta()" name="Registrar"></th>
        </form>
       </tr>
       </div>
</tbody>
        </table>
    </center> 
    </body>
    
</html>