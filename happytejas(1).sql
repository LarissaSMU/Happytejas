-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2016 a las 06:46:14
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `happytejas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chocotejas`
--

CREATE TABLE `chocotejas` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chocotejas`
--

INSERT INTO `chocotejas` (`codigo`, `nombre`, `foto`, `descripcion`) VALUES
(1, 'Nutella', 'http://www.thegunnysack.com/wp-content/uploads/2014/05/Nutella_Recipes.jpg', 'Nutella® posee un auténtico sabor a avellanas y cacao, y su cremosidad única intensifica su sabor. Es tan deliciosa que incluso una pequeña cantidad de Happytejas te deja plenamente satisfecho'),
(3, 'Mantequilla de mani', 'https://i.ytimg.com/vi/anKnjxhVc5E/hqdefault.jpg', 'Hoy en día la era de los batidos proteicos, barras energéticas y de proteínas han hecho que los deportistas se olviden de muchos alimentos que pueden ayudarle a satisfacer sus necesidades nutricionales de manera muy completa, natural y con un bajo costo. Un ejemplo es la mantequilla de maní; un alimento nutritivo y rico.'),
(4, 'Brownie', 'http://images.media-allrecipes.com/userphotos/250x250/943710.jpg', 'e textura irregular y sabor intenso esta antigua receta de brownies combina de manera acertada el chocolate con las nueces para dar lugar a una de nuestras mejores chocotejas.'),
(5, 'Pasas borrachas', 'http://img.aws.ehowcdn.com/intl-620/ds-photo/60/53/fotolia_3473368_XS.jpg', 'Pasas sumergidas en vodka'),
(6, 'coco', 'http://namaskar.es/262/coco-rallado.jpg', 'coco'),
(7, 'guindon', 'http://cookingcookingrps.weebly.com/uploads/4/1/0/0/41000975/367195758.jpg', 'guindon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `cod_compra` int(11) NOT NULL,
  `cod_teja` int(11) NOT NULL,
  `t_chocolate` varchar(30) NOT NULL,
  `relleno` varchar(30) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `ocasion` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo_usuario`, `nombre`, `email`, `password`) VALUES
(1, 'mauricio', 'jjj@gmail.com', 'de2d4dba9ca94e7cd4fc69c426449b11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chocotejas`
--
ALTER TABLE `chocotejas`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`cod_compra`,`cod_teja`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chocotejas`
--
ALTER TABLE `chocotejas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `cod_compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
