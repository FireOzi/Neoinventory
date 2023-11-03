-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 00:46:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_medellin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `cod_usuario` int(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`cod_usuario`, `usuario`, `password`) VALUES
(1, 'admin', '2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_producto` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `proveedor` varchar(50) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `precio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `nombre`, `proveedor`, `cantidad`, `precio`) VALUES
(1, 'De todito natural', 'Frito lay', 50, 2500),
(2, 'Todo rico BBQ', 'Super ricas', 60, 2500),
(3, 'Maizitos limon', 'Ramo', 30, 1700),
(4, 'Pony malta', 'Bavaria', 30, 1500),
(5, 'Doritos queso', 'Frito lay', 35, 2800),
(6, 'Galletas capri wafer', 'Colombina', 24, 300),
(7, 'Tostacos picante', 'Ramo', 28, 2000),
(8, 'Golochips', 'Noel', 24, 2400),
(9, 'Burbuja jet', 'Nutresa', 48, 800),
(10, 'Galletas milo', 'Nestle', 24, 1200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `cod_proveedor` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `telefono` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`cod_proveedor`, `nombre`, `contacto`, `telefono`) VALUES
(1, 'Frito Lay', 'Angel Perez', 3108582302),
(2, 'Super ricas', 'Miguel Zapata', 3203218856),
(3, 'Ramo', 'Pedro Sanchez', 3203456789),
(4, 'Bavaria', 'Ana Gomez', 3104567890),
(5, 'Colombina', 'Sofia Gonzalez', 3109876543),
(6, 'Noel', 'Luis Fernandez', 3209012345),
(7, 'Nutresa', 'Carlos Torres	', 3107890123),
(8, 'Nestle', 'Maria Lopez', 3206789012);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`cod_proveedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
