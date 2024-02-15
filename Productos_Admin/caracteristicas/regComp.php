<?php session_start();

include('../../registro/conexion.php');

if (isset($_POST['guardar'])){
    if(
        strlen($_POST['ResCam']) >= 1 &&
        strlen($_POST['PuertoHDMI']) >= 1 &&
        strlen($_POST['NLAN']) >= 1 &&
        strlen($_POST['NUSB']) >= 1 &&
        strlen($_POST['NAUDIO']) >= 1 &&
        strlen($_POST['TipPuer']) >= 1 &&
        strlen($_POST['NiUso']) >= 1 &&
        strlen($_POST['caracEs']) >= 1 &&
        strlen($_POST['ResPan']) >= 1 &&
        strlen($_POST['TamPa']) >= 1 &&
        strlen($_POST['MeRam']) >= 1 &&
        strlen($_POST['TipDis']) >= 1 &&
        strlen($_POST['CapDis']) >= 1 &&
        strlen($_POST['MarPro']) >= 1 &&
        strlen($_POST['Proce']) >= 1 &&
        strlen($_POST['modPro']) >= 1 &&
        strlen($_POST['marTarV']) >= 1 &&
        strlen($_POST['SisOp']) >= 1 &&
        strlen($_POST['verSis']) >= 1 &&
        strlen($_POST['NuProc']) >= 1 &&
        strlen($_POST['VelProc']) >= 1 &&
        strlen($_POST['FuEner']) >= 1 &&
        strlen($_POST['color']) >= 1 &&
        strlen($_POST['OpConec']) >= 1
        ){
// Obtener los datos del formulario
$ResCam = $_POST['ResCam'];
$PuertoHDMI = $_POST['PuertoHDMI'];
$NLAN = $_POST['NLAN'];
$NUSB = $_POST['NUSB'];
$NAUDIO = $_POST['NAUDIO'];
$TipPuer = $_POST['TipPuer'];
$NiUso = $_POST['NiUso'];
$caracEs = $_POST['caracEs'];
$ResPan = $_POST['ResPan'];
$TamPa = $_POST['TamPa'];
$MeRam = $_POST['MeRam'];
$TipDis = $_POST['TipDis'];
$CapDis = $_POST['CapDis'];
$MarPro = $_POST['MarPro'];
$Proce = $_POST['Proce'];
$modPro = $_POST['modPro'];
$marTarV = $_POST['marTarV'];
$SisOp = $_POST['SisOp'];
$verSis = $_POST['verSis'];
$NuProc = $_POST['NuProc'];
$VelProc = $_POST['VelProc'];
$FuEner = $_POST['FuEner'];
$color = $_POST['color'];
$OpConec = $_POST['OpConec'];

    // Obtener el ID del producto de la sesion
    $codProd = $_SESSION['codProd'];

    // Insertar las características del producto en la tabla 'InfoProductos'
    $sql_caracteristicas = "INSERT INTO infoproductos (codProd, idCaract, valor) VALUES
                            ('$codProd',23 , '$ResCam'),
                            ('$codProd', 24, '$PuertoHDMI'),
                            ('$codProd', 35, '$NLAN'),
                            ('$codProd', 25, '$NUSB'),
                            ('$codProd', 28 , '$NAUDIO'),
                            ('$codProd',29 , '$TipPuer'),
                            ('$codProd',36 , '$NiUso'),
                            ('$codProd', 46, '$caracEs'),
                            ('$codProd',10 , '$ResPan'),
                            ('$codProd',11 , '$TamPa'),
                            ('$codProd',2 , '$MeRam'),
                            ('$codProd',30 , '$TipDis'),
                            ('$codProd', 31, '$CapDis'),
                            ('$codProd', 5, '$MarPro'),
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