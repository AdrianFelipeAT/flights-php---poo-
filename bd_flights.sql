-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-11-2020 a las 05:59:16
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_flights`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `departureDate` varchar(200) NOT NULL,
  `departureStation` varchar(200) NOT NULL,
  `arrivalStation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flight`
--

INSERT INTO `flight` (`id`, `departureDate`, `departureStation`, `arrivalStation`) VALUES
(2, '2', '2', '2'),
(26, '2020-11-01T12:01:00', 'CTG', 'BOG'),
(27, '2020-11-01T17:51:00', 'PEI', 'CTG'),
(28, '2020-11-02T12:01:00', 'CTG', 'BOG'),
(29, '2020-11-02T17:51:00', 'PEI', 'CTG'),
(30, '2020-11-01T17:51:00', 'PEI', 'CTG'),
(31, '2020-11-01T15:57:00', 'BOG', 'PEI'),
(32, '2020-11-01T19:58:00', 'CTG', 'PEI'),
(33, '2020-11-01T09:37:00', 'BOG', 'CTG'),
(34, '2020-11-01T22:13:00', 'PEI', 'BOG'),
(35, '2020-11-01T12:01:00', 'CTG', 'BOG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
