-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 08:23:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `proyecto` varchar(90) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `partida` varchar(30) NOT NULL,
  `equipo` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `observaciones` varchar(1000) NOT NULL,
  `part` varchar(100) NOT NULL,
  `equi` varchar(1000) NOT NULL,
  `descrip` varchar(1000) NOT NULL,
  `observ` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `nombre`, `fecha`, `contacto`, `proyecto`, `direccion`, `correo`, `partida`, `equipo`, `descripcion`, `observaciones`, `part`, `equi`, `descrip`, `observ`) VALUES
(81, 'Pedro', '2023-04-02', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', ''),
(82, 'Juan', '2023-04-03', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', ''),
(83, 'Ivan', '2023-04-11', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', ''),
(84, 'Ivan', '2023-04-11', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', ''),
(85, 'Juan', '2023-04-03', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', ''),
(86, 'Federico', '2023-05-03', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', ''),
(87, 'Sanchez', '2023-04-19', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', ''),
(88, 'Federico', '2023-05-23', '5514928926', 'Cambio de balatas', 'Poniente 6', 'ivan_dulio@hotmail.c', '123', 'Maquina', 'Pesado', 'Algo se tiene que hacer', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `proveedor` varchar(50) NOT NULL,
  `monto` int(11) NOT NULL,
  `proyecto` varchar(100) NOT NULL,
  `nota` varchar(50) NOT NULL,
  `realizo` varchar(50) NOT NULL,
  `solicito` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `fecha`, `proveedor`, `monto`, `proyecto`, `nota`, `realizo`, `solicito`) VALUES
(1, '2023-05-24', 'IMCAMI', 12000, 'Balatas', 'Algo', 'estado_r', 'estado_s'),
(2, '2023-05-24', 'IMCAMI', 12000, 'Cambio de balatas', 'Algo', 'estado_r', 'estado_s'),
(3, '2023-05-24', 'IMCAMI', 12000, 'Cambio de balatas', 'Algo', 'estado_r', 'estado_s'),
(4, '2023-05-16', 'IMCAMI', 12000, 'Cambio de balatas', 'Algo', 'Carlos', 'Jorge'),
(5, '2023-05-16', 'IMCAMI', 12000, 'Cambio de balatas', 'Algo', 'Carlos', 'Jorge'),
(6, '2023-05-17', 'IMCAMI', 12000, 'Cambio de balatas', 'Algo', 'Carlos', 'Jorge'),
(7, '2023-05-30', 'IMCAMI', 12000, 'Balatas', 'Algo', 'Carlos', 'Jorge');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_proyectos`
--

CREATE TABLE `registro_proyectos` (
  `id` int(11) NOT NULL,
  `oc` int(11) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `nombre_proyecto` varchar(50) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `estado_proyecto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_proyectos`
--

INSERT INTO `registro_proyectos` (`id`, `oc`, `empresa`, `nombre_proyecto`, `complemento`, `estado_proyecto`) VALUES
(1, 12, 'IMCAMI', 'Afinacion de maquinas', '0', 'En proceso'),
(2, 12, 'IMCAMI', 'AADA', '0', 'En proceso'),
(3, 12, 'IMCAMI', 'AADA', '0', 'En proceso'),
(4, 12, 'IMCAMI', 'sdad', '0', 'En proceso'),
(5, 12, 'IMCAMI', 'sdad', '0', 'En proceso'),
(6, 12, 'IMCAMI', 'AADA', '0', 'En proceso'),
(7, 12, 'IMCAMI', 'AADA', '32', 'En proceso'),
(8, 12, 'IMCAMI', 'AADA', '33', 'En proceso'),
(9, 12, 'IMCAMI', 'Ivan', '0', 'En proceso'),
(10, 12, 'IMCAMI', 'AADA', 'Algo', 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(68, 'Ivan Alamos', 'ivan_dulio@hotmail.com', '12'),
(69, 'Ivan', 'ivan_dulio@hotmail.com', '12'),
(70, 'Ivan', 'ivan_dulio@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioclientes`
--

CREATE TABLE `usuarioclientes` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioclientes`
--

INSERT INTO `usuarioclientes` (`id`, `username`, `email`, `password`) VALUES
(1, 'Pepe', 'pep@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariopersonal`
--

CREATE TABLE `usuariopersonal` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariopersonal`
--

INSERT INTO `usuariopersonal` (`id`, `username`, `email`, `password`) VALUES
(1, 'Abraham', 'abrah@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Juan', 'juan@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Prueba', 'Prueb@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_proyectos`
--
ALTER TABLE `registro_proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarioclientes`
--
ALTER TABLE `usuarioclientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuariopersonal`
--
ALTER TABLE `usuariopersonal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registro_proyectos`
--
ALTER TABLE `registro_proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `usuarioclientes`
--
ALTER TABLE `usuarioclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuariopersonal`
--
ALTER TABLE `usuariopersonal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
