-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 28-12-2023 a las 14:51:47
=======
-- Tiempo de generación: 14-12-2023 a las 15:43:34
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_expedientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nombrearea` varchar(40) NOT NULL,
  `id_division` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area`
--

<<<<<<< HEAD
INSERT INTO `area` (`id`, `nombrearea`, `id_division`) VALUES
(1, 'Informatica', 1),
(2, 'Área de Recursos Humanos', 1),
(3, 'Área de Bienes Nacionales', 1),
(4, 'Despacho de la División de Administració', 1),
=======
INSERT INTO `area` (`id`, `nombrearea`, `id_division`) VALUES 
(1, 'Informatica', 1),
(2, 'Área de Recursos Humanos', 1),
(3, 'Área de Bienes Nacionales', 1),
(4, 'Despacho de la División de Administración', 1),
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718
(5, 'Área de Compras', 1),
(6, 'Área de Almacén ', 1),
(7, 'Área de Presupuesto', 1),
(8, 'Área de Contabilidad', 1),
(9, 'Área de Tesorería ', 1),
<<<<<<< HEAD
(10, 'Coordinación de Infraestructura y Servic', 1),
(11, 'Área de Viáticos ', 1),
(12, 'Despacho de Gerencia', 2),
(13, 'Resguardo', 2),
(14, 'Seguridad', 2),
(15, 'Despacho Asistencia al Contribuyente', 3),
(16, 'Área de Prensa', 3),
(17, 'Área De Cobranzas', 4),
(18, 'Modulo de Inserción', 4),
(19, 'Modulo Exoneración', 4),
(20, 'Modulo de Remisión', 4),
(21, 'Registro de Cta./Corriente', 4),
(22, 'Despacho División  de Recaudación ', 4),
(23, 'Modulo de Retenciones', 4),
(24, 'Entes Públicos ', 4),
(25, 'Área de Sucesiones', 4),
(26, 'Modulo Investigación Patrimonial', 4),
(27, 'Área de Rif', 4),
(28, 'Área de Licores', 4),
(29, 'Liquidación ', 4),
(30, 'Reintegro y Devoluciones', 4),
(31, 'Timbres Fiscales', 4),
(32, 'Despacho Fiscalización', 5),
(33, 'Fiscalización General', 5),
(34, 'Avaluo', 5),
(35, 'Selección Previa', 5),
(36, 'Deberes Formales', 5),
(37, 'Beneficios Fiscales', 5),
(38, 'Fondo y Semi Fondo', 5),
(39, 'Planificación y Control de Gestión ', 5),
(40, 'Despacho División de Sumario', 6),
(41, 'Área de Sustanciación de Sumario', 6),
(42, 'Área Cobro Judicial', 7),
(43, 'Recursos Administrativo y Jurídico ', 7),
(44, 'Despacho de la División', 7),
(45, 'Contencioso Tributario', 7),
(46, 'Sustanciación', 7),
(47, 'Área de Notificación', 8),
(48, 'Área de Vivienda Principal', 8),
(49, 'Área de Archivo General', 8),
(50, 'Área de Correspondencia', 8),
(51, 'Despacho de la División', 8),
(52, 'Área Control de Obligación', 9),
(53, 'Cobranza', 9),
(54, 'Área Control Bancario', 9),
(55, 'Asistencia al Contribuyente', 9),
(56, 'Despacho de la División', 9),
(57, 'Modulo de Correcciones y Análisis de Cue', 9),
(58, 'Contribuyentes Especiales Punto Fijo', 9);
=======
(10, 'Coordinación de Infraestructura y Servicios', 1),
(11, 'Área de Viáticos ', 1),
(12, 'Despacho de Gerencia', 1),
(13, 'Resguardo', 1),
(14, 'Seguridad', 1),
(15, 'Despacho Asistencia al Contribuyente', 1),
(16, 'Área de Prensa', 1),
(17, 'Área De Cobranzas', 1),
(18, 'Modulo de Inserción', 1),
(19, 'Modulo Exoneración', 1),
(20, 'Modulo de Remisión', 1),
(21, 'Registro de Cta./Corriente', 1),
(22, 'Despacho División  de Recaudación ', 1),
(23, 'Modulo de Retenciones', 1),
(24, 'Entes Públicos ', 1),
(25, 'Área de Sucesiones', 1),
(26, 'Modulo Investigación Patrimonial', 1),
(27, 'Área de Rif', 1),
(28, 'Área de Licores', 1),
(29, 'Liquidación ', 1),
(30, 'Reintegro y Devoluciones', 1),
(31, 'Timbres Fiscales', 1),
(32, 'Despacho Fiscalización', 1),
(33, 'Fiscalización General', 1),
(34, 'Evaluo', 1),
(35, 'Selección Previa', 1),
(36, 'Deberes Formales', 1),
(37, 'Beneficios Fiscales', 1),
(38, 'Fondo y Semi Fondo', 1),
(39, 'Planificación y Control de Gestión ', 1),
(40, 'Despacho División de Sumario', 1),
(41, 'Área de Sustanciación de Sumario', 1),
(42, 'Área Cobro Judicial', 1),
(43, 'Recursos Administrativo y Jurídico ', 1),
(44, 'Despacho de la División', 1),
(45, 'Contencioso Tributario', 1),
(46, 'Sustanciación', 1),
(47, 'Área de Notificación', 1),
(48, 'Área de Vivienda Principal', 1),
(49, 'Área de Archivo General', 1),
(50, 'Área de Correspondencia', 1),
(51, 'Despacho de la División', 1),
(52, 'Área Control de Obligación', 1),
(53, 'Cobranza', 1),
(54, 'Área Control Bancario', 1),
(55, 'Asistencia al Contribuyente', 1),
(56, 'Despacho de la División', 1),
(57, 'Modulo de Correcciones y Análisis de Cuenta', 1),
(58, 'Contribuyentes Especiales Punto Fijo', 1);
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_expediente`
--

CREATE TABLE `area_expediente` (
  `id` int(11) NOT NULL,
  `nombre_area` varchar(40) NOT NULL,
  `id_division_expediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
