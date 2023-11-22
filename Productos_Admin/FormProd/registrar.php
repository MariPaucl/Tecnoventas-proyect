<?php
include("../../registro/conexion.php");

if (isset($_POST['registrar'])){
    if(
        strlen($_POST['nomProd']) >= 1 &&
        strlen($_POST['marca']) >= 1 &&
        strlen($_POST['precio']) >= 1 &&
        strlen($_POST['imagen']) >= 1 &&
        strlen($_POST['stock']) >= 1 &&
        strlen($_POST['estado']) >= 1 &&
        strlen($_POST['categoria']) >= 1
        ){
            $nomProd = trim($_POST['nomProd']);
            $marca = trim($_POST['marca']);
            $precio = trim($_POST['precio']);
            $imagen = trim($_POST['imagen']);
            $stock = trim($_POST['stock']);
            $estado = trim($_POST['estado']);
            $categoria = trim($_POST['categoria']);
            $idAdmin = rand(1, 3);

            $consulta = "INSERT INTO productos(idAdmin, nomProd, marca, precio, estProd, stockProd, imagen, codigoCat)
            VALUES ('$idAdmin', '$nomProd', '$marca', '$precio', '$estado', '$stock', '$imagen', '$categoria')";
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