<?php session_start();

include('../../registro/conexion.php');

if (isset($_POST['guardar'])){
    if(
        strlen($_POST['resistencia']) >= 1 &&
        strlen($_POST['conectividad']) >= 1 &&
        strlen($_POST['duracionBateria']) >= 1 &&
        strlen($_POST['conexion']) >= 1 &&
        strlen($_POST['color']) >= 1 &&
        strlen($_POST['longitudCable']) >= 1
        ){
// Obtener los datos del formulario
$resistencia = $_POST['resistencia'];
$conectividad = $_POST['conectividad'];
$duracionBateria = $_POST['duracionBateria'];
$conexion = $_POST['conexion'];
$color = $_POST['color'];
$longitudCable = $_POST['longitudCable'];

    // Obtener el ID del producto de la sesion
    $codProd = $_SESSION['codProd'];

    // Insertar las características del producto en la tabla 'InfoProductos'
    $sql_caracteristicas = "INSERT INTO infoproductos (codProd, idCaract, valor) VALUES
                            ('$codProd', 38, '$resistencia'),
                            ('$codProd', 41, '$conectividad'),
                            ('$codProd', 22, '$duracionBateria'),
                            ('$codProd', 42, '$conexion'),
                            ('$codProd', 14, '$color'),
                            ('$codProd', 15, '$longitudCable')";

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
    window.location.href = "audifonos.php";
</script>
<?php
}
}

// Cerrar conexión
mysqli_close($conex);