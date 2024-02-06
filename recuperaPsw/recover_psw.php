<?php session_start()?>
<!doctype html>
<html lang="es">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Recuperar Contraseña</title>
</head>
<body>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Recuperar Contraseña</div>
                    <div class="card-body">
                        <form action="#" method="POST" name="recover_psw">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Tu correo</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                    <div id="passwordHelpBlock" class="form-text">
                                        <div>Recuerda escribir el mismo correo con el que te registraste
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Recuperar" name="recover">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>

<?php
    if(isset($_POST["recover"])){
        include('../registro/conexion.php');
        $email = $_POST["email"];


        $sql = mysqli_query($conex, "SELECT * FROM clientes WHERE correo='$email'");
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Este correo no existe! Usa el correo con el que te registraste"?>");
            </script>
            <?php
        }else{

            $_SESSION['correoCliente'] = $email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
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
            $mail->addAddress($_POST["email"]);
            //$mail->addReplyTo('lamkaizhe16@gmail.com');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recupera tu Clave";
            $mail->Body="<b>Querido Cliente</b>
            <h3>Hemos recibido una solicitud para recuperar tu contraseña.</h3>
            <p>Has click <a href='http://localhost/TecnoPrueba0.1/recuperaPsw/reset_psw.php'>Aquí</a> para cambiar tu contraseña</p>
            <br><br>
            <p>Atentamente,</p>
            <b>Tecnoventas</b>";

            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo "No se pudo enviar el correo, intenta de nuevo"?>");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        window.location.replace("notificacion.html");
                    </script>
                <?php
                $_SESSION['correoCliente'] = $email;
            }
        }
    }
?>