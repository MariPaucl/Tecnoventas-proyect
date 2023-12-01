-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-12-2023 a las 04:13:35
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

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

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `nomAdmin` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apeAdmin` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cargo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correoAdmin` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `passAdmin` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdmin`, `nomAdmin`, `apeAdmin`, `cargo`, `estado`, `correoAdmin`, `passAdmin`) VALUES
(1, 'Milena', 'Cortez', 'Programador', 'Activo', 'malienacortez@mail.com', 'AdminMile2023'),
(2, 'Mario', 'Perdomo', 'Programador', 'Activo', 'marioperdomo@gmail.com', 'MarioProgram2'),
(3, 'Jeison', 'Mendoza', 'Desarrollador', 'Activo', 'jeisonalejandro33@mail.com', 'Je1s0nDesarrolla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

DROP TABLE IF EXISTS `caracteristicas`;
CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `idCaract` int NOT NULL AUTO_INCREMENT,
  `nomCaract` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idCaract`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `codigoCat` int NOT NULL,
  `nombreCat` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`codigoCat`)
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

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `numId` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipoId` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nomCliente` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apeCliente` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `passCliente` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `numId`, `tipoId`, `nomCliente`, `apeCliente`, `fechaNac`, `telefono`, `correo`, `passCliente`) VALUES
(1, '1021345619', 'CC', 'Marcela', 'Giraldo', '2000-03-16', '3460327599', 'marcela.gir2000@mail.com', 'marcela.gir2000'),
(2, '12567943', 'CE', 'Eduardo', 'Pedraza', '1989-09-23', '3505674391', 'eduardo_.pedraza89@mail.com', 'eduardo_.pedraza89'),
(3, '1067318605', 'CC', 'Daniela', 'Ospina', '1996-07-19', '3108238816', 'daniiiops96.19@hmail.com', 'daniiiops96.19'),
(4, '1021345619', 'CC', 'Carlos', 'Giraldo', '1900-01-26', '3126249176', 'carlitosgiraldo0016@mail.com', 'carlitosgiraldo0016'),
(5, '98765432', 'CE', 'Paola', 'Suarez', '2001-11-20', '3402565601', 'paolasuarezzz2011@hmail.com', 'paolasuarezzz2011'),
(6, '1021313246', 'CC', 'Paula', 'Lopez', '2005-11-23', '3504160020', 'mapis2005@gmail.com', '033efbc62cfb3015ad654b1d499f1ea0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedidos`
--

