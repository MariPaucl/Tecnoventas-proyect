<?php session_start();

include('../../registro/conexion.php');

if (isset($_POST['guardar'])){
    if(
        strlen($_POST['redDatos']) >= 1 &&
        strlen($_POST['dualSim']) >= 1 &&
        strlen($_POST['tipoPuertos']) >= 1 &&
        strlen($_POST['resCamF']) >= 1 &&
        strlen($_POST['cantCamP']) >= 1 &&
        strlen($_POST['resCamP']) >= 1 &&
        strlen($_POST['resOtrasCamP']) >= 1 &&
        strlen($_POST['flashF']) >= 1 &&
        strlen($_POST['flashP']) >= 1 &&
        strlen($_POST['memoriaInt']) >= 1 &&
        strlen($_POST['memoriaRam']) >= 1 &&
        strlen($_POST['marcaProc']) >= 1 &&
        strlen($_POST['sistemOp']) >= 1 &&
        strlen($_POST['versionSisOp']) >= 1 &&
        strlen($_POST['nucleosP']) >= 1 &&
        strlen($_POST['velocidadP']) >= 1 &&
        strlen($_POST['tipoPantalla']) >= 1 &&
        strlen($_POST['resolucionP']) >= 1 &&
        strlen($_POST['tamPant']) >= 1 &&
        strlen($_POST['capacidadB']) >= 1 &&
        strlen($_POST['resistencia']) >= 1 &&
        strlen($_POST['opcionesCon']) >= 1 &&
        strlen($_POST['extra']) >= 1 &&
        strlen($_POST['caractEsp']) >= 1 &&
        strlen($_POST['fuentesAlimE']) >= 1 &&
        strlen($_POST['color']) >= 1
        ){
// Obtener los datos del formulario
$redDatos = $_POST['redDatos'];
$dualSim = $_POST['dualSim'];
$tipoPuertos = $_POST['tipoPuertos'];
$resCamF = $_POST['resCamF'];
$cantCamP = $_POST['cantCamP'];
$resCamP = $_POST['resCamP'];
$resOtrasCamP = $_POST['resOtrasCamP'];
$flashF = $_POST['flashF'];
$flashP = $_POST['flashP'];
$memoriaInt = $_POST['memoriaInt'];
$memoriaRam = $_POST['memoriaRam'];
$marcaProc = $_POST['marcaProc'];
$sistemOp = $_POST['sistemOp'];
$versionSisOp = $_POST['versionSisOp'];
$nucleosP = $_POST['nucleosP'];
$velocidadP = $_POST['velocidadP'];
$tipoPantalla = $_POST['tipoPantalla'];
$resolucionP = $_POST['resolucionP'];
$tamPant = $_POST['tamPant'];
$capacidadB = $_POST['capacidadB'];
$resistencia = $_POST['resistencia'];
$opcionesCon = $_POST['opcionesCon'];
$extra = $_POST['extra'];
$caractEsp = $_POST['caractEsp'];
$fuentesAlimE = $_POST['fuentesAlimE'];
$color = $_POST['color'];

    // Obtener el ID del producto de la sesion
    $codProd = $_SESSION['codProd'];

    // Insertar las características del producto en la tabla 'InfoProductos'
    $sql_caracteristicas = "INSERT INTO infoproductos (codProd, idCaract, valor) VALUES
                            ('$codProd', 16, '$redDatos'),
                            ('$codProd', 13, '$dualSim'),
                            ('$codProd', 29, '$tipoPuertos'),
                            ('$codProd', 3, '$resCamF'),
                            ('$codProd', 17, '$cantCamP'),
                            ('$codProd', 4, '$resCamP'),
                            ('$codProd', 18, '$resOtrasCamP'),
                            ('$codProd', 20, '$flashF'),
                            ('$codProd', 19, '$flashP'),
                            ('$codProd', 1, '$memoriaInt'),
                            ('$codProd', 2, '$memoriaRam'),
                            ('$codProd', 5, '$marcaProc'),
                            ('$codProd', 6, '$sistemOp'),
                            ('$codProd', 7, '$versionSisOp'),
                            ('$codProd', 8, '$nucleosP'),
                            ('$codProd', 21, '$velocidadP'),
                            ('$codProd', 9, '$tipoPantalla'),
                            ('$codProd', 10, '$resolucionP'),
                            ('$codProd', 11, '$tamPant'),
                            ('$codProd', 12, '$capacidadB'),
                            ('$codProd', 38, '$resistencia'),
                            ('$codProd', 41, '$opcionesCon'),
                            ('$codProd', 47, '$extra'),
                            ('$codProd', 46, '$caractEsp'),
                            ('$codProd', 37, '$fuentesAlimE'),
                            ('$codProd', 14, '$color')";

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
    window.location.href = "celulares.php";
</script>
<?php
}
}

// Cerrar conexión
mysqli_close($conex);