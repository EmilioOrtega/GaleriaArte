-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 05:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinateriadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compra`
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
-- Stand-in structure for view `compras`
-- (See below for the actual view)
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
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `origen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
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

-- --------------------------------------------------------

--
-- Stand-in structure for view `productos`
-- (See below for the actual view)
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
-- Table structure for table `tarjeta`
--

CREATE TABLE `tarjeta` (
  `tarjeta` bigint(20) NOT NULL,
  `saldo` double DEFAULT NULL,
  `vencimiento` char(5) DEFAULT NULL,
  `cvc` tinyint(4) DEFAULT NULL,
  `titular` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
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
-- Structure for view `compras`
--
DROP TABLE IF EXISTS `compras`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `compras`  AS  select `compra`.`id` AS `no_compra`,`usuario`.`usuario` AS `usuario`,`productos`.`id` AS `id`,`productos`.`producto` AS `producto`,`productos`.`contenido` AS `contenido`,`productos`.`categoria` AS `categoria`,`productos`.`precio` AS `precio`,`productos`.`descripcion` AS `descripcion`,`productos`.`cantidad` AS `cantidad`,`productos`.`imagen` AS `imagen`,`productos`.`descuento` AS `descuento`,`productos`.`marca` AS `marca`,`productos`.`origen` AS `origen`,`compra`.`fecha` AS `fecha`,`compra`.`cantidad` AS `cantidad_comprada`,`compra`.`total` AS `total`,`compra`.`subtotal` AS `subtotal`,`usuario`.`tarjeta` AS `tarjeta` from ((`compra` join `usuario` on((`usuario`.`usuario` = `compra`.`usuario`))) join `productos` on((`compra`.`producto` = `productos`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `productos`
--
DROP TABLE IF EXISTS `productos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productos`  AS  select `producto`.`id` AS `id`,`producto`.`nombre` AS `producto`,`producto`.`contenido` AS `contenido`,`categoria`.`nombre` AS `categoria`,`producto`.`precio` AS `precio`,`producto`.`descripcion` AS `descripcion`,`producto`.`cantidad` AS `cantidad`,`producto`.`imagen` AS `imagen`,`producto`.`descuento` AS `descuento`,`marca`.`nombre` AS `marca`,`marca`.`origen` AS `origen` from ((`producto` join `categoria` on((`producto`.`categoria` = `categoria`.`id`))) join `marca` on((`producto`.`marca` = `marca`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compra_ibfk_1` (`usuario`),
  ADD KEY `compra_ibfk_2` (`producto`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_ibfk_1` (`categoria`),
  ADD KEY `producto_ibfk_2` (`marca`);

--
-- Indexes for table `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`tarjeta`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `usuario_ibfk_1` (`tarjeta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `tarjeta` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tarjeta`) REFERENCES `tarjeta` (`tarjeta`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
