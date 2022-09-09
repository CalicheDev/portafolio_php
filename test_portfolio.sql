-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2018 a las 05:58:28
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_portfolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion_corta` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `url_web` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`id`, `titulo`, `descripcion_corta`, `descripcion`, `url_image`, `url_web`, `estado`, `orden`) VALUES
(1, 'Orfeo - Software de Gestión Documental', 'Implementación sistema de gestión documental como Proyecto de Grado', 'Orfeo está principalmente programado en PHP y usa un conjunto de librerías de este lenguaje como AdoDB y Pear. Adicionalmente cuenta con una interfaz hecha en javascript y boostrap para hacerla responsive.\r\n\r\nEste sistema lo implemente en la de forma local en la universidad Corporacion Universitarioa Centro Superior utilizando una maquina virtual de Linux  variante Ubuntu, adicionalmente parametrice la conexión vía IP publica para acceder al aplicativo web desde la red local. \r\n\r\nTecnologías que utilice para la implementación del software Orfeo\r\n-Base de datos: PostgreSQL\r\n-Maquina Virtual: VMWARE\r\n-Sistema Operativo: Ubutnu\r\n-Apache\r\n-Wampserver\r\n-PHP', 'pexels-photo-461077.jpeg', 'https://unicuces.edu.co/principal/', 1, 1),
(2, 'Sistema de Facturación, Inventario, Farmacia, Historias Clínicas', 'Software ERP con Laravel, JavaScript y MySQL', ' ERP Clinic Programmer es un software desarrollado con el Framework Laravel y MySQL, adicionalmente cuenta con JavaScript y JQuery, el cual contiene una serie de módulos para la gestión organizacional de una IPS desde Facturación hasta Historias clínicas el cual genera una transformación integral de la Data del negocio para la generación de informes que permiten la toma de decisiones en tiempo real y acorde a las necesidades del negocio.\r\n\r\nModulos:\r\n-Parametros Generales\r\n-Modulo Financiero\r\n-Modulo Administrativo\r\n-Modulo Inventario\r\n-Modulo Clínico\r\n-Informes', 'pexels-photo-908284.jpeg', '', 1, 2),
(3, 'Sistema HelpDesk con PHP, JavaScript, Ajax y MySQL', 'Software para la Gestion Ticket de soporte TI', 'Softweb Tickets es un Software desarrollado en PHP sin ningún tipo de Framework, adicionalmente contienen librerías en JavaScript para la generación de informes en Excel, el calendario y pdf, además de envíos por email, también contiene funcionalidades en Ajax y la base de datos MySQL\r\n\r\nDescripción básica de cada uno de los módulos del sistema    \r\n•	Usuarios: Se puede agregar editar y eliminar usuarios.\r\n•	Analytics: En el dashborad se puede visualizar estadisticas\r\n•	Tickets: Cada usuario puede agregar un ticket, editarlo, eliminarlo y realizar atenciones o bitacoras al ticket.\r\n•	Proyectos: Cada usuario puede agregar los proyectos que desee.\r\n•	Perfiles: Los usuarios pueden rellenar su perfil.\r\n•	Categorías: Los usuarios pueden agregar categorías.\r\n•	Clientes: Los usuarios pueden agregar clientes.\r\n•	Eventos: Los usuarios pueden agregar eventos.\r\n•	Reportes: Los usuarios pueden generar reportes, descargarlos en PDF o Excel.\r\n•	Asesores: Se puede agregar editar y eliminar asesores de soporte.', 'pexels-photo-1068523.jpeg', '', 1, 4),
(4, 'SISTEMA PARA FARMACIAS', 'SISTEMA PARA FARMACIAS DESARROLLADO CON PHP ', 'El sistema de Inventario para farmacias es un software de oficina de farmacia, que cuenta con un diseÃ±o moderno de respuesta ideal para cualquier tipo de negocio de farmacia.', 'sis_farma.jpeg', '', 1, 6);


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
