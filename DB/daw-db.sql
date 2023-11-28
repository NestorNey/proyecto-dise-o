-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2023 at 04:59 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
(7, 'It\'s Called: Freefall', 'Rainbow Kitten Surprise', 'Rock', 'It\\\'s Called: Freefall', 'album.jpeg', '', 'How to: Friend, Love, Freefall'),
(8, 'Heart To Heart', 'Mac DeMarco', 'Folk/Acustico', 'A beatiful song', 'album.jpg', '', 'Here Comes The Cowboy'),
(9, 'Someone To Spend Time With', 'Los Retros', 'Folk/Acustico', 'A beatiful song', 'album.jpeg', '', 'Someone To Spend Time With'),
(10, 'Kendrick Lamar', 'PRIDE', '', 'A beatiful song', 'album.png', '', 'Hip Hop'),
(11, 'Rises the moon', 'Liana Flores', 'Folk/Pop', 'A beatiful song', 'album.png', '', 'Recently'),
(12, 'Instant Crush', 'Daft Punk', 'Synthpop', 'A beatiful song', 'album.jpeg', '', 'Random Access Memories'),
(13, 'Habits (Stay High)', 'Tove Lo', 'Electronica', 'A beatiful song', 'album.png', '', 'Queen of the Clouds'),
(14, 'Let\'s Go', 'Stuck in the Sound', 'Rock', 'A beatiful song', 'album.jpg', '', 'Pursuit'),
(15, 'Así como hoy', 'Alegres de la sierra', 'Banda', 'asi como hoy', 'album.jpg', '', '10 Años de exito'),
(16, 'De Rodillas Te Pido', 'Alegres de la sierra', 'Banda', 'A beatiful song', 'album.jpg', '', 'Juegos del amor'),
(17, 'Solo Un Dia (Ahora Te Amo)', 'Adan Romero', 'Banda', 'A beatiful song', 'album.jpg', '', 'En Vivo'),
(18, 'Se va muriendo mi alma', 'Remmy Valenzuela', 'Banda', 'A beatiful song', 'album.jpg', '', 'Mi Vida En Vida'),
(19, 'El No Lo Mato', 'El Haragan y Cia', 'Rock', 'A beatiful song', 'album.jpg', '', '15 Éxitos de Colección'),
(20, 'Siguiendo la Luna', 'Los Fabulosos Cadillacs', 'Rock', 'A beatiful song', 'album.jpg', '', '');

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
('Nestor Si Si', 'Neepoke', 'example_1@correo.com', 'porfile_photo.jpg', '$2y$15$1vy4O0GbqGkzx8TVpsG9iuW3kDZ8TWuT6Ko1YxYpIGyF/9wxpLyv6', '[{\"ID\":\"6\",\"NombreC\":\"Breezeblocks\",\"Artista\":\"alt-J\",\"Album\":\"An Awesome Wave\",\"img\":\"album.jpg\"},{\"ID\":\"2\",\"NombreC\":\"Enamorado tuyo\",\"Artista\":\"El Cuarteto de Nos\",\"Album\":\"Porfiado\",\"img\":\"album.jpg\"},{\"ID\":\"1\",\"NombreC\":\"Anonimo\",\"Artista\":\"El Cuarteto de Nos\",\"Album\":\"Jueves\",\"img\":\"album.jpg\"},{\"ID\":\"20\",\"NombreC\":\"Siguiendo la Luna\",\"Artista\":\"Los Fabulosos Cadillacs\",\"Album\":\"\",\"img\":\"album.jpg\"},{\"ID\":\"19\",\"NombreC\":\"El No Lo Mato\",\"Artista\":\"El Haragan y Cia\",\"Album\":\"15 \\u00c9xitos de Colecci\\u00f3n\",\"img\":\"album.jpg\"},{\"ID\":\"18\",\"NombreC\":\"Se va muriendo mi alma\",\"Artista\":\"Remmy Valenzuela\",\"Album\":\"Mi Vida En Vida\",\"img\":\"album.jpg\"},{\"ID\":\"17\",\"NombreC\":\"Solo Un Dia (Ahora Te Amo)\",\"Artista\":\"Adan Romero\",\"Album\":\"En Vivo\",\"img\":\"album.jpg\"},{\"ID\":\"16\",\"NombreC\":\"De Rodillas Te Pido\",\"Artista\":\"Alegres de la sierra\",\"Album\":\"Juegos del amor\",\"img\":\"album.jpg\"},{\"ID\":\"15\",\"NombreC\":\"As\\u00ed como hoy\",\"Artista\":\"Alegres de la sierra\",\"Album\":\"10 A\\u00f1os de exito\",\"img\":\"album.jpg\"},{\"ID\":\"14\",\"NombreC\":\"Let\'s Go\",\"Artista\":\"Stuck in the Sound\",\"Album\":\"Pursuit\",\"img\":\"album.jpg\"},{\"ID\":\"13\",\"NombreC\":\"Habits (Stay High)\",\"Artista\":\"Tove Lo\",\"Album\":\"Queen of the Clouds\",\"img\":\"album.png\"},{\"ID\":\"12\",\"NombreC\":\"Instant Crush\",\"Artista\":\"Daft Punk\",\"Album\":\"Random Access Memories\",\"img\":\"album.jpeg\"},{\"ID\":\"11\",\"NombreC\":\"Rises the moon\",\"Artista\":\"Liana Flores\",\"Album\":\"Recently\",\"img\":\"album.png\"},{\"ID\":\"10\",\"NombreC\":\"Kendrick Lamar\",\"Artista\":\"PRIDE\",\"Album\":\"Hip Hop\",\"img\":\"album.png\"},{\"ID\":\"9\",\"NombreC\":\"Someone To Spend Time With\",\"Artista\":\"Los Retros\",\"Album\":\"Someone To Spend Time With\",\"img\":\"album.jpeg\"},{\"ID\":\"8\",\"NombreC\":\"Heart To Heart\",\"Artista\":\"Mac DeMarco\",\"Album\":\"Here Comes The Cowboy\",\"img\":\"album.jpg\"}]', '{}', 'Anual'),
('otro user', 'Otro user', 'otro', 'Tove_Lo_-_Queen_of_the_Clouds.png', '$2y$15$8q3i7uGIWJmVwt.4t1FrhuQsryvKt2SRBNH15Ae7c5aAcCarlv7s.', '[{\"ID\":\"1\",\"NombreC\":\"Anonimo\",\"Artista\":\"El Cuarteto de Nos\",\"Album\":\"Jueves\",\"img\":\"album.jpg\"}]', '{}', 'Gratuito');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
