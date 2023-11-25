<?php
header('Content-Type: application/json');

require_once("../config/conexion.php");
require_once("../models/Infoprod.php");
$infoprod = new Infoprod();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]){
case "Update_infoproductos";
            $datos=$infoprod->update_infoproducto($body["codProd"],$body["idCaract"],$body["valor"]);
            echo ("La caracteristica se actualizó correctamente");
            break;
}
?>