<?php

////Llamada al modelo
require_once("../Model/Solicitud.php");
$num = $_POST['num'];
//echo $num;
switch ($num) {
    case 1: //insertar
        $codigo = $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $resumen = $_POST['resumen'];
        $id_empleado = $_POST['id_empleado'];
        $solicitud = new Solicitud();
        $solicitud->InsertSolicitud($codigo, $descripcion, $resumen, $id_empleado);
        break;
    case 2: //Consultar por ID
        $id = $_POST['ide'];
        $tienda = new Tienda();
        $tienda->ConsulTiendaID($id);
        echo "Aca deberia redireccionar con todo y datos a RegistroTienda.php";
        include '../View/RegistroTienda.php';
        break;
    case 3://Actualizar
        $id = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $dateA = $_POST['dateA'];
        $tienda = new Tienda();
        $tienda->UpdateTienda($id, $nombre, $dateA);
        break;
    case 4://Delete
        $id = $_POST['id'];
        $tienda = new Tienda();
        $tienda->DeleteTienda($id);
        break;
    default:
        break;
}
?>

