<?php
session_start();
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
            $idAdmin = $_SESSION['sessAdminID'];

            // Verificar si el producto ya existe
            $sqlVerificar = "SELECT * FROM productos WHERE nomProd ='$nomProd' OR imagen ='$imagen'";
            $resultadoVerificar = mysqli_query($conex, $sqlVerificar);
            if(mysqli_num_rows($resultadoVerificar) > 0){
                ?>
                <script>
                    alert("Este producto ya se ha registrado.");
                </script>
                <?php
            } else {
                // Insertar el nuevo producto si no existe
                $consulta = "INSERT INTO productos(idAdmin, nomProd, marca, precio, estProd, stockProd, imagen, codigoCat)
                VALUES ('$idAdmin', '$nomProd', '$marca', '$precio', '$estado', '$stock', '$imagen', '$categoria')";
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    // Obtener el codProd del producto registrado
                    $codProd = mysqli_insert_id($conex);
                    // Almacenar en la variable de sesión
                    $_SESSION['codProd'] = $codProd;
                    ?>
                    <script>
                        alert("Producto registrado satisfactoriamente.");
                        window.location.href = "../caracteristicas/celulares.php";
                    </script>
                    <?php
                }else{
                    ?>
                    <h3 class="error">Ocurrio un error</h3>
                    <?php
                }
            }
        } else { ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}