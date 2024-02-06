<?php session_start();

include('../registro/conexion.php');

$idCliente = $_SESSION['sessCustomerID'];

if(isset($_POST['guardar'])){
    $password = $_POST['passCliente'];
    $hash = password_hash( $password , PASSWORD_DEFAULT );
    $new_pass = $hash;

    $query = "UPDATE clientes set passCliente = '$new_pass' WHERE idCliente = $idCliente";
    mysqli_query($conex, $query);

    $message = "Tu contraseña se a cambiado correctamente";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='../index.html';</script>";
    exit();
}