-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2023 at 08:46 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `musica`
--

INSERT INTO `musica` (`ID`, `NombreC`, `Artista`, `Genero`, `Descripcion`, `img`, `NombreUser`, `Album`) VALUES
(1, 'Anonimo', 'El Cuarteto de Nos', 'Rock alternativo', 'Hermosa cancion de El Cuarteto De Nos', 'album.jpg', 'usuario1', 'Jueves'),
(2, 'Enamorado tuyo', 'El Cuarteto de Nos', 'Rock alternativo', 'Lo mejor del album \"Porfiado\"', 'album.jpg', 'usuario2', 'Porfiado'),
(3, 'Lo malo de ser bueno', 'El Cuarteto de Nos', 'Rock alternativo', 'Lo mejor del album \"Porfiado\"', 'album.jpg', 'usuario3', 'Porfiado'),
(4, 'Dreamer', 'Laufey', 'jazz', 'cancion popular de Laufey', 'album.jpg', 'usuario4', 'Bewitched'),
(5, 'From The Start', 'Laufey', 'Bossa nova', 'De las mejores canciones de Luafey', 'album.jpg', 'usuario5', 'Bewitched'),
(6, 'Breezeblocks', 'alt-J', 'Rock', 'Directed by Ellis Bahl.', 'album.jpg', '', 'An Awesome Wave'),
(7, 'It\'s Called: Freefall', 'Rainbow Kitten Surprise', 'Rock', 'It\\\'s Called: Freefall', 'album.jpeg', '', 'How to: Friend, Love, Freefall');

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
  `Plan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'Gratuito',
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Nombre`, `UserName`, `Correo`, `Img`, `Contrasena`, `UltimasEscuchadas`, `Favoritos`, `Plan`) VALUES
('Adriel', 'Cubos', 'Email@gmail.com', 'logo colors cambiados.jpg', '$2y$15$8X7wgzEtbkSzn2569BrTxeHfZyhepCcFtoCfSpiULHf7M1MRbk1eu', NULL, NULL, 'Individual'),
('qq', 'qq', 'qq', 'me.jpg', '$2y$15$xLmPhkyAHL2ynHQno/rLT.e7SO8namF4VKIJ6W0BZd1Fi7Fjk4iE2', NULL, NULL, 'Individual'),
('Nestor Si Si', 'Neepoke', 'example_1@correo.com', 'porfile_photo.jpg', '$2y$15$1vy4O0GbqGkzx8TVpsG9iuW3kDZ8TWuT6Ko1YxYpIGyF/9wxpLyv6', '[{\"ID\":\"7\",\"NombreC\":\"It\'s Called: Freefall\",\"Artista\":\"Rainbow Kitten Surprise\",\"Album\":\"How to: Friend, Love, Freefall\",\"img\":\"album.jpeg\"},{\"ID\":\"4\",\"NombreC\":\"Dreamer\",\"Artista\":\"Laufey\",\"Album\":\"Bewitched\",\"img\":\"album.jpg\"},{\"ID\":\"6\",\"NombreC\":\"Breezeblocks\",\"Artista\":\"alt-J\",\"Album\":\"An Awesome Wave\",\"img\":\"album.jpg\"},{\"ID\":\"3\",\"NombreC\":\"Lo malo de ser bueno\",\"Artista\":\"El Cuarteto de Nos\",\"Album\":\"Porfiado\",\"img\":\"album.jpg\"},{\"ID\":null,\"NombreC\":null,\"Artista\":null,\"Album\":null,\"img\":null},{\"ID\":\"1\",\"NombreC\":\"Anonimo\",\"Artista\":\"El Cuarteto de Nos\",\"Album\":\"Jueves\",\"img\":\"album.jpg\"},{\"ID\":\"2\",\"NombreC\":\"Enamorado tuyo\",\"Artista\":\"El Cuarteto de Nos\",\"Album\":\"Porfiado\",\"img\":\"album.jpg\"},{\"ID\":\"5\",\"NombreC\":\"From The Start\",\"Artista\":\"Laufey\",\"Album\":\"Bewitched\",\"img\":\"album.jpg\"}]', '{}', 'Individual');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
