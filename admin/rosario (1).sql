-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2022 a las 02:15:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rosario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1ro_grado`
--

CREATE TABLE `1ro_grado` (
  `ID` int(20) NOT NULL,
  `CEDULA` int(20) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `1ro_grado`
--

INSERT INTO `1ro_grado` (`ID`, `CEDULA`, `ANNO`) VALUES
(4, 25549789, 2022),
(5, 25549789, 2021),
(6, 25549789, 2003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2do_grado`
--

CREATE TABLE `2do_grado` (
  `ID` int(20) NOT NULL,
  `CEDULA` int(20) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3ro_grado`
--

CREATE TABLE `3ro_grado` (
  `ID` int(20) NOT NULL,
  `CEDULA` int(20) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `3ro_grado`
--

INSERT INTO `3ro_grado` (`ID`, `CEDULA`, `ANNO`) VALUES
(1, 25549789, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4to_grado`
--

CREATE TABLE `4to_grado` (
  `ID` int(11) NOT NULL,
  `CEDULA` int(11) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `5to_grado`
--

CREATE TABLE `5to_grado` (
  `ID` int(11) NOT NULL,
  `CEDULA` int(11) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `6to_grado`
--

CREATE TABLE `6to_grado` (
  `ID` int(11) NOT NULL,
  `CEDULA` int(11) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `6to_grado`
--

INSERT INTO `6to_grado` (`ID`, `CEDULA`, `ANNO`) VALUES
(1, 25549789, 2011);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(20) NOT NULL,
  `CEDULA` int(20) NOT NULL,
  `NACIONALIDAD` varchar(5) NOT NULL,
  `TIPO_CI` varchar(5) NOT NULL,
  `APELLIDOS` varchar(50) NOT NULL,
  `NOMBRES` varchar(50) NOT NULL,
  `ACTIVO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `CEDULA`, `NACIONALIDAD`, `TIPO_CI`, `APELLIDOS`, `NOMBRES`, `ACTIVO`) VALUES
(15, 25549789, 'V', 'C.I', 'oropeza armas', 'pedro miguelgg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id`, `nombre`, `apellido`, `cedula`, `estado`) VALUES
(1, 'PEDRO MIGUEL', 'OROPEZA ARMAS', '25549789', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `1ro_grado`
--
ALTER TABLE `1ro_grado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `2do_grado`
--
ALTER TABLE `2do_grado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `3ro_grado`
--
ALTER TABLE `3ro_grado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `4to_grado`
--
ALTER TABLE `4to_grado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `5to_grado`
--
ALTER TABLE `5to_grado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `6to_grado`
--
ALTER TABLE `6to_grado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `1ro_grado`
--
ALTER TABLE `1ro_grado`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `2do_grado`
--
ALTER TABLE `2do_grado`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3ro_grado`
--
ALTER TABLE `3ro_grado`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `4to_grado`
--
ALTER TABLE `4to_grado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `5to_grado`
--
ALTER TABLE `5to_grado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `6to_grado`
--
ALTER TABLE `6to_grado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
