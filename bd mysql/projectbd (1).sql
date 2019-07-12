-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2019 a las 00:29:09
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projectbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registeradmin`
--

CREATE TABLE `registeradmin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usertype` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registeradmin`
--

INSERT INTO `registeradmin` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'gan0197 ', 'gnavarro0197@gmail.com', 'Guille0197', 'admin'),
(3, 'miguel angel cedeÃ±o', 'miguel@email.com', '123', 'admin'),
(5, '1', 'info@boixys.com', '1', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `numerid` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `department` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usertype` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `image_teachers` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `numerid`, `email`, `username`, `phone`, `department`, `gender`, `password`, `description`, `usertype`, `image_teachers`) VALUES
(1, 'Juan Carlos Perez', '6-507-0123', 'jcperez@gmail.com', 'jcarlospe', 66006600, 'EspaÃ±ol', 'Masculino', '123', 'hola nuevo profesor de espaÃ±ol', 'teachers', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registeradmin`
--
ALTER TABLE `registeradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registeradmin`
--
ALTER TABLE `registeradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
