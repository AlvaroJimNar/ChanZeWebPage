-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2022 a las 21:48:01
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chanze`
--
CREATE DATABASE IF NOT EXISTS `chanze` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chanze`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `nombre` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`nombre`, `id`, `precio`, `imagen`) VALUES
('pokemon', 1, 2.5, 'estoesunaimagen'),
('genshin impact', 2, 5, 'imagengenshin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_usuario` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto`
--

CREATE TABLE `objeto` (
  `nombre` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `url_compra` varchar(255) NOT NULL,
  `id_caja` int(11) NOT NULL,
  `rareza` enum('comun','raro','epico','legendario') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `objeto`
--

INSERT INTO `objeto` (`nombre`, `id`, `precio`, `imagen`, `url_compra`, `id_caja`, `rareza`) VALUES
('llavero pikachu', 1, 3.5, 'imagen pokocho', 'https://es.aliexpress.com/item/1005003172536158.html?spm=a2g0o.search0302.0.0.39e640e01if7Jc&algo_pvid=92ca4b0a-cb2e-46a4-94ce-4112da705153&algo_exp_id=92ca4b0a-cb2e-46a4-94ce-4112da705153-13', 1, 'raro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `tlf` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `cartera` float NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `nickname`, `correo`, `tlf`, `direccion`, `cartera`, `password`) VALUES
(1, 'Alvaro', 'Rocket', 'rocketobrumbrum@rocketo.es', 111111111, 'c/Ejemplo, Ejemplo', 5, '1234'),
(2, 'Juan', 'Yei', 'jjaldoncanete@al.uloyola.es', 111111111, 'c/Loyola Sevilla, Sevilla, Andalucía, España', 10, '1234'),
(4, 'John', 'wanwan', 'wan@gmail.com', 111111111, 'wan wan awn', 0, '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD KEY `usuario` (`id_usuario`),
  ADD KEY `objeto` (`id_objeto`);

--
-- Indices de la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idc` (`id_caja`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `objeto` FOREIGN KEY (`id_objeto`) REFERENCES `objeto` (`id`),
  ADD CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD CONSTRAINT `idc` FOREIGN KEY (`id_caja`) REFERENCES `caja` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
