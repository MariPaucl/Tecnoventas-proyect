<?php
if (isset($_POST['continuar'])){

    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6LcE-CUpAAAAAI6kQdxbrbB6pAY9qxxUAGfDMa2F";

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

    $atributos = json_decode($respuesta, TRUE);

    if(!$atributos['success']) {
        $message = "Verifica el captcha para continuar";
        echo "<script>alert('$message');</script>";
    }else {
        header("Location: detallePedido.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica la casilla</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <form href="seguridadPed.php" method="POST">
    <h1>Verifica el ReCAPTCHA</h1>
        <div>
            <div class="g-recaptcha" data-sitekey="6LcE-CUpAAAAAE7fG1uU9ehSWmbiiaL6pmqrmx4V" >
            </div>
            <br/>
        <input type="submit" name="continuar" value="Continuar">
        </div>
    </form>
</body>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
form{
    width: 300px; /* ajusta el ancho según tus necesidades */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h1{
    text-align: center;
    padding: 15px;
    font-size: 20px;
}
input[type="submit"]{
    background-color: grey;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin: 0 110px;

}
</style>
</html>