-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2023 a las 04:44:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_ingesoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `telefono`, `correo`) VALUES
(1, 'juan', '123', 45678, 'juan@usm.cl'),
(2, 'Alonso', '1234', 1234567, 'alonso@usm.cl'),
(3, 'pableke', '1234', 123456789, 'pablo@usm.cl'),
(4, 'Jose', '321', 5691245, 'jose@usm.cl'),
(5, 'Javier', '012', 34556, 'javi@gmail.com'),
(6, 'Javier', '012', 34556, 'javi@gmail.com'),
(7, 'Javier', '012', 34556, 'javi@gmail.com'),
(8, 'Javier', '012', 34556, 'javi@gmail.com'),
(9, 'Javier23', '012', 34556, 'javi@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
