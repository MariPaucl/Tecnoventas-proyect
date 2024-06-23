<?php
session_start();

if(isset($_SESSION['sessCustomerID'])) {
    $idCliente = $_SESSION['sessCustomerID'];

    require '../config/conexion.php';
        $db = new Database();
        $con = $db->conectar();

        $sql = $con->prepare("SELECT * FROM clientes WHERE idCliente = $idCliente");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    header('Location: ../index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
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
            <li><a href=""><i class="fa-solid fa-user"></i>Mis Datos</a></li>
            <li><a href="pedidos.php"><i class="fa-solid fa-bag-shopping"></i>Mis Pedidos</a></li>
            <li><a href="editarDatos.php"><i class="fa-solid fa-user-pen"></i>Editar mis datos</a></li>
            <li><a href="cambiarPass.php"><i class="fa-solid fa-key"></i>Cambiar contraseña</a></li>
            <li><a href="borrarCuenta.php"><i class="fa-solid fa-trash"></i>Borrar cuenta</a></li>
            <li><a href="../cerrarSesion.php"><i class="fa-solid fa-delete-left"></i>Cerrar Sesion</a></li>
        </ul>
    </div>
</div>
<div class="main_content">
    <div class="header">Mi Perfil</div>
    <div id="profile-container">
        <img id="profile-image" src="../imagenes/noPhoto.webp" alt="Imagen de perfil">
        <div id="user-info">
            <?php foreach($resultado as $row) {
                $fechaOriginal = $row['fechaNac'];
                $fechaFormato = date('d M Y', strtotime($fechaOriginal));
                ?>
            <div class="row">
            <p id="name"><strong><?php echo $row['nomCliente'], ' ', $row['apeCliente'];?></strong></p>
            <p><strong><?php echo $row['correo'];?></strong></p>
            </div>
            <div class="user">
            <div class="info">
            <p><strong>Tipo de Documento:</strong> <?php echo $row['tipoId'];?></p>
            <p><strong>Número de Documento:</strong> <?php echo $row['numId'];?></p>
            <p><strong>Teléfono:</strong> <?php echo $row['telefono'];?></p>
            <p><strong>Fecha de Nacimiento:</strong> <?php echo $fechaFormato;?></p>
            </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>