DROP TABLE IF EXISTS `detallepedidos`;
CREATE TABLE IF NOT EXISTS `detallepedidos` (
  `idDetalle` int NOT NULL AUTO_INCREMENT,
  `codPedido` int DEFAULT NULL,
  `codProd` int DEFAULT NULL,
  `cantidadProd` int DEFAULT NULL,
  PRIMARY KEY (`idDetalle`),
  KEY `codPedido` (`codPedido`),
  KEY `codProd` (`codProd`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
(8, 5, 9, 1),
(9, 6, 9, 1),
(10, 2, 1, 2),
(11, 3, 2, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `codFactura` int NOT NULL AUTO_INCREMENT,
  `idProv` int NOT NULL,
  `codProd` int NOT NULL,
  `fechaFact` date NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `totalFact` double NOT NULL,
  PRIMARY KEY (`codFactura`),
  KEY `idProv` (`idProv`),
  KEY `codProd` (`codProd`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`codFactura`, `idProv`, `codProd`, `fechaFact`, `iva`, `totalFact`) VALUES
(1, 1, 1, '2022-01-10', '0.19', 773500),
(2, 3, 5, '2022-01-03', '0.19', 1904000),
(3, 2, 2, '2022-01-01', '0.19', 546210),
(4, 1, 4, '2021-02-15', '0.19', 357000),
(5, 4, 3, '2021-02-10', '0.19', 1910000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoproductos`
--

DROP TABLE IF EXISTS `infoproductos`;
CREATE TABLE IF NOT EXISTS `infoproductos` (
  `idInfo` int NOT NULL AUTO_INCREMENT,
  `codProd` int DEFAULT NULL,
  `idCaract` int DEFAULT NULL,
  `valor` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idInfo`),
  KEY `codProd` (`codProd`),
  KEY `idCaract` (`idCaract`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `infoproductos`
--

INSERT INTO `infoproductos` (`idInfo`, `codProd`, `idCaract`, `valor`) VALUES
(1, 1, 16, '5G'),
(2, 1, 13, 'Si'),
(3, 1, 29, 'Tipo C'),
(4, 1, 3, '16Mpx'),
(5, 1, 17, '2'),
(6, 1, 4, '32 Mpx'),
(7, 1, 18, '8Mpx + 2Mpx'),
(8, 1, 20, 'No'),
(9, 1, 19, 'Si'),
(10, 1, 1, '64GB'),
(11, 1, 2, '4GB'),
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
(27, 1, 14, 'Negro'),
(28, 2, 16, '4G'),
(29, 2, 13, 'Si'),
(30, 2, 29, 'Tipo C'),
(31, 2, 3, '13Mpx'),
(32, 2, 17, '2'),
(33, 2, 4, '50Mpx'),
(34, 2, 18, '5Mpx+2Mpx'),
(35, 2, 20, 'No'),
(36, 2, 19, 'Si'),
(37, 2, 1, '128GB'),
(38, 2, 2, '4GB'),
(39, 2, 5, 'Mediatek'),
(40, 2, 6, 'Android'),
(41, 2, 7, 'Android 13'),
(42, 2, 8, '8'),
(43, 2, 21, '2.2GHz,2GHz'),
(44, 2, 9, 'Super Amoled'),
(45, 2, 10, 'FHD+'),
(46, 2, 11, '6.6  Pulgadas'),
(47, 2, 12, '5000 mAh'),
(48, 2, 38, 'NA'),
(49, 2, 41, 'Bluetooth, USB y WiFi'),
(50, 2, 47, 'Incluye Cable USB, Pin Ejección '),
(51, 2, 46, 'Lector de huella'),
(52, 2, 37, 'Bateria Recargable Interna'),
(53, 2, 14, 'Negro'),
(54, 3, 16, '4G'),
(55, 3, 13, 'No'),
(56, 3, 29, 'Tipo C'),
(57, 3, 3, '13Mpx'),
(58, 3, 17, '3'),
(59, 3, 4, '64Mpx'),
(60, 3, 18, '8Mpx+2Mpx+2Mpx'),
(61, 3, 20, 'No'),
(62, 3, 19, 'Si'),
(63, 3, 1, '128GB'),
(64, 3, 2, '4GB'),
(65, 3, 5, 'Snapdragon 662'),
(66, 3, 6, 'Android'),
(67, 3, 7, 'Android 12'),
(68, 3, 8, '8'),
(69, 3, 21, '2.2GHz,2GHz'),
(70, 3, 9, 'Super Amoled'),
(71, 3, 10, 'Full HD'),
(72, 3, 11, '6.6  Pulgadas'),
(73, 3, 12, '5000 mAh'),
(74, 3, 38, 'NA'),
(75, 3, 41, 'Bluetooth, USB y WiFi'),
(76, 3, 47, 'Incluye Cable USB, Adaptador carga '),
(77, 3, 46, 'Lector de huella'),
(78, 3, 37, 'Bateria Recargable Interna'),
(79, 3, 14, 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `codPedido` int NOT NULL AUTO_INCREMENT,
  `idCliente` int NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `dirPedido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `totalPedido` double NOT NULL,
  PRIMARY KEY (`codPedido`),
  KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`codPedido`, `idCliente`, `fechaPedido`, `horaPedido`, `dirPedido`, `totalPedido`) VALUES
(1, 1, '2023-11-18', '22:13:39', 'Calle 88C # 23D-10, Castilla, Piso 2', 2819000),
(2, 5, '2023-11-18', '22:42:00', 'Avenida 66 # 18B-14, San Luis', 1400000),
(3, 1, '2023-11-18', '22:48:04', 'Carrera 55D # 7B-10, Marsella, Torre 15 Apto 553', 3449000),
(4, 4, '2023-11-18', '23:00:18', 'Calle 6 # 27D-15, Veredas', 2168900),
(5, 2, '2023-11-22', '10:43:03', 'Calle 91 # 14C-20, San Mateo', 1999000),
(6, 2, '2023-11-22', '16:38:06', 'Calle 52D # 11B-20, Santa Isabel, Edificio 3', 1507160),
(7, 3, '2023-11-24', '11:31:49', 'Calle 87B # 10B-20, San Mateo, Torre 15 Apto 553', 149205),
(8, 4, '2023-11-29', '11:58:40', 'Calle 88A # 5D-15, Marsella', 1638393),
(9, 5, '2023-11-29', '12:06:09', 'Calle 61D # 6D-20, Tintal', 1638393),
(10, 3, '2023-11-29', '14:32:14', 'Calle 23B # 10C-2, Tintal', 882291),
(11, 3, '2023-11-29', '15:09:01', 'Avenida 61D # 23D-19, Villa', 1424263),
(12, 4, '2023-11-29', '15:09:37', 'Avenida 61D # 23D-19, Villa', 281917);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `codProd` int NOT NULL AUTO_INCREMENT,
  `idAdmin` int NOT NULL,
  `nomProd` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `estProd` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `stockProd` int DEFAULT NULL,
  `imagen` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigoCat` int DEFAULT NULL,
  PRIMARY KEY (`codProd`),
  KEY `idAdmin` (`idAdmin`),
  KEY `codigoCat` (`codigoCat`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codProd`, `idAdmin`, `nomProd`, `marca`, `precio`, `estProd`, `stockProd`, `imagen`, `codigoCat`) VALUES
(1, 1, 'Celular Redmi 9T EUCarbon', 'Redmi', 769900, 'Disponible', 11, 'redmicel.png', 1),
(2, 2, 'Samsung Galaxy A24', 'Samsung', 2050000, 'Agotado', 0, 'samsungA24cel.png', 1),
(3, 3, 'Moto G30 Dual SIM', 'Motorola', 769000, 'Disponible', 5, 'motorolag30cel.png', 1),
(4, 1, 'Portatil ASUS X415EA', 'Asus', 1399000, 'Disponible', 15, 'asusx415port.png', 2),
(5, 3, 'Portatil Acer A315', 'Acer', 1299000, 'Disponible', 10, 'acerA315.png', 2),
(9, 1, 'Computador All In One Lenovo AIO 3', 'Lenovo', 1999000, 'Disponible', 5, 'AllInOneLenovoAio3.png', 3),
(11, 1, 'Tablet Samsung A8', 'Samsung', 799900, 'Disponible', 20, 'tabletsamsungA8.png', 4),
(12, 2, 'Audifonos Sony In Ear WFC700N', 'Sony', 290000, 'Disponible', 10, 'audifonosSonyInEarWFC700N.png', 5),
(13, 2, 'Parlante Sonos Era 300', 'Sonos', 590000, 'Disponible', 15, 'parlanteSonosEra300.png', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `idProv` int NOT NULL AUTO_INCREMENT,
  `NIT` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nomProv` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correoProv` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nomCont` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apeCont` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telProv` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `paginaWeb` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`idProv`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProv`, `NIT`, `nomProv`, `correoProv`, `nomCont`, `apeCont`, `direccion`, `telProv`, `paginaWeb`) VALUES
(1, '830067394-6', 'Mercado Libre', 'mercadolibre.support@mail.com', 'Marcela', 'Perez', 'Cra 17 No. 93-09', '8391246', 'mercadolibre.com'),
(2, '890.900.943-1', 'Alkosto', 'clientealkosto@mail.com', 'Mateo', 'López', 'Ave Cra 30 #10-25', '7423014', 'alkosto.com'),
(3, '890900608-9', 'Exito', 'ayuda_exito@mail.com', 'Carlos', 'Contreras', 'Cra 86 #6-37', '4512957', 'exito.com'),
(4, '900.095.383-8', 'Falabella', 'ayuda.falabella@mail.com', 'Sandra', 'Ruiz', 'Cl 20 No. 82-52', '5678234', 'falabella.com');

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
