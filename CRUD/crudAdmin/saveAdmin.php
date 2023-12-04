<?php
include("db.php");

if (isset($_POST['saveAdmin']));{
    $nomAdmin = trim($_POST['nomAdmin']);
    $apeAdmin = trim($_POST['apeAdmin']);
    $cargo = trim($_POST['cargo']);
    $estado = trim($_POST['estado']);
    $correoAdmin = trim($_POST['correoAdmin']);
    $passAdmin = trim($_POST['passAdmin']);
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