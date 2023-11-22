-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 17:04:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnoventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdmin` int(11) NOT NULL,
  `nomAdmin` varchar(50) NOT NULL,
  `apeAdmin` varchar(50) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `correoAdmin` varchar(50) NOT NULL,
  `passAdmin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdmin`, `nomAdmin`, `apeAdmin`, `cargo`, `estado`, `correoAdmin`, `passAdmin`) VALUES
(1, 'Milena', 'Cortez', 'Programador', 'Activo', 'malienacortez@mail.com', '????JTi\\?&V]???'),
(2, 'Mario', 'Perdomo', 'Programador', 'Vacaciones', 'marioperdomo@gmail.com', '????JTi\\?&V]???'),
(3, 'Jeison', 'Mendoza', 'Desarrollador', 'Vacaciones', 'jeisonalejandro33@mail.com', '????JTi\\?&V]???');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `idCaract` int(11) NOT NULL,
  `nomCaract` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`idCaract`, `nomCaract`) VALUES
(1, 'Memoria Interna'),
(2, 'Memoria RAM'),
(3, 'Resolucion Camara Frontal'),
(4, 'Resolucion Camara Posterior'),
(5, 'Marca Procesador'),
(6, 'Sistema Operativo'),
(7, 'Version Sistema Operativo'),
(8, 'Nucleos del Procesador'),
(9, 'Tipo de Pantalla'),
(10, 'Resolucion Pantalla'),
(11, 'Tamaño Pantalla'),
(12, 'Capacidad Bateria'),
(13, 'Dual SIM'),
(14, 'Color'),
(15, 'Longitud Cable Cm'),
(16, 'Red Transmisión de Datos'),
(17, 'Cantidad Camaras Posteriores'),
(18, 'Resolucion Otras Camaras Posteriores'),
(19, 'Flash Posterior'),
(20, 'Flash Frontal'),
(21, 'Velocidad del Procesador'),
(22, 'Duracion Bateria'),
(23, 'Resolucion Camara Web'),
(24, 'No. Puertos HDMI'),
(25, 'No. Puertos USB'),
(26, 'No. Puertos USB Tipo C'),
(27, 'No. Puertos SD'),
(28, 'No. Salidas de Audio'),
(29, 'Tipos de Puertos'),
(30, 'Tipo de Discos que Incluye'),
(31, 'Capacidad de Disco'),
(32, 'Procesador'),
(33, 'Modelo Procesador'),
(34, 'Marca Tarjeta de Video/Grafica'),
(35, 'No. Puertos LAN Ethernet'),
(36, 'Nivel de uso'),
(37, 'Fuentes de Alimentacion de Energia'),
(38, 'Resistencia a'),
(39, 'Portabilidad'),
(40, 'Rango Bluetooth'),
(41, 'Opciones Conectividad'),
(42, 'Conexion'),
(43, 'Ancho en Cm'),
(44, 'Alto en Cm'),
(45, 'Fondo en Cm'),
(46, 'Caracteristicas Especiales'),
(47, 'Extra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `codigoCat` int(5) NOT NULL,
  `nombreCat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codigoCat`, `nombreCat`) VALUES
(1, 'Celulares'),
(2, 'Portatiles'),
(3, 'Computadores'),
(4, 'Tablets'),
(5, 'Audifonos'),
(6, 'Parlantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `numId` varchar(30) NOT NULL,
  `tipoId` varchar(2) NOT NULL,
  `nomCliente` varchar(50) NOT NULL,
  `apeCliente` varchar(50) NOT NULL,
  `fechaNac` date NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `passCliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `numId`, `tipoId`, `nomCliente`, `apeCliente`, `fechaNac`, `telefono`, `correo`, `passCliente`) VALUES
