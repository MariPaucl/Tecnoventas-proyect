<?php session_start();

if(!isset($_SESSION['sessCustomerID'])) {
    header('Location: ../index.html');
    exit();
}

$value=$_SESSION['USD']
?>

<!DOCTYPE html>
<header>
    <title>Metodo de Compra</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
</header>
<link rel="stylesheet" href="estilo.css"/>
    <div class="container">
        <div class="title">
            <h4>Seleccione <span style="color: #6064b6">El metodo </span> De Pago</h4>
        </div>

        <form action="#">
            <input type="radio" name="payment" id="visa">
            <input type="radio" name="payment" id="mastercard">


            <div class="category">
                <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

<!-- Include the PayPal JavaScript SDK -->

<script src="https://www.paypal.com/sdk/js?client-id=ASd90vnEbSnJkj-X1QQYWLi87yz9TxNJpGPLVdfXgyZV8pN3NSfdQm5goXaO5nywBZfaJv0BTsFnb3yw&currency=USD"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
    // Call your server to set up the transaction
    createOrder: function(data, actions) {
        return actions.order.create({
            application: {
                context: {
                    shipping_preference: 'NO_SHIPPING'
                }
            },
            purchase_units: [
                {
                    amount: {
                        value: '<?php echo $value;?>',
                    }
                }
            ]
        });
    },

    // Call your server to finalize the transaction
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
            // Make a request to your server to update the order status
            fetch('updatestatus.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    orderId: orderData.id,
                    status: 'completed'
                })
            }).then(function(response) {
                if (response.ok) {
                    // Redirect to index.php after updating the order status
                    window.location.href = '../perfilCliente/pedidos.php';
                } else {
                    // Handle error
                    console.error('Failed to update order status');
                }
            }).catch(function(error) {
                console.error('Error updating order status:', error);
            });
        });
    }
}).render('#paypal-button-container');
</script>

                <label for="mastercard" class="mastercardMethod">
                    <div class="imgName">
                        <div class="imgContainer mastercard">
                            <a href="../pedidos/seguridadPed.php"><img src="../img/contraEntrega.png" alt=""></a>
                        </div>
                        <span class="name">Contra entrega</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>
            </div>
        </form>
    </div>