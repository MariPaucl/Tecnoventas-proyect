<?php
header('Content-Type: application/json');

require_once("../conexion.php");
require_once("../models/Admin.php");
$administrador = new Administrator();
$body = json_decode(file_get_contents("php://input"), true);


switch ($_GET["op"]){
    case "GetId":
        $datos=$administrador->get_administrador_x_id($body["idAdmin"]);
        echo json_encode($datos);
        break;
}

?>