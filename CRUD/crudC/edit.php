<?php
include('db.php');

if(isset($_GET['idCliente'])){
    $idCliente = $_GET['idCliente'];
    $query = "SELECT * FROM clientes WHERE idCliente = $idCliente";
    $result = mysqli_query($conex, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $idCliente = $row['idCliente'];
        $numId = $row['numId'];
        $tipoId = $row['tipoId'];
        $nomCliente = $row['nomCliente'];
        $apeCliente = $row['apeCliente'];
        $fechaNac = $row['fechaNac'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
    }
}

if(isset($_POST['guardar'])){
    $idCliente = $_GET['idCliente'];
    $numId = $_POST['numId'];
    $tipoId = $_POST['tipoId'];
    $nomCliente = $_POST['nomCliente'];
    $apeCliente = $_POST['apeCliente'];
    $fechaNac = $_POST['fechaNac'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $query = "UPDATE clientes set idCliente = '$idCliente', numId = '$numId', tipoId = '$tipoId', nomCliente = '$nomCliente', apeCliente = '$apeCliente', fechaNac = '$fechaNac', telefono = '$telefono', correo = '$correo' WHERE idCliente = $idCliente";
    mysqli_query($conex, $query);

    $_SESSION['message'] = 'Cliente Actualizado Satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: crud.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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
                <input type="number" name="idCliente" value="<?php echo $idCliente; ?>" class="form-control" placeholder="Cambiar ID">
            </div>
            <div class="form-group mb-3">
                <input type="number" name="numId" value="<?php echo $numId; ?>" class="form-control" placeholder="Cambiar numero ID">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="tipoId" value="<?php echo $tipoId; ?>" class="form-control" placeholder="Cambiar tipo ID (CC-CE-TI)">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="nomCliente" value="<?php echo $nomCliente; ?>" class="form-control" placeholder="Cambiar Nombre">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="apeCliente" value="<?php echo $apeCliente; ?>" class="form-control" placeholder="Cambiar Apellido">
            </div>
            <div class="form-group mb-3">
                <input type="date" name="fechaNac" value="<?php echo $fechaNac; ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control" placeholder="Cambiar telefono">
            </div>
            <div class="form-group mb-3">
                <input type="email" name="correo" value="<?php echo $correo; ?>" class="form-control" placeholder="Cambiar correo">
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