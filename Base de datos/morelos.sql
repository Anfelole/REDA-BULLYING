-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2021 a las 04:43:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `morelos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `correo`, `password`) VALUES
(3, 'o', 'o', 'o', 'o', '7a81af3e591ac713f81ea1efe93dcf36157d8376'),
(4, 'P', 'P', 'P', 'P', '511993d3c99719e38a6779073019dacd7178ddb9'),
(5, 'M', 'M', 'M', 'M', 'c63ae6dd4fc9f9dda66970e827d13f7c73fe841c'),
(6, 'O', 'O', 'O', 'O', '08a914cde05039694ef0194d9ee79ff9a79dde33'),
(7, 'Chango', 'Msks', 'Chango', 'martha.medina147@gmail.com', '839b4e4b5fa8ac1b3fa19d846d77f98d1865c614'),
(8, 'Puta isai', 'Zorra caca', 'Pirujabarata ', 'Paloma@gmail.com', '41b956a925fd0681da90193ad3d1f1ee3c5452d8'),
(9, 'O', 'O', 'M', 'O', '08a914cde05039694ef0194d9ee79ff9a79dde33'),
(10, 'p', 'p', 'p', 'p', '516b9783fca517eecbd1d064da2d165310b19759'),
(11, 'l', 'l', 'l', 'l', '07c342be6e560e7f43842e2e21b774e61d85f047'),
(12, 'b', 'b', 'b', 'b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98'),
(13, 'mariox', 'medina', 'mario20', 'equipo.mario@gmail.com', 'addb47291ee169f330801ce73520b96f2eaf20ea'),
(14, 'a', 'a', 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(15, 'Mario medina', 'Medina lucero', 'Mario10', 'Equipo@gmail.com', '8e7d820ad9d3323edb541a72da4912148cb9c0c2'),
(16, 'irma', 'lucero flores', 'irmalufis', 'irmalufis@gmail.com', '1ee45963f88bffe8b8167f75c4e4c90700a8d712'),
(17, 's', 's', 's', 's', 'a0f1490a20d0211c997b44bc357e1972deab8ae3'),
(18, 'L', 'L', 'L', 'L', 'd160e0986aca4714714a16f29ec605af90be704d'),
(19, 'medina', 'romero', 'rome1', 'mario', 'addb47291ee169f330801ce73520b96f2eaf20ea'),
(20, 'as', 'as', 'as', 'as', 'df211ccdd94a63e0bcb9e6ae427a249484a49d60');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
