-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 17:20:26
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdmin`, `nomAdmin`, `apeAdmin`, `cargo`, `estado`, `correoAdmin`, `passAdmin`) VALUES
(1, 'Milena', 'Cortez', 'Programador', 'Activo', 'malienacortez@mail.com', '????JTi\\?&V]???'),
(2, 'Mario', 'Perdomo', 'Programador', 'Vacaciones', 'marioperdomo@gmail.com', '????JTi\\?&V]???'),
(3, 'Jeison', 'Mendoza', 'Desarrollador', 'Vacaciones', 'jeisonalejandro33@mail.com', '????JTi\\?&V]???');

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
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `numId`, `tipoId`, `nomCliente`, `apeCliente`, `fechaNac`, `telefono`, `correo`, `contraseña`) VALUES
(1, '1021345619', 'CC', 'Marcela', 'Giraldo', '2000-03-16', '3460327599', 'marcela.gir2000@mail.com', 'rHS?N?AXV??>?f?'),
(2, '12567943', 'CE', 'Eduardo', 'Pedraza', '1989-09-23', '3505674391', 'eduardo_.pedraza89@mail.com', '????{???`?!?'),
(3, '1067318605', 'CC', 'Daniela', 'Ospina', '1996-07-19', '3108238816', 'daniiiops96.19@hmail.com', '\\?Y?????????'),
(4, '1021345619', 'CC', 'Carlos', 'Giraldo', '1900-01-26', '3126249176', 'carlitosgiraldo0016@mail.com', '1?B*13f??r???'),
(5, '98765432', 'CE', 'Paola', 'Suarez', '2001-11-20', '3402565601', 'paolasuarezzz2011@hmail.com', '???ږ\rc????`');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `codFactura` int(11) NOT NULL,
  `NIT` varchar(20) NOT NULL,
  `codProd` int(11) NOT NULL,
  `fechaFact` date NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `totalFact` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `codPedido` int(11) NOT NULL,
  `codProd` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `dirPedido` varchar(40) NOT NULL,
  `totalPedido` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `imagen` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codProd`, `idAdmin`, `nomProd`, `marca`, `precio`, `estProd`, `imagen`) VALUES
(1, 1, 'Celular Redmi 9T EUCarbon', 'Redmi', 769900, 'Disponible', 'redmicel.png'),
(2, 2, 'Samsung Galaxy A20', 'Samsung', 2050000, 'Disponible', 'samsungA20cel.png'),
(3, 3, 'Moto G30 Dual SIM', 'Motorola', 769000, 'Disponible', 'motorolag30cel.png'),
(4, 1, 'Portatil ASUS X415EA', 'ASUS', 1399000, 'Disponible', 'asusx415port.jpg'),
(5, 3, 'ACER 543K Pro', 'ACER', 1400000, 'Disponible', 'acer543pro.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `NIT` varchar(20) NOT NULL,
  `nomProv` varchar(50) NOT NULL,
  `correoProv` varchar(50) NOT NULL,
  `nomCont` varchar(50) NOT NULL,
  `apeCont` varchar(50) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telProv` varchar(30) NOT NULL,
  `paginaWeb` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`codFactura`),
  ADD KEY `NIT` (`NIT`),
  ADD KEY `codProd` (`codProd`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codPedido`),
  ADD KEY `codProd` (`codProd`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codProd`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`NIT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `codFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`NIT`) REFERENCES `proveedores` (`NIT`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`codProd`) REFERENCES `productos` (`codProd`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`codProd`) REFERENCES `productos` (`codProd`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `administradores` (`idAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
