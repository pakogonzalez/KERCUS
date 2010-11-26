-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2010 a las 10:29:00
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kercus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=190 ;

--
-- Volcar la base de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 158),
(24, 1, NULL, NULL, 'Groups', 2, 13),
(25, 24, NULL, NULL, 'index', 3, 4),
(27, 24, NULL, NULL, 'add', 5, 6),
(90, 1, NULL, NULL, 'Pages', 14, 27),
(91, 90, NULL, NULL, 'display', 15, 16),
(92, 90, NULL, NULL, 'add', 17, 18),
(93, 90, NULL, NULL, 'edit', 19, 20),
(94, 90, NULL, NULL, 'index', 21, 22),
(95, 90, NULL, NULL, 'view', 23, 24),
(96, 90, NULL, NULL, 'delete', 25, 26),
(97, 1, NULL, NULL, 'Users', 28, 45),
(98, 97, NULL, NULL, 'index', 29, 30),
(103, 97, NULL, NULL, 'login', 31, 32),
(104, 97, NULL, NULL, 'logout', 33, 34),
(121, 97, NULL, NULL, 'indextable', 35, 36),
(122, 97, NULL, NULL, 'del', 37, 38),
(123, 97, NULL, NULL, 'add', 39, 40),
(124, 97, NULL, NULL, 'edit', 41, 42),
(125, 24, NULL, NULL, 'indextable', 7, 8),
(126, 24, NULL, NULL, 'del', 9, 10),
(127, 24, NULL, NULL, 'edit', 11, 12),
(128, 1, NULL, NULL, 'Menuses', 62, 75),
(129, 128, NULL, NULL, 'add', 63, 64),
(130, 128, NULL, NULL, 'edit', 65, 66),
(131, 128, NULL, NULL, 'del', 67, 68),
(132, 128, NULL, NULL, 'index', 69, 70),
(133, 128, NULL, NULL, 'indextable', 71, 72),
(134, 128, NULL, NULL, 'menuses', 73, 74),
(145, 1, NULL, NULL, 'AccesoMenu', 76, 95),
(146, 145, 'Menus', 1, 'Sistema', 77, 94),
(147, 146, 'Menus', 71, 'General', 78, 87),
(148, 147, 'Menus', 112, 'Usuarios', 79, 80),
(150, 147, 'Menus', 114, 'Configuracion', 81, 82),
(151, 147, 'Menus', 113, 'Grupos', 83, 84),
(152, 147, 'Menus', 121, 'Menus', 85, 86),
(153, 146, 'Menus', 123, 'Control de Acceso', 88, 93),
(154, 153, 'Menus', 124, 'Permisos', 89, 90),
(155, 153, 'Menus', 158, 'Controladores/Acciones', 91, 92),
(156, 1, NULL, NULL, 'Acos', 96, 107),
(157, 156, NULL, NULL, 'index', 97, 98),
(158, 156, NULL, NULL, 'add', 99, 100),
(159, 156, NULL, NULL, 'edit', 101, 102),
(160, 156, NULL, NULL, 'del', 103, 104),
(161, 156, NULL, NULL, 'indextable', 105, 106),
(162, 1, NULL, NULL, 'ArosAcos', 108, 119),
(163, 162, NULL, NULL, 'index', 109, 110),
(164, 162, NULL, NULL, 'add', 111, 112),
(165, 162, NULL, NULL, 'edit', 113, 114),
(166, 162, NULL, NULL, 'del', 115, 116),
(167, 162, NULL, NULL, 'indextable', 117, 118),
(168, 1, 'Menus', 2, 'Comunicacion', 120, 131),
(169, 168, 'Menus', 129, 'Mensajes', 159, 160),
(170, 168, 'Menus', 131, 'Entrada', 121, 122),
(171, 168, 'Menus', 132, 'Enviados', 123, 124),
(172, 168, 'Menus', 130, 'Alertas', 125, 126),
(173, 168, 'Menus', 134, 'Pendientes', 127, 128),
(174, 168, 'Menus', 135, 'Eliminadas', 129, 130),
(175, 1, NULL, NULL, 'Mensajes', 132, 145),
(176, 1, NULL, NULL, 'Alerts', 146, 157),
(177, 175, NULL, NULL, 'index', 133, 134),
(180, 175, NULL, NULL, 'add', 135, 136),
(181, 175, NULL, NULL, 'edit', 137, 138),
(182, 175, NULL, NULL, 'del', 139, 140),
(183, 175, NULL, NULL, 'indextable', 141, 142),
(184, 176, NULL, NULL, 'index', 147, 148),
(185, 176, NULL, NULL, 'add', 149, 150),
(186, 176, NULL, NULL, 'edit', 151, 152),
(187, 176, NULL, NULL, 'del', 153, 154),
(188, 176, NULL, NULL, 'indextable', 155, 156),
(189, 175, NULL, NULL, 'enviados', 143, 144);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos2`
--

CREATE TABLE IF NOT EXISTS `acos2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=275 ;

