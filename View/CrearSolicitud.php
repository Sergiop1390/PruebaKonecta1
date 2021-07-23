<?php
require_once("../Model/Empleados.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../js/Registro_Solicitud.js"></script>
        <title></title>
    </head>
    <body>
        <div class="row justify-content-center">
            <h1>Registrar Solicitud</h1><br>
        </div>
        <form action = "../Controller/SolicitudController.php" method= "post"> 
            <div class="form-group row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="codigo">Codigo</label>
                </div>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="codigo" name="codigo">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="descripcion">Descripcion</label>
                </div>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="">Resumen</label>
                </div>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="resumen" name="resumen">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="id_empleado ">Empleado</label>
                </div>
                <div class="input-group-prepend row justify-content-center">
                    <select class="custom-select" id="id_empleado " name = "id_empleado">
                        <option value="0">Elegir Tienda</option>
                        <?php
                        $empleado = new Empleados();
                        $datos = $empleado->ConsulEmpleado();
                        foreach ($datos as $empleado) {
                            echo "<option value='" . $empleado['id'] . "'>" . $empleado['nombre'] . "</th>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-2">
                    <input type="submit" class="btn btn-primary" id="Crear_empleado" value="Enviar">
                </div>
            </div>
            <input type="text" class="form-control" id="num" name="num" value="1" hidden>
        </form>
        <span></span>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

