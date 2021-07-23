<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productos
 *
 * @author Sergio
 */
include_once 'Conexion.php';
class Empleados {

    private $db;

    public function __construct() {
        $this->db = Conectar::conexion();
    }

    function ConsulEmpleado() {
        $sql = 'SELECT `id`,`fecha_ingreso`,`nombre`,`salario` FROM `empleado`';
        $result = $this->db->query($sql);
        $resArray = [];
        $i = 0;
        $num = mysqli_num_rows($result);
        //echo json_encode(mysqli_fetch_array($result));
        if ($num<1) {
            echo "No se hizo la consulta";
            return false;
        }else{
            while ($res = mysqli_fetch_array($result)) {
                $resArray[$i] = $res;
                $i++;
            }
            return $resArray;
        }
//        var_dump($resArray);
//        echo $num = mysqli_num_rows($result);
        
    }

    function InsertEmpleado($nombre, $fecha_ingre, $salario) {
        $sql = 'INSERT INTO `empleado`(`fecha_ingreso`, `nombre`, `salario`) VALUES ("'.$fecha_ingre.'","'.$nombre.'","'.$salario.'");';
        //echo $sql;
        $result = $this->db->query($sql);
        if ($result) {
            $URL = "../View/TablaEmpleado.php";
            header('Location: '.$URL);
        } else {
            echo 'Noup  ';
        }
        //var_dump($result);
    }
    /*function UpdateEmpleado($id, $nombre, $fecha_ingre, $salario) {
        $sql = 'UPDATE `empleado` SET `nombre`= "'.$nombre.'",`fecha_ingre`="'.$fecha_ingre.'",'
                . '`salario`="'.$salario.'" WHERE id = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }*/
    function DeleteEmpleado($id) {
        $sql = 'DELETE FROM `empleado` WHERE id = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup ';
        }
//        var_dump($result);
    }

}
