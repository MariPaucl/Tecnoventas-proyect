<?php
// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
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

        input[type="number"] {
            max-width: 80%;
            text-align: left !important;
            border: none;
        }
    </style>
    <script>
        function updateCartItem(obj, id) {
            console.log('Updating cart item:', id, 'New quantity:', obj.value);
            $.get("AccionCarta.php", {
                action: 'updateCartItem',
                id: id,
                qty: obj.value
            }, function(data) {
                if (data.includes('ok')) {
                    console.log(data)
                    location.reload();
                } else {
                    alert('No se ha podido actualizar el carrito, intente de nuevo!');
                }
            });
        }
    </script>
</head>
</head>

<body>
    <div class="container">

                <h1>Carrito de compras</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                            <th>&nbsp;</th>
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
                                    <td><?php echo '$' . $item["precio"]; ?></td>
                                    <td><input type="number" readonly class="form-control text-center" value="<?php echo $item['qty']; ?>" onchange="updateCartItem(this, '<?php echo $item['rowid']; ?>')"></td>
                                    <td><?php echo '$' . $item["subtotal"]; ?></td>
                                    <td>
                                        <a href="AccionCarta.php?action=removeCartItem&codProd=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">
                                    <p>No has agregado ningún producto.....</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="../cell.php" class="btn btn-dark" role="button"><i class="fa-solid fa-chevron-left"></i> Volver a la tienda</a></td>
                            <td colspan="2"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total(); ?></strong></td>
                                <td><a href="Pagos.php" class="btn btn-success btn-block">Continuar <i class="fa-solid fa-chevron-right"></i></a></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!--Panel cierra-->
    </div>
</body>
</html>