<<<<<<< HEAD
-- Volcado de datos para la tabla `area_expediente`
--

INSERT INTO `area_expediente` (`id`, `nombre_area`, `id_division_expediente`) VALUES
(1, 'Informatica', 1),
(2, 'Área de Recursos Humanos', 1),
(3, 'Área de Bienes Nacionales', 1),
(4, 'Despacho División de Administración', 1),
=======
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area_expediente` (`id`, `nombre_area`, `id_division_expediente`) VALUES 
(1, 'Informatica', 1),
(2, 'Área de Recursos Humanos', 1),
(3, 'Área de Bienes Nacionales', 1),
(4, 'Despacho de la División de Administración', 1),
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718
(5, 'Área de Compras', 1),
(6, 'Área de Almacén ', 1),
(7, 'Área de Presupuesto', 1),
(8, 'Área de Contabilidad', 1),
(9, 'Área de Tesorería ', 1),
<<<<<<< HEAD
(10, 'Coordinación de Infraestructura y Servic', 1),
(11, 'Área de Viáticos ', 1),
(12, 'Despacho de Gerencia', 2),
(13, 'Resguardo', 2),
(14, 'Seguridad', 2),
(15, 'Despacho Asistencia al Contribuyente', 3),
(16, 'Área de Prensa', 3),
(17, 'Área De Cobranzas', 4),
(18, 'Modulo de Inserción', 4),
(19, 'Modulo Exoneración', 4),
(20, 'Modulo de Remisión', 4),
(21, 'Registro de Cta./Corriente', 4),
(22, 'Despacho División  de Recaudación ', 4),
(23, 'Modulo de Retenciones', 4),
(24, 'Entes Públicos ', 4),
(25, 'Área de Sucesiones', 4),
(26, 'Modulo Investigación Patrimonial', 4),
(27, 'Área de Rif', 4),
(28, 'Área de Licores', 4),
(29, 'Liquidación ', 4),
(30, 'Reintegro y Devoluciones', 4),
(31, 'Timbres Fiscales', 4),
(32, 'Despacho Fiscalización', 5),
(33, 'Fiscalización General', 5),
(34, 'Avaluo', 5),
(35, 'Selección Previa', 5),
(36, 'Deberes Formales', 5),
(37, 'Beneficios Fiscales', 5),
(38, 'Fondo y Semi Fondo', 5),
(39, 'Planificación y Control de Gestión ', 5),
(40, 'Despacho División de Sumario', 6),
(41, 'Área de Sustanciación de Sumario', 6),
(42, 'Área Cobro Judicial', 7),
(43, 'Recursos Administrativo y Jurídico ', 7),
(44, 'Despacho de la División', 7),
(45, 'Contencioso Tributario', 7),
(46, 'Sustanciación', 7),
(47, 'Área de Notificación', 8),
(48, 'Área de Vivienda Principal', 8),
(49, 'Área de Archivo General', 8),
(50, 'Área de Correspondencia', 8),
(51, 'Despacho de la División', 8),
(52, 'Área Control de Obligación', 9),
(53, 'Cobranza', 9),
(54, 'Área Control Bancario', 9),
(55, 'Asistencia al Contribuyente', 9),
(56, 'Despacho de la División', 9),
(57, 'Modulo de Correcciones y Análisis de Cue', 9),
(58, 'Contribuyentes Especiales Punto Fijo', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_expediente`
--