--
-- Volcar la base de datos para la tabla `acos2`
--

INSERT INTO `acos2` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 272),
(24, 1, NULL, NULL, 'Groups', 2, 13),
(25, 24, NULL, NULL, 'index', 3, 4),
(27, 24, NULL, NULL, 'add', 5, 6),
(90, 1, NULL, NULL, 'Pages', 14, 27),
(91, 90, NULL, NULL, 'display', 15, 16),
(92, 90, NULL, NULL, 'add', 17, 18),
(93, 90, NULL, NULL, 'edit', 19, 20),
(94, 90, NULL, NULL, 'index', 21, 22),
(95, 90, NULL, NULL, 'view', 23, 24),
(96, 90, NULL, NULL, 'delete', 25, 26),
(97, 1, NULL, NULL, 'Users', 28, 43),
(98, 97, NULL, NULL, 'index', 29, 30),
(103, 97, NULL, NULL, 'login', 31, 32),
(104, 97, NULL, NULL, 'logout', 33, 34),
(121, 97, NULL, NULL, 'indextable', 35, 36),
(122, 97, NULL, NULL, 'del', 37, 38),
(123, 97, NULL, NULL, 'add', 39, 40),
(124, 97, NULL, NULL, 'edit', 41, 42),
(125, 24, NULL, NULL, 'indextable', 7, 8),
(126, 24, NULL, NULL, 'del', 9, 10),
(127, 24, NULL, NULL, 'edit', 11, 12),
(128, 1, NULL, NULL, 'Menuses', 60, 73),
(129, 128, NULL, NULL, 'add', 61, 62),
(130, 128, NULL, NULL, 'edit', 63, 64),
(131, 128, NULL, NULL, 'del', 65, 66),
(132, 128, NULL, NULL, 'index', 67, 68),
(133, 128, NULL, NULL, 'indextable', 69, 70),
(134, 128, NULL, NULL, 'menuses', 71, 72),
(145, 1, NULL, NULL, 'Acos', 74, 85),
(146, 145, NULL, NULL, 'index', 75, 76),
(147, 145, NULL, NULL, 'add', 77, 78),
(148, 145, NULL, NULL, 'edit', 79, 80),
(149, 145, NULL, NULL, 'del', 81, 82),
(150, 145, NULL, NULL, 'indextable', 83, 84),
(151, 1, NULL, NULL, 'Pakos', 86, 89),
(158, 151, NULL, NULL, 'index', 87, 88),
(159, 1, NULL, NULL, 'ArosAcos', 94, 105),
(160, 159, NULL, NULL, 'index', 95, 96),
(161, 159, NULL, NULL, 'indextable', 97, 98),
(162, 159, NULL, NULL, 'add', 99, 100),
(163, 159, NULL, NULL, 'edit', 101, 102),
(164, 159, NULL, NULL, 'del', 103, 104),
(165, 1, NULL, NULL, 'Mensajes', 106, 121),
(166, 165, NULL, NULL, 'index', 107, 108),
(167, 165, NULL, NULL, 'add', 109, 110),
(168, 165, NULL, NULL, 'edit', 111, 112),
(169, 165, NULL, NULL, 'del', 113, 114),
(170, 165, NULL, NULL, 'indextable', 115, 116),
(171, 165, NULL, NULL, 'enviados', 117, 118),
(172, 165, NULL, NULL, 'enviadostable', 119, 120),
(173, 1, 'Alert', NULL, 'Alerts', 122, 133),
(174, 173, NULL, NULL, 'index', 123, 124),
(181, 173, NULL, NULL, 'add', 125, 126),
(182, 173, NULL, NULL, 'edit', 127, 128),
(184, 173, NULL, NULL, 'del', 129, 130),
(185, 173, NULL, NULL, 'indextable', 131, 132),
(198, 1, NULL, NULL, 'AccesoMenu', 142, 269),
(199, 198, 'Menus', 1, 'Sistema', 143, 238),
(200, 198, 'Menus', 2, 'Comunicacion', 239, 254),
(201, 199, 'Menus', 71, 'General', 144, 153),
(202, 199, 'Menus', 123, 'Control Acceso', 154, 159),
(203, 201, 'Menus', 114, 'Configuracion', 145, 146),
(204, 200, 'Menus', 129, 'Mensajes', 240, 245),
(205, 200, 'Menus', 130, 'Alertas', 246, 251),
(206, 205, 'Menus', 134, 'Pendientes', 247, 248),
(207, 205, 'Menus', 135, 'Eliminadas', 249, 250),
(208, 201, 'Menus', 112, 'Usuarios', 147, 148),
(209, 201, 'Menus', 113, 'Grupos', 149, 150),
(210, 201, 'Menus', 121, 'Menús', 151, 152),
(211, 202, 'Menus', 124, 'Permisos', 155, 156),
(212, 202, 'Menus', 158, 'Controladores/Acciones', 157, 158),
(213, 204, 'Menus', 131, 'Entrada', 241, 242),
(214, 204, 'Menus', 132, 'Enviados', 243, 244),
(215, 198, 'Menus', 3, 'Registro', 255, 266),
(216, 215, 'Menus', 137, 'Seguimiento', 256, 261),
(217, 215, 'Menus', 138, 'Estadisticas', 262, 265),
(218, 216, 'Menus', 139, 'Logs', 257, 258),
(219, 216, 'Menus', 140, 'Accesos', 259, 260),
(220, 217, 'Menus', 142, 'Accesos', 263, 264),
(274, 198, 'Menus', 223, 'Centros', 267, 268);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `asunto` varchar(32) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `estado` varchar(32) NOT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `alerts`
--