(1, '1021345619', 'CC', 'Marcela', 'Giraldo', '2000-03-16', '3460327599', 'marcela.gir2000@mail.com', 'rHS?N?AXV??>?f?'),
(2, '12567943', 'CE', 'Eduardo', 'Pedraza', '1989-09-23', '3505674391', 'eduardo_.pedraza89@mail.com', '????{???`?!?'),
(3, '1067318605', 'CC', 'Daniela', 'Ospina', '1996-07-19', '3108238816', 'daniiiops96.19@hmail.com', '\\?Y?????????'),
(4, '1021345619', 'CC', 'Carlos', 'Giraldo', '1900-01-26', '3126249176', 'carlitosgiraldo0016@mail.com', '1?B*13f??r???'),
(5, '98765432', 'CE', 'Paola', 'Suarez', '2001-11-20', '3402565601', 'paolasuarezzz2011@hmail.com', '???ږ\rc????`');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedidos`
--

CREATE TABLE `detallepedidos` (
  `idDetalle` int(11) NOT NULL,
  `codPedido` int(11) DEFAULT NULL,
  `codProd` int(11) DEFAULT NULL,
  `cantidadProd` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `detallepedidos`
--

INSERT INTO `detallepedidos` (`idDetalle`, `codPedido`, `codProd`, `cantidadProd`) VALUES
(1, 1, 3, 1),
(2, 3, 4, 1),
(3, 2, 5, 1),
(4, 4, 4, 1),
(5, 1, 2, 1),
(6, 4, 1, 1),
(7, 3, 2, 1),
(8, 5, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `codFactura` int(11) NOT NULL,
  `idProv` int(11) NOT NULL,
  `codProd` int(11) NOT NULL,
  `fechaFact` date NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `totalFact` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`codFactura`, `idProv`, `codProd`, `fechaFact`, `iva`, `totalFact`) VALUES
(1, 1, 1, '2022-01-10', 0.19, 773500),
(2, 3, 5, '2022-01-03', 0.19, 1904000),
(3, 2, 2, '2022-01-01', 0.19, 546210),
(4, 1, 4, '2021-02-15', 0.19, 357000),
(5, 4, 3, '2021-02-10', 0.19, 1910000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoproductos`
--

