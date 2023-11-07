-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-11-2023 a las 18:16:51
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daw-db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`ID`, `NombreC`, `Artista`, `Genero`, `Descripcion`, `img`, `NombreUser`, `Album`) VALUES
(1, 'Anonimo.mp3', 'El Cuarteto de Nos', 'Rock alternativo', 'Hermosa cancion de El Cuarteto De Nos', 'Anonimo El_Cuarteto_De_Nos.jpg', 'usuario1', 'Jueves'),
(2, 'Enamorado tuyo.mp3', 'El Cuarteto de Nos', 'Rock alternativo', 'Lo mejor del album \"Porfiado\"', 'Porfiado_Cuarteto_Nos.jpg', 'usuario2', 'Porfiado'),
(3, 'Lo malo de ser bueno.mp3', 'El Cuarteto de Nos', 'Rock alternativo', 'Lo mejor del album \"Porfiado\"', 'Porfiado_Cuarteto_Nos.jpg', 'usuario3', 'Porfiado'),
(4, 'Dreamer.mp3', 'Laufey', 'jazz', 'cancion popular de Laufey', 'Laufey Dreamer.jpg', 'usuario4', 'Bewitched'),
(5, 'From The Start.mp3', 'Laufey', 'Bossa nova', 'De las mejores canciones de Luafey', 'Laufey From the Start.jpg', 'usuario5', 'Bewitched'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `UserName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Contraseña` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `FechaNac` date NOT NULL,
  `Edad` int NOT NULL,
  `Tel` int NOT NULL,
  `UltimasEscuchadas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci,
  `Favoritos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
