<?php
session_start();

include("../registro/conexion.php");

$idPedido = isset($_SESSION['idPedido']) ? $_SESSION['idPedido'] : null;


// Consulta para obtener detalles del pedido
$queryPedido = "SELECT * FROM pedidos WHERE codPedido = $idPedido";
$resultPedido = mysqli_query($conex, $queryPedido);

// Obtener detalles del pedido
$rowPedido = mysqli_fetch_assoc($resultPedido);

// Consulta para obtener detalles de productos en el pedido
$queryDetalle = "SELECT productos.nomProd, productos.imagen, detallepedidos.cantidadProd, productos.precio
                FROM detallepedidos
                JOIN productos ON detallepedidos.codProd = productos.codProd
                WHERE detallepedidos.codPedido = $idPedido";
$resultDetalle = mysqli_query($conex, $queryDetalle);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Detalle de tu pedido</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
</head>
<body>
    <div class="container">
    <div class="card">
    <div class="card-header">DETALLES DEL PEDIDO</div>
    <div class="card-body">
    <p><strong>ID del Pedido: </strong><?php echo $rowPedido['codPedido'];?></p>
    <p><strong>Fecha del Pedido: </strong><?php echo date('d M Y', strtotime($rowPedido['fechaPedido'])), ' ', $rowPedido['horaPedido'];?></p>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($rowDetalle = mysqli_fetch_assoc($resultDetalle)) { ?>
            <tr>
                <td><img src="../imagenes/productos/<?php echo $rowDetalle['imagen'];?>" style="width: 70px; height: 70px;"></td>
                <td><?php echo $rowDetalle['nomProd'];?></td>
                <td><?php echo $rowDetalle['cantidadProd'];?></td>
                <td><?php echo $rowDetalle['precio'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <p class="card-text text-center"><strong>Pago Total: </strong><?php echo $rowPedido['totalPedido'];?></p>
    </div>
    <div class="card-footer text-center">
    <form action="enviarCorreo.php" method="post" enctype="multipart/form">
        <input type="hidden" name="codPedido" value="<?php echo $rowPedido['codPedido'];?>">
        <a href="../inicio.html" class="btn btn-success">Volver al inicio</a>
        <input class="btn btn-dark" name="enviar" type="submit" value="Enviar Copia al Correo">
    </form>
</div>
</div>
</div>
<style>
    .container {
        padding: 40px 110px;
    }
    .btn-success{
            background: rgb(46, 1, 82);
            color: #ceb8ed;
            border: none;
            margin: 10px;
        }
        .btn-success:hover{
            background: rgb(59, 3, 109);
            color: azure;
            border: none;
        }

        h1{
            color: #ceb8ed;
            text-transform: uppercase;
        }

    p {
        color: rgb(46, 1, 82);
        font-size: 18px;
    }

    .card-header {
        background-color: rgb(46, 1, 82);
        color: #ceb8ed;
        font-size: 20px;
    }
    .card-footer{
        background-color: white;
        border: none;
    }
</style>
</body>
</html>