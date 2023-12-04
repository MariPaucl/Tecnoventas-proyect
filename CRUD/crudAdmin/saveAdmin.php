<?php
include("db.php");

if (isset($_POST['saveAdmin']));{
    $nomAdmin = $_POST['nomAdmin'];
    $apeAdmin = $_POST['apeAdmin'];
    $cargo = $_POST['cargo'];
    $estado = $_POST['estado'];
    $correoAdmin = $_POST['correoAdmin'];
    $passAdmin = $_POST['passAdmin'];
    $hashPass = md5($passAdmin);

    $query = "INSERT INTO administradores(nomAdmin, apeAdmin, cargo, estado, correoAdmin, passAdmin) VALUES
    ('$nomAdmin', '$apeAdmin', '$cargo', '$estado', '$correoAdmin', '$hashPass')";
    $result = mysqli_query($conex, $query);
    if (!$result){
        die("Error");
    }

    $_SESSION['message'] = 'El administrador se ha registrado correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: crud.php");
}
?>