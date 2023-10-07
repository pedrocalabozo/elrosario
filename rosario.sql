-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2023 a las 11:18:07
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `1er_ano`
--

CREATE TABLE `1er_ano` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `1er_ano`
--

INSERT INTO `1er_ano` (`ID`, `CEDULA`, `ANNO`) VALUES
(1, '33964361', 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1er_grado`
--

CREATE TABLE `1er_grado` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2do_ano`
--

CREATE TABLE `2do_ano` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2do_grado`
--

CREATE TABLE `2do_grado` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3er_ano`
--

CREATE TABLE `3er_ano` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `3er_ano`
--

INSERT INTO `3er_ano` (`ID`, `CEDULA`, `ANNO`) VALUES
(1, '243575678', 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3er_grado`
--

CREATE TABLE `3er_grado` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4to_ano`
--

CREATE TABLE `4to_ano` (
  `ID` int(11) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4to_grado`
--

CREATE TABLE `4to_grado` (
  `ID` int(11) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `4to_grado`
--

INSERT INTO `4to_grado` (`ID`, `CEDULA`, `ANNO`) VALUES
(4, '34309244', 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `5to_ano`
--

CREATE TABLE `5to_ano` (
  `ID` int(11) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `5to_ano`
--

INSERT INTO `5to_ano` (`ID`, `CEDULA`, `ANNO`) VALUES
(19, '273535644', 2022),
(20, '2147483647', 2022),
(21, '2147', 2022),
(22, '21476878', 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `5to_grado`
--

CREATE TABLE `5to_grado` (
  `ID` int(11) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `5to_grado`
--

INSERT INTO `5to_grado` (`ID`, `CEDULA`, `ANNO`) VALUES
(4, '11516383520', 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `6to_ano`
--

CREATE TABLE `6to_ano` (
  `ID` int(11) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `6to_grado`
--

CREATE TABLE `6to_grado` (
  `ID` int(11) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `NACIONALIDAD` varchar(5) NOT NULL,
  `TIPO_CI` varchar(5) NOT NULL,
  `APELLIDOS` varchar(50) NOT NULL,
  `NOMBRES` varchar(50) NOT NULL,
  `ACTIVO` varchar(10) NOT NULL,
  `NOMBRE_REPRECENTANTE` varchar(50) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL,
  `credito` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `CEDULA`, `NACIONALIDAD`, `TIPO_CI`, `APELLIDOS`, `NOMBRES`, `ACTIVO`, `NOMBRE_REPRECENTANTE`, `TELEFONO`, `credito`) VALUES
(27, '21476878', 'V', 'C.E', 'Campos Lopes', 'Estefany Alejand', 'si', 'Laura larel', '0424885', '9999'),
(31, '289786757', 'V', 'C.I', 'damaltes', 'carlos', 'si', 'dan', '876566568', '1111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ii_nivel_inicial`
--

CREATE TABLE `ii_nivel_inicial` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ii_nivel_inicial`
--

INSERT INTO `ii_nivel_inicial` (`ID`, `CEDULA`, `ANNO`) VALUES
(4, '868797979', 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_nivel_inicial`
--

CREATE TABLE `i_nivel_inicial` (
  `ID` int(20) NOT NULL,
  `CEDULA` varchar(40) NOT NULL,
  `ANNO` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `i_nivel_inicial`
--

INSERT INTO `i_nivel_inicial` (`ID`, `CEDULA`, `ANNO`) VALUES
(8, '27211330', ''),
(12, '567457865678', ' 2022'),
(13, '289786757', ' 2019');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `1er_ano`
--
ALTER TABLE `1er_ano`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `1er_grado`
--
ALTER TABLE `1er_grado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `2do_ano`
--
ALTER TABLE `2do_ano`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `2do_grado`
--
ALTER TABLE `2do_grado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `3er_ano`
--
ALTER TABLE `3er_ano`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `3er_grado`
--
ALTER TABLE `3er_grado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `4to_ano`
--
ALTER TABLE `4to_ano`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `4to_grado`
--
ALTER TABLE `4to_grado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `5to_ano`
--
ALTER TABLE `5to_ano`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `5to_grado`
--
ALTER TABLE `5to_grado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `6to_ano`
--
ALTER TABLE `6to_ano`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `6to_grado`
--
ALTER TABLE `6to_grado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- Indices de la tabla `ii_nivel_inicial`
--
ALTER TABLE `ii_nivel_inicial`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `i_nivel_inicial`
--
ALTER TABLE `i_nivel_inicial`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `1er_ano`
--
ALTER TABLE `1er_ano`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `1er_grado`
--
ALTER TABLE `1er_grado`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2do_ano`
--
ALTER TABLE `2do_ano`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2do_grado`
--
ALTER TABLE `2do_grado`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3er_ano`
--
ALTER TABLE `3er_ano`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `3er_grado`
--
ALTER TABLE `3er_grado`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4to_ano`
--
ALTER TABLE `4to_ano`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4to_grado`
--
ALTER TABLE `4to_grado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `5to_ano`
--
ALTER TABLE `5to_ano`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `5to_grado`
--
ALTER TABLE `5to_grado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `6to_ano`
--
ALTER TABLE `6to_ano`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `6to_grado`
--
ALTER TABLE `6to_grado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `ii_nivel_inicial`
--
ALTER TABLE `ii_nivel_inicial`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `i_nivel_inicial`
--
ALTER TABLE `i_nivel_inicial`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
