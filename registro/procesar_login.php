<?php
include("conexion.php");

if (isset($_POST['numId']) && isset($_POST['password']) && isset($_POST['tipoId'])) {
    $numId = trim($_POST['numId']);
    $password = trim($_POST['password']); // Contraseña ingresada por el usuario
    $tipoId = trim($_POST['tipoId']);

    // Consulta para obtener el registro correspondiente al número de documento y tipo de documento
    $consulta = "SELECT * FROM clientes WHERE numId = '$numId' AND tipoId = '$tipoId'";
    $resultado = mysqli_query($conex, $consulta);

    if ($resultado && $row = mysqli_fetch_assoc($resultado)) {
        $contrasena_almacenada = $row['passCliente'];
        $idCliente = $row['idCliente'];

        // Verificar si la contraseña ingresada coincide con la almacenada en la base de datos
        if (password_verify($password, $contrasena_almacenada)) {
            // Inicio de sesión exitoso, redirigir al usuario a la página de inicio
            session_start();
            $_SESSION['sessCustomerID'] = $idCliente; // Almacena el id del cliente en la sesión
            header("Location: inicio.php");
        } else {
            // Mensaje de contraseña incorrecta con estilo CSS
            echo '<div class="mensaje-error"><p>Contraseña incorrecta.</div>';
        }
    } else {
        // Mensaje de número de documento o tipo de documento no encontrados con estilo CSS
        echo '<div class="mensaje-error">N° de documento o tipo no encontrados.</div>';
    }
} else {
    // Mensaje de falta de información con estilo CSS
    echo '';
}

$conex->close();
?>
<style>
/* Estilos para mensajes de error */
.mensaje-error {
    color: #ff0000;
    /* Color rojo para el texto */
    font-weight: bold;
    /* Texto en negrita */
    margin-bottom: 10px;
    /* Espacio inferior para separar mensajes */
    position: relative;
    /* O absolute, fixed, etc., según tus necesidades */
    top: 237px;
    /* Mueve el texto hacia abajo desde su posición original */
}
</style>