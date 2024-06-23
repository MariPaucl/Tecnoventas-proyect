<?php
session_start();

if(isset($_SESSION['sessCustomerID'])){
    $idCliente = $_SESSION['sessCustomerID'];

    require '../config/conexion.php';
        $db = new Database();
        $con = $db->conectar();

        $sql = $con->prepare("SELECT * FROM clientes WHERE idCliente = $idCliente");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    <title>Editar Datos</title>
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
            <li><a href=""><i class="fa-solid fa-user-pen"></i>Editar mis datos</a></li>
            <li><a href="cambiarPass.php"><i class="fa-solid fa-key"></i>Cambiar contraseña</a></li>
            <li><a href="borrarCuenta.php"><i class="fa-solid fa-trash"></i>Borrar cuenta</a></li>
            <li><a href="../cerrarSesion.php"><i class="fa-solid fa-delete-left"></i>Cerrar Sesion</a></li>
        </ul>
    </div>
</div>
<div class="main_content">
    <div class="header">Editar mis datos</div>
    <div id="profile-container">
    <div class="container p-4">
        <div class="col-sm-12">
        <?php foreach($resultado as $row) {?>
        <form action="../api-rest/EditarDatos.php" method="POST">
            <div class="form-group mb-3">
                <input type="text" name="nomCliente" value="<?php echo $row['nomCliente']; ?>" class="form-control" placeholder="Cambiar nombre">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="apeCliente" value="<?php echo $row['apeCliente']; ?>" class="form-control" placeholder="Cambiar apellido">
            </div>
            <div class="form-group mb-3">
                <input type="date" name="fechaNac" value="<?php echo $row['fechaNac']; ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="number" name="telefono" value="<?php echo $row['telefono']; ?>" class="form-control" placeholder="Cambiar telefono">
            </div>
            <div class="form-group mb-3">
                <input type="email" name="correo" value="<?php echo $row['correo']; ?>" class="form-control" placeholder="Cambiar correo">
                <div class="form-text">
                Si deseas cambiar tu Tipo de Identificacion o No. de Identificacion debes comunicarte
                con nosotros a traves de nuestro formulario de <a id="ayuda" href="../Preguntas/Preguntas.html">Ayuda</a> o cualquiera de nuestros otros medios de comunicacion.
            </div>
            </div>
            <button class="btn btn-success btn-lg" type="submit" name="guardar">Guardar</button>
        </form>
        <?php } ?>
    </div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>
.btn-success{
    background: rgb(46, 1, 82) !important;
    color: #ceb8ed;
    border: none;
}
a#ayuda{
    text-decoration: none;
    color: rgb(46, 1, 82);
}
</style>
</body>
</html>
    </div>
</body>
</html>