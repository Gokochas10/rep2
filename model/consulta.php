<?php
include_once 'conexion.php';

class crudS{
    public static function seleccionarEstudiantes(){
        $object = new conexion();
        $conn = $object->conectar();
        $sqlSelect= "select * from estudiantes";
        $result = $conn->prepare($sqlSelect);
        $result->execute();
        $data =$result->fetchAll(PDO::FETCH_ASSOC);
        $dataJs = json_encode($data);
        print_r($dataJs);
    }
    // public static function seleccionarEstudiantes($cedula){
    //     $object = new conexion();
    //     $conn = $object->conectar();
    //     $sqlSelect= "select * from estudiantes where dir_est ='$cedula'";
    //     $result = $conn->prepare($sqlSelect);
    //     $result->execute();
    //     $data =$result->fetchAll(PDO::FETCH_ASSOC);
    //     $dataJs = json_encode($data);
    //     print_r($dataJs);
    // }
}