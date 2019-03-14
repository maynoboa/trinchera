-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 13:46:47
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pub`
--

CREATE TABLE `pub` (
  `id_pub` int(11) NOT NULL,
  `co_pub` varchar(256) DEFAULT NULL,
  `fe_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pub`
--

INSERT INTO `pub` (`id_pub`, `co_pub`, `fe_pub`, `id_usu`) VALUES
(1, 'Todos los dias llueve. Es triste.', '2019-02-28 19:43:44', 3),
(2, 'Azul petroleo', '2019-02-28 19:43:44', 4),
(3, 'Dia tramposo', '2019-02-28 19:43:44', 5),
(4, 'Los poetas caen del cielo', '2019-02-28 19:43:44', 6),
(5, 'Baños en el mar dulce', '2019-02-28 19:43:44', 7),
(6, 'Abrigate que el cielo aprieta', '2019-02-28 19:43:44', 3),
(7, 'Frena que llegamos tarde', '2019-02-28 19:43:44', 8),
(8, 'Espuma solida', '2019-02-28 19:43:44', 9),
(9, 'Ultimas palabras', '2019-02-28 19:43:44', 10),
(10, 'hola a todos', '2019-03-09 14:46:58', 3),
(11, 'hoy me levante tarde', '2019-03-09 15:18:57', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seg`
--

CREATE TABLE `seg` (
  `id_seg` int(11) NOT NULL,
  `id_us1` int(11) DEFAULT NULL,
  `id_us2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seg`
--

INSERT INTO `seg` (`id_seg`, `id_us1`, `id_us2`) VALUES
(43, 3, 9),
(48, 7, 9),
(51, 3, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu`
--

CREATE TABLE `usu` (
  `id_usu` int(11) NOT NULL,
  `no_usu` varchar(10) DEFAULT NULL,
  `co_usu` varchar(10) DEFAULT NULL,
  `cl_usu` varchar(10) DEFAULT NULL,
  `ni_usu` int(11) DEFAULT NULL,
  `es_usu` varchar(10) DEFAULT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usu`
--

INSERT INTO `usu` (`id_usu`, `no_usu`, `co_usu`, `cl_usu`, `ni_usu`, `es_usu`, `img`) VALUES
(1, 'Ana', 'u1', 'c1', 1, '1', ''),
(2, 'Luis', 'u2', 'c2', 1, '1', ''),
(3, 'Javier', 'u3', 'c3', 2, '1', 'img/cara2.gif'),
(4, 'Maria', 'u4', 'c4', 2, '1', 'img/cara3.gif'),
(5, 'Marta', 'u5', 'c5', 2, '0', 'img/cara4.gif'),
(6, 'Luis', 'u6', 'c6', 2, '1', 'img/cara5.gif'),
(7, 'Juan', 'u7', 'c7', 2, '1', 'img/cara6.gif'),
(8, 'Raul', 'u8', 'c8', 2, '1', 'img/cara7.gif'),
(9, 'Ana', 'u9', 'c9', 2, '1', 'img/cara8.gif'),
(10, 'Azucena', 'u10', 'c10', 2, '1', 'img/cara9.gif');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `seg`
--
ALTER TABLE `seg`
  ADD PRIMARY KEY (`id_seg`);

--
-- Indices de la tabla `usu`
--
ALTER TABLE `usu`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pub`
--
ALTER TABLE `pub`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `seg`
--
ALTER TABLE `seg`
  MODIFY `id_seg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `usu`
--
ALTER TABLE `usu`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
