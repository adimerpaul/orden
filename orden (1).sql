-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2019 a las 05:08:54
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `orden`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  `razon` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `cable` varchar(150) NOT NULL,
  `telefonico` varchar(150) NOT NULL,
  `nodo` varchar(150) NOT NULL,
  `manzano` varchar(150) NOT NULL,
  `tap` varchar(150) NOT NULL,
  `boca` varchar(150) NOT NULL,
  `sp` varchar(150) NOT NULL,
  `plan` varchar(150) NOT NULL,
  `zona` varchar(150) NOT NULL,
  `edificio` varchar(150) NOT NULL,
  `departamento` varchar(150) NOT NULL,
  `fechaprogramada` date NOT NULL,
  `observacion` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `telefono`, `razon`, `direccion`, `cable`, `telefonico`, `nodo`, `manzano`, `tap`, `boca`, `sp`, `plan`, `zona`, `edificio`, `departamento`, `fechaprogramada`, `observacion`, `fecha`) VALUES
(1, '5263072', 'JOSE LUIS HUANCA MEDINA', 'TOLEDO #117 ENTRE TOMAS FRIAS Y RENGEL', '040467', '11381', '10', '14', '10', '1', 'SP1 SP2 SP3', 'A', 'NODO-1', '', '', '2018-05-15', 'fono REF 72422269 casa 2 pisos color beish garaje plomo acera este', '2019-10-14 19:46:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE `concepto` (
  `idconcepto` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `concepto` varchar(100) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `costo` varchar(100) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `concepto`
--

INSERT INTO `concepto` (`idconcepto`, `codigo`, `concepto`, `cantidad`, `costo`, `idcliente`) VALUES
(1, 'CB', 'CONEXION BASICA', '1', '230', 1),
(3, 'PA', 'PUNTO ADICIONAL', '1', '60', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `idmateriales` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `codigo` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `cantidad` varchar(150) NOT NULL,
  `costo` varchar(150) NOT NULL,
  `unidad` varchar(150) NOT NULL,
  `utilizado` varchar(150) NOT NULL,
  `dif` varchar(150) NOT NULL,
  `idtrabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`idmateriales`, `fecha`, `codigo`, `nombre`, `cantidad`, `costo`, `unidad`, `utilizado`, `dif`, `idtrabajo`) VALUES
(1, '2019-10-14 19:54:04', '01010102234', 'CABLE RG6', '', '', 'mts', '', '', 1),
(2, '2019-10-14 19:54:40', '0101012237', 'CONECTORES', '', '', 'Pza.', '10', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `idtecnico` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `user` varchar(150) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` varchar(20) NOT NULL DEFAULT 'TECNICO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`idtecnico`, `nombre`, `codigo`, `user`, `clave`, `fecha`, `tipo`) VALUES
(1, 'M AGUIRRE', '', 'aguirre', 'aguirre', '2019-10-14 19:50:36', 'TECNICO'),
(2, 'G CASTILLOS', '', 'CASTILLO', 'CASTILLO', '2019-10-14 19:50:36', 'TECNICO'),
(3, 'ADMIN', '', 'ADMIN', 'ADMIN', '2019-10-14 19:58:01', 'ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `idtrabajo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idtecnico` int(11) NOT NULL,
  `observacion` varchar(150) NOT NULL,
  `termina` varchar(150) NOT NULL,
  `empieza` varchar(150) NOT NULL,
  `total` varchar(150) NOT NULL,
  `notas` varchar(150) NOT NULL,
  `pendiente` varchar(150) NOT NULL,
  `inspecion` varchar(150) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `firma` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `estado` varchar(30) NOT NULL DEFAULT 'CREADO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`idtrabajo`, `fecha`, `idtecnico`, `observacion`, `termina`, `empieza`, `total`, `notas`, `pendiente`, `inspecion`, `idcliente`, `firma`, `tipo`, `estado`) VALUES
(1, '2019-10-14 19:52:30', 2, 'FUNCINANDO 2 TV', '15:00', '14:00', '', 'se realizo', '', '', 1, '', 'INSTALACION\r\n', 'CREADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD PRIMARY KEY (`idconcepto`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`idmateriales`),
  ADD KEY `idtrabajo` (`idtrabajo`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`idtecnico`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`idtrabajo`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idtecnico` (`idtecnico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `concepto`
--
ALTER TABLE `concepto`
  MODIFY `idconcepto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `idmateriales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `idtecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `idtrabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD CONSTRAINT `concepto_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`idtrabajo`) REFERENCES `trabajo` (`idtrabajo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajo_ibfk_2` FOREIGN KEY (`idtecnico`) REFERENCES `tecnico` (`idtecnico`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
