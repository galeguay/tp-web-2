-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2021 a las 17:44:14
-- Versión del servidor: 10.3.31-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'Vino Malbec'),
(2, 'Espumante'),
(3, 'Cerveza'),
(10, 'vino Rancio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(45) NOT NULL,
  `contenido` varchar(300) NOT NULL,
  `puntaje` tinyint(1) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_y_hora` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `contenido`, `puntaje`, `id_producto`, `fecha_y_hora`) VALUES
(39, 'asdfasdf s dfasdf asd fasd f', 4, 28, '2021-11-24 16:04:37'),
(40, 'muy rica recomendablee 100%', 5, 27, '2021-11-24 16:56:21'),
(41, 'muy buena alternativa para salir de las cervezas comunes', 3, 27, '2021-11-24 16:57:29'),
(42, 'prefiero la quilmess de siempree', 1, 27, '2021-11-24 16:57:52'),
(43, 'me esperaba un sabor mas intenso, demasido suave, aún si se disfruta', 4, 27, '2021-11-24 16:58:42'),
(44, 'un vino para ocasiones especiales, por lo  menos para mi bolsillo', 5, 11, '2021-11-24 16:59:57'),
(45, 'una delicia', 5, 11, '2021-11-24 17:03:03'),
(46, 'un excelente regalo', 5, 11, '2021-11-24 17:03:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `contenido` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `id_categoria`, `contenido`) VALUES
(11, 'Malbec Ginar Ballester', 'A la vista de color rojo intenso con reflejos violáceos. De nariz intensa con notas a fruta fresca destacando cereza negra, moras, arándano y suave nota floral al agitar aparecen notas a especias como pimienta negra y vainilla. En paladar es un vino con cuerpo largo, equilibrado en acidez con taninos dulces que invitan a beber.', 1, 1000),
(27, 'Cerveza Antares Stout', 'Catalina la Grande amaba las emociones fuertes. Por eso, la Imperial Stout, negra y tostada, empapada de alcohol y pasas, amarga y ahumada, era su cerveza favorita. Esencia inglesa de exportación. Tímidos, abstenerse.', 3, 750),
(28, 'Espumante Vilarnau', 'Color amarillo pajizo. Nariz: Aromas de fruta madura con toques vinosos, con un toque de tilo y de flor de vid. Suave y equilibrado, con gran amplitud en boca y final amable e intenso. ', 2, 750),
(29, 'Malbec Rutini', 'Rojo violáceo, con matices azulados. En nariz, se destaca una gran complejidad aromática: notas de ciruelas entremezcladas con especias que recuerdan a vainilla, anís, pimienta negra, y un fondo floral que recuerda a la flor de la violeta. En boca, se reafirman los acentos frutados, sus taninos envolventes y sedosos. ', 1, 750),
(30, 'Cerveza Antares Scotch', 'Escocia es tierra de cebada y la Scotch Ale lleva ese paisaje impregnado en su código genético. Rubí intenso. Seis grados de alcohol. Dulce y maltosa. Una fórmula a prueba del paso del tiempo.', 3, 750);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `rol` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `contraseña`, `rol`) VALUES
(7, 'Administrador', 'admin@gmail.com', '$2y$10$V0bBMswRGu/Jmk8o5kf.lO8jqz9.YpY8KZqW.okECtQ4M8LmYCNei', 2),
(16, 'facundo', 'facu@gmail.com', '$2y$10$t0YWH4EiZTd2noGEWDfs8OM7DUsZvOD6Tg.gqqHZs0OsswNW.iMzO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
