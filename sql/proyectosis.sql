-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2018 a las 07:14:34
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectosis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` int(100) NOT NULL COMMENT 'id restaurantes',
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'nombre restaurantes',
  `telefono` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'telefono restaurantes',
  `direccion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'direccion restaurantes',
  `web` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'web restaurantes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla restaurantes';

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `nombre`, `telefono`, `direccion`, `web`) VALUES
(1, 'Formosa', '(4) 3118789', 'Carrera 35 #7-52 (3,43 km)\r\nMedellin', 'https://es-la.facebook.com/formosa101mde/'),
(2, 'Sarku', '(4) 444 1100', 'CC Los Molinos (82a-26, Cl. 30a, MedellÃ­n, Antioquia)', 'http://www.sarkujapan.com.co/'),
(3, 'Denver', '(4)366 51 40', 'C.C. La Strada local 250 (Av. El Poblado #1S-82, Med, Ant)', 'https://www.restaurantedenver.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblclientes`
--

CREATE TABLE `tblclientes` (
  `id` int(9) NOT NULL COMMENT 'clave primaria tabla',
  `nombre` varchar(50) DEFAULT NULL COMMENT 'nombre del cliente',
  `apellido` varchar(50) DEFAULT NULL COMMENT 'apellido del cliente',
  `nacimiento` date DEFAULT NULL COMMENT 'fecha de nacimiento',
  `identificacion` bigint(18) DEFAULT NULL COMMENT 'identicacion del cliente',
  `correo` varchar(80) NOT NULL COMMENT 'correo electronico'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='almacena clientes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `id` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`id`, `nombre`, `correo`, `clave`) VALUES
(1, 'JUAN FERNANDO', 'juanff@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'CARLOS JUAN FERNANDO', 'juanff1@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(3, 'JULIAN FERNANDEZ', 'juanff2@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'DIANA ALAVREZ', 'juanff3@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(5, 'SANDRA ZAPATA', 'juanff4@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(6, 'ANTONIO DIAZ', 'juanff5@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(7, 'jhon', 'jhon@jhon.com', ''),
(8, 'tatiana', 'tatigonzalez0517@gmail.com', '7471'),
(9, 'Tatiana', 'tatigonzalez0517@gmamil.com', 'sebastian1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblclientes`
--
ALTER TABLE `tblclientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `por_identificacion` (`identificacion`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'id restaurantes', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblclientes`
--
ALTER TABLE `tblclientes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT COMMENT 'clave primaria tabla';

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
