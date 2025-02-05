-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2012 a las 04:29:48
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `smartfitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `nombre` varchar(25) DEFAULT NULL,
  `documento` varchar(15) NOT NULL DEFAULT '',
  `sexo` varchar(15) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nombre`, `documento`, `sexo`, `edad`, `mail`, `login`, `contrasena`, `telefono`, `celular`) VALUES
('Cristian Javier  ropero A', '1.22377685', 'Masculino', 21, 'cristian@hotmail.com', 'cristian', '123456789', '2604748', '3134985233'),
('Natalia Leon Cardozo', '28698044', 'Femenino', 19, 'nleon21@misena.edu.co', 'natalia', '987654321', '6056511', '3214219586');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `nombre` varchar(50) DEFAULT NULL,
  `documento` varchar(20) NOT NULL DEFAULT '',
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `mail` varchar(20) DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  `peso` varchar(10) DEFAULT NULL,
  `estatura` varchar(10) DEFAULT NULL,
  `valoracion_medica` varchar(100) DEFAULT NULL,
  `valoracion_fisica` varchar(100) DEFAULT NULL,
  `ritmo_cardiaco` varchar(10) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `nombre_entrenador` varchar(30) DEFAULT NULL,
  `celular_entrenador` varchar(15) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `documento`, `fecha_nacimiento`, `sexo`, `edad`, `mail`, `login`, `contrasena`, `peso`, `estatura`, `valoracion_medica`, `valoracion_fisica`, `ritmo_cardiaco`, `telefono`, `celular`, `nombre_entrenador`, `celular_entrenador`, `fecha_ingreso`) VALUES
