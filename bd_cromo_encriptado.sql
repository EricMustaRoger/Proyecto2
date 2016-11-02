-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2016 a las 20:41:22
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cromo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalles_reservas`
--

CREATE TABLE `tbl_detalles_reservas` (
  `det_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencias`
--

CREATE TABLE `tbl_incidencias` (
  `inc_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `inc_comentario` varchar(75) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recursos`
--

CREATE TABLE `tbl_recursos` (
  `rec_id` int(11) NOT NULL,
  `rec_name` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `rec_disp` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_recursos`
--

INSERT INTO `tbl_recursos` (`rec_id`, `rec_name`, `rec_disp`) VALUES
(4, 'Aula 1 Teoria', b'1'),
(5, 'Aula 2 Teoria', b'1'),
(6, 'Aula 3 Teoria', b'1'),
(7, 'Aula 4 Teoria', b'1'),
(8, 'Aula 1 Informat', b'1'),
(9, 'Aula 2 Informat', b'1'),
(10, 'Despacho 1 entr', b'1'),
(11, 'Despacho 2 entr', b'1'),
(12, 'Sala Reuniones', b'1'),
(13, 'Portatil 1', b'1'),
(14, 'Portatil 2', b'1'),
(15, 'Portatil 3', b'1'),
(16, 'Proyector', b'1'),
(17, 'Carro portatile', b'1'),
(18, 'Movil 1', b'1'),
(19, 'Movil 2', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservas`
--

CREATE TABLE `tbl_reservas` (
  `res_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `res_fechaini` datetime NOT NULL,
  `res_fechafin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_name` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usu_pass` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`usu_id`, `usu_name`, `usu_pass`) VALUES
(6, 'usu', '3c9909afec25354'),
(7, 'usu2', '3c9909afec25354'),
(8, 'usu3', '3c9909afec25354'),
(9, 'usu4', '3c9909afec25354'),
(10, 'usu5', '3c9909afec25354');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_detalles_reservas`
--
ALTER TABLE `tbl_detalles_reservas`
  ADD PRIMARY KEY (`det_id`);

--
-- Indices de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  ADD PRIMARY KEY (`inc_id`);

--
-- Indices de la tabla `tbl_recursos`
--
ALTER TABLE `tbl_recursos`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indices de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  ADD PRIMARY KEY (`res_id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_detalles_reservas`
--
ALTER TABLE `tbl_detalles_reservas`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_recursos`
--
ALTER TABLE `tbl_recursos`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
