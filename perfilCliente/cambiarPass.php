<?php
session_start();

if(isset($_SESSION['sessCustomerID'])){
    $idCliente = $_SESSION['sessCustomerID'];

}else{
    header('Location: ../index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylePerfil.css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <a href="../inicio.html" title="Volver"><i class="fa-solid fa-caret-left"></i></a><h2>TECNOVENTAS</h2>
        <ul>
            <li><a href="perfil.php"><i class="fa-solid fa-user"></i>Mis Datos</a></li>
            <li><a href="pedidos.php"><i class="fa-solid fa-bag-shopping"></i>Mis Pedidos</a></li>
            <li><a href="editarDatos.php"><i class="fa-solid fa-user-pen"></i>Editar mis datos</a></li>
            <li><a href=""><i class="fa-solid fa-key"></i>Cambiar contraseña</a></li>
            <li><a href="borrarCuenta.php"><i class="fa-solid fa-trash"></i>Borrar cuenta</a></li>
            <li><a href="../cerrarSesion.php"><i class="fa-solid fa-delete-left"></i>Cerrar Sesion</a></li>
        </ul>
    </div>
</div>
<div class="main_content">
    <div class="header">Cambiar Contraseña</div>
    <div id="profile-container">
    <div class="container p-4">
    <div class="col-sm-12">
    <form action="../api-rest/CambiarPass.php" method="POST" onsubmit="return validarFormulario()">
            <div class="form-group mb-3">
                <input type="password" id="passCliente" name="passCliente" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Tu contraseña debe tener  al menos 8 caracteres y contener una letra mayúscula, una minúscula y un número" class="form-control" placeholder="Nueva contraseña" required>
            </div>
            <div class="form-group mb-3">
                <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Confirma la contraseña" required>
                <i class="fa fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i>
                <div id="passwordHelpBlock" class="form-text">
                Tu contraseña debe tener  al menos 8 caracteres y contener una letra mayúscula, una minúscula y un número
                </div>
                <small id="error-confirm" style="color: red;"></small>
            </div>
            <button class="btn btn-success btn-lg" type="submit" name="guardar">Cambiar</button>
    </form>
    </div>
    </div>
    </div>
    <style>
        .btn-success{
            background: rgb(46, 1, 82) !important;
            color: #ceb8ed;
            border: none;
        }
        i#togglePassword{
            display: flex;
            margin: 5px;
            cursor: pointer;
        }
    </style>

        <script>
            function togglePassword() {
            var passwordField = document.getElementById('passCliente');
            var confirm = document.getElementById('confirm');
            var toggleIcon = document.getElementById('togglePassword');

            if (passwordField.type === 'password' && confirm.type === 'password') {
                passwordField.type = 'text';
                confirm.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                confirm.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }

            function validarFormulario() {
                var password = document.getElementsByName("passCliente")[0].value;
                var confirmarPassword = document.getElementsByName("confirm")[0].value;
                var errorConfirm = document.getElementById("error-confirm");

                if (password !== confirmarPassword) {
                    errorConfirm.textContent = "Las contraseñas no coinciden";
                    return false;
                } else {
                    errorConfirm.textContent = "";
                    return true;
                }
            }
        </script>
</body>
</html>