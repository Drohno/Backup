
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2016 a las 18:51:46
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
-- Estructura de tabla para la tabla `LOCASOC`
--

CREATE TABLE IF NOT EXISTS `LOCASOC` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Localidad` varchar(100) NOT NULL,
  `Asociacion` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `uniq_locasoc` (`Localidad`,`Asociacion`),
  KEY `fk_aso` (`Asociacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `LOCASOC`
--

INSERT INTO `LOCASOC` (`ID`, `Localidad`, `Asociacion`) VALUES
(1, 'Sant Boi de Llobregat', 'Sant Boi una Gran Botiga');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
