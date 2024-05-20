<?php
include_once '../model/consulta.php';
include_once '../model/borrar.php';
include_once '../model/guardar.php';
include_once '../model/actualizar.php';

header('Content-Type: application/json');

$opc= $_SERVER['REQUEST_METHOD'];
switch($opc){
    case 'GET':
        //Se puede acceder a un metodo estatico con '::'
        //$cedula = $_GET['ced_est'];
        //CrudS::seleccionarEstudiantes($cedula);
        CrudS::seleccionarEstudiantes();
        break;
    case 'POST':
        $datoG = json_decode(file_get_contents('php://input'));
            crudG::guardarEstudiante($datoG -> CED_EST,$datoG -> NOM_EST,$datoG -> APE_EST,$datoG -> DIR_EST,
            $datoG -> TEL_EST);
        break;
    case 'DELETE':
        $cedula =$_GET['CED_EST'];
        CrudE::eliminarEstudiante($cedula);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents("php://input"), true);
        print_r($data);
        $ced = $data['CED_EST'];
        $nom = $data['NOM_EST'];
        $ape = $data['APE_EST'];
        $dir = $data['DIR_EST'];
        $tel = $data['TEL_EST'];
        CrudM::modificarEstudiante($ced, $nom, $ape, $dir, $tel);
        break;
}