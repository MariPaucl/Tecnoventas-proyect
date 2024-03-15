<?php
header('Content-Type: application/json');

require_once("../../../config/conexion.php");
require_once("../models/Cliente.php");

$cliente = new Cliente();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){
    case "Perfil":
        $datos = $cliente->get_cliente($body['idCliente']);
        echo json_encode($datos);
        break;
    case "EditarDatos":
        $datos = $cliente->update_cliente($body['idCliente'], $body['nomCliente'], $body['apeCliente'], $body['fechaNac'], $body['telefono'], $body['correo']);
        echo json_encode("Tus datos se han actualizado correctamente");
    break;
    case "BorrarCuenta":
        $datos = $cliente->delete_cliente($body['correo']);
        echo json_encode("Lamentamos que te vayas. :( Te vamos a extrañar");
    break;
}