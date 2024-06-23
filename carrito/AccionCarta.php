<?php
date_default_timezone_set("America/Bogota");
include 'La-carta.php';
$cart = new Cart;


include 'conexion.php';


if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['codProd'])){
        $productID = $_REQUEST['codProd'];
        $query = $db->query("SELECT * FROM productos WHERE codProd = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'codProd' => $row['codProd'],
            'nomProd' => $row['nomProd'],
            'precio' => $row['precio'],
            'qty' => 1
        );


        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem ? 'VerCarta.php' : '../cell.php';
        header("Location: ".$redirectLoc);
    } elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['rowid'])){
        $itemData = array(
            'rowid' => $_REQUEST['rowid'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem ? 'ok' : 'err';
        die;
    } elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['codProd'])){
        $deleteItem = $cart->remove($_REQUEST['codProd']);
        header("Location: VerCarta.php");
    } elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';


        $cartItems = $cart->contents();
        $haySuficienteStock = true;


        foreach ($cartItems as $item) {
            $codProd = $item['codProd'];
            $qty = $item['qty'];
            $result = $db->query("SELECT stockProd, nomProd FROM productos WHERE codProd = '$codProd'");
            $row = $result->fetch_assoc();
            $stockActual = $row['stockProd'];
            $nomProd = $row['nomProd'];


            if ($qty > $stockActual) {
                $haySuficienteStock = false;
                echo "<script>alert('Error: No hay suficiente stock para el producto $nomProd. Stock: $stockActual');</script>";
                echo "<script>window.location.href = 'VerCarta';</script>";
                exit;
            }
        }


        if ($haySuficienteStock) {
            $iva = $cart->total() * 0.20;
            $total = $cart->total() + $iva;
            $insertOrder = $db->query("INSERT INTO pedidos (idCliente, fechaPedido, horaPedido, dirPedido, totalPedido) VALUES ('".$_SESSION['sessCustomerID']."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$direccion."', '".$total."')");


            if($insertOrder){
                $orderID = $db->insert_id;
                $sql = '';
                foreach($cartItems as $item){
                    $codProd = $item['codProd'];
                    $qty = $item['qty'];


                    $updateStockQuery = "UPDATE productos SET stockProd = stockProd - $qty WHERE codProd = '$codProd';";
                    $db->query($updateStockQuery);


                    $result = $db->query("SELECT stockProd FROM productos WHERE codProd = '$codProd'");
                    $row = $result->fetch_assoc();
                    if($row['stockProd'] == 0){
                        $updateEstProdQuery = "UPDATE productos SET estProd = 'Agotado' WHERE codProd = '$codProd';";
                        $db->query($updateEstProdQuery);
                    }


                    $sql .= "INSERT INTO detallepedidos (codPedido, codProd, cantidadProd) VALUES ('".$orderID."', '".$item['codProd']."', '".$item['qty']."');";
                }
                $insertOrderItems = $db->multi_query($sql);


                if($insertOrderItems){
                    $cart->destroy();
                    header("Location: OrdenExito.php?id=$orderID");
                } else {
                    header("Location: Pagos.php");
                }
            } else {
                header("Location: Pagos.php");
            }
        } else {
            header("Location: ../cell.php");
        }
    } else {
        header("Location: ../cell.php");
    }
}
?>


