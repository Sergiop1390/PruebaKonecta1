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
        <script src="../js/registroEmpleados.js"></script>
        <title></title>
    </head>
    <body>
        <div class="row justify-content-center">
            <h1>Registrar Empleado</h1><br>
        </div>
        <form action = "../Controller/EmpleadoController.php" method= "post"> 
            <div class="form-group row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="nombreP">Nombre</label>
                </div>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="nombreP" name="nombreP">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="fecha_ingre">Fecha de ingreso</label>
                </div>
                <div class="col-sm-5 row justify-content-center">
                    <input type="date" class="form-control" id="fecha_ingre" name="fecha_ingre">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="salario">Salario</label>
                </div>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="salario" name="salario">
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

