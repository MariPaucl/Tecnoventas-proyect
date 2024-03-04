<?php
include('../crudProd/db.php');

if(isset($_GET['codPedido'])){
    $codPedido = $_GET['codPedido'];
    $query = "SELECT * FROM pedidos WHERE codPedido = $codPedido";
    $result = mysqli_query($conex, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $codPedido = $row['codPedido'];
        $fechaPedido = $row['fechaPedido'];
        $horaPedido = $row['horaPedido'];
        $dirPedido = $row['dirPedido'];
        $totalPedido = $row['totalPedido'];
        $estadoPedido = $row['estadoPedido'];

    $sqlPedidos = "SELECT productos.nomProd, productos.imagen, detallepedidos.cantidadProd
    FROM detallepedidos
    JOIN productos ON detallepedidos.codProd = productos.codProd
    WHERE detallepedidos.codPedido = $codPedido";

    $resultDetalle = mysqli_query($conex, $sqlPedidos);
    }
} else {
    echo "Error: El pedido no tiene detalle";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del pedido</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="card">
    <div class="card-header">
    PEDIDO <?php echo $codPedido; ?>
    </div>
    <div class="card-body text-center">
    <p class="card-text"><strong>FECHA: </strong><?php echo $fechaPedido; ?></p>
    <p class="card-text"><strong>HORA: </strong><?php echo $horaPedido; ?></p>
    <p class="card-text"><strong>DIRECCION: </strong><br><p></p><?php echo $dirPedido; ?></p>
    <p class="card-text"><strong>TOTAL: </strong><?php echo $totalPedido; ?></p>

    <h5 id="productos" class="card-title">Productos del Pedido:</h5>
    <div class="row">
        <?php while ($detalle = mysqli_fetch_array($resultDetalle)) { ?>
        <div class="col-sm-4">
            <div id="card-prod" class="card text-center">
                <div class="card-body">
            <h5 id="productoName" class="card-title"><?php echo $detalle['nomProd']; ?></h5>
            <img class="card-img" src="../../imagenes/productos/<?php echo $detalle['imagen']; ?>" width="200">
            <p class="card-text"><strong>Cantidad: </strong><?php echo $detalle['cantidadProd']; ?></p>
            </div>
            </div>
        </div>
    <?php } ?>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="crud.php" class="btn btn-primary">< Regresar</a>
    </div>
    </div>
</div>
<style>
    body{
        background-color: #ddd7e8;
    }

    .card{
        margin:3% 10%;
    }

    #card-prod{
        margin: 3%;
    }

    .card-header{
        background: black;
        color: white;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
    }

    #estado{
        font-size: 25px;
        text-align: center;
    }

    .porPagar{
        color: red;
    }
    .porEnviar{
        color: blue;
    }
    .enviado{
        color: green;
    }

    #productos{
        text-align: center;
        font-size: 25px;
    }

    .btn{
        background: rgb(46, 1, 82);
        color: #ceb8ed;
        border: none;
        margin-top:10px;
    }
    .btn:hover{
        background: black;
        color: white;
        border: none;
    }
    .row{
        justify-content: center;
    }

    #productos{
        color: rgb(46, 1, 82);
    }
</style>
</body>
</html>