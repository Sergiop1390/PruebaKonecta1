<?php
require_once("../Model/Solicitud.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../js/TablaEmpleado.js"></script>
    </head>
    <body>
        <div class="row justify-content-center">
            <h1>Lista de tiendas</h1><br>
        </div>
        <table border="1" class="table">
            <thead class="thead-dark">
                <tr><!--Filas --> 
                    <th>ID</th><!--Columnas -->
                    <th>Codigo</th>
                    <th>descripción</th>
                    <th>Resumen</th>
                    <th>Empleado</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $solicitud = new Solicitud();
                $datos = $solicitud->ConsulSolicitud();
                //echo json_encode($datos);
                foreach ($datos as $solicitudes) {
                    echo "<tr>";
                    echo "<th>".$solicitudes['id']."</th>";       
                    echo "<th>".$solicitudes['codigo']."</th>";
                    echo "<th>".$solicitudes['descripcion']."</th>";
                    echo "<th>".$solicitudes['resumen']."</th>";
                    echo "<th>".$solicitudes['nombre']."</th>";
                   // echo "<th> <input type='button' class='btn btn-success' id='".$solicitudes['id']."' name='UpdateEmpleado' value='Atualizar Empleado'> </th>";
                    echo "<th> <input type='button' class='btn btn-danger' id='".$solicitudes['id']."' name='DeleteSolicitud' value='Eliminar Solicitud'> </th>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <input type="button" class="btn btn-primary" name="CrearSolicitud" value="Crear Solicitud">
        <div id="aaa"></div>  
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
