<?php
include("../crudProd/db.php");
if(isset($_GET['idAdmin'])){
    $idAdmin = $_GET['idAdmin'];
    $query = "DELETE FROM administradores WHERE idAdmin = $idAdmin";
    $result = mysqli_query($conex, $query);
    if(!$result){
        die("Error");
    }
    $message = "Administrador Eliminado";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='crud.php';</script>";
    exit();
}