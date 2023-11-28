<?php
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
        }
    }else{
        echo 'Error al procesar la petición';
        exit;
    }
}

?>
<link rel="stylesheet" href="Productos_Cliente/cell/concel/estilo.css">
<style>
        @import url('https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');
  </style>
<script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>

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
</h4>                          <i class="fa-solid fa-truck fa-bounce" style="color: #060b13;"></i>  Envios a todo el pais <br>
                     <i class="fa-solid fa-shield-halved fa-beat" style="color: #060b13;"></i> Recibe el producto que esperabas <br>
                      o te devolvemos tu dinero <p>
                        <i class="fa-solid fa-wallet fa-beat" style="color: #060b13;"></i> Distintos metodos de pago <br>
                        <img src="img/mercadoPago.png" whidth="40" height="40">
                        <img src="img/contraEntrega.png" whidth="40" height="40">
                 </h4>
        </td>
            </tr></table>
            <p>
            
        <font size="6" color="white" face="Concert One"><b> Caracteristicas del producto</b></font><p>
            <table class="tableO" width="45%" align="left" cellpadding="9" cellspacing="0">
            <tr bgcolor="silver" >
                <th>Marca</th>
                <td>Motorola</td>
            </tr>
            <tr bgcolor="darkgray">

                <th>Modelo</th>
                <td>G20 Dual SIM</td>

            </tr>
            
            <tr bgcolor="silver">
                <th>Procesador</th>
                <td>Unisoc T700</td>

            </tr>
            <tr bgcolor="darkgray">
                <th>Almacenamiento</th>
                <td>64 GB</td>
            </tr>
            <tr bgcolor="silver">
                <th>Conectividad</th>
                <td>conector USB</td>
            </tr>
            <tr bgcolor="darkgray">
                <th>Pantalla</th>
                <td>Max Vision</td>
            </tr>
            <tr bgcolor="silver">
                <th>Sistema Operativo</th>
                <td>Android</td>
            </tr>
            <tr bgcolor="darkgray">
                <th>Giroscopio</th>
                <td>Si</td>
            </tr>
            
            <tr bgcolor="silver">  
                <th>GPU/CPU</th>
                <td>850 GHz</td>
            </tr>
            
            <tr bgcolor="darkgray">
                <th>Conexion de carga</th>
                <td>USB-C</td>
            </tr>
            <tr bgcolor="silver">
                <th>Seguridad</th>
                <td>lector de huella digital</td>
            </tr>
            <table class="tableO" width="45%" align="rigth" cellpadding="9" cellspacing="0"> 
            <tr bgcolor="darkgray">
                <th>Color</th>
                <td>Gris</td>
            </tr>
            <tr bgcolor="silver">
                <th>Duracion de bateria</th>
                <td>26 días en espera</td>
            </tr>
            <tr bgcolor="darkgray">
                <th>Resolucion de imagen</th>
                <td>720 px x 1600 px</td>
            </tr>
            <tr bgcolor="silver">
                <th>Garantia de fabrica</th>
                <td>8 meses</td>
            </tr>
            <tr bgcolor="darkgray">
                <th>Nucleos</th>
                <td>8</td>
            </tr>
            <tr bgcolor="silver">
                <th>Dimenciones</th>
                <td>165.2 mm x 75.7 mm x 9.1 mm</td>
            </tr>
            <tr bgcolor="darkgray">
                <th>Peso</th>
                <td>200 g</td>
            </tr>
            <tr bgcolor="silver">
                <th>Red</th>
                <td>4G/LTE</td>
            </tr>
            <tr bgcolor="darkgray">
                <th>Verion del sitema operativo</th>
                <td>11</td>
            </tr>
            <tr bgcolor="silver">
                <th>Resolucion de la camara</th>
                <td>cámara trasera 48 Mpx <br>
                cámara frontal 13 Mpx
                </td>
            </tr>
            <tr bgcolor="darkgray">
                <th>RAM</th>
                <td>4 GB</td>
            </tr>
        </table><p>