<?php
include('../crudProd/db.php');

if(isset($_GET['codPedido'])){
    $codPedido = $_GET['codPedido'];
    $query = "SELECT * FROM pedidos WHERE codPedido = $codPedido";
    $result = mysqli_query($conex, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $codPedido = $row['codPedido'];
        $estadoPedido = $row['estadoPedido'];
    }
}

if(isset($_POST['guardar'])){
    $codPedido = $_GET['codPedido'];
    $estadoPedido = $_POST['estadoPedido'];

    $query = "UPDATE pedidos set codPedido = '$codPedido', estadoPedido = '$estadoPedido' WHERE codPedido = $codPedido";
    mysqli_query($conex, $query);

    $message = "Estado del Pedido Actualizado Satisfactoriamente";
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
    <title>Pedidos</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-4">
    <div class="row">
    <h1 class="text-h1">Actualizar Pedido</h1>
    <div class="col-md-4 mx-auto">
    <div class="card card-body">
        <form action="edit.php?codPedido=<?php echo $_GET['codPedido']; ?>" method="post">
            <div class="form-group mb-3">
                <input type="hidden" name="codPedido" value="<?php echo $codPedido; ?>" class="form-control" placeholder="Cambiar codigo">
            </div>
            <div class="form-group mb-3">
                <select name="estadoPedido" class="form-control">
                    <option value="Por pagar" <?php if ($estadoPedido == 'Por pagar') echo 'selected'; ?>>Por pagar</option>
                    <option value="Por enviar" <?php if ($estadoPedido == 'Por enviar') echo 'selected'; ?>>Por enviar</option>
                    <option value="En camino" <?php if ($estadoPedido == 'En camino') echo 'selected'; ?>>En camino</option>
                    <option value="Enviado" <?php if ($estadoPedido == 'Enviado') echo 'selected'; ?>>Enviado</option>
                </select>
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