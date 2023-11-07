-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2023 at 05:58 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `musica`
--

INSERT INTO `musica` (`ID`, `NombreC`, `Artista`, `Genero`, `Descripcion`, `img`, `NombreUser`, `Album`) VALUES
(1, 'Despacito', 'Luis Fonsi', 'Reggaeton', 'Hit song featuring Daddy Yankee', 'img1', 'usuario1', 'Despacito'),
(2, 'Vivir Mi Vida', 'Marc Anthony', 'Salsa', 'Popular Marc Anthony song', 'img2', 'usuario2', '3.0'),
(3, 'La Camisa Negra', 'Juanes', 'Pop', 'Famous song by Juanes', 'img3', 'usuario3', 'Mi Sangre'),
(4, 'Bailando', 'Enrique Iglesias', 'Pop', 'Enrique Iglesias hit featuring Gente de Zona and Descemer Bueno', 'img4', 'usuario4', 'Sex and Love'),
(5, 'Danza Kuduro', 'Don Omar', 'Reggaeton', 'Popular song by Don Omar and Lucenzo', 'img5', 'usuario5', 'Meet the Orphans'),
(6, 'Chantaje', 'Shakira', 'Pop', 'Shakira song featuring Maluma', 'img6', 'usuario6', 'El Dorado'),
(7, 'La Tortura', 'Shakira', 'Pop', 'Hit song by Shakira featuring Alejandro Sanz', 'img7', 'usuario7', 'Fijación Oral Vol. 1'),
(8, 'Gasolina', 'Daddy Yankee', 'Reggaeton', 'Famous Daddy Yankee song', 'img8', 'usuario8', 'Barrio Fino'),
(9, 'Felices los 4', 'Maluma', 'Reggaeton', 'Popular Maluma song', 'img9', 'usuario9', 'F.A.M.E.'),
(10, 'El Perdón', 'Nicky Jam', 'Reggaeton', 'Nicky Jam hit featuring Enrique Iglesias', 'img10', 'usuario10', 'Fénix');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
