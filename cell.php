<?php
require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT codProd, imagen, nomProd, precio, estProd FROM productos WHERE codigoCat = 1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<body>

	<div class="head">
		<div class="logo">
		<a href="#">TECNOVENTAS</a>
		</div>
		<nav class="navbar">
		<ul>
			<li><a href="sesion.html">Cerrar sesion</a></li>
			<li><a href="inicio.html">Inicio</a></li>
			<li><a href="#">Productos <i class="icon-abajo2"></i></a>
				<ul class="submenu">
					<li><a href="Portatiles.html">
						Portatiles
					</a></li>
					<li><a href="Portatiles.html">
						Computadores
					</a></li>
					<li><a href="Tablets.html">
						Tablets
					</a></li>
					<li><a href="parlantes.html">
						Parlantes
					</a></li>
					</a></li>
					<li><a href="audifonos.html">
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
			<li><a href="Productos_Cliente/cell/concel/con_redmi.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Celular Redmi 9T EUCarbon Gray</i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_Samsung.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Celular Samsung Galaxy A12 </i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_Xioami.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Celular Xiaomi Poco X3 PRO Phantom</i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_galaxy_S20.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Samsung Galaxy S20 FE Dual SIM</i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_G20.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Moto G20 Dual SIM</i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_G30.htm"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Moto G30 Dual SIM</i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_realme.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >ealme 6 Dual SIM</i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_galaxy_A32.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Samsung Galaxy A32 Dual SIM</i></a></li>
			<li><a href="Productos_Cliente/cell/concel/con_pocophone.html"><i class="fa-solid fa-magnifying-glass" ><img src="img/lupa2.png" alt="" >Xiaomi Pocophone Poco X3 Pro Dual SIM</i></a></li>
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
			<a href="#" class="category_item" category="all">Todo</a>
			<a href="#" class="category_item" category="Redmi">Redmi</a>
			<a href="#" class="category_item" category="Samsung">Samsung</a>
			<a href="#" class="category_item" category="Xiaomi">Xiaomi</a>
			<a href="#" class="category_item" category="Motorola">Motorola</a>

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
			<div class="item" category="Redmi" data-tags="4-Ram One 128_GB Snapdragon">
				<figure>
					<a href="Productos_Cliente/cell/concel/con_redmi.html">
					<img
						src="imagenes/productos/<?php echo$row['imagen']; ?>"
						alt="producto"
					/>
					</a>
				</figure>
				<div class="info-product">
					<h2><?php echo $row['nomProd']; ?></h2>
					<p class="price"><?php echo$row['precio'];?></p>
                    <p class="estado"><?php echo$row['estProd'];?></p>
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