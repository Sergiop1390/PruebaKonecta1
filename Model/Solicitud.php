<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tienda
 *
 * @author Sergio
 */
include_once 'Conexion.php';

class Solicitud {

    private $db;

    public function __construct() {
        $this->db = Conectar::conexion();
    }

    function ConsulSolicitud() {
        $sql = 'SELECT solicitud.`id` as "id",`codigo`,`descripcion`,`resumen`,empleado.nombre as "nombre" FROM `solicitud` INNER JOIN empleado on solicitud.id_empleado = empleado.id';
        $result = $this->db->query($sql);
        $resArray = [];
        $i = 0;
        while ($res = mysqli_fetch_array($result)) {
            $resArray[$i] = $res;
            $i++;
        }
//        var_dump($resArray);
//        echo $num = mysqli_num_rows($result);
        return $resArray;
    }

    function InsertSolicitud($codigo, $descripcion, $resumen, $id_empleado) {
        $sql = 'INSERT INTO `solicitud`(`codigo`, `descripcion`, `resumen`, `id_empleado`) VALUES ("' . $codigo . '","' . $descripcion . '","' . $resumen . '",' . $id_empleado . ');';
        $result = $this->db->query($sql);
        if ($result) {
            $URL = "../View/TablaSolicitud.php";
            header('Location: '.$URL);
        } else {
            echo 'Noup F ';
        }
    }
    /*function UpdateSolicitud($id, $codigo, $descripcion, $resumen, $id_empleado) {
        $sql = 'UPDATE solicitud SET codigo="'.$codigo.'", descripcion="'.$descripcion.'", resumen="'.$resumen.'", id_empleado='.$id_empleado.' WHERE id = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }*/
    function DeleteSolicitud($id) {
        $sql = 'DELETE FROM `solicitud` WHERE id = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }

}
