<?php
include('../crudProd/db.php');

if(isset($_GET['idCliente'])){
    $idCliente = $_GET['idCliente'];
    $query = "SELECT * FROM clientes WHERE idCliente = $idCliente";
    $result = mysqli_query($conex, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $idCliente = $row['idCliente'];
        $tipoId = $row['tipoId'];
        $numId = $row['numId'];
    }
}

if(isset($_POST['guardar'])){
    $idCliente = $_GET['idCliente'];
    $tipoId = $_POST['tipoId'];
    $numId = $_POST['numId'];


    $query = "UPDATE clientes set idCliente = '$idCliente', tipoId = '$tipoId', numId = '$numId' WHERE idCliente = $idCliente";
    mysqli_query($conex, $query);

    $message = "Datos Actualizados Satisfactoriamente";
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
    <title>Clientes</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-4">
    <div class="row">
    <h1 class="text-h1">Actualizar Cliente</h1>
    <div class="col-md-4 mx-auto">
    <div class="card card-body">
        <form action="edit.php?idCliente=<?php echo $_GET['idCliente']; ?>" method="post">
            <div class="form-group mb-3">
                <input type="hidden" name="idCliente" value="<?php echo $idCliente; ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
                <select name="tipoId" class="form-control">
                    <option value="CC" <?php if ($tipoId == 'CC') echo 'selected'; ?>>C.C.</option>
                    <option value="CE" <?php if ($tipoId == 'CE') echo 'selected'; ?>>C.E.</option>
                    <option value="TI" <?php if ($tipoId == 'TI') echo 'selected'; ?>>T.I.</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <input type="number" name="numId" value="<?php echo $numId; ?>" class="form-control" placeholder="Cambiar numero de Identificacion">
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