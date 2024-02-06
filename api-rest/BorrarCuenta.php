<?php
session_start();

include("../registro/conexion.php");

if(isset($_POST['confirm'])){
    $correo = $_POST['correo'];

    $query = "DELETE FROM clientes WHERE correo = '$correo'";
    mysqli_query($conex, $query);

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
    $mail->addAddress($_POST["correo"]);
    //$mail->addReplyTo('lamkaizhe16@gmail.com');

    // HTML body
    $mail->isHTML(true);
    $mail->Subject="Lamentamos que te vayas :'(";
    $mail->Body="<b>Estimado cliente</b>
    <h3>Has eliminado tu cuenta recientemente</h3>
    <p>Si has sido tu <strong>ignora este mensaje</strong> si no has sido tu comunicate con nosotros</p>
    <br>
    <p>Gracias por comprar en Tecnoventas, nos vemos Luego</p>
    <br><br>
    <p>Atentamente,</p>
    <b>Tecnoventas</b>";

    if(!$mail->send()){
        echo "error";
    }else{
        unset($_SESSION['sessCustomerID']); // Eliminar la variable de sesión
        $message = "Lamentamos que te vayas.\n:( Te vamos a extrañar";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='../index.html';</script>";
    exit();
    }
}