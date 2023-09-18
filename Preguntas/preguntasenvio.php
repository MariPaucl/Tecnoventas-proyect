<!DOCTYPE html>
<html>
<head>
    <title>Procesando Formulario</title>
    <style>
        body {
        top: 100px;
        left: 0px;
        background: url(fondoPreguntas.jpg);
        background-size: cover;
        background-attachment: fixed;
        font-family: 'Nunito', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
    }
        table {
            border="0";
            border-collapse: collapse;
            width: 100%;
            border: 0px solid #ddd;
        }
        th, td {
            
            text-align: left;
            padding: 8px;
            border: 0px solid #ddd;
        }
        th {
            border="0";
            background-color: #f2f2f2;
            
        }
        .container {
        background-color: #ffffffa2;
        margin: 80px;
        border-radius: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        overflow: overlay;
        width: 600px;
        max-width: 400%;
        margin-bottom: 60px;
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST["Nombres"];
    $email = $_POST["email"];
    $cell = $_POST["cell"];
    $mensaje = $_POST["mensaje"];

    // Aquí podrías guardar los datos en una base de datos
    // Pero en este ejemplo, simplemente mostraremos los datos en una tabla
    echo" <center>";
    echo '<div class="container">';
    echo "<h2>Datos Guardados:</h2>";
    echo '<table border="0px">';
    echo "<tr><th>Nombres</th><th>Email</th><th>Telefono</th><th>Mensaje</th></tr>";
    echo "<tr><td>$nombres</td><td>$email</td><td>$cell</td><td>$mensaje</td></tr>";
    echo "</table>";
    echo"</div>";
}
?>

</body>
</html>
