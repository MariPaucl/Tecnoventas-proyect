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
    <title>Borrar Cuenta</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylePerfil.css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <a href="../inicio.php" title="Volver"><i class="fa-solid fa-caret-left"></i></a><h2>TECNOVENTAS</h2>
        <ul>
            <li><a href="perfil.php"><i class="fa-solid fa-user"></i>Mis Datos</a></li>
            <li><a href="pedidos.php"><i class="fa-solid fa-bag-shopping"></i>Mis Pedidos</a></li>
            <li><a href="editarDatos.php"><i class="fa-solid fa-user-pen"></i>Editar mis datos</a></li>
            <li><a href="cambiarPass.php"><i class="fa-solid fa-key"></i>Cambiar contraseña</a></li>
            <li><a href=""><i class="fa-solid fa-trash"></i>Borrar cuenta</a></li>
            <li><a href="../cerrarSesion.php"><i class="fa-solid fa-delete-left"></i>Cerrar Sesion</a></li>
        </ul>
    </div>
</div>
<div class="main_content">
    <div class="header">Borrar Cuenta</div>
    <div id="profile-container">
    <div class="container p-4">
    <div class="col-sm-12">
    <form action="../api-rest/BorrarCuenta.php" method="POST">
    <legend>Estas seguro de borrar tu cuenta!?</legend>
            <div class="form-group mb-3">
                <input type="email" id="correoInput" name="correo" class="form-control" placeholder="Confirma con tu correo">
            </div>
            <div class="form-text">
                Si estas seguro de borrar tu cuenta, por favor escribe tu correo para confirmar.
            </div>
            <br>
            <button class="btn btn-success btn-lg" type="submit" id="confirmButton" name="confirm">Confirmar</button>
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
    </style>
</body>
</html>