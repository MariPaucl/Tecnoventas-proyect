<?php
session_start();

require '../../config/conexion.php';
require '../../config/config.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT codProd, imagen, nomProd, precio, estProd FROM productos WHERE codigoCat = 3");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computadores</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
        <ul class="navbar-nav">
        <a class="navbar-brand">PRODUCTOS</a>
        <li class="nav-item">
        <a class="nav-link active" href="../Cell/cell.php">Celulares</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../Port/port.php">Portatiles</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled">Computadores</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../Tab/tab.php">Tablets</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../Audi/audi.php">Audifonos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../Parl/parl.php">Parlantes</a>
        </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../../Administrador.html">Inicio</a>
            </li>
        </ul>
        </div>
        </nav>
        <br>
        <?php
if (isset($_SESSION['success_message'])):
?>
    <div class="container mt-4">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['success_message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php
    unset($_SESSION['success_message']);
endif;
?>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach($resultado as $row) { ?>
                <div class="col">
                <div class="card">
                <div class="text-center">
                <img src="../../imagenes/productos/<?php echo$row['imagen']; ?>" class="rounded" alt="Imagen no encontrada">
            </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['nomProd']; ?></h5>
                    <p class="card-text fs-5">$<?php echo$row['precio'];?></p>
                    <center>
                    <p class="card-text"><?php $estado = $row['estProd'];
                            if ($estado == 'Agotado') {
                            echo '<p class="estado agotado">Agotado</p>';
                            } else {
                            echo '<p class="estado disponible">Disponible</p>';}
                            ?></p>
                    <a href="caracteristicas.php?codProd=<?php echo $row['codProd'];?>&token=<?php echo hash_hmac('sha1', $row['codProd'], KEY_TOKEN);?>" class="btn btn-secondary">Más detalles</a>
                </center>
                </div>
            </div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>