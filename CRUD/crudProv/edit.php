<?php
include('../crudProd/db.php');

if(isset($_GET['idProv'])){
    $idProv = $_GET['idProv'];
    $query = "SELECT * FROM proveedores WHERE idProv = $idProv";
    $result = mysqli_query($conex, $query);
    if (!$result) {
        die("Error en la consulta SQL: " . mysqli_error($conex));
    }
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $idProv = $row['idProv'];
        $NIT = $row['NIT'];
        $nomProv = $row['nomProv'];
        $correoProv = $row['correoProv'];
        $nomCont = $row['nomCont'];
        $apeCont = $row['apeCont'];
        $direccion = $row['direccion'];
        $telProv = $row['telProv'];
        $paginaWeb = $row['paginaWeb'];
    }
}

if(isset($_POST['guardar'])){
    $idProv = $_POST['idProv'];
    $NIT = $_POST['NIT'];
    $nomProv = $_POST['nomProv'];
    $correoProv = $_POST['correoProv'];
    $nomCont = $_POST['nomCont'];
    $apeCont = $_POST['apeCont'];
    $direccion = $_POST['direccion'];
    $telProv = $_POST['telProv'];
    $paginaWeb = $_POST['paginaWeb'];

    $query = "UPDATE proveedores set idProv = '$idProv', NIT = '$NIT', nomProv = '$nomProv', correoProv = '$correoProv', nomCont = '$nomCont', apeCont = '$apeCont', direccion = '$direccion', telProv = '$telProv', paginaWeb = '$paginaWeb' WHERE idProv = $idProv";
    mysqli_query($conex, $query);

    $message = "Proveedor Actualizado Satisfactoriamente";
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
    <title>Proveedores</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
<div class="container p-4">
    <div class="row">
    <h1 class="text-h1">Actualizar Proveedor</h1>
    <div class="col-md-4 mx-auto">
    <div class="card card-body">
        <form action="edit.php?idProv=<?php echo $_GET['idProv']; ?>" method="post">
            <div class="form-group mb-3">
                <input type="hidden" name="idProv" value="<?php echo $idProv; ?>" class="form-control" placeholder="Cambiar ID">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="NIT" value="<?php echo $NIT; ?>" class="form-control" placeholder="Cambiar NIT">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="nomProv" value="<?php echo $nomProv; ?>" class="form-control" placeholder="Cambiar nombre proveedor">
            </div>
            <div class="form-group mb-3">
                <input type="email" name="correoProv" value="<?php echo $correoProv; ?>" class="form-control" placeholder="Cambiar correo">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="nomCont" value="<?php echo $nomCont; ?>" class="form-control" placeholder="Cambiar nombre contacto">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="apeCont" value="<?php echo $apeCont; ?>" class="form-control" placeholder="Cambiar apellido contacto">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="Cambiar direccion">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="telProv" value="<?php echo $telProv; ?>" class="form-control" placeholder="Cambiar telefono">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="paginaWeb" value="<?php echo $paginaWeb; ?>" class="form-control" placeholder="Cambiar pagina web">
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