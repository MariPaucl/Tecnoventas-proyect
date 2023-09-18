<?php
include("db.php");
if(isset($_GET['idProv'])){
    $idProv = $_GET['idProv'];
    $query = "DELETE FROM proveedores WHERE idProv = $idProv";
    $result = mysqli_query($conex, $query);
    if(!$result){
        die("Error");
    }
    $_SESSION['message'] = 'Proveedor Eliminado Satisfactoriamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: crud.php");
}
?>