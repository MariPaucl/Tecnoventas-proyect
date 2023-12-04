<?php
include("db.php");
if(isset($_GET['idAdmin'])){
    $idAdmin = $_GET['idAdmin'];
    $query = "DELETE FROM administradores WHERE idAdmin = $idAdmin";
    $result = mysqli_query($conex, $query);
    if(!$result){
        die("Error");
    }
    $_SESSION['message'] = 'Administrador Eliminado Satisfactoriamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: crud.php");
}
?>