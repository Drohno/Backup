
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2016 a las 18:52:00
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u279508382_asoc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_asoc` int(11) NOT NULL,
  `id_google` text NOT NULL,
  `pass` varchar(30) NOT NULL,
  `DataModificacio` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `FechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_reg` (`id_cliente`,`id_asoc`),
  KEY `fk_idasoc` (`id_asoc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `id_cliente`, `id_asoc`, `id_google`, `pass`, `DataModificacio`, `FechaCreacion`) VALUES
(115, 111, 3, 'APA91bE0rIraEF6HZdMFchVWrVRmnRAxYTYSvzF3Ye1ta0e-HtCBP1-3ybiQLPw5ZI8OMftFjnbt5Zgpo10lPnWyoCeeWkASzPg4ZiDCYDONAp6Itdl6eTbungratVyBHDv3lJYb_YjP', 'david', '2016-05-31 17:10:56', '2016-05-30 22:02:52');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
