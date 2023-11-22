<?php

include("conexion.php");

if (isset($_POST['registrar'])) {
    if (
        strlen($_POST['tipoId']) >= 1 &&
        strlen($_POST['numId']) >= 1 &&
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['fecha']) >= 1
    ) {
        $tipoId = trim($_POST['tipoId']);
        $numId = trim($_POST['numId']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']); // Obtiene la contraseña sin cifrar
        // Encripta la contraseña utilizando MD5
        $hashContrasena = md5($password);
        $telefono = trim($_POST['telefono']);
        $fecha = trim($_POST['fecha']);

        $consulta = "INSERT INTO clientes(tipoId, numId, nomCliente, apeCliente, fechaNac, telefono, correo, passCliente)
                VALUES('$tipoId', '$numId', '$nombre', '$apellido', '$fecha', '$telefono', '$email', '$hashContrasena')";

        if (mysqli_query($conex, $consulta)) {
            echo "<script>window.location.href = 'inicio.html';</script>";;
        } else {
            echo "Error en el registro: " . mysqli_error($conex);
        }
    }
}
$conex->close();

?>
