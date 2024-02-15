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
                            ('$codProd', 38, '$Resist'),
                            ('$codProd', 46, '$CaracterEspecial'),
                            ('$codProd', 39, '$Portabili'),
                            ('$codProd', 37, '$FAE'),
                            ('$codProd', 14, '$Color'),
                            ('$codProd', 22, '$DuraBateri'),
                            ('$codProd', 40, '$Bluetooth'),
                            ('$codProd', 41, '$Conectividad'),
                            ('$codProd', 42, '$Conexion'),
                            ('$codProd', 43, '$AnchoCm'),
                            ('$codProd', 44, '$AltoCm'),
                            ('$codProd', 45, '$FondoCm'),
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
    window.location.href = "parlantes.php";
</script>
<?php
}
}

// Cerrar conexión
mysqli_close($conex);