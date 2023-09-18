<?php
include("db.php");
if(isset($_GET['idCliente'])){
    $idCliente = $_GET['idCliente'];
    $query = "DELETE FROM clientes WHERE idCliente = $idCliente";
    $result = mysqli_query($conex, $query);
    if(!$result){
        die("Error");
    }
    $_SESSION['message'] = 'Cliente Eliminado Satisfactoriamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: crud.php");
}
?>