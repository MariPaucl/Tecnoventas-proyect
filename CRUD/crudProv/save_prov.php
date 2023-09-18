<?php
include("db.php");

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

    $_SESSION['message'] = 'Proveedor guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: crud.php");
}
?>