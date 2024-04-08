<?php
require 'config/config.php';
require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT p.codProd, p.imagen, p.nomProd, p.precio, p.estProd, p.marca, p.stockProd, GROUP_CONCAT(i.valor SEPARATOR ' ') AS valores 
FROM productos p INNER JOIN infoproductos i ON p.codProd = i.codProd WHERE p.codigoCat = 4
GROUP BY p.codProd, p.imagen, p.nomProd, p.precio, p.estProd, p.marca, p.stockProd");$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<div class="head" id="siteHeader">
	<script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
	<script src="Productos_Cliente/cell/index.js"></script>
	<script src="Productos_Cliente/Tablest/ComparacionTablets.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/modalVideo.js"></script>

</div>
<body>
	<div class="head">
		<div class="logo">
		<a>TECNOVENTAS</a>
		</div>
		<nav class="navbar">
		<ul>
			<li><a href="cerrarSesion.php">Cerrar sesion</a></li>
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
			<img src="img/lupa.png" alt="" id="icon-search"></i>
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
		<link rel="website icon" type="png" href="imagenes/Tecnoventas.png">
		<link rel="stylesheet" href="Productos_Cliente/cell/styles.css" />
		<link rel="stylesheet" href="css/fitro.css">
		<link rel="stylesheet" href="css/estilocar.css">
		<link rel="stylesheet" href="css/buscadorcell.css">
		<link rel="stylesheet" href="css/modalVideo.css">
	</head>
	<body>
		<div class="container">
		<h1>Tienda</h1>
			<div calass="card-products-container" >
            <div class ="card-products" id="shopContent"> </div>
		</div>
		<div class="play" id="play" title="Como comparar productos?"><i class="fa fa-question"></i></div>
		<div class="popup-modal">
		<iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/5gw5FBE8YR0" frameborders="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div class="btn-cerrar">
				<span class="x1"></span>
				<span class="x2"></span>
			</div>
		</div>
			<div class="cart-btn" id="cart-btn"><a href="carrito/VerCarta.php" class="cart-link" title="Ver Carrito"><i class="fa fa-shopping-cart"></i></a></div>
			<br>
			<br>

		<div class="categoria_list" style="top: 100px" >
			<a class="category_item" category="all">Todo</a>
			<a class="category_item" category="Lenovo">Lenovo</a>
			<a class="category_item" category="Samsung">Samsung</a>
			<a class="category_item" category="Apple">Apple</a>
			<a class="category_item" category="TCL">TCL</a>

		</div>
		<div class="pro">
			<div class="filtro">
				<div class="h1">Filtro</div>
				<hr class="l1">
				<div class="h2">Memoria Ram</div>
				<hr class="l2">
				<div>
					<span class="tag">4GB</span>
					<span class="tag">2GB</span>
					<span class="tag">16GB</span>
					<span class="tag">8GB</span>
				</div>
				<div class="h2">Velocidad del Procesador</div>
				<hr class="l2">
				<div>
					<span class="tag">2GHz</span>
					<span class="tag">2.0GHz</span>
				</div>
				<div class="h2">Almacenamiento</div>
				<hr class="l2">
				<div>
					<span class="tag">32GB</span>
					<span class="tag">128GB</span>
					<span class="tag">256GB</span>
				</div>
				<div class="h2">Color</div>
				<hr class="l2">
				<div>
					<span class="tag">Gris</span>
					<span class="tag">Negro</span>
					<Span class="tag">Plateado</Span>
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
<?php
					if($row['stockProd'] > 0){
					echo '<button><a class="btn-add-cart" href="carrito/AccionCarta.php?action=addToCart&codProd=' . $row["codProd"] . '">Añadir al Carrito</a></button>';
					}else{
						echo "";
					}
					?>
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