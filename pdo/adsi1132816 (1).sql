-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2017 a las 03:06:34
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi1132816`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(128) NOT NULL DEFAULT 'public/imgs/articles/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `precio`, `imagen`) VALUES
(1, 'Nintendo Switch', 1699000, 'public/imgs/articles/default.png'),
(2, 'Lavadora Mabe', 2400000, 'public/imgs/articles/default.png'),
(3, 'Tablet Samsung', 900000, 'public/imgs/articles/default.png'),
(4, 'Gafas ', 220000, 'public/imgs/articles/default.png'),
(5, 'Ultra Cauchera', 80000, 'public/imgs/articles/default.png'),
(6, 'Barril Cerveza', 160000, 'public/imgs/articles/default.png'),
(7, 'Martillo', 20000, 'public/imgs/articles/default.png'),
(8, 'Secadora Cabello', 75000, 'public/imgs/articles/default.png'),
(9, 'Balon Futbol', 90000, 'public/imgs/articles/default.png'),
(10, 'Telefono Celular', 1400000, 'public/imgs/articles/default.png'),
(11, 'Guayos', 25000, 'public/imgs/articles/default.png'),
(12, 'Hola', 1200000, 'public/imgs/articles/default.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatars`
--

CREATE TABLE `avatars` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `gender` varchar(16) DEFAULT NULL,
  `image` varchar(64) DEFAULT 'public/imgs/avatar.png',
  `color` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `name`, `gender`, `image`, `color`) VALUES
(1, 'Blue', 'Femenino', 'public/imgs/avatars/1490196653.png', '#00ffff'),
(2, 'Ismael', 'Masculino', 'public/imgs/avatars/1490196672.png', '#80ff00'),
(3, 'Verito', 'Femenino', 'public/imgs/avatars/1490196689.png', '#d52ba6'),
(8, 'Pedro', 'Masculino', 'public/imgs/avatars/1490203524.png', '#ff80c0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `cliente_id`, `articulo_id`) VALUES
(1, 4, 1),
(2, 4, 5),
(3, 4, 9),
(4, 2, 6),
(5, 2, 7),
(6, 5, 2),
(7, 5, 8),
(8, 3, 4),
(9, 5, 3),
(14, 1, 1),
(15, 2, 2),
(16, 6, 6),
(17, 3, 1),
(18, 3, 6),
(19, 3, 5),
(20, 3, 9),
(21, 3, 11),
(22, 3, 8),
(23, 3, 1),
(24, 3, 12),
(25, 3, 1),
(26, 3, 3),
(27, 3, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `documento` bigint(20) NOT NULL,
  `nombres` varchar(32) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(32) DEFAULT NULL,
  `ciudad` varchar(16) DEFAULT 'springfield',
  `correo` varchar(32) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `rol` varchar(16) NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `documento`, `nombres`, `telefono`, `direccion`, `ciudad`, `correo`, `clave`, `rol`) VALUES
(1, 75000001, 'Jeremias Springfield', 8800011, 'Cra 09-10', 'springfield', 'jeremias@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'administrador'),
(2, 75000002, 'Homero Simpson', 8800022, 'Av Siempre Viva', 'springfield', 'homero@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(3, 75000003, 'Liza Simpson', 8800033, 'Av Siempre Viva', 'springfield', 'liza@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(4, 75000004, 'Bart Simpson', 8800044, 'Av Siempre Viva', 'springfield', 'bart@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(5, 75000005, 'Marge Simpson', 8800055, 'Av Siempre Viva', 'springfield', 'marge@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(6, 75000006, 'Bob Patiño', 8800066, 'Cra 32-33', 'springfield', 'bob@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(7, 75000007, 'MilHouse Van Housten', 8800077, 'Cra 11-12', 'springfield', 'milh@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(8, 75000008, 'Apu Nahasa', 8800088, 'Calle 120-80', 'springfield', 'apu@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(9, 75000009, 'Kirby', 8800099, 'Calle 24-35', 'springfield', 'kirby@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `articulo_id` (`articulo_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