INSERT INTO `alerts` (`id`, `user_id`, `asunto`, `texto`, `estado`, `created`, `modified`) VALUES
(1, 23, 'asdsa', 'dasdsad', 'Activa', '2010-11-22', '2010-11-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcar la base de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 26),
(48, NULL, 'User', 1, NULL, 27, 28),
(49, NULL, 'Group', 0, NULL, 29, 30),
(50, NULL, 'User', 0, NULL, 31, 32),
(51, NULL, 'User', 26, NULL, 33, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcar la base de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(13, 1, 168, '1', '1', '1', '1'),
(1, 1, 1, '1', '1', '1', '1'),
(14, 1, 169, '1', '1', '1', '1'),
(10, 1, 146, '1', '1', '1', '1'),
(9, 1, 91, '1', '1', '1', '1'),
(15, 1, 172, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrador', '2010-07-29 09:14:58', '2010-07-29 09:14:58'),
(8, 'Usuario', '2010-11-25 15:01:31', '2010-11-25 15:01:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `accion` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `logs`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `destino` int(11) NOT NULL,
  `asunto` varchar(32) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `user_id`, `destino`, `asunto`, `texto`, `estado`, `created`) VALUES
(2, 4, 23, 'aaa', 'aa', 0, '2010-11-22 12:33:15'),
(3, 4, 23, 'qqq', 'qqq', 0, '2010-11-22 12:33:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menuses`
--

CREATE TABLE IF NOT EXISTS `menuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menus_id` int(11) DEFAULT NULL,
  `estado` varchar(32) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `controlador` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `foot` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=226 ;

--
-- Volcar la base de datos para la tabla `menuses`
--

INSERT INTO `menuses` (`id`, `titulo`, `menus_id`, `estado`, `controlador`, `accion`, `orden`, `foot`) VALUES
(1, 'Sistema', NULL, 'Activo', NULL, NULL, 0, 'No'),
(2, 'Comunicación', NULL, 'Activo', 'Menus', '2', 0, 'No'),
(3, 'Registro', NULL, 'Activo', NULL, NULL, 0, 'No'),
(4, 'Información', NULL, 'Inactivo', '', '', 0, 'No'),
(71, 'General', 1, 'Activo', NULL, NULL, 0, 'No'),
(113, 'Grupos', 71, 'Activo', 'groups', 'index', 1, 'No'),
(112, 'Usuarios', 71, 'Activo', 'users', 'index', 2, 'No'),
(114, 'Configuración', 71, 'Activo', '', '', 0, 'No'),
(121, 'Menús', 71, 'Activo', 'menuses', 'index', 0, 'No'),
(123, 'Control Acceso', 1, 'Activo', '', '', 0, 'No'),
(124, 'Permisos', 123, 'Activo', 'aros_acos', 'index', 0, 'No'),
(129, 'Mensajes', 2, 'Activo', '', '', 0, 'No'),
(130, 'Alertas', 2, 'Activo', '', '', 0, 'No'),
(131, 'Entrada', 129, 'Activo', 'mensajes', '', 0, 'No'),
(132, 'Enviados', 129, 'Activo', 'mensajes', 'enviados', 0, 'No'),
(134, 'Pendientes', 130, 'Activo', 'alerts', '', 0, 'No'),
(135, 'Eliminadas', 130, 'Activo', '', '', 0, 'No'),
(137, 'Seguimiento', 3, 'Activo', '', '', 0, 'No'),
(138, 'Estadísticas', 3, 'Activo', '', '', 0, 'No'),
(139, 'Logs', 137, 'Activo', '', '', 0, 'No'),
(140, 'Accesos', 137, 'Activo', '', '', 0, 'No'),
(142, 'Accesos', 138, 'Activo', '', '', 0, 'No'),
(143, 'Servidor', 4, 'Activo', '', '', 0, 'No'),
(144, 'Base de Datos', 4, 'Activo', '', '', 0, 'No'),
(145, 'PHP', 4, 'Activo', '', '', 0, 'No'),
(146, 'Cake PHP', 4, 'Activo', '', '', 0, 'No'),
(147, 'JQuery', 4, 'Activo', '', '', 0, 'No'),
(148, 'Características', 143, 'Activo', '', '', 0, 'No'),
(149, 'Servicios', 143, 'Activo', '', '', 0, 'No'),
(150, 'Resumen', 144, 'Activo', '', '', 0, 'No'),
(151, 'Copia de Seguridad', 144, 'Activo', '', '', 0, 'No'),
(152, 'Versión', 145, 'Activo', '', '', 0, 'No'),
(153, 'Extensiones', 145, 'Activo', '', '', 0, 'No'),
(154, 'Plugins', 146, 'Activo', '', '', 0, 'No'),
(155, 'Versión', 147, 'Activo', '', '', 0, 'No'),
(156, 'Plugins', 147, 'Activo', '', '', 0, 'No'),
(158, 'Controladores/Acciones', 123, 'Activo', 'acos', 'index', 0, 'No'),
(223, 'Centros', 2, 'Activo', 'centros', 'index', 0, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `password` char(40) CHARACTER SET latin1 DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `estado` varchar(32) CHARACTER SET latin1 NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombre`, `last_login`, `group_id`, `estado`, `created`, `modified`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2010-11-25 14:51:09', 1, 'Activo', '2010-07-29', '2010-11-25'),
(26, 'pako', '95fc1befa0cc68ea265157fa5ab94f5dc397a3dd', 'pako', '2010-11-25 15:01:51', 8, 'Activo', '2010-11-25', '2010-11-25');
