<?php
header('Content-Type: application/json');

require_once("../conexion.php");
require_once("../models/Deleteprod.php");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if (isset($_GET['codProd'])) {
        $codProd = $_GET['codProd'];

        $producto = new Productos();
        $resultado = $producto->eliminar_producto($codProd);

        if ($resultado) {
            echo json_encode(array('mensaje' => 'Producto eliminado con éxito'));
        } else {
            echo json_encode(array('mensaje' => 'Error al eliminar el producto'));
        }
    } else {
        echo json_encode(array('mensaje' => 'Codigo del producto no proporcionado'));
    }
} else {
    echo json_encode(array('mensaje' => 'Método no permitido'));
}
?>