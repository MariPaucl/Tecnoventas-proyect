<?php
session_start();

if(!isset($_SESSION['sessCustomerID'])){
    header("location:index.html");
    exit();
}
require 'config/config.php';
require 'config/conexion.php';
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
        $sql = $con->prepare("SELECT count(codProd) FROM productos WHERE codProd = ? AND codigoCat = 2");
        $sql->execute([$id]);
        if($sql->fetchColumn() > 0){
            $sql = $con->prepare("SELECT stockProd, nomProd, precio, imagen FROM productos WHERE codProd = ? AND codigoCat = 2 LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row['nomProd'];
            $precio = $row['precio'];
            $imagen = $row['imagen'];
            $stock = $row['stockProd'];

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
<link rel="stylesheet" href="Productos_Cliente/cell/concel/estilo.css">
<link rel="website icon" type="png" href="imagenes/Tecnoventas.png">

<style>
        @import url('https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');

                /* Estilos para la tabla de características */
.tableO {
    width: 50%;
    margin-top: 20px;
    border-collapse: collapse;
    margin-inline-start: 300px;
    border-radius: 25px;
}

.tableO th, .tableO td {
    padding: 8px;
    padding-inline: 10px;
}

.tableO th {
    font-size: 17px;
    text-align: left;
}

.tableO tr{
    background-color: rgb(166, 166, 166, 0.87);
}

.tableO tr:nth-child(even) {
    background-color: rgba(196, 196, 196, 0.87);
}
.back-button {
    position: absolute;
    top: 20px;
    left: 20px;
    display: block;
    width: 100px;
    padding: 10px 20px;
    text-align: center;
    background-color: rgb(24 23 23 / 61%);
    text-decoration: none;
    border-radius: 10px;
    font-size: 18px;
    font-family: 'Concert One', sans-serif;
}
</style>
<script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
    <a href="javascript:history.back()" class="back-button" title="Regresar">
    <img src="imagenes/volver.png" width="40%"></a>

        <font size="5" color="white" face="Concert One"><b><h1><?php echo $nombre; ?></h1></b></font><p>
         
                <table  class="table"   border="0" bordercolor="grey"  align="center" cellpadding="4" cellspacing="0">
                    <tr>
        <td align="center"><img src="imagenes/productos/<?php echo $imagen; ?>" whidth="300" height="250"><p></td>
        <td align="center"><font size="9" color="black" face="Concert One"><center><b> Precio</b></font><p>
            <font size="6" color="black" face="Cherry Bomb One">$<?php echo $precio;?></center></font><p><p><p>
              
            <?php
    if ($stock > 0) {
        echo "Unidades: $stock Disponibles";
    } else {
        echo "Producto agotado.";
    }
    ?><br>
</h4>     
                     <i class="fa-solid fa-truck fa-bounce" style="color: #060b13;"></i>  Envios a todo el pais <br>
                     <i class="fa-solid fa-shield-halved fa-beat" style="color: #060b13;"></i> Recibe el producto que esperabas <br>
                      o te devolvemos tu dinero <p>
                        <i class="fa-solid fa-wallet fa-beat" style="color: #060b13;"></i> Distintos metodos de pago <br>
                        <img src="img/paypal.png" whidth="30" height="30">
                        <img src="img/contraEntrega.png" whidth="40" height="40">
                 </h4>
        </td>
            </tr></table>
            <p>
            
            <div style="text-align: center;">
    <font size="6" color="white" face="Concert One"><b> Caracteristicas del producto</b></font>
</div>
<div style="text-align: center; clear: both;">
    <table class="tableO" width="45%" cellpadding="9" cellspacing="0" style="margin: 0 auto;">
        <?php foreach ($caracteristicas as $caracteristica) { ?>
        <tr bgcolor="darkgray">
            <th><?php echo $caracteristica['nomCaract']; ?></th>
            <td><?php echo $caracteristica['valor']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>