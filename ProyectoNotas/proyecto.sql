-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 20-11-2017 a las 06:02:09
=======
-- Tiempo de generación: 15-11-2017 a las 05:30:32
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(10) NOT NULL,
  `admin_nom` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_nom`) VALUES
(1, 'ozzill'),
(2, 'juan');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `tb_asignatura`
--

CREATE TABLE `tb_asignatura` (
  `asignatura_id` int(10) NOT NULL,
  `asignatura_nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `asignatura_desc` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_asignatura`
--

INSERT INTO `tb_asignatura` (`asignatura_id`, `asignatura_nombre`, `asignatura_desc`) VALUES
(1, 'Programacion', 'Te va a Doleeeeeer'),
(2, 'matematica', 'calculo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asig_estudiante`
--

CREATE TABLE `tb_asig_estudiante` (
  `asig_estudiante_id` int(10) NOT NULL,
  `estudiante_id` int(10) NOT NULL,
  `asignatura_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_asig_estudiante`
--

INSERT INTO `tb_asig_estudiante` (`asig_estudiante_id`, `estudiante_id`, `asignatura_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asig_nota`
--

CREATE TABLE `tb_asig_nota` (
  `asig_nota_id` int(1) NOT NULL,
  `asignatura_id` int(10) NOT NULL,
  `nota_id` int(10) NOT NULL,
  `estudiante_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_asig_nota`
--

INSERT INTO `tb_asig_nota` (`asig_nota_id`, `asignatura_id`, `nota_id`, `estudiante_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
=======
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- Estructura de tabla para la tabla `tb_ciudad`
--

CREATE TABLE `tb_ciudad` (
  `ciudad_id` int(10) NOT NULL,
  `ciudad_nom` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `pais_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_ciudad`
--

INSERT INTO `tb_ciudad` (`ciudad_id`, `ciudad_nom`, `pais_id`) VALUES
(1, 'cali', 0),
(2, 'medellin', 0),
(3, 'bogota', 0),
(4, 'neiva', 0),
(5, 'cartago', 0),
(6, 'popayan', 0),
(7, 'guachene', 0),
(8, 'santander', 0),
(9, 'yumbo', 0),
(10, 'palmira', 0),
(11, 'tulua', 0),
(12, 'jamundi', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estudiante`
--

CREATE TABLE `tb_estudiante` (
  `estudiante_id` int(10) NOT NULL,
<<<<<<< HEAD
  `estudiante_usu` int(11) NOT NULL,
  `estudiante_docu` int(11) NOT NULL,
  `estudiante_nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estudiante_ape` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estudiante_edad` int(2) NOT NULL,
  `estudiante_sexo` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estudiante_cor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_estudiante`
--

INSERT INTO `tb_estudiante` (`estudiante_id`, `estudiante_usu`, `estudiante_docu`, `estudiante_nom`, `estudiante_ape`, `estudiante_edad`, `estudiante_sexo`, `estudiante_cor`) VALUES
(2, 123456789, 123456789, 'San Jesus', 'Ayudame', 18, 'Masculino', 'chucho_crais@gmail.com');

=======
  `estudiante_nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_institucion`
--

CREATE TABLE `tb_institucion` (
  `institucion_id` int(10) NOT NULL,
  `institucion_nom` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `institucion_dir` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_institucion`
--

INSERT INTO `tb_institucion` (`institucion_id`, `institucion_nom`, `institucion_dir`, `ciudad_id`) VALUES
<<<<<<< HEAD
(1, 'centro colombiano fcecep', 'calle 8 # 45-67', 1),
(2, 'fu', 'f', 3),
(3, '2', 'ewe', 5),
(4, 'w', 'w', 1);
=======
(1, 'centro colombiano fcecep', 'calle 8 # 45-67', 1);
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(10) NOT NULL,
  `login_pass` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `login_nick` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
<<<<<<< HEAD
  `login_est` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `profesor_id` int(10) NOT NULL,
  `rol_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `estudiante_id` int(10) NOT NULL
=======
  `profesor_id` int(10) NOT NULL,
  `rol_id` int(10) NOT NULL,
  `login_est` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `admin_id` int(10) NOT NULL
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_login`
--

<<<<<<< HEAD
INSERT INTO `tb_login` (`login_id`, `login_pass`, `login_nick`, `login_est`, `profesor_id`, `rol_id`, `admin_id`, `estudiante_id`) VALUES
(2, 'alice', 'diego', 'activo', 1, 2, 0, 0),
(6, '123', 'admin', 'activo', 0, 1, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nota`
--

CREATE TABLE `tb_nota` (
  `nota_id` int(10) NOT NULL,
  `nota1` int(2) NOT NULL,
  `nota2` int(2) NOT NULL,
  `nota3` int(2) NOT NULL,
  `nota final` int(2) NOT NULL,
  `estudiante_id` int(10) NOT NULL,
  `asignatura_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_nota`
--

INSERT INTO `tb_nota` (`nota_id`, `nota1`, `nota2`, `nota3`, `nota final`, `estudiante_id`, `asignatura_id`) VALUES
(1, 4, 4, 5, 0, 1, 1);
=======
INSERT INTO `tb_login` (`login_id`, `login_pass`, `login_nick`, `profesor_id`, `rol_id`, `login_est`, `admin_id`) VALUES
(2, 'alice', 'diego', 1, 2, 'activo', 0),
(6, '123', 'admin', 0, 1, 'activo', 2);
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pais`
--

CREATE TABLE `tb_pais` (
  `pais_id` int(10) NOT NULL,
  `pais_nom` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `tb_pais`
--

INSERT INTO `tb_pais` (`pais_id`, `pais_nom`) VALUES
(1, 'Colombia');

=======
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_profesor`
--

CREATE TABLE `tb_profesor` (
  `profesor_id` int(10) NOT NULL,
  `profesor_nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `profesor_ape` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `profesor_edad` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `profesor_sexo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `profesor_cor` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
<<<<<<< HEAD
  `institucion_id` int(10) NOT NULL,
  `asignatura_id` int(10) NOT NULL
=======
  `institucion_id` int(10) NOT NULL
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_profesor`
--

<<<<<<< HEAD
INSERT INTO `tb_profesor` (`profesor_id`, `profesor_nom`, `profesor_ape`, `profesor_edad`, `profesor_sexo`, `profesor_cor`, `institucion_id`, `asignatura_id`) VALUES
(1, 'diego', 'solarte', '26', 'masculino', 'diego@gmail.com', 1, 2),
(5, 'diegoo', 'd', '', 'dasd', 'dsd', 0, 0),
(6, 'asdd', 'asdas', '', 'asdas', 'asdsad', 0, 0),
(7, 's', 's', '', 's', 's', 2, 0),
(8, 'sads', 's', '', 'sds', 's', 0, 1),
(9, 'dsad', 'asdas', '', 'asdasd', 'sadasd', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_prof_estudiante`
--

CREATE TABLE `tb_prof_estudiante` (
  `prof_estudiante_id` int(10) NOT NULL,
  `profesor_id` int(10) NOT NULL,
  `estudiante_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_prof_estudiante`
--

INSERT INTO `tb_prof_estudiante` (`prof_estudiante_id`, `profesor_id`, `estudiante_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_prof_institucion`
--

CREATE TABLE `tb_prof_institucion` (
  `prof_institucion_id` int(10) NOT NULL,
  `profesor_id` int(10) NOT NULL,
  `institucion_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_prof_institucion`
--

INSERT INTO `tb_prof_institucion` (`prof_institucion_id`, `profesor_id`, `institucion_id`) VALUES
(1, 1, 1);
=======
INSERT INTO `tb_profesor` (`profesor_id`, `profesor_nom`, `profesor_ape`, `profesor_edad`, `profesor_sexo`, `profesor_cor`, `institucion_id`) VALUES
(1, 'diego', 'solarte', '26', 'masculino', 'diego@gmail.com', 1),
(2, 'juan', 'campo', '23', 'femenino', 'juang@gmail.com', 1);
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rol`
--

CREATE TABLE `tb_rol` (
  `rol_id` int(10) NOT NULL,
  `rol_nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `rol_desc` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_rol`
--

INSERT INTO `tb_rol` (`rol_id`, `rol_nom`, `rol_desc`) VALUES
(1, 'admin', 'administrador'),
(2, 'profesor', 'gestion profesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
<<<<<<< HEAD
-- Indices de la tabla `tb_asignatura`
--
ALTER TABLE `tb_asignatura`
  ADD PRIMARY KEY (`asignatura_id`);

--
-- Indices de la tabla `tb_asig_estudiante`
--
ALTER TABLE `tb_asig_estudiante`
  ADD PRIMARY KEY (`asig_estudiante_id`);

--
-- Indices de la tabla `tb_asig_nota`
--
ALTER TABLE `tb_asig_nota`
  ADD PRIMARY KEY (`asig_nota_id`);

--
=======
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- Indices de la tabla `tb_ciudad`
--
ALTER TABLE `tb_ciudad`
  ADD PRIMARY KEY (`ciudad_id`);

--
-- Indices de la tabla `tb_estudiante`
--
ALTER TABLE `tb_estudiante`
  ADD PRIMARY KEY (`estudiante_id`);

--
-- Indices de la tabla `tb_institucion`
--
ALTER TABLE `tb_institucion`
  ADD PRIMARY KEY (`institucion_id`);

--
-- Indices de la tabla `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
<<<<<<< HEAD
-- Indices de la tabla `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`nota_id`);

--
=======
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- Indices de la tabla `tb_pais`
--
ALTER TABLE `tb_pais`
  ADD PRIMARY KEY (`pais_id`);

--
-- Indices de la tabla `tb_profesor`
--
ALTER TABLE `tb_profesor`
  ADD PRIMARY KEY (`profesor_id`);

--
<<<<<<< HEAD
-- Indices de la tabla `tb_prof_estudiante`
--
ALTER TABLE `tb_prof_estudiante`
  ADD PRIMARY KEY (`prof_estudiante_id`);

--
-- Indices de la tabla `tb_prof_institucion`
--
ALTER TABLE `tb_prof_institucion`
  ADD PRIMARY KEY (`prof_institucion_id`);

--
=======
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- Indices de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `tb_asignatura`
--
ALTER TABLE `tb_asignatura`
  MODIFY `asignatura_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_asig_estudiante`
--
ALTER TABLE `tb_asig_estudiante`
  MODIFY `asig_estudiante_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_asig_nota`
--
ALTER TABLE `tb_asig_nota`
  MODIFY `asig_nota_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
=======
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011
-- AUTO_INCREMENT de la tabla `tb_ciudad`
--
ALTER TABLE `tb_ciudad`
  MODIFY `ciudad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_estudiante`
--
ALTER TABLE `tb_estudiante`
<<<<<<< HEAD
  MODIFY `estudiante_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `estudiante_id` int(10) NOT NULL AUTO_INCREMENT;
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011

--
-- AUTO_INCREMENT de la tabla `tb_institucion`
--
ALTER TABLE `tb_institucion`
<<<<<<< HEAD
  MODIFY `institucion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `institucion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011

--
-- AUTO_INCREMENT de la tabla `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `nota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_pais`
--
ALTER TABLE `tb_pais`
  MODIFY `pais_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
-- AUTO_INCREMENT de la tabla `tb_pais`
--
ALTER TABLE `tb_pais`
  MODIFY `pais_id` int(10) NOT NULL AUTO_INCREMENT;
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011

--
-- AUTO_INCREMENT de la tabla `tb_profesor`
--
ALTER TABLE `tb_profesor`
<<<<<<< HEAD
  MODIFY `profesor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_prof_estudiante`
--
ALTER TABLE `tb_prof_estudiante`
  MODIFY `prof_estudiante_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_prof_institucion`
--
ALTER TABLE `tb_prof_institucion`
  MODIFY `prof_institucion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `profesor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> efa00dda032068d8613cf464f4c62e7a49918011

--
-- AUTO_INCREMENT de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  MODIFY `rol_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
