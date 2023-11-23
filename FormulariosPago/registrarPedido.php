<?php
include("../registro/conexion.php");

if (isset($_POST['guardar'])){
    if(
        isset($_POST['total']) &&
        isset($_POST['direccion']) &&
        strlen($_POST['total']) >= 1 &&
        strlen($_POST['direccion']) >= 1
    ){
        $total = trim($_POST['total']);
        $direccion = trim($_POST['direccion']);
        date_default_timezone_set(timezoneId: "America/Bogota");
        $fechaPedido = date(format: 'Y-m-d');
        $horaPedido = date(format: 'H:i:s');
        $idCliente = rand(1, 5);

        $consulta = "INSERT INTO pedidos(idCliente,fechaPedido, horaPedido, dirPedido, totalPedido)
        VALUES ('$idCliente','$fechaPedido', '$horaPedido', '$direccion', '$total')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado){
            $mensaje = "Los datos son válidos. Puedes continuar con la compra";
            echo "<script>alert('$mensaje');</script>";
        }else{
            echo "Ha ocurrido un error " . mysqli_error($conex);
        }
    }else {
        echo "Error: Datos incompletos";
    }
}

?>