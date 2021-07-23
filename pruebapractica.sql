-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2021 a las 01:30:54
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebapractica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `fecha_ingreso`, `nombre`, `salario`) VALUES
(3, '2021-07-23', 'Prueba nombre 1111', 111122222);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `resumen` varchar(50) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `codigo`, `descripcion`, `resumen`, `id_empleado`) VALUES
(1, '123', 'prueba descrip', 'prueba resum', 3),
(2, '12334', 'prueba descripsads', 'prueba resumasdas', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
