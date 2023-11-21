-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2023 at 04:28 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daw-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `musica`
--

DROP TABLE IF EXISTS `musica`;
CREATE TABLE IF NOT EXISTS `musica` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NombreC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Artista` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Genero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `NombreUser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Album` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `musica`
--

INSERT INTO `musica` (`ID`, `NombreC`, `Artista`, `Genero`, `Descripcion`, `img`, `NombreUser`, `Album`) VALUES
(1, 'Anonimo.mp3', 'El Cuarteto de Nos', 'Rock alternativo', 'Hermosa cancion de El Cuarteto De Nos', 'Anonimo El_Cuarteto_De_Nos.jpg', 'usuario1', 'Jueves'),
(2, 'Enamorado tuyo.mp3', 'El Cuarteto de Nos', 'Rock alternativo', 'Lo mejor del album \"Porfiado\"', 'Porfiado_Cuarteto_Nos.jpg', 'usuario2', 'Porfiado'),
(3, 'Lo malo de ser bueno.mp3', 'El Cuarteto de Nos', 'Rock alternativo', 'Lo mejor del album \"Porfiado\"', 'Porfiado_Cuarteto_Nos.jpg', 'usuario3', 'Porfiado'),
(4, 'Dreamer.mp3', 'Laufey', 'jazz', 'cancion popular de Laufey', 'Laufey Dreamer.jpg', 'usuario4', 'Bewitched'),
(5, 'From The Start.mp3', 'Laufey', 'Bossa nova', 'De las mejores canciones de Luafey', 'Laufey From the Start.jpg', 'usuario5', 'Bewitched');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `UserName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Contrasena` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `UltimasEscuchadas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci,
  `Favoritos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Nombre`, `UserName`, `Correo`, `Img`, `Contrasena`, `UltimasEscuchadas`, `Favoritos`) VALUES
('Adriel', 'Cubos', 'Email@gmail.com', 'logo colors cambiados.jpg', '$2y$15$8X7wgzEtbkSzn2569BrTxeHfZyhepCcFtoCfSpiULHf7M1MRbk1eu', NULL, NULL),
('qq', 'qq', 'qq', 'me.jpg', '$2y$15$xLmPhkyAHL2ynHQno/rLT.e7SO8namF4VKIJ6W0BZd1Fi7Fjk4iE2', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
