<?php
require '../config/config.php';
require '../config/conexion.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['codPedido']) ? $_GET['codPedido'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : null;

if($id == '' || $token == ''){
    echo 'Error al procesar la petición';
    exit;
} else {
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    if($token == $token_tmp){
        $sql = $con->prepare("SELECT * FROM pedidos WHERE codPedido = ?");
        $sql->execute([$id]);

        if($sql->rowCount() > 0){
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $codPedido = $row['codPedido'];
            $fechaPedido = $row['fechaPedido'];
            $horaPedido = $row['horaPedido'];
            $dirPedido = $row['dirPedido'];
            $totalPedido = $row['totalPedido'];
            $estadoPedido = $row['estadoPedido'];
            // Obtener información de productos en el pedido
            $sqlProductos = $con->prepare("SELECT productos.nomProd, productos.imagen, detallepedidos.cantidadProd
                                        FROM detallepedidos
                                        JOIN productos ON detallepedidos.codProd = productos.codProd
                                        WHERE detallepedidos.codPedido = ?");
            $sqlProductos->execute([$id]);
            if ($sqlProductos->rowCount() > 0) {
            $productos = $sqlProductos->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }else{
        echo 'Error al procesar la petición';
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="card">
    <div class="card-header">
    PEDIDO NO. <?php echo $codPedido; ?>
    </div>
    <div class="card-body text-center">
    <h5 id="estado" class="card-title">El estado de tu pedido es <spam class=" <?php
if ($estadoPedido === "Pagado") {
    echo 'pagado';
} elseif ($estadoPedido === "Por enviar" || $estadoPedido === "En camino") {
    echo 'porEnviar';
} elseif ($estadoPedido === "Enviado") {
    echo 'enviado';
}
?>
"><?php echo $estadoPedido; ?></spam></h5>
    <p class="card-text"><strong>FECHA: </strong><?php echo $fechaPedido; ?></p>
    <p class="card-text"><strong>HORA: </strong><?php echo $horaPedido; ?></p>
    <p class="card-text"><strong>DIRECCION: </strong><br><p></p><?php echo $dirPedido; ?></p>
    <p class="card-text"><strong>TOTAL: </strong><?php echo $totalPedido; ?></p>

    <h5 id="productos" class="card-title">Productos en el pedido:</h5>
    <div class="row">
        <?php foreach ($productos as $producto) { ?>
        <div class="col-sm-4">
            <div id="card-prod" class="card text-center">
                <div class="card-body">
            <h5 id="productoName" class="card-title"><?php echo $producto['nomProd']; ?></h5>
            <img class="card-img" src="../imagenes/productos/<?php echo $producto['imagen']; ?>" width="200">
            <p class="card-text"><strong>Cantidad: </strong><?php echo $producto['cantidadProd']; ?></p>
            </div>
            </div>
        </div>
    <?php } ?>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="pedidos.php" class="btn btn-primary">Volver a Mis Pedidos</a>
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

    .pagado{
        color: purple;
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