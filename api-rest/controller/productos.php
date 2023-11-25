<?php
header('Content-Type: application/json');

require_once("../config/conexion.php");
require_once("../models/Productos.php");
$productos = new Productos();

$body = json_decode(file_get_contents("php://input"), true);


switch ($_GET["op"]){
    case "ProductoEstado":
            // Verifica si se realiza la acción correctamente
        $actualizacionExitosa = $productos->ProductoEstado($body["codProd"]);
            if ($actualizacionExitosa) {
                echo "Actualización con éxito";
            } else {
                echo "Error al actualizar";
            }
            break;
}
?>