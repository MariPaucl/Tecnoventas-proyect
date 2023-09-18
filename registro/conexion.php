
<?php
    $conex = mysqli_connect("localhost:3306", "root", "", "tecnoventas");




$servername = "localhost:3306"; // Cambia esto por la dirección de tu servidor de base de datos si es diferente
$username = "root";
$password = "";
$database = "tecnoventas";

$conex = mysqli_connect($servername, $username, $password, $database);

if (!$conex) {
    die("Error en la conexión: " . mysqli_connect_error());
}