('Josue  Godoy ', '1025698352', '1983-05-06', 'Masculino', 29, 'josue_g@hotmail.com', 'josue', '123456789', '82 kg', '1.73', 'Ingresa sin ninguna novedad.', 'Bajo de peso, flacidez .', 'normal', '6587859', '3214567895', 'Camilo Perez', '3214578653', '0000-00-00'),
('Camila  Lopez', '1042586987', '1992-08-13', 'Femenino', 20, 'camila.lo@hotmail.co', 'locamila', '987654321', '50 kg', '1.58', 'Sufre del corazón ', 'Mal estado físico de resistencia ', 'normal', '4589632', '3004526875', 'Camilo perez', '3114526879', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenador`
--

CREATE TABLE IF NOT EXISTS `entrenador` (
  `nombre` varchar(50) DEFAULT NULL,
  `documento` varchar(20) NOT NULL DEFAULT '',
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `mail` varchar(25) DEFAULT NULL,
  `login` varchar(10) DEFAULT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  `horario` varchar(500) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrenador`
--

INSERT INTO `entrenador` (`nombre`, `documento`, `fecha_nacimiento`, `edad`, `sexo`, `mail`, `login`, `contrasena`, `horario`, `telefono`, `celular`) VALUES
('Camilo Perez', '1425632566', '1994-03-03', 20, 'Masculino', 'juan_perez@hotmail.com', 'Camilo', '987654321', '1:00 p.m - 8:00 p.m', '45345245', '3214589869'),
('Fernando monrroi ', '3214578653', '1980-06-03', 32, 'Masculino', 'fer@hotmail.com', 'fernando', '123456789', '12:00 pm - 10:00 p.m', '4587963', '3011524785');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_cliente`
--

CREATE TABLE IF NOT EXISTS `informe_cliente` (
  `documento` varchar(15) NOT NULL DEFAULT '',
  `fecha_informe` date DEFAULT NULL,
  `peso` varchar(10) DEFAULT NULL,
  `estatura` varchar(15) DEFAULT NULL,
  `valoracion_medica` varchar(250) DEFAULT NULL,
  `valoracion_fisica` varchar(300) DEFAULT NULL,
  `ritmo_cardiaco` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informe_cliente`
--

INSERT INTO `informe_cliente` (`documento`, `fecha_informe`, `peso`, `estatura`, `valoracion_medica`, `valoracion_fisica`, `ritmo_cardiaco`) VALUES
('1.019049239', '2012-11-25', '50 kg', '1.52', 'jojojojoojo', 'jujujuju', '50'),
('1022397409', '2012-11-08', '80 kg', '1.75', 'normal', 'aunmento de peso', 'normal'),
('1025698352', '2012-10-24', '58 kg', '1.79', 'sufre del corazon', 'buen estado fisico', '30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_cliente`
--

CREATE TABLE IF NOT EXISTS `pago_cliente` (
  `documento` varchar(10) NOT NULL DEFAULT '',
  `nombre` varchar(20) DEFAULT NULL,
  `pago` char(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `valor` float DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_cliente`
--

INSERT INTO `pago_cliente` (`documento`, `nombre`, `pago`, `fecha`, `valor`) VALUES
('1023452785', 'Luis Velez ', 'No', '0000-00-00', 30000),
('1025698352', 'Juan Manuel Perez', 'Si', '0000-00-00', 50000),
('1042586987', 'Camila Lopez', 'Si', '0000-00-00', 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_jueves`
--

CREATE TABLE IF NOT EXISTS `rutina_jueves` (
  `documento_cliente` varchar(15) NOT NULL DEFAULT '',
  `nombre_actividad` varchar(500) DEFAULT NULL,
  `descripcion_actividad` varchar(1000) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `sesion` varchar(40) DEFAULT NULL,
  `nombre_maquina` varchar(50) DEFAULT NULL,
  `rutina` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`documento_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_jueves`
--

INSERT INTO `rutina_jueves` (`documento_cliente`, `nombre_actividad`, `descripcion_actividad`, `duracion`, `sesion`, `nombre_maquina`, `rutina`) VALUES
('1025698352', 'espalda ', 'Postura', '1 hora', '5 de 15', 'lecour', 'Rutina I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_jueves_alimento`
--

CREATE TABLE IF NOT EXISTS `rutina_jueves_alimento` (
  `documento` varchar(15) NOT NULL DEFAULT '',
  `desayuno` varchar(1000) DEFAULT NULL,
  `onces_manana` varchar(800) DEFAULT NULL,
  `almuerzo` varchar(1000) DEFAULT NULL,
  `onces_tarde` varchar(800) DEFAULT NULL,
  `cena` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_jueves_alimento`
--

INSERT INTO `rutina_jueves_alimento` (`documento`, `desayuno`, `onces_manana`, `almuerzo`, `onces_tarde`, `cena`) VALUES
('1025698352', 'HUEVOS - CHOCOLATE', 'MANZANA Roja', 'VERDURA AL VAPOR- CARNE EN SALSA', 'TOSTADAS INTEGRALES', 'AROMÁTICA CON GALLETAS'),
('56568', '', '', '', '', ''),
('84846549', 'IBIBI', 'IUB', 'IUB', 'UB', 'BGIU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_lunes`
--

CREATE TABLE IF NOT EXISTS `rutina_lunes` (
  `documento_cliente` varchar(15) NOT NULL DEFAULT '',
  `nombre_actividad` varchar(500) DEFAULT NULL,
  `descripcion_actividad` varchar(1000) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `sesion` varchar(40) DEFAULT NULL,
  `nombre_maquina` varchar(50) DEFAULT NULL,
  `rutina` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`documento_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_lunes`
--

INSERT INTO `rutina_lunes` (`documento_cliente`, `nombre_actividad`, `descripcion_actividad`, `duracion`, `sesion`, `nombre_maquina`, `rutina`) VALUES
('1022548698', 'jhbvhjv', 'oj', 'oj', 'oj', 'jo', NULL),
('1025698352', 'pecho- brazo', 'ejercicio para subir masa', '1 hora', '4 de 10', 'press plato y lecour', 'rutina a'),
('22222', 'h', 'h', 'h', '', 'h', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_lunes_alimento`
--

CREATE TABLE IF NOT EXISTS `rutina_lunes_alimento` (
  `documento` varchar(15) NOT NULL DEFAULT '',
  `desayuno` varchar(1000) DEFAULT NULL,
  `onces_manana` varchar(800) DEFAULT NULL,
  `almuerzo` varchar(1000) DEFAULT NULL,
  `onces_tarde` varchar(800) DEFAULT NULL,
  `cena` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_lunes_alimento`
--

INSERT INTO `rutina_lunes_alimento` (`documento`, `desayuno`, `onces_manana`, `almuerzo`, `onces_tarde`, `cena`) VALUES
('1025698352', 'Huevos - chocolate', 'Manzana Verde', 'Verdura al vapor- carne en salsa', 'tostadas integrales', 'aromática con galletas '),
('56568', '', '', '', '', ''),
('84846549', 'IKHBI', 'IUBIUB', 'BI', 'BIU', 'IB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_martes`
--

CREATE TABLE IF NOT EXISTS `rutina_martes` (
  `documento_cliente` varchar(15) NOT NULL DEFAULT '',
  `nombre_actividad` varchar(500) DEFAULT NULL,
  `descripcion_actividad` varchar(1000) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `sesion` varchar(40) DEFAULT NULL,
  `nombre_maquina` varchar(50) DEFAULT NULL,
  `rutina` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`documento_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_martes`
--

INSERT INTO `rutina_martes` (`documento_cliente`, `nombre_actividad`, `descripcion_actividad`, `duracion`, `sesion`, `nombre_maquina`, `rutina`) VALUES
('1022548698', 'jhjo', 'o', 'oj', 'oj', 'j', NULL),
('1025698352', 'pierna - hombre', 'ejercicio para subir masa', '1 hora', '4 de 10', 'prensa - poll over', 'rutina N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_martes_alimento`
--

CREATE TABLE IF NOT EXISTS `rutina_martes_alimento` (
  `documento` varchar(15) NOT NULL DEFAULT '',
  `desayuno` varchar(1000) DEFAULT NULL,
  `onces_manana` varchar(800) DEFAULT NULL,
  `almuerzo` varchar(1000) DEFAULT NULL,
  `onces_tarde` varchar(800) DEFAULT NULL,
  `cena` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_martes_alimento`
--

INSERT INTO `rutina_martes_alimento` (`documento`, `desayuno`, `onces_manana`, `almuerzo`, `onces_tarde`, `cena`) VALUES
('1025698352', 'Queso - yogurth ', 'Mandarina', 'Auyama Pollo al vapor ensalada de tomate', 'cafe en leche', 'yogurth '),
('565656', 'j', 'j', 'j', 'j', 'j'),
('56568', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_miercoles`
--

CREATE TABLE IF NOT EXISTS `rutina_miercoles` (
  `documento_cliente` varchar(15) NOT NULL DEFAULT '',
  `nombre_actividad` varchar(500) DEFAULT NULL,
  `descripcion_actividad` varchar(1000) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `sesion` varchar(40) DEFAULT NULL,
  `nombre_maquina` varchar(50) DEFAULT NULL,
  `rutina` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`documento_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_miercoles`
--

INSERT INTO `rutina_miercoles` (`documento_cliente`, `nombre_actividad`, `descripcion_actividad`, `duracion`, `sesion`, `nombre_maquina`, `rutina`) VALUES
('1022548698', 'joj', 'jo', 'o', 'oj', 'oj', NULL),
('1025698352', 'abdomen ', 'ejercicio para tonificar', '1 hora ', '5 de 75', 'abdopal', 'Rutina a'),
('22222', 'h', 'h', 'h', 'h', 'h', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_miercoles_alimento`
--

CREATE TABLE IF NOT EXISTS `rutina_miercoles_alimento` (
  `documento` varchar(15) NOT NULL DEFAULT '',
  `desayuno` varchar(1000) DEFAULT NULL,
  `onces_manana` varchar(800) DEFAULT NULL,
  `almuerzo` varchar(1000) DEFAULT NULL,
  `onces_tarde` varchar(800) DEFAULT NULL,
  `cena` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_miercoles_alimento`
--

INSERT INTO `rutina_miercoles_alimento` (`documento`, `desayuno`, `onces_manana`, `almuerzo`, `onces_tarde`, `cena`) VALUES
('1025698352', 'Fruta con cereal', 'Papaya ', 'Pure de papa - pescado al vapor', 'Pan integral', 'Cafe en leche'),
('565656', 'j', 'j', 'j', 'j', 'j'),
('56568', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_sabado`
--

CREATE TABLE IF NOT EXISTS `rutina_sabado` (
  `documento_cliente` varchar(15) NOT NULL DEFAULT '',
  `nombre_actividad` varchar(500) DEFAULT NULL,
  `descripcion_actividad` varchar(1000) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `sesion` varchar(40) DEFAULT NULL,
  `nombre_maquina` varchar(50) DEFAULT NULL,
  `rutina` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`documento_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_sabado`
--

INSERT INTO `rutina_sabado` (`documento_cliente`, `nombre_actividad`, `descripcion_actividad`, `duracion`, `sesion`, `nombre_maquina`, `rutina`) VALUES
('1022548698', 'oj', 'j', 'j', 'jo', 'jmloj', NULL),
('1025698352', 'Cardio', 'Calentar el cuerpo', '30 minutos', '1', 'Bicicleta', 'Rutina j'),
('22222', 'h', 'h', 'h', 'h', 'h', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_sabado_alimento`
--

CREATE TABLE IF NOT EXISTS `rutina_sabado_alimento` (
  `documento` varchar(15) NOT NULL DEFAULT '',
  `desayuno` varchar(1000) DEFAULT NULL,
  `onces_manana` varchar(800) DEFAULT NULL,
  `almuerzo` varchar(1000) DEFAULT NULL,
  `onces_tarde` varchar(800) DEFAULT NULL,
  `cena` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_sabado_alimento`
--

INSERT INTO `rutina_sabado_alimento` (`documento`, `desayuno`, `onces_manana`, `almuerzo`, `onces_tarde`, `cena`) VALUES
('1025698352', 'Panca que ', 'Banano', 'Libre', 'Libre', 'Comida Suave'),
('565656', 'j', 'j', 'j', 'j', 'j'),
('56568', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_viernes`
--

CREATE TABLE IF NOT EXISTS `rutina_viernes` (
  `documento_cliente` varchar(15) NOT NULL DEFAULT '',
  `nombre_actividad` varchar(500) DEFAULT NULL,
  `descripcion_actividad` varchar(1000) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `sesion` varchar(40) DEFAULT NULL,
  `nombre_maquina` varchar(50) DEFAULT NULL,
  `rutina` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`documento_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_viernes`
--

INSERT INTO `rutina_viernes` (`documento_cliente`, `nombre_actividad`, `descripcion_actividad`, `duracion`, `sesion`, `nombre_maquina`, `rutina`) VALUES
('1022548698', 'oj', 'jo', 'jo', 'jo', 'jo', NULL),
('1025698352', 'Brazo', 'Alzar pesos', '1 hora', '5 de 12', 'mancuernas', 'Rutina g'),
('22222', 'h', 'h', 'h', 'h', 'h', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_viernes_alimento`
--

CREATE TABLE IF NOT EXISTS `rutina_viernes_alimento` (
  `documento` varchar(15) NOT NULL DEFAULT '',
  `desayuno` varchar(1000) DEFAULT NULL,
  `onces_manana` varchar(800) DEFAULT NULL,
  `almuerzo` varchar(1000) DEFAULT NULL,
  `onces_tarde` varchar(800) DEFAULT NULL,
  `cena` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutina_viernes_alimento`
--

INSERT INTO `rutina_viernes_alimento` (`documento`, `desayuno`, `onces_manana`, `almuerzo`, `onces_tarde`, `cena`) VALUES
('1025698352', 'Arepa con huevo ', 'Melon', 'Calabaza - carne asada - platano asado', 'Jugo Natural', 'Jugo con galletas'),
('565656', 'j', 'j', 'j', 'j', 'j'),
('56568', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
