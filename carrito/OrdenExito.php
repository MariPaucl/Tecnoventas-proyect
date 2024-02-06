<?php
require 'conexion.php';

if (!isset($_REQUEST['id'])) {
  header("Location: cell.php");
}

$query = $db->query("SELECT * FROM pedidos WHERE codPedido = " . $_REQUEST['id']);
$pedidoRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
  <title>Pedido Exitoso</title>
  <meta charset="utf-8">
  <style>
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
    .container {
      padding: 100px;
    }

    p {
      color: rgb(46, 1, 82);
      font-size: 18px;
    }

    .card-header {
      background-color: rgb(46, 1, 82);
    }
    .card-footer{
      background-color: white;
      border: none;
    }
  </style>
</head>
</head>

<body>
  <div class="container">
    <div class="card text-center">
      <div class="card-header">
        <h1>Estado de tu Pedido</h1>
      </div>
      <div class="card-body">
        <h5 class="card-title">¡El Pedido se ha registrado exitósamente!</h5>
        <p class="card-text">El ID de tu Pedido es <?php echo $_GET['id']; ?></p>
        <p class="card-text">El estado de tu pedido es <strong><?php echo $pedidoRow['estadoPedido']; ?></strong></p>
      </div>
      <div class="card-footer">
        <a href="../Compra/compra.html" class="btn btn-success">Ir a Pagar <i class="fa-solid fa-chevron-right"></i></a>
      </div>
  </div>
  </div>
  <?php session_start();
  $pedidoId = $_GET['id'];
  $_SESSION['idPedido'] = $pedidoId;
  ?>
</body>
</html>