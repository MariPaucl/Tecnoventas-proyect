<?php
require '../../config/config.php';
require '../../config/conexion.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['codProd']) ? $_GET['codProd'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : null;

if($id == '' || $token == ''){
    echo 'Error al procesar la petición';
    exit;
} else {
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    if($token == $token_tmp){
        $sql = $con->prepare("SELECT count(codProd) FROM productos WHERE codProd = ?");
        $sql->execute([$id]);
        if($sql->fetchColumn() > 0){
            $sql = $con->prepare("SELECT * FROM productos WHERE codProd = ? LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $codProd = $row['codProd'];
            $nombre = $row['nomProd'];
            $imagen = $row['imagen'];

            $sql = $con->prepare("SELECT c.nomCaract, ip.valor FROM caracteristicas c JOIN infoProductos ip ON c.idCaract = ip.idCaract WHERE ip.codProd = ?");
            $sql->execute([$id]);
            $caracteristicas = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }else{
        echo 'Error al procesar la petición';
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Caracteristicas</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
</head>
<body style="background-color: #f0f1f2;" >

</div>
    <center>
    <p class="fs-2 fw-bold text-uppercase"><?php echo $nombre; ?></p>
    <img src="../../imagenes/productos/<?php echo $imagen; ?>" class="rounded mx-auto d-block" alt="No imagen">
    <br>
    <table class="table table-striped table-bordered" style="width: 600px;">
        <thead>
            <tr>
                <th class="fs-5 text-center">Caracteristica</th>
                <th class="fs-5 text-center">Valor</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($caracteristicas as $caracteristica) { ?>
            <tr>
                <th><?php echo $caracteristica['nomCaract']; ?></th>
                <td><?php echo $caracteristica['valor']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-outline-secondary" style="margin-bottom: 10px;" href="cell.php" role="button">< Regresar</a>
    <a class="btn btn-outline-secondary" style="margin-bottom: 10px;" href="editCaract.php?codProd=<?php echo $codProd;?>" role="button">Editar caracteristicas ></a>
    </center>
</body>
</html>