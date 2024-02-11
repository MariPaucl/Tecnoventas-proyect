<?php
// Este archivo recibe la solicitud POST desde la página de PayPal y actualiza el estado del pedido en la base de datos

// Verificar si se recibió una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar los datos del pedido desde la solicitud JSON
    $requestData = json_decode(file_get_contents('php://input'), true);

    // Validar los datos recibidos
    if (isset($requestData['orderId']) && isset($requestData['status'])) {
        // Conectar a la base de datos (asegúrate de establecer la conexión según tu configuración)
        $conn = new mysqli('localhost', 'root', '', 'tecnoventas');

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Actualizar el estado del pedido en la base de datos
        $orderId = $conn->real_escape_string($requestData['codPedido']);
        $status = 'Por Enviar';

        $sql = "UPDATE pedidos SET estadoPedido = '$status' WHERE codPedido = '$orderId'";

        if ($conn->query($sql) === TRUE) {
            // Enviar una respuesta exitosa al cliente
            http_response_code(200);
            echo json_encode(array("message" => "Estado del pedido actualizado correctamente"));
        } else {
            // Enviar una respuesta de error al cliente
            http_response_code(500);
            echo json_encode(array("message" => "Error al actualizar el estado del pedido: " . $conn->error));
        }

        // Cerrar la conexión
        $conn->close();
    } else {
        // Enviar una respuesta de error si faltan datos
        http_response_code(400);
        echo json_encode(array("message" => "Se requieren orderId y status"));
    }
} else {
    // Enviar una respuesta de error si no es una solicitud POST
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido"));
}
?>
