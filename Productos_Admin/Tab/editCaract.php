<?php
require '../../config/conexion.php';
require '../../config/config.php';
$db = new Database();
$con = $db->conectar();

session_start();

if (isset($_GET["codProd"])) {
    $codProd = $_GET['codProd'];
    $query = "SELECT * FROM productos p INNER JOIN infoproductos ip ON p.codProd = ip.codProd WHERE p.codProd = $codProd AND p.codigoCat = 4";
    $result = $con->query($query);

    if ($result->rowCount() > 0) {
        $sql = $con->prepare("SELECT * FROM caracteristicas");
        $sql->execute();
        $caracteristicas = $sql->fetchAll(PDO::FETCH_ASSOC);

        $sql = $con->prepare("SELECT * FROM caracteristicas c JOIN infoProductos ip ON c.idCaract = ip.idCaract WHERE ip.codProd = $codProd");
        $sql->execute();
        $caracteristica = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (isset($_POST['guardar'])) {
    $codProd = $_GET['codProd'];
    $idCaract = $_POST['idCaract'];
    $valor = $_POST['valor'];

    $query = "UPDATE infoProductos SET valor = :valor WHERE codProd = :codProd AND idCaract = :idCaract";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':valor', $valor, PDO::PARAM_STR);
    $stmt->bindParam(':codProd', $codProd, PDO::PARAM_INT);
    $stmt->bindParam(':idCaract', $idCaract, PDO::PARAM_INT);
    $stmt->execute();

    $_SESSION['success_message'] = 'Característica actualizada correctamente';

    header("Location: tab.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Actualizar características</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
</head>
<body>

<div class="container p-4">
    <div class="row">
        <h1 class="text-h1 text-center fw-bold" style="padding-bottom: 15px;">Actualizar característica</h1>
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editCaract.php?codProd=<?php echo $codProd; ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="codProd" value="<?php echo $codProd; ?>" class="form-control" disabled placeholder="Cambiar código">
                    </div>
                    <div class="form-group mb-3">
                        <select name="idCaract" id="idCaract" class="form-select">
                            <option value="">Seleccionar...</option>
                            <?php foreach ($caracteristicas as $caract): ?>
                                <option value="<?php echo $caract['idCaract']; ?>"><?php echo $caract['nomCaract']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="valor" class="form-control" placeholder="Cambiar valor">
                    </div>
                    <button class="btn btn-outline-secondary btn-lg" style="width: 100%;" type="submit" name="guardar">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>