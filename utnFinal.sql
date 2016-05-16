-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 04:03 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utn`
--
CREATE DATABASE IF NOT EXISTS `utn` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `utn`;

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `ID` int(11) NOT NULL,
  `TNOMBRE` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `TCIUDAD` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`ID`, `TNOMBRE`, `TCIUDAD`) VALUES
(1, 'Clasificadora', 'Lanus'),
(2, 'Perforadora', 'CABA'),
(3, 'Lectora', 'Quilmes'),
(4, 'Consola', 'Quilmes'),
(5, 'Mezcladora', 'Avellaneda'),
(6, 'Terminal', 'Balcarse'),
(7, 'Cinta', 'Avellaneda');

-- --------------------------------------------------------

--
-- Table structure for table `componentes`
--

CREATE TABLE `componentes` (
  `ID` int(10) UNSIGNED NOT NULL,
  `CNOMBRE` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `COLOR` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `PESO` float NOT NULL,
  `CIUDAD` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `componentes`
--

INSERT INTO `componentes` (`ID`, `CNOMBRE`, `COLOR`, `PESO`, `CIUDAD`) VALUES
(1, 'X3A', 'Rojo', 12, 'Avellaneda'),
(2, 'B85', 'Verde', 17, 'Lanus'),
(3, 'C4B', 'Azul', 17, 'CABA'),
(4, 'C4B', 'Rojo', 14, 'Avellaneda'),
(5, 'VT8', 'Azul', 12, 'Lanus'),
(6, 'C30', 'Rojo', 19, 'Avellaneda');

-- --------------------------------------------------------

--
-- Table structure for table `envios`
--

CREATE TABLE `envios` (
  `P` int(11) NOT NULL,
  `C` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `envios`
--

INSERT INTO `envios` (`P`, `C`, `A`, `CANTIDAD`) VALUES
(1, 1, 1, 200),
(1, 1, 4, 700),
(2, 3, 1, 400),
(2, 3, 2, 200),
(2, 3, 3, 200),
(2, 3, 4, 500),
(2, 3, 5, 600),
(2, 3, 6, 400),
(2, 3, 7, 800),
(2, 5, 2, 100),
(3, 3, 1, 200),
(3, 4, 2, 500),
(4, 6, 3, 300),
(4, 6, 7, 300),
(5, 1, 4, 100),
(5, 2, 2, 200),
(5, 2, 4, 100),
(5, 3, 4, 200),
(5, 4, 4, 800),
(5, 5, 4, 500),
(5, 5, 5, 400),
(5, 5, 7, 100),
(5, 6, 2, 200),
(5, 6, 4, 500);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PNOMBRE` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `CIUDAD` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`ID`, `PNOMBRE`, `CIUDAD`) VALUES
(1, 'Carlos', 'Avellaneda'),
(2, 'Juan', 'Lanus'),
(3, 'Jose', 'Avellaneda'),
(4, 'Roberto', 'Avellaneda'),
(5, 'Rosa', 'Quilmes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`P`,`C`,`A`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `componentes`
--
ALTER TABLE `componentes`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
