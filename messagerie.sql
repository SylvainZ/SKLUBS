-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 24 mai 2018 à 09:46
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `homemate`
--

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Expediteur` text NOT NULL,
  `Sujet` varchar(25) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `Reception` text NOT NULL,
  `Message` text NOT NULL,
  `Statut` varchar(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`ID`, `Expediteur`, `Sujet`, `Date`, `Reception`, `Message`, `Statut`) VALUES
(1, 'Toi', 'Teste', '2006-05-08 00:00:00.000000', 'Moi', 'Bonjour', 'Admin'),
(2, 'Sylvain', 'Bonjour', '2018-05-23 00:00:00.000000', 'Kévin', 'Cordialement', 'Admin'),
(3, 'Sylvain', 'Bonjour', '2018-05-23 00:00:00.000000', 'Kévin', 'Cordialement', 'Admin'),
(4, 'fez,ok;', 'buhnij,', '2018-05-30 06:19:23.388411', 'moi', 'vebcundi,okxps', 'admin'),
(5, 'fez,ok;', 'buhnij,', '2018-05-30 06:19:23.388411', 'moi', 'vebcundi,okxps', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
