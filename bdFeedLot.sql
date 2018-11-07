-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-11-2018 a las 16:11:18
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdFeedLot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Movimientos`
--

CREATE TABLE `Movimientos` (
  `idCorral` int(8) NOT NULL,
  `fecLectura` datetime NOT NULL,
  `tempBeb1` float NOT NULL,
  `tempBeb2` float NOT NULL,
  `pesoBeb1` float NOT NULL,
  `pesoBeb2` float NOT NULL,
  `pesoComida` float NOT NULL,
  `tipoAnimal` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechaVacunacion` date NOT NULL,
  `operador` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Movimientos`
--
ALTER TABLE `Movimientos`
  ADD PRIMARY KEY (`idCorral`,`fecLectura`),
  ADD KEY `Oper` (`operador`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD KEY `User` (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Movimientos`
--
ALTER TABLE `Movimientos`
  ADD CONSTRAINT `Movimientos_ibfk_1` FOREIGN KEY (`operador`) REFERENCES `Usuarios` (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
