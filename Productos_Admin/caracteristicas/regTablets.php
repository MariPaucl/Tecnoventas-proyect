<?php session_start();

include('../../registro/conexion.php');

if (isset($_POST['guardar'])){
    if(
        strlen($_POST['memoriaInt']) >= 1 &&
        strlen($_POST['marcaProce']) >= 1 &&
        strlen($_POST['memoriaRam']) >= 1 &&
        strlen($_POST['SistemaOpe']) >= 1 &&
        strlen($_POST['versionOpe']) >= 1 &&
        strlen($_POST['nucleosProce']) >= 1 &&
        strlen($_POST['VelocidadProce']) >= 1 &&
        strlen($_POST['tiposPuerto']) >= 1 &&
        strlen($_POST['caparaFrontal']) >= 1 &&
        strlen($_POST['camaraPosterior']) >= 1 &&
        strlen($_POST['DuracionBa']) >= 1 &&
        strlen($_POST['OpcionesCo']) >= 1 &&
        strlen($_POST['resolucionPa']) >= 1 &&
        strlen($_POST['tamañoPa']) >= 1 &&
        strlen($_POST['FuentesEnergia']) >= 1 &&
        strlen($_POST['color']) >= 1 &&
        strlen($_POST['Extra']) >= 1
        ){
// Obtener los datos del formulario
$memoriaInt = $_POST['memoriaInt'];
$marcaProce = $_POST['marcaProce'];
$memoriaRam = $_POST['memoriaRam'];
$SistemaOpe = $_POST['SistemaOpe'];
$versionOpe = $_POST['versionOpe'];
$nucleosProce = $_POST['nucleosProce'];
$VelocidadProce = $_POST['VelocidadProce'];
$tiposPuerto = $_POST['tiposPuerto'];
$caparaFrontal = $_POST['caparaFrontal'];
$camaraPosterior = $_POST['camaraPosterior'];
$DuracionBa = $_POST['DuracionBa'];
$OpcionesCo = $_POST['OpcionesCo'];
$resolucionPa = $_POST['resolucionPa'];
$tamañoPa = $_POST['tamañoPa'];
$FuentesEnergia = $_POST['FuentesEnergia'];
$color = $_POST['color'];
$Extra = $_POST['Extra'];

    // Obtener el ID del producto de la sesion
    $codProd = $_SESSION['codProd'];

    // Insertar las características del producto en la tabla 'InfoProductos'
    $sql_caracteristicas = "INSERT INTO infoproductos (codProd, idCaract, valor) VALUES
                            ('$codProd', 1, '$memoriaInt'),
                            ('$codProd', 5, '$marcaProce'),
                            ('$codProd', 2, '$memoriaRam'),
                            ('$codProd', 6, '$SistemaOpe'),
                            ('$codProd', 7, '$versionOpe'),
                            ('$codProd', 8, '$nucleosProce'),
                            ('$codProd', 21, '$VelocidadProce'),
                            ('$codProd', 29, '$tiposPuerto'),
                            ('$codProd', 3, '$caparaFrontal'),
                            ('$codProd', 4, '$camaraPosterior'),
                            ('$codProd', 22, '$DuracionBa'),
                            ('$codProd', 41, '$OpcionesCo'),
                            ('$codProd', 10, '$resolucionPa'),
                            ('$codProd', 11, '$tamañoPa'),
                            ('$codProd', 37, '$FuentesEnergia'),
                            ('$codProd', 14, '$color'),
                            ('$codProd', 47, '$Extra')";

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
    window.location.href = "tablets.php";
</script>
<?php
}
}

// Cerrar conexión
mysqli_close($conex);