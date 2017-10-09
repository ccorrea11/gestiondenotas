-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2017 a las 01:45:56
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `asig_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asig_x_estu`
--

CREATE TABLE `asig_x_estu` (
  `id` int(11) NOT NULL,
  `asig_id` int(11) NOT NULL,
  `estu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `ciudad_id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `estu_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estu_x_institucion`
--

CREATE TABLE `estu_x_institucion` (
  `id` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL,
  `estu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estu_x_profesor`
--

CREATE TABLE `estu_x_profesor` (
  `id` int(11) NOT NULL,
  `prof_id` int(11) NOT NULL,
  `estu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `inst_id` int(11) NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `prof_id` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prof_x_institucion`
--

CREATE TABLE `prof_x_institucion` (
  `id` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL,
  `prof_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`asig_id`);

--
-- Indices de la tabla `asig_x_estu`
--
ALTER TABLE `asig_x_estu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asig_id` (`asig_id`),
  ADD KEY `estu_id` (`estu_id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`ciudad_id`),
  ADD KEY `pais_id` (`pais_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`estu_id`);

--
-- Indices de la tabla `estu_x_institucion`
--
ALTER TABLE `estu_x_institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inst_id` (`inst_id`),
  ADD KEY `estu_id` (`estu_id`);

--
-- Indices de la tabla `estu_x_profesor`
--
ALTER TABLE `estu_x_profesor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estu_id` (`estu_id`),
  ADD KEY `prof_id` (`prof_id`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`inst_id`),
  ADD KEY `ciudad_id` (`ciudad_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`pais_id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `inst_id` (`inst_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `prof_x_institucion`
--
ALTER TABLE `prof_x_institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inst_id` (`inst_id`),
  ADD KEY `prof_id` (`prof_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `asig_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asig_x_estu`
--
ALTER TABLE `asig_x_estu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `ciudad_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `estu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estu_x_institucion`
--
ALTER TABLE `estu_x_institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estu_x_profesor`
--
ALTER TABLE `estu_x_profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `pais_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prof_x_institucion`
--
ALTER TABLE `prof_x_institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asig_x_estu`
--
ALTER TABLE `asig_x_estu`
  ADD CONSTRAINT `asig_x_estu_ibfk_1` FOREIGN KEY (`asig_id`) REFERENCES `asignaturas` (`asig_id`),
  ADD CONSTRAINT `asig_x_estu_ibfk_2` FOREIGN KEY (`estu_id`) REFERENCES `estudiantes` (`estu_id`);

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`pais_id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`estu_id`) REFERENCES `usuarios` (`usu_id`);

--
-- Filtros para la tabla `estu_x_institucion`
--
ALTER TABLE `estu_x_institucion`
  ADD CONSTRAINT `estu_x_institucion_ibfk_1` FOREIGN KEY (`inst_id`) REFERENCES `instituciones` (`inst_id`),
  ADD CONSTRAINT `estu_x_institucion_ibfk_2` FOREIGN KEY (`estu_id`) REFERENCES `estudiantes` (`estu_id`);

--
-- Filtros para la tabla `estu_x_profesor`
--
ALTER TABLE `estu_x_profesor`
  ADD CONSTRAINT `estu_x_profesor_ibfk_1` FOREIGN KEY (`estu_id`) REFERENCES `estudiantes` (`estu_id`),
  ADD CONSTRAINT `estu_x_profesor_ibfk_2` FOREIGN KEY (`prof_id`) REFERENCES `profesores` (`prof_id`);

--
-- Filtros para la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD CONSTRAINT `instituciones_ibfk_1` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`ciudad_id`),
  ADD CONSTRAINT `instituciones_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`inst_id`) REFERENCES `instituciones` (`inst_id`),
  ADD CONSTRAINT `profesores_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`);

--
-- Filtros para la tabla `prof_x_institucion`
--
ALTER TABLE `prof_x_institucion`
  ADD CONSTRAINT `prof_x_institucion_ibfk_1` FOREIGN KEY (`inst_id`) REFERENCES `instituciones` (`inst_id`),
  ADD CONSTRAINT `prof_x_institucion_ibfk_2` FOREIGN KEY (`prof_id`) REFERENCES `profesores` (`prof_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
