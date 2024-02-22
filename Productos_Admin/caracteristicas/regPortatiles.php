<?php session_start();

include('../../registro/conexion.php');

if (isset($_POST['guardar'])){
    if(
        strlen($_POST['DuracionBateria']) >= 1 &&
        strlen($_POST['OpcionesConectividad']) >= 1 &&
        strlen($_POST['ResolucionCamaraWeb']) >= 1 &&
        strlen($_POST['NoPuertosHDMI']) >= 1 &&
        strlen($_POST['NoPuertosUSB']) >= 1 &&
        strlen($_POST['NoPuertosUSBTipoC']) >= 1 &&
        strlen($_POST['NoPuertosSD']) >= 1 &&
        strlen($_POST['NoSalidasdeAudio']) >= 1 &&
        strlen($_POST['TiposDePuertos']) >= 1 &&
        strlen($_POST['NivelDeUso']) >= 1 &&
        strlen($_POST['CaracteristicasEspeciales']) >= 1 &&
        strlen($_POST['ResolucionPantalla']) >= 1 &&
        strlen($_POST['TamañoPantalla']) >= 1 &&
        strlen($_POST['MemoriaRAM']) >= 1 &&
        strlen($_POST['TipoDeDiscos']) >= 1 &&
        strlen($_POST['CapacidadDeDisco']) >= 1 &&
        strlen($_POST['MarcaProcesador']) >= 1 &&
        strlen($_POST['Procesador']) >= 1 &&
        strlen($_POST['ModeloProcesador']) >= 1 &&
        strlen($_POST['TarjetaVideo']) >= 1 &&
        strlen($_POST['SistemaOperativo']) >= 1 &&
        strlen($_POST['VersionSistemaOperativo']) >= 1 &&
        strlen($_POST['NucleosDelProcesador']) >= 1 &&
        strlen($_POST['NoPuertosHDMI']) >= 1 &&
        strlen($_POST['VelocidadDelProcesador']) >= 1 &&
        strlen($_POST['FuenteAlimentacion']) >= 1 &&
        strlen($_POST['Color']) >= 1
        ){
// Obtener los datos del formulario
$DuracionBateria = $_POST['DuracionBateria'];
$OpcionesConectividad = $_POST['OpcionesConectividad'];
$ResolucionCamaraWeb = $_POST['ResolucionCamaraWeb'];
$NoPuertosHDMI = $_POST['NoPuertosHDMI'];
$NoPuertosUSB = $_POST['NoPuertosUSB'];
$NoPuertosUSBTipoC = $_POST['NoPuertosUSBTipoC'];
$NoPuertosSD = $_POST['NoPuertosSD'];
$NoSalidasdeAudio = $_POST['NoSalidasdeAudio'];
$TiposDePuertos = $_POST['TiposDePuertos'];
$NivelDeUso = $_POST['NivelDeUso'];
$CaracteristicasEspeciales = $_POST['CaracteristicasEspeciales'];
$ResolucionPantalla = $_POST['ResolucionPantalla'];
$TamañoPantalla = $_POST['TamañoPantalla'];
$MemoriaRAM = $_POST['MemoriaRAM'];
$TipoDeDiscos = $_POST['TipoDeDiscos'];
$CapacidadDeDisco = $_POST['CapacidadDeDisco'];
$MarcaProcesador = $_POST['MarcaProcesador'];
$Procesador = $_POST['Procesador'];
$ModeloProcesador = $_POST['ModeloProcesador'];
$TarjetaVideo = $_POST['TarjetaVideo'];
$SistemaOperativo = $_POST['SistemaOperativo'];
$VersionSistemaOperativo = $_POST['SistemaOperativo'];
$NucleosDelProcesador = $_POST['NucleosDelProcesador'];
$NoPuertosHDMI = $_POST['NoPuertosHDMI'];
$VelocidadDelProcesador = $_POST['VelocidadDelProcesador'];
$FuenteAlimentacion = $_POST['FuenteAlimentacion'];
$Color = $_POST['Color'];

    // Obtener el ID del producto de la sesion
    $codProd = $_SESSION['codProd'];

    // Insertar las características del producto en la tabla 'InfoProductos'
    $sql_caracteristicas = "INSERT INTO infoproductos (codProd, idCaract, valor) VALUES
                            ('$codProd', 22 , '$DuracionBateria'),
                            ('$codProd', 41, '$OpcionesConectividad'),
                            ('$codProd', 23, '$ResolucionCamaraWeb'),
                            ('$codProd', 24, '$NoPuertosHDMI'),
                            ('$codProd', 25 , '$NoPuertosUSB'),
                            ('$codProd', 26 , '$NoPuertosUSBTipoC'),
                            ('$codProd', 27 , '$NoPuertosSD'),
                            ('$codProd', 28, '$NoSalidasdeAudio'),
                            ('$codProd', 29 , '$TiposDePuertos'),
                            ('$codProd', 36 , '$NivelDeUso'),
                            ('$codProd', 46 , '$CaracteristicasEspeciales'),
                            ('$codProd', 10 , '$ResolucionPantalla'),
                            ('$codProd', 11, '$TamañoPantalla'),
                            ('$codProd', 2, '$MemoriaRAM'),
                            ('$codProd', 30, '$TipoDeDiscos'),
                            ('$codProd', 31 , '$CapacidadDeDisco'),
                            ('$codProd', 5, '$MarcaProcesador'),
                            ('$codProd', 32, '$Procesador'),
                            ('$codProd', 33, '$ModeloProcesador'),
                            ('$codProd', 34, '$TarjetaVideo'),
                            ('$codProd', 6, '$SistemaOperativo'),
                            ('$codProd', 7, '$VersionSistemaOperativo'),
                            ('$codProd', 8, '$NucleosDelProcesador'),
                            ('$codProd', 24 , '$NoPuertosHDMI'),
                            ('$codProd', 21, '$VelocidadDelProcesador'),
                            ('$codProd', 37 , '$FuenteAlimentacion'),
                            ('$codProd', 14, '$Color')";

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
    window.location.href = "portatiles.php";
</script>
<?php
}
}

// Cerrar conexión
mysqli_close($conex);