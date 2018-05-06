-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 06 mai 2018 à 09:12
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
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` char(50) NOT NULL,
  `Prenom` char(50) NOT NULL,
  `Statut` tinytext NOT NULL,
  `NumeroAppartement` int(100) NOT NULL,
  `NumeroEtage` tinyint(200) NOT NULL,
  `NumeroRue` int(200) NOT NULL,
  `Bis` tinytext,
  `PrefixeRueAveBd` tinytext NOT NULL,
  `NomRueAveBd` char(50) NOT NULL,
  `NumeroDepartement` int(20) NOT NULL,
  `Ville` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `NumeroTelephone` int(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`ID`, `Nom`, `Prenom`, `Statut`, `NumeroAppartement`, `NumeroEtage`, `NumeroRue`, `Bis`, `PrefixeRueAveBd`, `NomRueAveBd`, `NumeroDepartement`, `Ville`, `Email`, `NumeroTelephone`) VALUES
(1, 'nom', 'preomn', 'Gérant', 5, 5, 46, NULL, 'avenue', 'Champs de Mars', 71, 'Paris', 'fr@fr.fr', 32),
(2, 'ce', 'bji', 'proprietaire', 2, 95, 6, 'bis', 'rue', 'pk', 9559, 'Panam', 'lpszsz@szop.de', 156497);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
