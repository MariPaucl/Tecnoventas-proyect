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
        require('fpdf/fpdf.php');

        define('COP', '$');

        $detallesPedido = array();
            while ($rowDetalle = mysqli_fetch_assoc($resultDetalle)) {
            $detallesPedido[] = $rowDetalle;
        }

        $pdf = new FPDF ('P', 'mm', array(80, 150));
        $pdf->AddPage();

        //Cabecera
        $pdf->SetFont('Arial', 'B',12);
        $pdf->Cell(20,5);
        $pdf->Image('../imagenes/Tecnoventas.png',5,6,13,13,'PNG');
        $pdf->Cell(40,4,'DETALLE DEL PEDIDO',0,1,'C');
        $pdf->Ln(15);

        $pdf->SetFont('Helvetica', '', 12);
        $pdf->Cell(60,4,'Tecnoventas',0,1,'C');
        $pdf->SetFont('Helvetica', '', 8);
        $pdf->Cell(60,4,'Bogota, Colombia',0,1,'C');
        $pdf->Cell(60,4,'3504160019',0,1,'C');
        $pdf->Cell(60,4,'tecnoventas.ayuda@gmail.com',0,1,'C');

        //Datos Pedido
        $pdf->Ln(5);
        $pdf->SetFont('Helvetica', 'B', 8);
        $pdf->Cell(60,4,'Pedido No. '. $rowPedido['codPedido'],0,1,'C');
        $pdf->Ln(3);
        $pdf->SetFont('Helvetica', '', 8);
        $pdf->Cell(60,4,'Fecha: '. date('d M Y', strtotime($rowPedido['fechaPedido'])) . ' ' . $rowPedido['horaPedido'],0,1,'L');
        $pdf->Cell(60,4,'Metodo de Pago: Contra Entrega',0,1,'L');

        //Tabla
        $pdf->SetFont('Helvetica', 'B', 7);
        $pdf->Cell(30, 10, 'Producto', 0);
        $pdf->Cell(5, 10, 'Cant',0,0,'R');
        $pdf->Cell(10, 10, 'IVA',0,0,'R');
        $pdf->Cell(15, 10, 'Precio',0,0,'R');
        $pdf->Ln(8);
        $pdf->Cell(60,0,'','T');
        $pdf->Ln(1);

        //Productos
        $pdf->SetFont('Helvetica', '', 7);
        foreach ($detallesPedido as $detalle) {
            $pdf->MultiCell(30,4,$detalle['nomProd'],0,'L');
            $pdf->Cell(35, -5,$detalle['cantidadProd'],0,0,'R');
            $pdf->Cell(10, -5,'20%',0,0,'R');
            $pdf->Cell(15, -5, COP.$detalle['precio'],0,0,'R');
            $pdf->Ln(3);
        }
        $pdf->Ln(3);
        $pdf->Cell(60,0,'','T');
        $pdf->Ln(2);

        //Total
        $pdf->Cell(25, 10, 'TOTAL', 0);
        $pdf->Cell(20, 10, '', 0);
        $pdf->Cell(15, 10, COP.$rowPedido['totalPedido'],0,0,'R');

        //Footer
        $pdf->Ln(20);
        $pdf->Cell(60,0,'MUCHAS GRACIAS POR SU COMPRA!',0,1,'C');
        $pdf->Ln(5);
        $pdf->Cell(60,0,'VUELVA PRONTO',0,1,'C');


        $pdfContent = $pdf->Output('S');

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
                <th>Precio + IVA 20%</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detallesPedido as $detalle) { ?>
                <tr>
                    <td><?php echo $detalle['nomProd'];?></td>
                    <td><?php echo $detalle['cantidadProd'];?></td>
                    <td><?php echo $detalle['precio'];?></td>
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
        $mail->addStringAttachment($pdfContent, 'Detalle_Pedido_'.$codPedido.'.pdf');

        if(!$mail->send()){
            ?>
            <script>
                alert("<?php echo "No se pudo enviar el correo, intenta de nuevo"?>");
                window.location.href = "detallePedido.php";
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