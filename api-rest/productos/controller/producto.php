<?php
header('Content-Type: application/json');

require_once("../../../config/conexion.php");
require_once("../models/Producto.php");

$producto = new Producto();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){
    case "VerProductos":
        $datos = $producto->get_productos($body['codigoCat']);
        echo json_encode($datos);
        break;
    case "EditarProd":
        $datos = $producto->update_prod($body['codProd'], $body['nomProd'], $body['marca'], $body['precio'], $body['estProd'], $body['stockProd'], $body['imagen'], $body['codigoCat']);
        echo json_encode("Producto Actualizado Satisfactoriamente");
    break;
    case "RegistroProd":
        $datos = $producto->reg_prod($body['idAdmin'], $body['nomProd'], $body['marca'], $body['precio'], $body['estProd'], $body['stockProd'], $body['imagen'], $body['codigoCat']);
        echo json_encode("Producto registrado satisfactoriamente.");
    break;
}