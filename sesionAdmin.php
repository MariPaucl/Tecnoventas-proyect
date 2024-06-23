<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="registro/sesion.css">
<title>Inicia Sesion</title>
<link rel="website icon" type="png" href="imagenes/Tecnoventas.png">
<script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
<form class="formulario" action="sesionAdmin.php" method="post">
    <div class="mensaje-error"></div>

    <h1>INICIA SESIÓN COMO ADMINISTRADOR</h1>
    <div class="contenedor">

        <div class="input-contenedor">
            <i class="fas fa-nomusu"></i>
            <img src="registro/correo.png" />
            <input type="email" id="email" name="email" placeholder="Correo electrónico">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-contraseña"></i>
            <img src="registro/pass.png" />
            <input type="password" id="pass" name="password" placeholder="Contraseña">
            <i class="fas fa-eye-slash" id="togglePassword" onclick="togglePassword()" style="visibility: visible;top: 249px;right: 65px;position: absolute;"></i>
        </div>

        <a class="pasword" href="recuperaPswAdmin/Pasworadmin.php">Olvidaste tu contraseña</a>

        <input type="submit" value="Iniciar sesión" class="button">
    </div>
</form>
<script>
        function togglePassword() {
            var passwordField = document.getElementById('pass');
            var toggleIcon = document.getElementById('togglePassword');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

</html>

<?php
include("registro/conexion.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $correoAdmin = trim($_POST['email']);
    $passAdmin = trim($_POST['password']);
    // Consulta para obtener el registro correspondiente al correo del Admin
    $consulta = "SELECT * FROM administradores WHERE correoAdmin = '$correoAdmin'";
    $resultado = mysqli_query($conex, $consulta);

    if ($resultado && $row = mysqli_fetch_assoc($resultado)) {
        $contrasena_almacenada = $row['passAdmin'];
        $idAdmin = $row['idAdmin'];

        // Verificar si la contraseña ingresada coincide con la almacenada en la base de datos
        if (md5($passAdmin) === $contrasena_almacenada) {
            // Inicio de sesión exitoso, redirigir al usuario a la página de inicio
            session_start();
            $_SESSION['sessAdminID'] = $idAdmin; // Almacena el id del admin en la sesión
            $success = "Has iniciado sesion como admin";
            echo "<script>alert('$success');</script>";
            echo "<script>window.location.href='Administrador.php';</script>";
            exit();
        } else {
            // Mensaje de contraseña incorrecta con estilo CSS
            echo '<div class="mensaje-error"><p>Contraseña incorrecta.</div>';
        }
    } else {
        // Mensaje de número de documento o tipo de documento no encontrados con estilo CSS
        echo '<div class="mensaje-error">Correo no encontrado</div>';
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
    color: #ff0000; /* Color rojo para el texto */
    font-weight: bold; /* Texto en negrita */
    margin-bottom: 10px; /* Espacio inferior para separar mensajes */
    position: relative; /* O absolute, fixed, etc., según tus necesidades */
    top: 183px; /* Mueve el texto 20px hacia abajo desde su posición original */
}
</style>