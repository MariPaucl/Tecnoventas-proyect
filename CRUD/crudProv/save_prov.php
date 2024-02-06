<?php
include("../crudProd/db.php");

if (isset($_POST['save_prov']));{
    $NIT = $_POST['NIT'];
    $nomProv = $_POST['nomProv'];
    $correoProv = $_POST['correoProv'];
    $nomCont = $_POST['nomCont'];
    $apeCont = $_POST['apeCont'];
    $direccion = $_POST['direccion'];
    $telProv = $_POST['telProv'];
    $paginaWeb = $_POST['paginaWeb'];

    $query = "INSERT INTO proveedores(NIT, nomProv, correoProv, nomCont, apeCont, direccion, telProv, paginaWeb) VALUES
    ('$NIT', '$nomProv', '$correoProv', '$nomCont', '$apeCont', '$direccion', '$telProv', '$paginaWeb')";
    $result = mysqli_query($conex, $query);
    if (!$result){
        die("Error");
    }

    $message = "Proveedor Guardado Satisfactoriamente";
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='crud.php';</script>";
    exit();
}