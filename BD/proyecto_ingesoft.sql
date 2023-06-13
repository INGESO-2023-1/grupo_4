-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 04:40:40
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
  `correo` varchar(64) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `telefono`, `correo`, `img`) VALUES
(11, 'Soldier Boy', '123', 56773, 'sb2@gmail.com', 'https://www.superherohype.com/wp-content/uploads/sites/4/2023/04/soldier-boy-jensen-ackles.jpg'),
(12, 'Itachi Uchiha', '321', 56773, 'itachi@usm.cl', 'https://w0.peakpx.com/wallpaper/805/458/HD-wallpaper-itachi-uchiha-naruto-art.jpg'),
(14, 'Patrick Bateman', '321', 34556, 'patbateman@usm.cl', 'https://i.pinimg.com/736x/a8/ff/c7/a8ffc79deae8646e4b40025be3937694.jpg'),
(15, 'Akira', 'akira', 5693457, 'akira@devilman.cl', 'https://i.pinimg.com/originals/11/3c/2b/113c2bd5ca3a0d29e6c639f2e1c6da02.jpg'),
(16, 'Ryo', 'ryo', 666, 'ryo@usm.cl', 'https://www.cultture.com/pics/2022/02/devilman-crybaby-10-veces-que-se-insinuo-la-verdadera-identidad-de-ryo-0.webp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
