<?php
include("db.php");
if(isset($_GET['codProd'])){
    $codProd = $_GET['codProd'];
    $query = "DELETE FROM productos WHERE codProd = $codProd";
    $result = mysqli_query($conex, $query);
    if(!$result){
        die("Error");
    }
    $_SESSION['message'] = 'Producto Eliminado Satisfactoriamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: crud.php");
}
?>