CREATE TABLE `infoproductos` (
  `idInfo` int(11) NOT NULL,
  `codProd` int(11) DEFAULT NULL,
  `idCaract` int(11) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `infoproductos`
--

INSERT INTO `infoproductos` (`idInfo`, `codProd`, `idCaract`, `valor`) VALUES
(1, 1, 16, '5G'),
(2, 1, 13, 'Si'),
(3, 1, 29, 'Tipo C'),
(4, 1, 3, '16Mpx'),
(5, 1, 17, '2'),
(6, 1, 4, '24Mpx'),
(7, 1, 18, '8Mpx + 2Mpx'),
(8, 1, 20, 'No'),
(9, 1, 19, 'Si'),
(10, 1, 1, '64GB'),
(11, 1, 2, '8GB'),
(12, 1, 5, 'Qualcomm'),
(13, 1, 6, 'Android'),
(14, 1, 7, 'Android 13'),
(15, 1, 8, '8'),
(16, 1, 21, '2,8GHz'),
(17, 1, 1, '64GB'),
(18, 1, 9, 'Amoled'),
(19, 1, 10, 'FHD+'),
(20, 1, 11, '6.67 Pulgadas'),
(21, 1, 12, '5000 mAh'),
(22, 1, 38, 'Agua y Polvo'),
(23, 1, 41, 'Bluetooth y WiFi'),
(24, 1, 47, 'Cable de cargador y adapatador'),
(25, 1, 46, 'Lector de huella'),
(26, 1, 37, 'Bateria Recargable Interna'),
(27, 1, 14, 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `codPedido` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `dirPedido` varchar(50) NOT NULL,
  `totalPedido` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`codPedido`, `idCliente`, `fechaPedido`, `horaPedido`, `dirPedido`, `totalPedido`) VALUES
(1, 1, '2023-11-18', '22:13:39', 'Calle 88C # 23D-10, Castilla, Piso 2', 2819000),
(2, 5, '2023-11-18', '22:42:00', 'Avenida 66 # 18B-14, San Luis', 1400000),
(3, 1, '2023-11-18', '22:48:04', 'Carrera 55D # 7B-10, Marsella, Torre 15 Apto 553', 3449000),
(4, 4, '2023-11-18', '23:00:18', 'Calle 6 # 27D-15, Veredas', 2168900),
(5, 2, '2023-11-22', '10:43:03', 'Calle 91 # 14C-20, San Mateo', 1999000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codProd` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `nomProd` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` double NOT NULL,
  `estProd` varchar(20) NOT NULL,
  `stockProd` int(15) DEFAULT NULL,
  `imagen` varchar(70) NOT NULL,
  `codigoCat` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codProd`, `idAdmin`, `nomProd`, `marca`, `precio`, `estProd`, `stockProd`, `imagen`, `codigoCat`) VALUES
(1, 1, 'Celular Redmi 9T EUCarbon', 'Redmi', 769900, 'Disponible', 13, 'redmicel.png', 1),
(2, 2, 'Samsung Galaxy A24', 'Samsung', 2050000, 'Disponible', 20, 'samsungA24cel.png', 1),
(3, 3, 'Moto G30 Dual SIM', 'Motorola', 769000, 'Disponible', 5, 'motorolag30cel.png', 1),
(4, 1, 'Portatil ASUS X415EA', 'Asus', 1399000, 'Disponible', 15, 'asusx415port.jpg', 2),
(5, 3, 'ACER 543K Pro', 'Acer', 1400000, 'Disponible', 10, 'acer543pro.png', 2),
(9, 1, 'Computador All In One Lenovo AIO 3', 'Lenovo', 1999000, 'Disponible', 5, 'AllInOneLenovoAio3.png', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProv` int(11) NOT NULL,
  `NIT` varchar(20) NOT NULL,
  `nomProv` varchar(50) NOT NULL,
  `correoProv` varchar(50) NOT NULL,
  `nomCont` varchar(50) NOT NULL,
  `apeCont` varchar(50) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telProv` varchar(30) NOT NULL,
  `paginaWeb` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProv`, `NIT`, `nomProv`, `correoProv`, `nomCont`, `apeCont`, `direccion`, `telProv`, `paginaWeb`) VALUES
(1, '830067394-6', 'Mercado Libre', 'mercadolibre.support@mail.com', 'Marcela', 'Perez', 'Cra 17 No. 93-09', '8391246', 'mercadolibre.com'),
(2, '890.900.943-1', 'Alkosto', 'clientealkosto@mail.com', 'Mateo', 'López', 'Ave Cra 30 #10-25', '7423014', 'alkosto.com'),
(3, '890900608-9', 'Exito', 'ayuda_exito@mail.com', 'Carlos', 'Contreras', 'Cra 86 #6-37', '4512957', 'exito.com'),
(4, '900.095.383-8', 'Falabella', 'ayuda.falabella@mail.com', 'Sandra', 'Ruiz', 'Cl 20 No. 82-52', '5678234', 'falabella.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`idCaract`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codigoCat`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `codPedido` (`codPedido`),
  ADD KEY `codProd` (`codProd`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`codFactura`),
  ADD KEY `idProv` (`idProv`),
  ADD KEY `codProd` (`codProd`);

--
-- Indices de la tabla `infoproductos`
--
ALTER TABLE `infoproductos`
  ADD PRIMARY KEY (`idInfo`),
  ADD KEY `codProd` (`codProd`),
  ADD KEY `idCaract` (`idCaract`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codPedido`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codProd`),
  ADD KEY `idAdmin` (`idAdmin`),
  ADD KEY `codigoCat` (`codigoCat`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProv`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `idCaract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `codFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `infoproductos`
--
ALTER TABLE `infoproductos`
  MODIFY `idInfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  ADD CONSTRAINT `detallepedidos_ibfk_1` FOREIGN KEY (`codPedido`) REFERENCES `pedidos` (`codPedido`),
  ADD CONSTRAINT `detallepedidos_ibfk_2` FOREIGN KEY (`codProd`) REFERENCES `productos` (`codProd`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idProv`) REFERENCES `proveedores` (`idProv`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`codProd`) REFERENCES `productos` (`codProd`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `infoproductos`
--
ALTER TABLE `infoproductos`
  ADD CONSTRAINT `infoproductos_ibfk_1` FOREIGN KEY (`codProd`) REFERENCES `productos` (`codProd`),
  ADD CONSTRAINT `infoproductos_ibfk_2` FOREIGN KEY (`idCaract`) REFERENCES `caracteristicas` (`idCaract`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `administradores` (`idAdmin`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`codigoCat`) REFERENCES `categorias` (`codigoCat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
