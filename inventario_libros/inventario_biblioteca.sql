-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-07-2023 a las 09:07:09
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `semestre` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`, `carrera`, `semestre`) VALUES
(1, 'franko', '', 'dsi', '1'),
(2, 'sd', 'sda', 'sa', 'dsa'),
(3, 'franko', 'ramos', 'enfermeria', '2'),
(4, 'royel', 'royel', 'mecanica', '1'),
(5, 'v', 'v', 'v', 'v'),
(6, 'w', 'q', 'w', 'w'),
(7, 'w', 'q', 'w', 'w'),
(8, 'franko', 'ramos liberato', 'dsi', 'aa'),
(9, 'franko', 'ramos liberato', 'dsi', 'v'),
(10, 'freddy', 'ramos liberato', 'dsi', 'v'),
(11, 'freddy', 'ramos liberato', 'dsi', 'v'),
(12, 'franklin', 'dela cruz', 'dsi', 'v'),
(13, 'jhonaa', 'chaname', 'dsi', 'v'),
(14, 'jhonaa', 'chaname', 'dsi', 'v'),
(15, 'franko', 'rr', '2', '2'),
(16, '2dwada', 'dwd', 'wad', '2'),
(17, '2dwada', 'dwd', 'wad', '2'),
(18, '2dwada', 'dwd', 'wad', '2'),
(19, '2dwada', 'dwd', 'wad', '2'),
(20, '2dwada', 'dwd', 'wad', '2'),
(21, '2dwada', 'dwd', 'wad', '2'),
(22, '2dwada', 'dwd', 'wad', '2'),
(23, '2dwada', 'dwd', 'wad', '2'),
(24, 'franko', 'rr', '2', '2'),
(25, 'franko', 'rr', '2', '2'),
(26, 'jhonatan', 'ramos', 'dfg', 'dfgd'),
(27, 'jhonaa', 'chaname', 'FD', 'FD'),
(28, 'franklin', 'dela cruz', 'SSDASDASD', 'SDASD'),
(29, '2dwada', 'dwd', 'wad', '2'),
(30, '2dwada', 'dwd', 'wad', '2'),
(41, 'franko', 'el dulce', 'dsi', 'enf'),
(42, 'lleon', 'quispe', 'dsi', 'v'),
(43, 'SW', 'WW', 'enfermeria', 'V-VI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_libro` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tomo` int(11) NOT NULL,
  `carrera` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `codigo`, `nombre_libro`, `autor`, `tomo`, `carrera`, `categoria`) VALUES
(9, 'enfe', 'ew', 'wweew', 0, 'wew', 'wew'),
(10, 'DSI-1', 'php', 'yo', 1, 'DSI', 'LIBRO'),
(12, '2321321', '3122', '322', 232, '322', '23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `nombre_alumno` int(254) NOT NULL,
  `nombre_libro` int(245) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_devolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `nombre_alumno`, `nombre_libro`, `fecha_prestamo`, `fecha_devolucion`) VALUES
(2, 1, 9, '2023-07-12', '2023-07-20'),
(6, 12, 9, '2023-07-12', '2023-07-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contraseña`) VALUES
(1, 'franko', 'franko', '12313'),
(2, 'fra', 'frank', 'hola'),
(3, 'royel', 'frank', '$2y$10$EypOwlba0caJC4x2FbTJ5ewCF4vj/cU.t1b5mhDaqqGhJorGwLcS.'),
(4, 'sa', 'as', '$2y$10$ic902d/jPSjZxZoMWyKEeeaPvQsy3SQuzbqMAWZMEB91TxeJW0iF6'),
(5, 'ss', 'ss', '$2y$05$5/D4VGPrCRkOBrZtC8XabuNdfGGQZVU3a9r/SE9YYS4Zxz8DmaROS'),
(7, 'qweqweq', 'Administrador', '$2y$05$9oi55Df8HF69nxVymjiHbO5uE1CTbmzwthL9ew1iqVR9btmENIt.K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `prestamos` (`nombre_alumno`),
  ADD KEY `prestamos1` (`nombre_libro`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos` FOREIGN KEY (`nombre_alumno`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `prestamos1` FOREIGN KEY (`nombre_libro`) REFERENCES `libro` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