CREATE TABLE `bitacora_expediente` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `movimiento_de_expediante` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nro_expediente` varchar(50) NOT NULL,
  `destino_expediendte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bitacora_expediente`
--

INSERT INTO `bitacora_expediente` (`id`, `fecha`, `movimiento_de_expediante`, `usuario`, `nro_expediente`, `destino_expediendte`) VALUES
(1, '2023-12-28 13:40:59', 'Se despacho el expediente de la División de Fiscalizacíon a la División de Sumario Administrativo.', '28055655, Cesar Vides', '23345435', 'División de Sumario Administrativo'),
(2, '2023-12-28 13:41:27', 'Se despacho el expediente de la División de Sumario Administrativo a la División de Fiscalizacíon.', '28055655, Cesar Vides', '23345435', 'División de Fiscalizacíon'),
(3, '2023-12-28 13:41:51', 'Se despacho el expediente de la División de Fiscalizacíon a la División de Tramitaciones.', '28055655, Cesar Vides', '23345435', 'División de Tramitaciones'),
(4, '2023-12-28 13:44:49', 'Se despacho el expediente de la División de Fiscalizacíon a la División de Sumario Administrativo.', '28055655, Cesar Vides', '23345435345345', 'División de Sumario Administrativo'),
(5, '2023-12-28 13:45:37', 'Se despacho el expediente de la División de Sumario Administrativo a la División de Tramitaciones.', '28055655, Cesar Vides', '23345435345345', 'División de Tramitaciones');
=======
(10, 'Coordinación de Infraestructura y Servicios', 1),
(11, 'Área de Viáticos ', 1),
(12, 'Despacho de Gerencia', 1),
(13, 'Resguardo', 1),
(14, 'Seguridad', 1),
(15, 'Despacho Asistencia al Contribuyente', 1),
(16, 'Área de Prensa', 1),
(17, 'Área De Cobranzas', 1),
(18, 'Modulo de Inserción', 1),
(19, 'Modulo Exoneración', 1),
(20, 'Modulo de Remisión', 1),
(21, 'Registro de Cta./Corriente', 1),
(22, 'Despacho División  de Recaudación ', 1),
(23, 'Modulo de Retenciones', 1),
(24, 'Entes Públicos ', 1),
(25, 'Área de Sucesiones', 1),
(26, 'Modulo Investigación Patrimonial', 1),
(27, 'Área de Rif', 1),
(28, 'Área de Licores', 1),
(29, 'Liquidación ', 1),
(30, 'Reintegro y Devoluciones', 1),
(31, 'Timbres Fiscales', 1),
(32, 'Despacho Fiscalización', 1),
(33, 'Fiscalización General', 1),
(34, 'Evaluo', 1),
(35, 'Selección Previa', 1),
(36, 'Deberes Formales', 1),
(37, 'Beneficios Fiscales', 1),
(38, 'Fondo y Semi Fondo', 1),
(39, 'Planificación y Control de Gestión ', 1),
(40, 'Despacho División de Sumario', 1),
(41, 'Área de Sustanciación de Sumario', 1),
(42, 'Área Cobro Judicial', 1),
(43, 'Recursos Administrativo y Jurídico ', 1),
(44, 'Despacho de la División', 1),
(45, 'Contencioso Tributario', 1),
(46, 'Sustanciación', 1),
(47, 'Área de Notificación', 1),
(48, 'Área de Vivienda Principal', 1),
(49, 'Área de Archivo General', 1),
(50, 'Área de Correspondencia', 1),
(51, 'Despacho de la División', 1),
(52, 'Área Control de Obligación', 1),
(53, 'Cobranza', 1),
(54, 'Área Control Bancario', 1),
(55, 'Asistencia al Contribuyente', 1),
(56, 'Despacho de la División', 1),
(57, 'Modulo de Correcciones y Análisis de Cuenta', 1),
(58, 'Contribuyentes Especiales Punto Fijo', 1);
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `nombrediv` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `division`
--

INSERT INTO `division` (`id`, `nombrediv`) VALUES
(1, 'Administracion'),
(2, 'Gerencia Regional de Tributos Internos'),
(3, 'División Asistencia al Contribuyente'),
(4, 'División de Recaudación'),
(5, 'División de Fiscalizacíon'),
(6, 'División de Sumario Administrativo'),
(7, 'División de Jurídico Tributario '),
(8, 'División de Tramitaciones'),
(9, 'División de Contribuyentes Especiales');
<<<<<<< HEAD

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `division_expediente`
--

CREATE TABLE `division_expediente` (
  `id` int(11) NOT NULL,
  `nombre_division` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `division_expediente`
--

INSERT INTO `division_expediente` (`id`, `nombre_division`) VALUES
(1, 'Administracion'),
(2, 'Gerencia Regional de Tributos Internos'),
(3, 'División Asistencia al Contribuyente'),
(4, 'División de Recaudación'),
(5, 'División de Fiscalizacíon'),
(6, 'División de Sumario Administrativo'),
(7, 'División de Jurídico Tributario '),
(8, 'División de Tramitaciones'),
(9, 'División de Contribuyentes Especiales');
=======
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `division_expediente`
--

CREATE TABLE `division_expediente` (
  `id` int(11) NOT NULL,
  `nombre_division` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `division_expediente`
--

INSERT INTO `division_expediente` (`id`, `nombre_division`) VALUES
(1, 'Administracion'),
(2, 'Gerencia Regional de Tributos Internos'),
(3, 'División Asistencia al Contribuyente'),
(4, 'División de Recaudación'),
(5, 'División de Fiscalizacíon'),
(6, 'División de Sumario Administrativo'),
(7, 'División de Jurídico Tributario '),
(8, 'División de Tramitaciones'),
(9, 'División de Contribuyentes Especiales');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entorno_sistema`
--

