<?php
 include_once 'conexion.php';

 class CrudM{
     public static function modificarEstudiante($ced_est, $nom_est, $ape_est, $dir_est, $tel_est){
         $object = new conexion();
         $conectar = $object->conectar();
         $update = "update estudiantes set nom_est='$nom_est',ape_est='$ape_est', dir_est='$dir_est', tel_est='$tel_est' where ced_est='$ced_est'";
         $result= $conectar->prepare($update);
         $result->execute();
         echo json_encode($result);
         $conectar->commit();
     }
 }