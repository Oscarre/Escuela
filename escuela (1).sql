-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 03:55:24
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(75) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dui` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `genero` varchar(1) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `carnet` varchar(9) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `grado_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `nombre`, `apellido`, `dui`, `genero`, `carnet`, `grado_id`, `created_at`, `updated_at`) VALUES
(2, 'oscar', 'ramirez', '54654654', '1', 'u20151157', 2, '2020-11-24 08:57:37', '2020-11-17 08:57:37'),
(3, 'josefo', 'cartulina', '54654654', 'M', 'u20151154', 2, '2020-11-05 08:56:24', '2020-11-18 08:56:24'),
(4, 'mario', 'hernandez', '12255458', 'F', 'u20151159', 7, '2020-11-25 02:02:56', '2020-11-18 02:02:56'),
(5, 'tomas', 'edison', '54654654', 'M', 'u20151144', 6, '2020-11-05 08:56:24', '2020-11-18 08:56:24'),
(6, 'christian', 'gonzales', '12255458', 'M', 'u20151177', 6, '2020-11-25 02:02:56', '2020-11-18 02:02:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `grado` varchar(60) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `seccion` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profesor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `grado`, `seccion`, `created_at`, `updated_at`, `profesor_id`) VALUES
(2, '1', 'a', '2020-11-05 08:57:11', '2020-11-13 08:57:11', 1),
(3, '2', 'b', '2020-11-05 02:02:56', '2020-11-05 02:02:56', 4),
(4, '3', 'a', '2020-11-25 02:02:56', '2020-11-18 02:02:56', 6),
(5, '4', 'b', '2020-11-05 08:56:24', '2020-11-18 08:56:24', 6),
(6, '5', 'a', '2020-11-25 02:02:56', '2020-11-18 02:02:56', 5),
(7, '6', 'a', '2020-11-05 08:57:11', '2020-11-18 08:56:24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(75) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `profesion` varchar(3) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dui` varchar(10) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `nombre`, `apellido`, `profesion`, `telefono`, `dui`, `created_at`, `updated_at`) VALUES
(1, 'peudro', 'ruis', 'pro', '555521527', '5465465478', '2020-11-05 08:56:24', '2020-11-18 08:56:24'),
(2, 'jose', 'romero', 'pro', '555521528', '5465465478', NULL, NULL),
(4, 'maria', 'chele', 'pro', '555521528', '5465465478', NULL, NULL),
(5, 'maria', 'chele', 'pro', '555521528', '5465465478', NULL, NULL),
(6, 'jose', 'cantinflas', 'doc', '72330145', '05187767', '2020-11-11 02:01:39', '2020-11-18 02:01:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estudiante_grado1_idx` (`grado_id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grado_profesor_idx` (`profesor_id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_estudiante_grado1` FOREIGN KEY (`grado_id`) REFERENCES `grado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `fk_grado_profesor` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
