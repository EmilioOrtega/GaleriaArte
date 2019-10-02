-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2019 a las 07:41:58
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinateria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Whiskey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` bigint(20) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `producto` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `subtotal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `compras`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `compras` (
`no_compra` bigint(20)
,`usuario` varchar(30)
,`id` bigint(20)
,`producto` varchar(50)
,`contenido` int(11)
,`categoria` varchar(30)
,`precio` double
,`descripcion` varchar(100)
,`cantidad` int(11)
,`imagen` varchar(60)
,`descuento` double
,`marca` varchar(50)
,`origen` varchar(30)
,`fecha` datetime
,`cantidad_comprada` int(11)
,`total` double
,`subtotal` double
,`tarjeta` bigint(20)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `origen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `contenido` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `descuento` double DEFAULT NULL,
  `marca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `contenido`, `categoria`, `precio`, `descripcion`, `cantidad`, `imagen`, `descuento`, `marca`) VALUES
(1, 'Whiskey Jack Daniels Honey', 700, 1, 357.99, 'Jack Daniel´s Honey en busca de romper esquemas y de agregar a la tradición un toque de originalidad', 2, '1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `productos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `productos` (
`id` bigint(20)
,`producto` varchar(50)
,`contenido` int(11)
,`categoria` varchar(30)
,`precio` double
,`descripcion` varchar(100)
,`cantidad` int(11)
,`imagen` varchar(60)
,`descuento` double
,`marca` varchar(50)
,`origen` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefono` char(12) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_usuario` char(1) DEFAULT NULL,
  `tarjeta` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura para la vista `compras`
--
DROP TABLE IF EXISTS `compras`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `compras`  AS  select `compra`.`id` AS `no_compra`,`usuario`.`usuario` AS `usuario`,`productos`.`id` AS `id`,`productos`.`producto` AS `producto`,`productos`.`contenido` AS `contenido`,`productos`.`categoria` AS `categoria`,`productos`.`precio` AS `precio`,`productos`.`descripcion` AS `descripcion`,`productos`.`cantidad` AS `cantidad`,`productos`.`imagen` AS `imagen`,`productos`.`descuento` AS `descuento`,`productos`.`marca` AS `marca`,`productos`.`origen` AS `origen`,`compra`.`fecha` AS `fecha`,`compra`.`cantidad` AS `cantidad_comprada`,`compra`.`total` AS `total`,`compra`.`subtotal` AS `subtotal`,`usuario`.`tarjeta` AS `tarjeta` from ((`compra` join `usuario` on((`usuario`.`usuario` = `compra`.`usuario`))) join `productos` on((`compra`.`producto` = `productos`.`id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `productos`
--
DROP TABLE IF EXISTS `productos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productos`  AS  select `producto`.`id` AS `id`,`producto`.`nombre` AS `producto`,`producto`.`contenido` AS `contenido`,`categoria`.`nombre` AS `categoria`,`producto`.`precio` AS `precio`,`producto`.`descripcion` AS `descripcion`,`producto`.`cantidad` AS `cantidad`,`producto`.`imagen` AS `imagen`,`producto`.`descuento` AS `descuento`,`marca`.`nombre` AS `marca`,`marca`.`origen` AS `origen` from ((`producto` join `categoria` on((`producto`.`categoria` = `categoria`.`id`))) join `marca` on((`producto`.`marca` = `marca`.`id`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compra_ibfk_1` (`usuario`),
  ADD KEY `compra_ibfk_2` (`producto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_ibfk_1` (`categoria`),
  ADD KEY `producto_ibfk_2` (`marca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
