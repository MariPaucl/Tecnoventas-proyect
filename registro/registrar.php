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
        $telefono = trim($_POST['telefono']);
        $fecha = trim($_POST['fecha']);

        $check_query = mysqli_query($conex, "SELECT * FROM clientes WHERE numId ='$numId' OR correo ='$email' OR telefono ='$telefono'");
        $rowCount = mysqli_num_rows($check_query);
        if ($rowCount > 0) {
            ?>
            <script>
                alert("Este usuario ya está registrado");
            </script>
            <?php
        } else {
            // Encripta la contraseña utilizando hash
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $consulta = "INSERT INTO clientes(tipoId, numId, nomCliente, apeCliente, fechaNac, telefono, correo, passCliente)
                VALUES('$tipoId', '$numId', '$nombre', '$apellido', '$fecha', '$telefono', '$email', '$password_hash')";

            if (mysqli_query($conex, $consulta)) {
                ?>
                <script>
                    alert("Te has registrado correctamente. Ahora inicia sesión");
                    window.location.href = 'sesion.php';
                </script>
                <?php
            } else {
                echo "Error en el registro: " . mysqli_error($conex);
            }
        }
    }
}
$conex->close();