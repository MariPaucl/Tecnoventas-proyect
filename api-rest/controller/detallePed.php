<?php
header('Content-Type: application/json');

require_once("../config/conexion.php");
require_once("../models/Detalleped.php");

$detalleped = new Detalleped();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]){
case "InsertDetalle";
$resultadoValidacion=$detalleped->validarStock($body["codProd"],$body["cantidadProd"]);
if ($resultadoValidacion["valido"]) {
    $detalleped->insert_detalleped($body["codPedido"],$body["codProd"], $body["cantidadProd"]);
    /*$detalleped->restar_cantidad($body["codProd"],$body["cantidadProd"]);*/
    echo "El detalle del pedido se inserto correctamente";
} else {
    echo $resultadoValidacion["mensaje"];
}
break;
}
?>