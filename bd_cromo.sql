-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2016 a las 18:39:28
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
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* Creacion de relaciones */;
alter table tbl_incidencias
  add constraint FK_usuincidencia foreign key (usu_id) 
  references tbl_usuarios(usu_id);

alter table tbl_reservas
  add constraint FK_usureserva foreign key (usu_id) 
  references tbl_usuarios(usu_id);

alter table tbl_detalles_reservas
  add constraint FK_reservadetalle foreign key (rec_id) 
  references tbl_recursos(rec_id);

alter table tbl_reservas
  add constraint FK_recursoreserva foreign key (rec_id) 
  references tbl_recursos(rec_id);

alter table tbl_incidencias
  add constraint FK_recuincidencia foreign key (rec_id) 
  references tbl_recursos(rec_id);

  -- Insertamos los datos de la bbdd
  INSERT INTO tbl_usuarios (usu_name,usu_pass) 
VALUES
("usuario1","usuario1");
INSERT INTO tbl_usuarios (usu_name,usu_pass) 
VALUES
("usuario2","usuario2");
INSERT INTO tbl_usuarios (usu_name,usu_pass) 
VALUES
("usuario3","usuario3");
INSERT INTO tbl_usuarios (usu_name,usu_pass) 
VALUES
("usuario4","usuario4");
INSERT INTO tbl_usuarios (usu_name,usu_pass) 
VALUES
("usuario5","usuario5");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Aula 1 Teoria","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Aula 2 Teoria","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Aula 3 Teoria","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Aula 4 Teoria","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Aula 1 Informatica","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Aula 2 Informatica","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Despacho 1 entrevista","1");


INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Despacho 2 entrevista","1");


INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Sala Reuniones","1");


INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Portatil 1","1");
INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Portatil 2","1");
INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Portatil 3","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Proyector","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Carro portatiles","1");

INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Movil 1","1");
INSERT INTO tbl_recursos (rec_name,rec_disp) 
VALUES
("Movil 2","1");