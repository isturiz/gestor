-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 05:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repositorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `archivo`
--

CREATE TABLE `archivo` (
  `idArchivo` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `peso` varchar(45) NOT NULL,
  `formato` varchar(45) NOT NULL,
  `ruta` varchar(200) DEFAULT NULL,
  `cedulaUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archivo`
--

INSERT INTO `archivo` (`idArchivo`, `idCategoria`, `nombre`, `peso`, `formato`, `ruta`, `cedulaUsuario`) VALUES
(43, 0, 'tailwind.config', '111', 'js', '../../uploads/tailwind.config.js', 1),
(45, 0, '2890258569_Hand_stand_on_Salto_Angel_in_Venez', '639264', 'png', '../../uploads/2890258569_Hand_stand_on_Salto_Angel_in_Venezuela__Realistic.png', 1),
(48, 0, 'Logo', '127070', 'png', '../../uploads/Logo.png', 28286521);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre_cat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_archivo`
--

CREATE TABLE `detalle_archivo` (
  `idArchivo` int(11) NOT NULL,
  `Personal_cedula` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nivel_usuario`
--

CREATE TABLE `nivel_usuario` (
  `idNivelUsuario` int(11) NOT NULL,
  `nivel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contrase??a` varchar(45) NOT NULL,
  `idNivelUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`cedula`, `nombre`, `apellido`, `telefono`, `correo`, `contrase??a`, `idNivelUsuario`) VALUES
(1, 'testeeee', 'test', 'test', 'test@test.com', 'test', 1),
(2, '2', '2', '2', 'nombre@dominio.com', '', 2),
(123, 'asdf', 'asdf', '123', 'asdf@asdf', 'asdf', 5),
(28286521, 'Mau', 'Ist??riz', '4121511816', 'isturiz@gmail.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`idArchivo`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `detalle_archivo`
--
ALTER TABLE `detalle_archivo`
  ADD PRIMARY KEY (`idArchivo`,`Personal_cedula`);

--
-- Indexes for table `nivel_usuario`
--
ALTER TABLE `nivel_usuario`
  ADD PRIMARY KEY (`idNivelUsuario`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archivo`
--
ALTER TABLE `archivo`
  MODIFY `idArchivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
