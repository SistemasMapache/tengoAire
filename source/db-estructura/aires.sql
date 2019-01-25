-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Tiempo de generación: 25-01-2019 a las 15:04:02
-- Versión del servidor: 10.2.21-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestorwj_consumo_electrico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aires`
--

CREATE TABLE `aires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_declarado` timestamp NOT NULL DEFAULT current_timestamp(),
  `latitud` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `longitud` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cantidad_aires` int(3) NOT NULL,
  `categoria` int(11) NOT NULL,
  `geom` geometry NOT NULL,
  `ip` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


--
-- Indices de la tabla `aires`
--
ALTER TABLE `aires`
  ADD PRIMARY KEY (`id`,`cantidad_aires`);

--
-- AUTO_INCREMENT de la tabla `aires`
--
ALTER TABLE `aires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
