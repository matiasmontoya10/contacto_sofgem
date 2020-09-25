-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-09-2020 a las 20:30:20
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contacto_sofgem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_tributario`
--

DROP TABLE IF EXISTS `contacto_tributario`;
CREATE TABLE IF NOT EXISTS `contacto_tributario` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social_contacto` varchar(255) NOT NULL,
  `rut_empresa_contacto` varchar(255) NOT NULL,
  `direccion_contacto` varchar(255) NOT NULL,
  `localidad_contacto` varchar(255) NOT NULL,
  `giro_contacto` varchar(255) NOT NULL,
  `correo_contacto` varchar(255) NOT NULL,
  `telefono_contacto` varchar(255) NOT NULL,
  `nombre_representante_contacto` varchar(255) DEFAULT NULL,
  `rut_representante_contacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto_tributario`
--

INSERT INTO `contacto_tributario` (`id_contacto`, `razon_social_contacto`, `rut_empresa_contacto`, `direccion_contacto`, `localidad_contacto`, `giro_contacto`, `correo_contacto`, `telefono_contacto`, `nombre_representante_contacto`, `rut_representante_contacto`) VALUES
(1, 'JUAN CARLOS AGUILERA CONEJEROS', '12362606-0', 'LOS IRIS 346', 'LOS SAUCES', 'ALMACEN DE COMESTIBLES', 'juan.aguilera790@gmail.com', '977092508', 'JUAN AGUILERA', '12362606-0'),
(2, 'Manuel Segundo Ulloa Orellana', '14368891-7', 'El lingue 310', 'Tirua', 'Supermercado,Panadería,Ferretería', 'manuelulloao73@gmail.com', '998350661', 'Manuel S. Ulloa Orellana', '14368891-7'),
(3, 'sociedad comercial liquimaule limitada', '77029176-3', '9 oriente #1020', 'talca', 'comercializadora de articulos de aseo y perfumeria', ' liquimaule@gmail.com', '990932748', 'juan pavez', '14016547-6'),
(4, 'Darwin Encina Sierra', '14388809-6', 'cabildo 1354', 'linares', 'fabrica de hielo', ' darwinencina@hotmail.com', '972039202', 'Darwin Encina Sierra', '14388809-6'),
(5, 'prolimp e.i.r.l', '76372611-8', '27 sur 0126', 'talca', 'comercializador', ' prolimptalca@gmail.com', '975515597', 'roberto chamorro oyarce', '16270703-5'),
(6, 'ChileCuarzo SpA', '77105603-2', 'Camino Romeral Km 0.7', 'romeral', 'Venta Al Por Mayor de Minerales No Metaliferes, Metaliferos y Piedras', 'chilecuarzo@gmail.com', '976887812', 'Jorge Riadi Ticona', '12177421-6'),
(7, 'Belleza y cuidado capilar SpA.', '77213163-1', 'Avenida Cristóbal Colón #9485 dpto 41', 'Hualpén', 'Venta de productos de peluquería y otros tratamientos de belleza', 'iraidap547@gmail.com', '961532987', 'Iraida Pacheco Campos', '16649343-9'),
(8, 'TALCA FRENOS EIRL.', '76362931-7', '1 SUR #2158', 'TALCA', 'VENTA DE REPUESTOS Y SERVICIOS', 'TALCAFRENOS@GMAIL.COM', '978073033', 'LUCAS VILLANUEVA', '17322541-5'),
(9, 'Hostal Oriente EIRL', ' 76825497-4', '3 1/2 Sur 2332', 'Talca', 'Actividades de Hospedaje', 'vicenteramirez@vramirezpropiedades.cl', '56998872409', 'Vicente Ramirez Correa', '10410565-3'),
(10, 'Felipe Oróstica Santibañez', '18786423-2', 'Itata 106', 'Quillón', 'Venta al por menor de bicicletas y sus repuestos en comercio especial', 'forostica94@gmail.com', '963064631', 'Felipe Oróstica Santibáñez', '18786423-2'),
(11, 'LAM SpA', '76778386-8', 'Carlos Antunez 2025 of 202 Providencia', 'Santiago', 'Importacion y comerc de repuestos y rod en general automotrices', 'gabrielli.felipe@gmail.com', '998228819', 'Susana Wodehouse', '8538776-6'),
(12, 'Mant proser ltda', '76554369-k', 'Ines aragay pje 5 de octubre # 351 Parral', 'Parral', 'Venta al mayor y detalle de materiales de construcción y más', 'mant.proser@gmail.com', '942777898', 'Felipe Leiva C.', '17333029-4'),
(13, 'COMERCIALIZADORA Y DISTRIBUIDORA DE HUEVOS ELEAZAR ROBERTO ZURITA ESCOBAR EIRL', '76772184-6', 'ANIBAL PINTO # 099', 'TEMUCO', ' COMERCIALIZADORA Y DISTRIBUIDORA DE HUEVOS, CEREALES, LEGUMBRES, FRUTOS DEL PAIS AL POR MENOR Y DETALLE', 'comercial.zurita@hotmail.com', '981397425', 'ROBERTO ZURITA', '6685924-K');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
