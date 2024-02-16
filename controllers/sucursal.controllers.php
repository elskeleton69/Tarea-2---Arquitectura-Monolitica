<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/sucursal.models.php");
error_reporting(0);

$Sucursal = new Sucursales;
switch ($_GET["op"]) {
    /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Sucursal->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);

        break;
    /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $idAccesos = $_POST["idAccesos"];
        $datos = array();
        $datos = $Sucursal->uno($idAccesos);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case 'insertar':
        $Nombre = $_POST["Nombre"];
        $Direccion = $_POST["Direccion"];
        $Telefono = $_POST["Telefono"];
        $Correo = $_POST["Correo"];
        $Parroquia = $_POST["Parroquia"];
        $Canton = $_POST["Canton"];
        $Provincia = $_POST["Provincia"];
        $datos = array();
        $datos = $Sucursal->Insertar($Nombre, $Direccion, $Telefono, $Correo, $Parroquia, $Canton, $Provincia);
        echo json_encode($datos);
        break;
    /*TODO: Procedimiento para insertar
case 'insertar':

    $Ultimo = $_POST["Ultimo"];
    $Usuarios_idUsuarios = $_POST["combo_idUsuarios"];
    $tipo = $_POST["tipo"];
    $datos = array();
    $datos = $Sucursal->Insertar($Ultimo, $Usuarios_idUsuarios, $tipo);
    echo json_encode($datos);
    break;
   
case 'actualizar':
    $idAccesos = $_POST["idAccesos"];
    $Ultimo = $_POST["Ultimo"];
    $Usuarios_idUsuarios = $_POST["Usuarios_idUsuarios"];
    $datos = array();
    $datos = $Sucursal->Actualizar($idAccesos, $Ultimo, $Usuarios_idUsuarios);
    echo json_encode($datos);
    break;
   
case 'eliminar':
    $idAccesos = $_POST["idAccesos"];
    $datos = array();
    $datos = $Sucursal->Eliminar($idAccesos);
    echo json_encode($datos);
    break; */
}