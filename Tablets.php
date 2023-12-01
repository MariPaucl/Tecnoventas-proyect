<?php
require 'config/config.php';
require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT codProd, imagen, nomProd, precio, estProd, marca FROM productos WHERE codigoCat = 4");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
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
					<li><a href="Portatiles.php">
						Portatiles
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
			<li><a href="detailsTab.php?codProd=<?php echo $row['codProd'];?>&token=<?php echo hash_hmac('sha1', $row['codProd'], KEY_TOKEN);?>"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" ><?php echo $row['nomProd']?></i></a></li>
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
		<link rel="stylesheet" href="css/buscadorcell.css">
	</head>
	<body>
		<header>
			<h1>Tienda</h1>

			<div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>

				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito">1</span>
								<p class="titulo-producto-carrito">no nike</p>
								<span class="precio-producto-carrito">$200</span>
							</div>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$200</span>
					</div>
					<p class="cart-empty">El carrito está vacío</p>
					<div class="hidde">
					<a href="Compra/compra.html"  class="cta">
						<span class="boton">Finalizar Compra</span>
						<svg width="13px" height="10px" viewBox="0 0 13 10">
						<path d="M1,5 L11,5"></path>
						<polyline points="8 1 12 5 8 9"></polyline>
						</svg>
					</a>
					</div>
				</div>
			</div>
		</header>
		<div class="categoria_list">
			<a class="category_item" category="all">Todo</a>
			<a class="category_item" category="Lenovo">Lenovo</a>
			<a class="category_item" category="Samsung">Samsung</a>
			<a class="category_item" category="Apple">Apple</a>
			<a class="category_item" category="Alcatel">Alcatel</a>

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
					<a href="detailsTab.php?codProd=<?php echo $row['codProd'];?>&token=<?php echo hash_hmac('sha1', $row['codProd'], KEY_TOKEN);?>">
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
		<div class="fin"></div>

		<script src="Productos_Cliente/cell/index.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
    </body>
</html>