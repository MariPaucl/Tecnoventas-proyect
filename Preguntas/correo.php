<?php

if(isset($_POST['enviar'])){
    $nombres = htmlentities($_POST["nombres"]);
    $email = htmlentities($_POST["email"]);
    $asunto = htmlentities($_POST["asunto"]);
    $mensaje = htmlentities($_POST["mensaje"]);

    require "../recuperaPsw/Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // h-hotel account
            $mail->Username='tecnoventas.ayuda@gmail.com';
            $mail->Password='ixoj jxzs yfzk phlz';

            // send by h-hotel email
            $mail->setFrom($email, $nombres);
            // email to
            $mail->addAddress('tecnoventas.ayuda@gmail.com');
            //$mail->addReplyTo('lamkaizhe16@gmail.com');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject=("$email ($asunto)");
            $mail->Body= $mensaje;

            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo "No se pudo enviar el correo, intenta de nuevo"?>");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("<?php echo "Mensaje enviado satisfactoriamente"?>")
                        window.location.replace("../inicio.html");
                    </script>
                <?php
            }

}