
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2016 a las 18:51:55
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
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE IF NOT EXISTS `ofertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Concepto` varchar(50) NOT NULL,
  `Descripcion` varchar(254) DEFAULT NULL,
  `Imagen` varchar(255) NOT NULL,
  `inicioPromo` date NOT NULL,
  `FinPromo` date NOT NULL,
  `id_asoc` int(11) NOT NULL,
  `FechaMod` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `FechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_idas` (`id_asoc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `Concepto`, `Descripcion`, `Imagen`, `inicioPromo`, `FinPromo`, `id_asoc`, `FechaMod`, `FechaCreacion`) VALUES
(1, 'Descuento monturas hasta 30% VisionLab', 'Descuento en monturas y ópticas de gafas graduadas hasta 30% en todas las marcas', 'http://www.vistaoptica.es/img/articulos/oferta_49_cast.jpg', '2016-05-01', '2016-06-15', 3, '2016-05-28 12:42:53', '2016-05-10 15:21:16'),
(2, 'Descuento Media Markt', 'Dispositivos Apple al 0% TAE', 'http://hablando-de-manzanas.s3-eu-west-1.amazonaws.com/s3fs-public/field/image/promocion-mediamarkt-productos-apple-0-interes-espa%C3%B1a-febrero.jpg', '2016-05-01', '2016-06-30', 3, '2016-05-29 16:14:29', '2016-05-27 19:10:01'),
(3, 'Test de oferta sin foto', 'Cuerpo de oferta sin foto', '', '2016-05-16', '2016-05-30', 3, '2016-05-30 13:55:20', '2016-05-29 16:12:38'),
(9, 'Oferta de test veridica', 'Esto es una oferta generada para testear la funcionalidad del panel de oferta', 'http://www.consultoraponcio.com/wp-content/uploads/2016/04/test.png', '2016-05-09', '2016-06-18', 3, '0000-00-00 00:00:00', '2016-05-31 11:09:29'),
(8, 'Titulo oferta generada desde panel de ofertas', 'Cuerpo oferta generada desde panel de ofertas', 'http://fayimora.com/content/images/2015/01/hello_world.gif', '2016-05-30', '2016-05-31', 3, '2016-05-30 23:48:51', '2016-05-30 23:45:51'),
(17, 'Playa', 'Viaja a la playa', 'http://laescuelaencasa.com/wordpress/wp-content/uploads/2014/05/La-playa-en-ingl%C3%A9s.jpg', '2016-05-29', '2016-06-28', 3, '0000-00-00 00:00:00', '2016-05-31 16:03:52'),
(16, 'Prueba', 'Cuerpo de prueba', 'http://viajar.especiales.elperiodico.com/50-hoteles-de-ensueno/files/2013/06/montanas-colorado.jpg', '2016-05-30', '2016-06-28', 3, '0000-00-00 00:00:00', '2016-05-31 16:03:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
