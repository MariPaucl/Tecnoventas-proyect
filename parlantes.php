<?php
require 'config/config.php';
require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT codProd, imagen, nomProd, precio, estProd, marca FROM productos WHERE codigoCat = 6");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<div class="head" id="siteHeader">
<script src="Productos_Cliente/cell/index.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
        <script src="js/indexcell.js"></script>
		<script src="js/cartpar.js"></script>

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
					<li><a href="cell.php">
						Celulares
					</a></li>
					<li><a href="computadores.php">
						Computadores
					</a></li>
					<li><a href="Tablets.php">
						Tablets
					</a></li>
					<li><a href="portatiles.php">
						Portatiles
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
			<li><a href="detailsPar.php?codProd=<?php echo $row['codProd'];?>&token=<?php echo hash_hmac('sha1', $row['codProd'], KEY_TOKEN);?>"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" ><?php echo $row['nomProd']?></i></a></li>
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
			<h1>Tienda</h1>
			<div calass="card-products-container" >
            <div class ="card-products" id="shopContent"> </div>
		</div>
			<div class="cart-btn" id="cart-btn" >🛒</div>
			<div >🛒</div>
			<div >.</div>
			<div >.</div>
			<span class="cart-counter" id="cart-counter" >0</span>
		<div class="categoria_list" style="top: 100px" >
			<a class="category_item" category="all">Todo</a>
			<a class="category_item" category="Bose">Bose</a>
			<a class="category_item" category="JBL">JBL</a>
			<a class="category_item" category="Sonos">Sonos</a>
			<a class="category_item" category="LG">LG</a>
			<a class="category_item" category="Kaley">Kaley</a>
		</div>
		<div class="pro">
			<div class="filtro">
				<div class="h1">Filtro</div>
				<hr class="l1">
				<div class="h2">Memoria Ram</div>
				<hr class="l2">
				<div>
					<span class="tag">4-Ram</span>
					<span class="tag">6-Ram</span>
					<span class="tag">8-Ram</span>
				</div>
				<div class="h2">Tipo SIM</div>
				<hr class="l2">
				<div>
					<span class="tag">Dual</span>
					<span class="tag">One</span>
				</div>
				<div class="h2">Almacenamiento</div>
				<hr class="l2">
				<div>
					<span class="tag">64_GB</span>
					<span class="tag">128_GB</span>
					<span class="tag">256_GB</span>
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
			<div class="item" category="<?php echo $row['marca']?>" data-tags="4-Ram One 128_GB Snapdragon">
				<figure>
					<a href="detailsPar.php?codProd=<?php echo $row['codProd'];?>&token=<?php echo hash_hmac('sha1', $row['codProd'], KEY_TOKEN);?>">
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
    </body>
</html>