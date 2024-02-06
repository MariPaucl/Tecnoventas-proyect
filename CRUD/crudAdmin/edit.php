<?php
include('../crudProd/db.php');

if(isset($_GET['idAdmin'])){
    $idAdmin = $_GET['idAdmin'];
    $query = "SELECT * FROM administradores WHERE idAdmin= $idAdmin";
    $result = mysqli_query($conex, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $idAdmin = $row['idAdmin'];
        $nomAdmin = $row['nomAdmin'];
        $apeAdmin = $row['apeAdmin'];
        $cargo = $row['cargo'];
        $estado = $row['estado'];
        $correoAdmin = $row['correoAdmin'];
    }
}

if(isset($_POST['guardar'])){
    $idAdmin = $_GET['idAdmin'];
    $nomAdmin = $_POST['nomAdmin'];
    $apeAdmin = $_POST['apeAdmin'];
    $cargo = $_POST['cargo'];
    $estado = $_POST['estado'];
    $correoAdmin = $_POST['correoAdmin'];

    $query = "UPDATE administradores set idAdmin = '$idAdmin', nomAdmin = '$nomAdmin', apeAdmin = '$apeAdmin', cargo = '$cargo', estado = '$estado', correoAdmin = '$correoAdmin' WHERE idAdmin = $idAdmin";
    mysqli_query($conex, $query);

    $message = "Administrador Actualizado Satisfactoriamente";
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
    <title>Administradores</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-4">
    <div class="row">
    <h1 class="text-h1">Actualizar datos</h1>
    <div class="col-md-4 mx-auto">
    <div class="card card-body">
        <form action="edit.php?idAdmin=<?php echo $_GET['idAdmin']; ?>" method="post">
            <div class="form-group mb-3">
                <input type="hidden" name="idAdmin" value="<?php echo $idAdmin; ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="nomAdmin" value="<?php echo $nomAdmin; ?>" class="form-control" placeholder="Cambiar Nombre">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="apeAdmin" value="<?php echo $apeAdmin; ?>" class="form-control" placeholder="Cambiar Apellido">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="cargo" value="<?php echo $cargo; ?>" class="form-control" placeholder="Cambiar cargo">
            </div>
            <div class="form-group mb-3">
            <select name="estado" class="form-control">
                    <option value="Activo" <?php if ($estado == 'Activo') echo 'selected'; ?>>Activo</option>
                    <option value="Vacaciones" <?php if ($estado == 'Vacaciones') echo 'selected'; ?>>Vacaciones</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <input type="email" name="correoAdmin" value="<?php echo $correoAdmin; ?>" class="form-control" placeholder="Cambiar correo">
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