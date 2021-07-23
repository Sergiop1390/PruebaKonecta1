<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "pruebapractica");
        $conexion->query("SET NAMES 'utf8'");
        //echo $conexion->host_info . "\n";
        return $conexion;
    }

}


    
    


