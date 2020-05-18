-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2017 a las 03:06:32
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_equipame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prendas`
--

CREATE TABLE IF NOT EXISTS `tbl_prendas` (
  `id_prendas` int(11) NOT NULL,
  `nombre_prenda` varchar(45) NOT NULL,
  `clima` varchar(45) NOT NULL,
  `viaje` varchar(45) NOT NULL,
  `destino` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_prendas`
--

INSERT INTO `tbl_prendas` (`id_prendas`, `nombre_prenda`, `clima`, `viaje`, `destino`) VALUES
(29, 'Abrigo', 'Frío', 'Personal', 'Montaña'),
(34, 'Sandalias', 'Soleado', 'Turístico', 'Playa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_users` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `user`, `password`) VALUES
(1, 'xi', '12'),
(2, 'lore', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_prendas`
--
ALTER TABLE `tbl_prendas`
  ADD PRIMARY KEY (`id_prendas`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_prendas`
--
ALTER TABLE `tbl_prendas`
  MODIFY `id_prendas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
