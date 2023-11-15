<?php
header('Content-Type: application/json');

require_once("../conexion.php");
require_once("../models/Productos.php");
$productos = new Productos();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){
    case "GetAll":
        $datos = $productos->get_producto();
        echo json_encode($datos);
        break;

    case "Insert";
    $datos = $productos->insert_producto($body["idAdmin"],$body["nomProd"],$body["marca"],$body["precio"],$body["estProd"],$body["imagen"]);
    echo "Se inserto el producto correctamente";
    break;

    case "Update";
    $datos = $productos->Update_productos($body["codProd"],$body["nomProd"],$body["marca"],$body["precio"],$body["estProd"],$body["imagen"]);
            echo "El producto se actualizo correctamente";
        break;
    }
?>