CREATE TABLE `entorno_sistema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_expediente`
--

CREATE TABLE `estado_expediente` (
  `id` int(11) NOT NULL,
  `estado_exp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_expediente`
--

INSERT INTO `estado_expediente` (`id`, `estado_exp`) VALUES
(1, 'En Revisión'),
(2, 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id` int(11) NOT NULL,
  `NroProvi` varchar(40) DEFAULT NULL,
  `sujetoP` varchar(40) NOT NULL,
  `RifSP` varchar(12) NOT NULL,
  `DomicilioFiscal` varchar(100) NOT NULL,
  `id_area_expediente` int(11) DEFAULT NULL,
  `id_estado_expedientes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id`, `NroProvi`, `sujetoP`, `RifSP`, `DomicilioFiscal`, `id_area_expediente`, `id_estado_expedientes`) VALUES
<<<<<<< HEAD
(21, '111111111', 'Cesar Vides', 'j-213123213', 'asdsadsa', 23, 1),
(22, '23345435', 'Cesar Vides', 'j-213123213', 'asdsadas', 49, 2),
(23, '23345435345345', 'Cesar Vides', 'j-213123213', 'asdasdasd', 49, 1);
=======
(16, '23345435', 'Cesar Vides', 'j-213123213', 'Calle 4 avenida a', NULL, 1);
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id` int(11) NOT NULL,
  `añadir` varchar(40) NOT NULL,
  `solicitar` varchar(40) NOT NULL,
  `ver` varchar(40) NOT NULL,
  `editar` varchar(40) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_entorno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombrerol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cedula_user` int(11) NOT NULL,
  `nombre_user` varchar(40) NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `nombre_rol` varchar(40) NOT NULL,
  `id_expedientes` int(11) DEFAULT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `cedula_user`, `nombre_user`, `id_area`, `nombre_rol`, `id_expedientes`, `password`) VALUES
(2, 28055655, 'Cesar Vides', 1, 'Fiscal', 1, '123123'),
(3, 28055651, 'Alejandro Vides', 1, 'Fiscal', 1, '123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userxexpediente`
--

CREATE TABLE `userxexpediente` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_expediente` int(11) NOT NULL,
  `supervisor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `userxexpediente`
--

INSERT INTO `userxexpediente` (`id`, `id_user`, `id_expediente`, `supervisor`) VALUES
<<<<<<< HEAD
(17, 2, 21, 'Cesar Vides'),
(18, 2, 22, '28055655, Cesar Vides'),
(19, 3, 23, '28055655, Cesar Vides');
=======
(14, 3, 16, 'katiuska');
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_division` (`id_division`);

--
-- Indices de la tabla `area_expediente`
--
ALTER TABLE `area_expediente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_division_expedientes` (`id_division_expediente`);

--
<<<<<<< HEAD
-- Indices de la tabla `bitacora_expediente`
--
ALTER TABLE `bitacora_expediente`
  ADD PRIMARY KEY (`id`);

--
=======
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718
-- Indices de la tabla `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `division_expediente`
--
ALTER TABLE `division_expediente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entorno_sistema`
--
ALTER TABLE `entorno_sistema`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_expediente`
--
ALTER TABLE `estado_expediente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estado_expedientes` (`id_estado_expedientes`),
  ADD KEY `id_area_expedientes` (`id_area_expediente`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_entorno` (`id_entorno`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_expedientes` (`id_expedientes`);

--
-- Indices de la tabla `userxexpediente`
--
ALTER TABLE `userxexpediente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_expediente` (`id_expediente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `area_expediente`
--
ALTER TABLE `area_expediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `bitacora_expediente`
--
ALTER TABLE `bitacora_expediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `area_expediente`
--
ALTER TABLE `area_expediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `division_expediente`
--
ALTER TABLE `division_expediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `division_expediente`
--
ALTER TABLE `division_expediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entorno_sistema`
--
ALTER TABLE `entorno_sistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_expediente`
--
ALTER TABLE `estado_expediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `expedientes`
--
ALTER TABLE `expedientes`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `userxexpediente`
--
ALTER TABLE `userxexpediente`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
>>>>>>> 494cc1196cc44ae7732592c15fc42fd85e55b718

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id_division`) REFERENCES `division` (`id`);

--
-- Filtros para la tabla `area_expediente`
--
ALTER TABLE `area_expediente`
  ADD CONSTRAINT `area_expediente_ibfk_1` FOREIGN KEY (`id_division_expediente`) REFERENCES `division_expediente` (`id`);

--
-- Filtros para la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD CONSTRAINT `expedientes_ibfk_1` FOREIGN KEY (`id_area_expediente`) REFERENCES `area_expediente` (`id`),
  ADD CONSTRAINT `fk_permisosEXP` FOREIGN KEY (`id_estado_expedientes`) REFERENCES `estado_expediente` (`id`);

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`id_entorno`) REFERENCES `entorno_sistema` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`);

--
-- Filtros para la tabla `userxexpediente`
--
ALTER TABLE `userxexpediente`
  ADD CONSTRAINT `fk_exp` FOREIGN KEY (`id_expediente`) REFERENCES `expedientes` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
