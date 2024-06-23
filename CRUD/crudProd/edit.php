<?php
include('db.php');

if(isset($_GET['codProd'])){
    $codProd = $_GET['codProd'];
    $query = "SELECT * FROM productos WHERE codProd = $codProd";
    $result = mysqli_query($conex, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $codProd = $row['codProd'];
        $nomProd = $row['nomProd'];
        $marca = $row['marca'];
        $precio = $row['precio'];
        $imagen = $row['imagen'];
        $estProd = $row['estProd'];
        $Stock = $row['stockProd'];
    }
}

if(isset($_POST['guardar'])){
    $codProd = $_GET['codProd'];
    $nomProd = $_POST['nomProd'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $estProd = $_POST['estProd'];
    $Stock = $_POST['stockProd'];

    if ($_FILES['imagen']['name']) {
        $imagen = $_FILES['imagen']['name'];
        $ruta = "../../imagenes/productos/" . $imagen;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
    }
    if (!isset($imagen) || empty($imagen)) {
        $query = "SELECT imagen FROM productos WHERE codProd = $codProd";
        $resultado = mysqli_query($conex, $query);
        $row = mysqli_fetch_array($resultado);
        $imagen = $row['imagen'];
    }


    $query = "UPDATE productos set codProd = '$codProd', nomProd = '$nomProd', marca = '$marca', precio = '$precio', imagen = '$imagen', estProd = '$estProd', stockProd = $Stock WHERE codProd = $codProd";
    mysqli_query($conex, $query);

    $message = "Producto Actualizado Satisfactoriamente";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='crud.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container p-4">
    <div class="row">
    <h1 class="text-h1">Actualizar Productos</h1>
    <div class="col-md-4 mx-auto">
    <div class="card card-body">
        <form action="edit.php?codProd=<?php echo $_GET['codProd']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <input type="hidden" name="codProd" value="<?php echo $codProd; ?>" class="form-control" placeholder="Cambiar codigo">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="nomProd" value="<?php echo $nomProd; ?>" class="form-control" placeholder="Cambiar nombre">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="marca" value="<?php echo $marca; ?>" class="form-control" placeholder="Cambiar marca">
            </div>
            <div class="form-group mb-3">
                <input type="number" name="precio" value="<?php echo $precio; ?>" class="form-control" placeholder="Cambiar precio">
            </div> 
                    <div class="form-group mb-3">
                        <input type="text" name="imagen" value="<?php echo $imagen; ?>" class="form-control" placeholder="Direccion de la imagen">
                        <input type="file" name="imagen" class="form-control mt-2">
                        <br>
                     
                        <?php  if (filter_var($imagen, FILTER_VALIDATE_URL)) { ?>
                            <img src="<?php echo $imagen; ?>" width="100"><br>
                        <?php } else { ?>
                            <img src="../../imagenes/productos/<?php echo $imagen; ?>" width="100"><br>
                        <?php } ?>
                    </div>
            <div class="form-group mb-3">
                <select name="estProd" class="form-control">
                    <option value="Disponible" <?php if ($estProd == 'Disponible') echo 'selected'; ?>>Disponible</option>
                    <option value="Agotado" <?php if ($estProd == 'Agotado') echo 'selected'; ?>>Agotado</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <input type="text" name="stockProd" value="<?php echo $Stock; ?>" class="form-control" placeholder="Cambiar Stock">
            </div>
            <button class="btn btn-outline-success btn-lg" type="submit" name="guardar">Guardar</button>
        </form>
    </div>
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    .btn{
        width: 250px;
    }
    .text-h1{
        color:#008040 !important ;
        padding: 0px 250px;
        text-align: center;
        font-family: 'Bebas Neue', sans-serif;
    }
</style>
</body>
</html>