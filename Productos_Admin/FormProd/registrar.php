<?php
include("conexion.php");

if (isset($_POST['registrar'])){
    if(
        strlen($_POST['nomProd']) >= 1 &&
        strlen($_POST['marca']) >= 1 &&
        strlen($_POST['precio']) >= 1 &&
        strlen($_POST['imagen']) >= 1 &&
        strlen($_POST['estado']) >= 1
        ){
            $nomProd = trim($_POST['nomProd']);
            $marca = trim($_POST['marca']);
            $precio = trim($_POST['precio']);
            $imagen = trim($_POST['imagen']);
            $estado = trim($_POST['estado']);

            $consulta = "INSERT INTO productos(nomProd, marca, precio, estProd, imagen)
            VALUES ('$nomProd', '$marca', '$precio', '$estado', '$imagen')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="success">El producto se guardo correctamente</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Ocurrio un error</h3>
                <?php
            }
        }else{ ?> <h3 class="error">Llena todos los campos</h3><?php }
    }

?>