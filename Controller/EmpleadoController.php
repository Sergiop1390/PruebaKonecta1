<?php

////Llamada al modelo
require_once("../Model/Empleados.php");
$num = $_POST['num'];
//echo $num;
switch ($num) {
    case 1: //insertar
        $nombre = $_POST['nombreP'];
        $fecha_ingre = $_POST['fecha_ingre'];
        $salario = $_POST['salario'];
        $empleado = new Empleados();
        $empleado->InsertEmpleado($nombre, $fecha_ingre, $salario);
        break;
    case 2: //Consultar por ID
//        $id = $_POST['ide'];
//        $tienda = new Tienda();
//        $tienda->ConsulTiendaID($id);
//        echo "Aca deberia redireccionar con todo y datos a RegistroTienda.php";
//        include '../View/RegistroTienda.php';
        break;
    case 3://Actualizar
        $nombre = $_POST['nombreP'];
        $fecha_ingre = $_POST['fecha_ingre'];
        $salario = $_POST['salario'];
        $empleado = new Empleados();
        $empleado->UpdateEmpleado($nombre, $fecha_ingre, $salario);
        break;
    case 4://Delete
        $id = $_POST['id'];
        $empleado = new Empleados();
        $empleado->DeleteEmpleado($id);
        break;
    default:
        break;
}
?>
