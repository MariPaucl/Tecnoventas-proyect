<?php
session_start();

if(isset($_POST["enviar"])){
    include('../registro/conexion.php');
    $codPedido = $_POST["codPedido"];

    $sqlPedido = "SELECT * FROM pedidos WHERE codPedido = $codPedido";
    $resultPedido = mysqli_query($conex, $sqlPedido);

    $rowPedido = mysqli_fetch_assoc($resultPedido);

    $sqlDetalle = "SELECT productos.nomProd, detallepedidos.cantidadProd, productos.precio
                FROM detallepedidos
                JOIN productos ON detallepedidos.codProd = productos.codProd
                WHERE detallepedidos.codPedido = $codPedido";
    $resultDetalle = mysqli_query($conex, $sqlDetalle);

    $idCliente = $_SESSION['sessCustomerID'];

    $sqlCorreo = "SELECT correo FROM clientes WHERE idCliente = $idCliente";
    $resultCorreo = mysqli_query($conex, $sqlCorreo);
    $rowCorreo = mysqli_fetch_assoc($resultCorreo);

    if(mysqli_num_rows($resultCorreo) <= 0){
        ?>
        <script>
            alert("<?php  echo "Este correo no existe! Usa el correo con el que te registraste"?>");
        </script>
        <?php
    }else{
        require "../recuperaPsw/Mail/phpmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        // h-hotel account
        $mail->Username='tecnoventas.ayuda@gmail.com';
        $mail->Password='zfdc aphg zmlc amlc';

        // send by h-hotel email
        $mail->setFrom('tecnoventas.ayuda@gmail.com', 'Tecnoventas');
        // get email from input
        $mail->addAddress($rowCorreo['correo']);
        //$mail->addReplyTo('lamkaizhe16@gmail.com');

        // HTML body
        $mail->isHTML(true);
        $mail->Subject="Detalle de tu Pedido No. $codPedido";

        ob_start(); // Iniciar el almacenamiento en búfer de salida
        ?>
        <h1>DETALLE DEL PEDIDO</h1>
        <div>
            <p><strong>ID del Pedido: </strong><?php echo $rowPedido['codPedido'];?></p>
            <p><strong>Fecha del Pedido: </strong><?php echo date('d M Y', strtotime($rowPedido['fechaPedido'])), ' ', $rowPedido['horaPedido'];?></p>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($rowDetalle = mysqli_fetch_assoc($resultDetalle)) { ?>
                        <tr>
                            <td><?php echo $rowDetalle['nomProd'];?></td>
                            <td><?php echo $rowDetalle['cantidadProd'];?></td>
                            <td><?php echo $rowDetalle['precio'];?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p><strong>Pago Total: </strong><?php echo $rowPedido['totalPedido'];?></p>
        </div><br><br>
        <div>
            <p>Atentamente,</p>
            <b>Tecnoventas</b>
            <br>
            <i>(tecnoventas.ayuda@gmail.com)</i>
        </div><br><br><i>Por favor, No responder a este correo</i>
        <?php
        $mail->Body = ob_get_clean(); // Obtener el contenido del búfer y limpiar el búfer de salida

        if(!$mail->send()){
            ?>
            <script>
                alert("<?php echo "No se pudo enviar el correo, intenta de nuevo"?>");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("<?php echo "Correo Enviado"?>");
                window.location.href = "../inicio.html";
            </script>
            <?php
            unset($_SESSION['idPedido']);
            exit();
        }
    }
}