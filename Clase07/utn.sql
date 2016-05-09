-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2016 a las 16:53:11
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `utn`
--
CREATE DATABASE IF NOT EXISTS `utn` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `utn`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE IF NOT EXISTS `componentes` (
`ID` int(10) unsigned NOT NULL,
  `CNOMBRE` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `COLOR` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `PESO` float NOT NULL,
  `CIUDAD` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `componentes`
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
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
`ID` int(10) unsigned NOT NULL,
  `PNOMBRE` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `CIUDAD` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ID`, `PNOMBRE`, `CIUDAD`) VALUES
(1, 'Carlos', 'Avellaneda'),
(2, 'Juan', 'Lanus'),
(3, 'Jose', 'Avellaneda'),
(4, 'Roberto', 'Avellaneda'),
(5, 'Rosa', 'Quilmes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
