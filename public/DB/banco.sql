-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 07:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Table structure for table `tarjeta`
--

CREATE TABLE `tarjeta` (
  `tarjeta` bigint(20) NOT NULL,
  `saldo` double DEFAULT '0',
  `vencimiento` char(5) DEFAULT NULL,
  `CVC` tinyint(4) DEFAULT NULL,
  `titular` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarjeta`
--

INSERT INTO `tarjeta` (`tarjeta`, `saldo`, `vencimiento`, `CVC`, `titular`) VALUES
(878786787980078, 0, '71/10', 127, 'Álvaro Eduardo Palomera'),
(4512356435465421, 0, '20/20', 127, '?lvaro Misael Pintor Alcantar'),
(5676543567543567, 100, '20/10', 127, 'Sydney Alejandro Ayala Perez'),
(7384457359785487, 9999999, '14/50', 127, 'Emilio Alejandro Ortega Delgado'),
(9898484584579845, 0, '12/15', 127, 'Roberto Corona Criollo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`tarjeta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
