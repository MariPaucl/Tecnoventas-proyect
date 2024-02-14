<?php session_start();

include('../../registro/conexion.php');

if (isset($_POST['guardar'])){
    if(
        strlen($_POST['Resist']) >= 1 &&
        strlen($_POST['CaracterEspecial']) >= 1 &&
        strlen($_POST['Portabili']) >= 1 &&
        strlen($_POST['FAE']) >= 1 &&
        strlen($_POST['Color']) >= 1 &&
        strlen($_POST['DuraBateri']) >= 1 &&
        strlen($_POST['Bluetooth']) >= 1 &&
        strlen($_POST['Conectividad']) >= 1 &&
        strlen($_POST['Conexion']) >= 1 &&
        strlen($_POST['AnchoCm']) >= 1 &&
        strlen($_POST['AltoCm']) >= 1 &&
        strlen($_POST['FondoCm']) >= 1 &&
        strlen($_POST['Extra']) >= 1 
       
        ){
// Obtener los datos del formulario
$Resist = $_POST['Resist'];
$CaracterEspecial = $_POST['CaracterEspecial'];
$Portabili = $_POST['Portabili'];
$FAE = $_POST['FAE'];
$Color = $_POST['Color'];
$DuraBateri = $_POST['DuraBateri'];
$Bluetooth = $_POST['Bluetooth'];
$Conectividad = $_POST['Conectividad'];
$Conexion = $_POST['Conexion'];
$AnchoCm = $_POST['AnchoCm'];
$AltoCm = $_POST['AltoCm'];
$FondoCm = $_POST['FondoCm'];
$Extra = $_POST['Extra'];

    // Obtener el ID del producto de la sesion
    $codProd = $_SESSION['codProd'];

    // Insertar las características del producto en la tabla 'InfoProductos'
    $sql_caracteristicas = "INSERT INTO infoproductos (codProd, idCaract, valor) VALUES
                            ('$codProd',38 , '$ResCam'),
                            ('$codProd', 46, '$PuertoHDMI'),
                            ('$codProd', 39, '$NLAN'),
                            ('$codProd', 37, '$NUSB'),
                            ('$codProd', 14 , '$NAUDIO'),
                            ('$codProd',22 , '$TipPuer'),
                            ('$codProd',40 , '$NiUso'),
                            ('$codProd', 41, '$caracEs'),
                            ('$codProd',42 , '$TamPa'),
                            ('$codProd',43 , '$MeRam'),
                            ('$codProd',44 , '$TipDis'),
                            ('$codProd', 45, '$CapDis'),
                            ('$codProd', 47, '$MarPro'),
                            ('$codProd', 32, '$Proce'),
                            ('$codProd', 33, '$modPro'),
                            ('$codProd', 34 , '$marTarV'),
                            ('$codProd', 6, '$SisOp'),
                            ('$codProd', 7, '$verSis'),
                            ('$codProd', 8, '$NuProc'),
                            ('$codProd', 21, '$VelProc'),
                            ('$codProd', 37, '$FuEner'),
                            ('$codProd',14 , '$color'),
                            ('$codProd', 41, '$OpConec')
                            ";

// Ejecutar la consulta SQL
if (mysqli_query($conex, $sql_caracteristicas)) {
    unset($_SESSION['codProd']);
    ?>
    <script>
        alert("Las características se han registrado correctamente.");
        window.location.href = "../../CRUD/crudProd/crud.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql_caracteristicas . "<br>" . mysqli_error($conex);
}
} else {
?>
<script>
    alert("Por favor, completa todos los campos.");
    window.location.href = "comp.php";
</script>
<?php
}
}

// Cerrar conexión
mysqli_close($conex);