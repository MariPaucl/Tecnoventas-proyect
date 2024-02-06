<?php
include("../crudProd/db.php");
if(isset($_GET['idProv'])){
    $idProv = $_GET['idProv'];
    $query = "DELETE FROM proveedores WHERE idProv = $idProv";
    $result = mysqli_query($conex, $query);
    if(!$result){
        die("Error");
    }
    $message = "Proveedor Eliminado Satisfactoriamente";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='crud.php';</script>";
    exit();
}
