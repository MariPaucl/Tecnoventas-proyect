<?php
include("CRUD/crudProd/db.php");

if(isset($_SESSION['sessAdminID'])) {
    $idAdmin = $_SESSION['sessAdminID'];

    $query = "SELECT * FROM administradores WHERE idAdmin = '$idAdmin'";
    $result_prod = mysqli_query($conex, $query);

} else {
    header('Location: sesionAdmin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="website icon" type="png" href="imagenes/Tecnoventas.png">
</head>

<body>
    <div class="head">
        <div class="logo">
            <a>TECNOVENTAS</a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="cerrarSesAdmin.php">Cerrar Sesión</a></li>
                <li><a href="CRUD/crudProd/crud.php">CRUD</a></li>
                <li><a href="Productos_Admin/Cell/cell.php">Productos</a></li>
            </ul>
        </nav>
        </ul>
        </nav>
        </div>
        <div class="container">
        <?php while($row = mysqli_fetch_array($result_prod)){ ?>
            <h3>Administrador No. <?php echo $idAdmin?></h3>
            <h1>Bienvenid@ <br> <?php echo $row['nomAdmin'], ' ', $row['apeAdmin']?></h1>
        <?php } ?>
        <center>
        <div class="adminImg">
            <img src="img/admin.png" alt="" width="190px">
            <p>¡Comencemos!</p>
        </div>
        </center>
        </div>
</body>
</head>
<body>
</html>