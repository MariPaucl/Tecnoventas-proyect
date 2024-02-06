<?php session_start();

include('../registro/conexion.php');

$idCliente = $_SESSION['sessCustomerID'];

if(isset($_POST['guardar'])){
    $nomCliente = $_POST['nomCliente'];
    $apeCliente = $_POST['apeCliente'];
    $fechaNac = $_POST['fechaNac'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];


    $query = "UPDATE clientes set nomCliente = '$nomCliente', apeCliente = '$apeCliente', fechaNac = '$fechaNac', telefono = '$telefono', correo = '$correo' WHERE idCliente = $idCliente";
    mysqli_query($conex, $query);

    $success = "Tus datos se han actualizado correctamente";
    echo "<script>alert('$success');</script>";
    echo "<script>window.location.href='../perfilCliente/perfil.php';</script>";
    exit();
}