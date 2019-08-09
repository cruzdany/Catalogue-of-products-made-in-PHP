-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2019 a las 02:19:04
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `products`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productsinfo`
--
-- Creación: 07-08-2019 a las 14:40:31
-- Última actualización: 08-08-2019 a las 23:58:18
--

DROP TABLE IF EXISTS `productsinfo`;
CREATE TABLE IF NOT EXISTS `productsinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `short_description` varchar(10000) NOT NULL,
  `long_description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `productsinfo`:
--

--
-- Volcado de datos para la tabla `productsinfo`
--

INSERT INTO `productsinfo` (`id`, `name`, `short_description`, `long_description`) VALUES
(12, 'Shirt', 'Nice shirt hahaha', 'Lil PUMP'),
(13, 'Air max E1', 'Designer shoes', 'Desiigner'),
(14, 'Tenis OZWEEGO', 'There is no discount', 'Orange color'),
(15, 'Tenis YEEZY2', 'EXCLUSIVE2', 'KANYE WEST DESIGN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
