

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
CREATE DATABASE  `managementtheatre`;
USE  `managementtheatre`;

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
('alargadera', '2', '10', 'escenaio', 2),
('regleta 2 conexiones', '2', '5 metros', 'escenario', 9),
('xlr', '20', '5', 'escenario', 10),
('regleta 5 conexiones', '2', '5', 'escenario', 12),
('alargaderas', '7', '2 metros', 'escenario', 13);

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
  `categoria` varchar(50) NOT NULL,
  `anio_ingreso` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `credenciales`
--

INSERT INTO `credenciales` (`dni`, `nombre`, `apellidos`, `user`, `password`, `categoria`, `anio_ingreso`, `direccion`, `telefono`) VALUES
('11224455J', 'Pepe', 'Ruiz Garrido', 'peponido79', 'peponido.ruiz1', 'jefe', '2002', 'Calle azabache 68', '672 24 87 08'),
('123456789M', 'Luz Divina', 'Vargas', 'luzdi10', 'luzdi.vargas10', 'jefe', '2002', 'calle almeria 1', '664725588'),
('15425699N', 'Fernando', 'Sierra  tomas', 'ferseo91', 'ferseoadministrador.', 'administrador', '2010', 'Calle Bacares 2,1º 13', '633 32 72 15'),
('21165588S', 'Sergio', 'Alonso Latorre', 'sergitoL25', 'sergito.latorre', 'ayudante', '2018', ' Calle Capitán 2, 4 D', '633 25 88 99');

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
(54672, 'mesa luces', 'grandMA', 'ma3', '1', 'gestion y manejo de luces', 'control', '2020', 'dmx 5 pines', '2021', 'necesita actualizar el software'),
(54677, 'foco spot', 'pointe', 's500', '4', 'juego de luces', 'escenario ', '2020', 'dmx 5 pines', '', ''),
(54679, 'foco spot', 'vari lite', 's3000', '4', 'juego de luces', 'escenario', '2021', 'dmx 5 pines', '2022', 'todo ok'),
(54681, 'foco recorte', 'standlighting', '15/32', '4', 'luces puntuales', 'escenario y puente frontal', '2007', 'dimmer', '2021', 'todo ok'),
(54682, 'foco wash', 'pageant', 's159', '12', 'relleno de iluminacion en el escenario ', 'escenario', '2018', 'dmx 3 y 5 pines', '2021', 'las carcasas presentan manchas');

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
('escenario desmontable', '1', 'escenario para actos', 'palacio de deportes', 'el tamaño es 8x6 metros', 4),
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
  `personaPrestamo` varchar(50) NOT NULL,
  `devuelto` varchar(50) NOT NULL,               
  `estado_devolucion` varchar(250) NOT NULL,      
  `trabajador_presta` varchar(50) NOT NULL,        
  `trabajador_recibe` varchar(50) NOT NULL        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materialprestado`
--

INSERT INTO `materialprestado` (`codigo`, `materialPrestado`, `diaRetirada`, `diaEntrega`, `estadoMaterial`, `observaciones`, `personaPrestamo`, `devuelto`, `estado_devolucion`,`trabajador_presta`, `trabajador_recibe` ) VALUES
(11256, 'micro', '1 de enero', '12 de diciembre', 'se va perfecto', 'No hay reseñas a mostrar, todo está correcto.', 'luis', 'false', NULL, 'sergio', NULL),
(11298, 'altavoz activo bateria', '14-2-2022', '20-3-2022', 'todo ok', 'incluye micro diadema y micro inhalambrico', 'aleju', 'false' , NULL, 'sergio', NULL),
(11299, 'mesa de luces grandMA3', '22-2-2022', '1-3-2022', 'todo ok', 'No hay contenido a mostrar, todo esta correcto.', 'tjl producciones', 'false', NULL, 'fernando', NULL);

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
(112239, 'mesa de sonido', 'yamaha', 'tf3', '1', 'gestion y mezcla del sonido del teatro', 'cabina', '2018', 'xlr, rca, rj45, jack 6.5', '2021', 'le falta un fader'),
(112243, 'altavoces PA', 'easte', '1000', '1', 'sonido general de teatro', 'escenario', '2007', 'espeakon', '2022', 'conta de dos medios agudos y dos graves'),
(112246, 'microfono', 'senheiser', 's400e', '1', 'amplificacion de voz', 'escenario', '2021', 'inhalambrica', '2021', 'todo ok');

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
  `cod_tarea` int(11) NOT NULL,
  `realizada` varchar(10) NOT NULL               
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`tipoTarea`, `trabajadorDesempenia`, `diaTarea`, `horarioTarea`, `lugarTarea`, `cod_tarea`, `realizada`) VALUES
('papeleo casa juventud', 'pepe', '8-3-2022', '9.00-11.00am', 'casa juventud', 6 , 'false'),
('montar sonido', 'fernando', '8-3-2022', '12.00-15.00am', 'teatro', 21, 'false'),
('reunion jefas', 'pepe', '8-3-2022', '8.00-9.00am', 'casa de la juventud', 27, 'false'),
('Montar sillas', 'sergio', '8-3-2022', '11.00-12.00am', 'hall teatro', 34, 'false'),
('limpiar bancos', 'sergio', '8-3-2022', '8.00-9.00am', 'ubicacion bancos', 35, 'false'),
('recoger mesas', 'fernando', '8-3-2022', '10.00', 'palacio', 36, 'false'),
('recoger sillas', 'pepe', '8-3-2022', '11.00am-11.30am', 'pabellon ', 37, 'false');

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
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `iluminacion`
--
ALTER TABLE `iluminacion`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54683;

--
-- AUTO_INCREMENT de la tabla `materialmontaje`
--
ALTER TABLE `materialmontaje`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `materialprestado`
--
ALTER TABLE `materialprestado`
  MODIFY `codigo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11300;

--
-- AUTO_INCREMENT de la tabla `otros`
--
ALTER TABLE `otros`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sonido`
--
ALTER TABLE `sonido`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112248;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `cod_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99862;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
