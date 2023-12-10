<?php
require 'config/config.php';
require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT p.codProd, p.imagen, p.nomProd, p.precio, p.estProd, p.marca, GROUP_CONCAT(i.valor SEPARATOR ' ') AS valores 
FROM productos p INNER JOIN infoproductos i ON p.codProd = i.codProd WHERE p.codigoCat = 1
GROUP BY p.codProd, p.imagen, p.nomProd, p.precio, p.estProd, p.marca");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<div class="head" id="siteHeader">
<script src="Productos_Cliente/cell/index.js"></script>
<script src="Productos_Cliente/cell/comparacioncell1.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
        <script src="js/indexcell.js"></script>
		<script src="js/cart.js"></script>

// SDK MercadoPago.js
<script src="https://sdk.mercadopago.com/js/v2"></script>
</div>
<body>
	<div class="head">
		<div class="logo">
		<a>TECNOVENTAS</a>
		</div>
		<nav class="navbar">
		<ul>
			<li><a href="sesion.php">Cerrar sesion</a></li>
			<li><a href="inicio.html">Inicio</a></li>
			<li><a>Productos <i class="icon-abajo2"></i></a>
				<ul class="submenu">
					<li><a href="Portatiles.php">
						Portatiles
					</a></li>
					<li><a href="computadores.php">
						Computadores
					</a></li>
					<li><a href="Tablets.php">
						Tablets
					</a></li>
					<li><a href="parlantes.php">
						Parlantes
					</a></li>
					</a></li>
					<li><a href="audifonos.php">
						Audifonos
					</a></li>
				</ul>
			</li>
		</ul>
		</nav>
	</div>

		<div id="stn-icon-search">
			<i class="fa-solid fa-magnifying-glass" ><img src="img/lupa.png" alt="" id="icon-search"></i>
		</div>
		<div id="ctn-bars-search">
			<input type="text" id="inputSearch" placeholder="¿que deseas buscar?">
		</div>
		<ul id="box-search">
		<?php foreach($resultado as $row) { ?>
			<li><a href="detailsCel.php?codProd=<?php echo $row['codProd'];?>&token=<?php echo hash_hmac('sha1', $row['codProd'], KEY_TOKEN);?>"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" ><?php echo $row['nomProd']?></i></a></li>
			<?php } ?>
		</ul>
		<div id="cover-ctn-search"></div>
		<script src="js/scriptbuscador.js"></script>
	</body>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Tienda</title>
		<link rel="stylesheet" href="Productos_Cliente/cell/styles.css" />
		<link rel="stylesheet" href="css/fitro.css">
		<link rel="stylesheet" href="css/estilocar.css">
		<link rel="stylesheet" href="css/buscadorcell.css">
	</head>
	<body>
		<div class="container">
			<h1>Tienda</h1>
			<div calass="card-products-container" >
            <div class ="card-products" id="shopContent"> </div>
		</div>
			<div class="cart-btn" id="cart-btn" >🛒</div>
			<br>
			<br>
			<br>
			<span class="cart-counter" id="cart-counter" >0</span>


		<div class="categoria_list" style="top: 100px" >

			<a class="category_item" category="all">Todo</a>
			<a class="category_item" category="Redmi">Redmi</a>
			<a class="category_item" category="Samsung">Samsung</a>
			<a class="category_item" category="Xiaomi">Xiaomi</a>
			<a class="category_item" category="Motorola">Motorola</a>
				<a class="category_item" category="Realme">Realme</a>

		</div>
		<div class="pro">
        <div class="filtro">
            <div class="h1">Filtro</div>
            <hr class="l1">
            <div class="h2">Memoria Ram</div>
            <hr class="l2">
            <div>
                <span class="tag">4GB</span>
                <span class="tag">6GB</span>
                <span class="tag">8GB</span>
            </div>
            <div class="h2">Resolucion Camara Frontal</div>
            <hr class="l2">
            <div>
                <span class="tag">16Mpx</span>
                <span class="tag">20Mpx</span>
				<span class="tag">13Mpx</span>
				<span class="tag">32Mpx</span>
            </div>
            <div class="h2" style="padding-right: 18px;">Almacenamiento</div>
            <hr class="l2">
            <div>
                <span class="tag">64GB</span>
                <span class="tag">128GB</span>
                <span class="tag">256GB</span>
            </div>
            <div class="h2">Procesador</div>
            <hr class="l2">
            <div>
                <span class="tag">Snapdragon</span>
                <span class="tag">Exynos</span>
                <Span class="tag">Unisoc</Span>
                <span class="tag">MediaTek</span>
            </div>
        </div>
		<div class="container-items">
            <?php foreach($resultado as $row) { ?>
			<div class="item" category="<?php echo $row['marca']?>" data-tags="<?php echo $row['valores']?>">

			        <div>
					    <nav class="navv">
						<ul>
						<a onclick="comparar('<?php echo $row['nomProd']?>')">Comparar
						<span></span><span></span><span></span><span></span>
                    </div>

				<figure>
					<a href="detailsCel.php?codProd=<?php echo $row['codProd'];?>&token=<?php echo hash_hmac('sha1', $row['codProd'], KEY_TOKEN);?>">
					<img
						src="imagenes/productos/<?php echo$row['imagen']; ?>"
						alt="producto"
					/>
					</a>
				</figure>
				<div class="info-product">
					<h2><?php echo $row['nomProd']; ?></h2>
					<p class="price">$<?php echo$row['precio'];?></p>
                    <p><?php
$estado = $row['estProd'];

// Check if the product is available
if ($estado == 'Agotado') {
    echo '<p class="estado agotado">Agotado</p>';
} else {
    echo '<p class="estado disponible">Disponible</p>';
}
?>
                    </p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <?php } ?>
			</div>
            </div>
			<div class="modal-overplay" id="modal-overplay"></div>
			<div class="modal-container" id="modal-container"></div>
		<div class="fin"></div>
    </div>
    </body>
</html>