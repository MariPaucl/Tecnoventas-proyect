<?php
include("db.php");
if(isset($_GET['codProd'])){
    $codProd = $_GET['codProd'];
    $query = "DELETE FROM productos WHERE codProd = $codProd";
    $result = mysqli_query($conex, $query);
    if(!$result){
        die("Error");
    }

    $message = "Producto Eliminado Satisfactoriamente";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='crud.php';</script>";
    exit();
}