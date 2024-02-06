<?php
// include database configuration file
include 'conexion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if ($cart->total_items() <= 0) {
    header("Location: cell.php");
}

// set customer ID in session
if(isset($_SESSION['sessCustomerID'])) {
    $idCliente = $_SESSION['sessCustomerID'];
// get customer details by session customer ID
$query = $db->query("SELECT * FROM clientes WHERE idCliente = " . $_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pedido</title>
    <meta charset="utf-8">
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
    <script src="../pedidos/script.js"></script>
    <style>
        .btn-success{
            background: rgb(46, 1, 82);
            color: #ceb8ed;
            border: none;
        }
        .btn-success:hover{
            background: rgb(59, 3, 109);
            color: azure;
            border: none;
        }

        h1{
            color: rgb(46, 1, 82);
            text-transform: uppercase;
        }
        .container {
            padding: 20px;
        }
        .panel-default {
            padding-bottom: 30px;
        }

        .table {
            width: 65%;
            float: left;
        }

        .shipAddr {
            width: 30%;
            float: left;
            margin-left: 30px;
        }

        .footBtn {
            width: 95%;
            float: left;
        }

        .orderBtn {
            float: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="panel panel-default">

            <div class="panel-body">
                <h1>Vista previa del Pedido</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($cart->total_items() > 0) {
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <tr>
                                    <td><?php echo $item["nomProd"]; ?></td>
                                    <td><?php echo '$' . $item["precio"];?></td>
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo '$' . $item["subtotal"];?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="4">
                                    <p>No hay articulos en tu pedido......</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total();?></strong></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
                <div class="shipAddr">
                    <h4>Detalles de envío</h4>
                    <p><?php echo $custRow['nomCliente'], ' ', $custRow['apeCliente']; ?></p>
                    <p><?php echo $custRow['correo']; ?></p>
                    <p><?php echo $custRow['telefono']; ?></p>
                </div>
                <div class="form-group">
                    <form action="AccionCarta.php?action=placeOrder" method="post">
                    <div class="input-group mb-3">
                    <span class="input-group-text">*Tipo de dirección</span>
                    <select name="tipoDir" id="tipoDir" class="form-select">
                        <option value="1">Calle</option>
                        <option value="2">Carrera</option>
                        <option value="3">Avenida</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="spanText">*Calle</span>
                    <input type="text" class="form-control" name="tipoDirNum" id="tipoDirNum" placeholder="Ej: 87B" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">*Numero</span>
                    <input type="text" class="form-control" name="numeroDir" id="numeroDir" placeholder="Ej: 9C" required>
                    <span class="input-group-text"> - </span>
                    <input type="text" class="form-control" name="numeroDir2" id="numeroDir2" placeholder="Ej: 15" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">*Barrio</span>
                    <input type="text" class="form-control" name="barrio" id="barrio" placeholder="Ej: San Mateo" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Piso/Apartamento/Torre/Edificio</span>
                    <input type="text" class="form-control" name="extra" id="extra" placeholder="Ej: Torre 12 Apto 252">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Direccion</span>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="" readonly>
                </div>
                </div>
                <div class="footBtn">
                    <a href="cell.php" class="btn btn-dark"><i class="fa-solid fa-chevron-left"></i> Continue Comprando</a>
                    <button type="submit" class="btn btn-success orderBtn">Realizar pedido <i class="fa-solid fa-chevron-right"></i></button>                </div>
                </form>
            </div>
        </div>
        <!--Panek cierra-->
    </div>
</body>
</html>