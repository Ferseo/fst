-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2022 a las 17:13:20
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `managementtheatre`
--
CREATE DATABASE IF NOT EXISTS `managementtheatre` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `managementtheatre`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atrezzo`
--

CREATE TABLE `atrezzo` (
  `tipoMaterial` varchar(50) NOT NULL,
  `utilidad` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `observaciones` varchar(250) NOT NULL,
  `codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `atrezzo`
--

INSERT INTO `atrezzo` (`tipoMaterial`, `utilidad`, `ubicacion`, `cantidad`, `observaciones`, `codigo`) VALUES
('difraces reyes', 'complemento en la cabalgata', 'habitacion disfraces', '12', 'han de ir a la tintoreria', 1),
('difraces DE MAGO', 'COMPLEMENTO ESPECTACULO DE MAGIA', 'habitacion disfraces', '2', 'uno presenta rotura', 2),
('mueble negro', 'complemento', 'sala posdcat', '1', '', 3),
('perchero', 'complemento teatral', 'sala disfraces', '1', '', 4),
('sombreros mexicanos', 'complemento mexicano', 'sala disfraces', '4', '', 5),
('sombrero ingles', 'complemento ingles', 'sala disfraces', '2', '', 6),
('gafas hippies', 'complemento hippie', 'sala disfraces', '3', '', 7),
('difraz payaso', 'caracterizarse com un payaso', 'sala disfraces', '2', '', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cableado`
--

CREATE TABLE `cableado` (
  `tipoMaterial` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `metos` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cableado`
--

INSERT INTO `cableado` (`tipoMaterial`, `cantidad`, `metos`, `ubicacion`, `codigo`) VALUES
('dmx 5 pines', '2', '10', 'escenario', 1),
('alargadera', '2', '10', 'escenaio', 2),
('xlr ', '20', '5 metros', 'escenario', 3),
('xlr', '12', '5', 'escenario', 4),
('dmx 5 pines', '18', '1', 'escenario', 5),
('powercom', '15', '1-2 metros', 'escenario', 6),
('regletas 4 conexiones', '2', '5 metros', 'escenario', 7),
('regletas 4 conexiones', '1', '2 metro', 'escenario', 8),
('regleta 2 conexiones', '2', '5 metros', 'escenario', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credenciales`
--

CREATE TABLE `credenciales` (
  `dni` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `credenciales`
--

INSERT INTO `credenciales` (`dni`, `nombre`, `apellidos`, `user`, `password`, `categoria`) VALUES
('11224455J', 'Pepe', 'Ruiz Garrido', 'peponido79', 'peponido.ruiz1', 'jefe'),
('15425698N', 'Fernando', 'Sierra Tomás', 'ferseo91', 'ferseoadministrador.', 'administrador'),
('22663388S', 'Sergio', 'Alonso Latorre', 'sergitoL25', 'sergito.latorre', 'ayudante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iluminacion`
--

CREATE TABLE `iluminacion` (
  `codigo` int(50) NOT NULL,
  `tipoMaterial` varchar(50) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `cantidad` varchar(50) DEFAULT NULL,
  `utilidad` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `anioCompra` varchar(50) NOT NULL,
  `tipoConexion` varchar(50) NOT NULL,
  `ultimaRevision` varchar(50) NOT NULL,
  `Observaciones` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `iluminacion`
--

INSERT INTO `iluminacion` (`codigo`, `tipoMaterial`, `marca`, `modelo`, `cantidad`, `utilidad`, `ubicacion`, `anioCompra`, `tipoConexion`, `ultimaRevision`, `Observaciones`) VALUES
(54669, 'foco  wash', 'pangeant', '150', '12', 'lleno de color el escenario', 'escenario', '2017', 'dmx 3 y 5 pines', '2021', 'todo ok'),
(54670, 'foco spot', 'varie lite', 's3000', '4', 'juego de luces', 'escenario', '2021', 'dmx 5 pines', '2021', 'alguno presenta rotura, pero funcionana bien'),
(54671, 'foco spot', 'pointe', '1520', '4', 'juego de luces', 'escenario', '2018', 'dmx 3 y 5 pines', '2021', 'todo ok'),
(54672, 'mesa luces', 'grandMA', 'ma3', '1', 'gestion y manejo de luces', 'control', '2020', 'dmx 5 pines', '2021', 'necesita actualizar el software'),
(54673, 'foco pc', 'Strandligthing', '154', '10', 'relleno iluminacion en escenario', 'escenario', '2017', 'dimmer', '2021', 'un par necesitan reparacio'),
(54674, 'foco fresnel', 'strandligthing', '154', '4', 'relleno de luz en escenario', 'escenario', '2007', 'dimmer', '2021', 'todo ok'),
(54675, 'foco recorte', 'etc', '1200', '6', 'luz frontal a escenario y luz puntual', 'puente frontal', '2018', 'dimmer', '2021', 'todo ok');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialmontaje`
--

CREATE TABLE `materialmontaje` (
  `tipoMaterial` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `utilidad` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `observaciones` varchar(250) NOT NULL,
  `codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materialmontaje`
--

INSERT INTO `materialmontaje` (`tipoMaterial`, `cantidad`, `utilidad`, `ubicacion`, `observaciones`, `codigo`) VALUES
('biombos', '20', 'delimitar zonas ', 'habitacion parking  puerta blanca', 'algunos necesitan soldaduras nuevas', 1),
('calles de hierro', '8', 'cuelgue de focos en las calles de la escenografia ', 'sotano debajo de escenario, junto a peanas de hier', 'necesitan un pintado', 2),
('tarimas ', '15', 'formar un escenario de 40 cm de alto', 'hall sotano', 'algunas tarimas estan partidas', 3),
('escenario desmontable', '1', 'escenario para actos', 'palacio de deportes', 'el tamaño es 8x6 metros', 4),
('jennis', '2', 'soportar barras de truss', 'sala parking', 'todo ok', 5),
('truss', '4', 'colgar focos o demas parafernalia en bolos exterio', 'sala parking', 'son un total de 8 metros', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialprestado`
--

CREATE TABLE `materialprestado` (
  `codigo` int(100) NOT NULL,
  `materialPrestado` varchar(50) NOT NULL,
  `diaRetirada` varchar(50) NOT NULL,
  `diaEntrega` varchar(50) NOT NULL,
  `estadoMaterial` varchar(250) NOT NULL,
  `observaciones` varchar(250) NOT NULL,
  `personaPrestamo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materialprestado`
--

INSERT INTO `materialprestado` (`codigo`, `materialPrestado`, `diaRetirada`, `diaEntrega`, `estadoMaterial`, `observaciones`, `personaPrestamo`) VALUES
(11223, 'mesas tablero con patas de hierro', '26/10/2021', '2/11/2021', 'las mesas presentan varios rayajos en la parte superior y una de las patas de hierro esta suelta', 'revisar bien mesas cuando se devuelvan, posiblemente no se cuiden donde van.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros`
--

CREATE TABLE `otros` (
  `tipoMaterial` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `utilidad` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `observaciones` varchar(250) NOT NULL,
  `codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `otros`
--

INSERT INTO `otros` (`tipoMaterial`, `cantidad`, `utilidad`, `ubicacion`, `observaciones`, `codigo`) VALUES
('producto limpia contactos', '4', 'limpiar contactores', 'armario rosa de nuestra habitacion', 'algunos botes casi gastados', 2),
('tornilleria para madera', '4 paquetes', 'atornillar madera', 'armario rosa de nuestra habitacion', 'hay diferentes tamaños', 3),
('telas viejas', '20', 'tapar material de montaje', 'baul de sotano', '', 4),
('herramientas', '10', 'trabajos de montaje', 'armario de video', 'casi todo destornilladores', 5),
('remaches', '2 cajas', 'remachar hierro', 'armario rosa nuestra habitacion', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonido`
--

CREATE TABLE `sonido` (
  `codigo` int(50) NOT NULL,
  `tipoMaterial` varchar(50) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `cantidad` varchar(50) DEFAULT NULL,
  `utilidad` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `anioCompra` varchar(50) NOT NULL,
  `tipoConexion` varchar(50) NOT NULL,
  `ultimaRevision` varchar(50) NOT NULL,
  `Observaciones` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sonido`
--

INSERT INTO `sonido` (`codigo`, `tipoMaterial`, `marca`, `modelo`, `cantidad`, `utilidad`, `ubicacion`, `anioCompra`, `tipoConexion`, `ultimaRevision`, `Observaciones`) VALUES
(112238, 'altavoces activos', 'beringuer', 'xms', '2', 'amplificacion de sonido en calle', 'nuestra habitacion en sotano', '2021', 'xlr, rca', '2022', 'estan en perfecto estado'),
(112239, 'mesa de sonido', 'yamaha', 'tf3', '1', 'gestion y mezcla del sonido del teatro', 'cabina', '2018', 'xlr, rca, rj45, jack 6.5', '2021', 'le falta un fader'),
(112240, 'microfono', 'senheisser', 'ew500', '1', 'amplificacion de voz', 'escenario', '2007', 'inhalambrica', '2022', 'todo ok'),
(112241, 'microfono', 'shure', 'sm 58', '2', 'amplificacion de voz', 'escenario', '2018', 'inhalambrica', '2022', 'uno suena metalico'),
(112242, 'altavoces activos', 'hk', '1500', '2', 'seildfiel y espectaculos ne calle', 'escenario', '2015', 'xlr', '2022', 'todo ok'),
(112243, 'altavoces PA', 'easte', '1000', '1', 'sonido general de teatro', 'escenario', '2007', 'espeakon', '2022', 'conta de dos medios agudos y dos graves'),
(112244, 'microfono', 'shure', 'sm 50', '8', 'amplificacion de voz o instrumentos', 'armario sonido en escenario', '2007-2022', 'xlr', '2022', 'todo ok'),
(112245, 'microfono', 'shure', 'sm57', '5', 'amplificacion de guitarra', 'armario sonido en escenario', '2007-2022', 'xlr', '2022', 'todo ok');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `tipoTarea` varchar(50) NOT NULL,
  `trabajadorDesempenia` varchar(50) NOT NULL,
  `diaTarea` varchar(50) NOT NULL,
  `horarioTarea` varchar(50) NOT NULL,
  `lugarTarea` varchar(50) NOT NULL,
  `cod_tarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`tipoTarea`, `trabajadorDesempenia`, `diaTarea`, `horarioTarea`, `lugarTarea`, `cod_tarea`) VALUES
('probar micros', 'fernando', '31-1-2022', '9.00-11.00am', 'teatro', 4),
('papeleo casa juventud', 'pepe', '31-1-2022', '9.00-11.00am', 'casa juventud', 6),
('Llevar sillas', 'sergio', '31-1-2022', '9.00-10.00am', 'biblioteca cabañuelas', 10),
('montar sonido', 'fernando', '31-1-2022', '12.00-15.00am', 'teatro', 21),
('reunion jefas', 'pepe', '31-1-2022', '8.00-9.00am', 'casa de la juventud', 27),
('irecoger folletos', 'sergio', '31-1-2022', '9.00-9.30am', 'copisteria alpe', 29),
('repartir corazones', 'sergio', '31-1-2022', 'toda la mañana', 'negocios vicar', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE `video` (
  `codigo` int(50) NOT NULL,
  `tipoMaterial` varchar(50) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `cantidad` varchar(60) DEFAULT NULL,
  `utilidad` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `anioCompra` varchar(50) NOT NULL,
  `tipoConexion` varchar(50) NOT NULL,
  `ultimaRevision` varchar(50) NOT NULL,
  `Observaciones` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`codigo`, `tipoMaterial`, `marca`, `modelo`, `cantidad`, `utilidad`, `ubicacion`, `anioCompra`, `tipoConexion`, `ultimaRevision`, `Observaciones`) VALUES
(99858, 'pantallas de led', 'philips', '100', '2', 'visionado de videos e imagenes', 'nuestra habitacion del sotano', '2021', 'hdmi, vga', '2021', 'estan nuevas'),
(99859, 'mesa realizacion', 'magic', 'X', '1', 'gestion del video ', 'control', '2021', 'rj45', '2022', 'todo ok'),
(99860, 'camara video', 'logitech', '130', '2', 'grabacion en directo y streming', 'control y escenario', '2021', 'rj45', '2021', 'todo ok'),
(99861, 'software mezcla de video', 'resolumen', '6', '1', 'software de realizacion en pc', 'ordenador de video', '2021', '', '2021', 'todo ok');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atrezzo`
--
ALTER TABLE `atrezzo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `cableado`
--
ALTER TABLE `cableado`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `credenciales`
--
ALTER TABLE `credenciales`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `iluminacion`
--
ALTER TABLE `iluminacion`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `materialmontaje`
--
ALTER TABLE `materialmontaje`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `materialprestado`
--
ALTER TABLE `materialprestado`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `otros`
--
ALTER TABLE `otros`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `sonido`
--
ALTER TABLE `sonido`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`cod_tarea`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atrezzo`
--
ALTER TABLE `atrezzo`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cableado`
--
ALTER TABLE `cableado`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `iluminacion`
--
ALTER TABLE `iluminacion`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54676;

--
-- AUTO_INCREMENT de la tabla `materialmontaje`
--
ALTER TABLE `materialmontaje`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `materialprestado`
--
ALTER TABLE `materialprestado`
  MODIFY `codigo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11224;

--
-- AUTO_INCREMENT de la tabla `otros`
--
ALTER TABLE `otros`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sonido`
--
ALTER TABLE `sonido`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112246;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `cod_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99862;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
