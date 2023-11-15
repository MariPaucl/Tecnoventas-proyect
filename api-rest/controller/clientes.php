<?php
header('Content-Type: application/json');

require_once("../conexion.php");
require_once("../models/Clientes.php");
$clientes = new Clientes();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){
    case "GetAll":
        $datos = $clientes->get_cliente();
        echo json_encode($datos);
        break;
    }
?>