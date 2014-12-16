CREATE DATABASE exo;
USE exo;
-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 19 Novembre 2014 à 08:50
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `exo`
--

-- --------------------------------------------------------

--
-- Structure de la table `chaine`
--

CREATE TABLE IF NOT EXISTS `chaine` (
  `Id_Chaine` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Nom_Chaine` varchar(25) NOT NULL,
  `Img_Chaine` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Chaine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `diffusion`
--

CREATE TABLE IF NOT EXISTS `diffusion` (
  `Id_Diffusion` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Id_Programme` int(8) unsigned zerofill NOT NULL,
  `Id_Chaine` smallint(5) unsigned zerofill NOT NULL,
  `Horaire_Deb` datetime NOT NULL,
  `Horaire_Fin` datetime NOT NULL,
  PRIMARY KEY (`Id_Diffusion`),
  KEY `Fk_Diffusion_Programme` (`Id_Programme`),
  KEY `Fk_Diffusion_Chaine` (`Id_Chaine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELATIONS POUR LA TABLE `diffusion`:
--   `Id_Programme`
--       `programme` -> `Id_Programme`
--   `Id_Chaine`
--       `chaine` -> `Id_Chaine`
--

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `Id_Genre` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Nom_Genre` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_Genre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `internaute`
--

CREATE TABLE IF NOT EXISTS `internaute` (
  `Id_Internaute` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Nom_Internaute` varchar(20) NOT NULL,
  `Prenom_Internaute` varchar(20) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Mdp` varchar(32) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `admin` boolean NOT NULL,
  PRIMARY KEY (`Id_Internaute`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `juger`
--

CREATE TABLE IF NOT EXISTS `juger` (
  `Id_Internaute` int(8) unsigned zerofill NOT NULL,
  `Id_Programme` int(8) unsigned zerofill NOT NULL,
  `Note` int(2) NOT NULL,
  `Avis` text NOT NULL,
  PRIMARY KEY (`Id_Internaute`,`Id_Programme`),
  KEY `Fk_Juger_Programme` (`Id_Programme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS POUR LA TABLE `juger`:
--   `Id_Internaute`
--       `internaute` -> `Id_Internaute`
--   `Id_Programme`
--       `programme` -> `Id_Programme`
--

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `Id_Programme` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Nom_Programme` varchar(50) NOT NULL,
  `Image_Programme` varchar(50) DEFAULT NULL,
  `Description` text NOT NULL,
  `Pegi` int(10) unsigned DEFAULT NULL,
  `Inedit` tinyint(1) DEFAULT NULL,
  `Saison` int(10) unsigned DEFAULT NULL,
  `Episode` int(10) unsigned DEFAULT NULL,
  `Duree` time NOT NULL,
  `Id_Genre` smallint(5) unsigned zerofill NOT NULL,
  `Id_Type` smallint(5) unsigned zerofill NOT NULL,
  PRIMARY KEY (`Id_Programme`),
  KEY `Fk_Programme_Genre` (`Id_Genre`),
  KEY `Fk_Programme_Type` (`Id_Type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- RELATIONS POUR LA TABLE `programme`:
--   `Id_Genre`
--       `genre` -> `Id_Genre`
--   `Id_Type`
--       `type` -> `Id_Type`
--

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `Id_Type` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Nom_Type` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_Type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `diffusion`
--
ALTER TABLE `diffusion`
  ADD CONSTRAINT `Fk_Diffusion_Programme` FOREIGN KEY (`Id_Programme`) REFERENCES `programme` (`Id_Programme`),
  ADD CONSTRAINT `Fk_Diffusion_Chaine` FOREIGN KEY (`Id_Chaine`) REFERENCES `chaine` (`Id_Chaine`);

--
-- Contraintes pour la table `juger`
--
ALTER TABLE `juger`
  ADD CONSTRAINT `Fk_Juger_Internaute` FOREIGN KEY (`Id_Internaute`) REFERENCES `internaute` (`Id_Internaute`),
  ADD CONSTRAINT `Fk_Juger_Programme` FOREIGN KEY (`Id_Programme`) REFERENCES `programme` (`Id_Programme`);

--
-- Contraintes pour la table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `Fk_Programme_Genre` FOREIGN KEY (`Id_Genre`) REFERENCES `genre` (`Id_Genre`),
  ADD CONSTRAINT `Fk_Programme_Type` FOREIGN KEY (`Id_Type`) REFERENCES `type` (`Id_Type`);

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`Id_Genre`, `Nom_Genre`) VALUES
(00001, 'Comedie'),
(00002, 'Jeux'),
(00003, 'Autobiographie'),
(00004, 'Action'),
(00005, 'Science Fiction'),
(00006, 'Drame'),
(00007, 'Tele Realite'),
(00008, 'Policier'),
(00009, 'Politique'),
(00010, 'Historique'),
(00011, 'Fantastique'),
(00012, 'Catastrophe'),
(00013, 'Horreur');


--
-- Contenu de la table `internaute`
--

INSERT INTO `internaute` (`Id_Internaute`, `Nom_Internaute`, `Prenom_Internaute`, `Pseudo`, `Mdp`, `Mail`, `admin`) VALUES
(00000001, 'Rosette', 'Aymerica', 'Aymerica', 'b890b207381df06b12c82200068952e6', 'ayme@rica.fr', 1),
(00000002, 'Leroy', 'Orane', 'Owrane', 'b890b207381df06b12c82200068952e6', 'ora@ne.fr', 1),
(00000003, 'Chassain', 'Adrien', 'Adrien', 'b890b207381df06b12c82200068952e6', 'adr@ien.fr', 1),
(00000004, 'Frbezar', 'Nicolas', 'Nicolabricot', 'b890b207381df06b12c82200068952e6', 'nico@las.fr', 1);
-- mot de passe: iut
--
-- Contenu de la table `type`
--

INSERT INTO `type` (`Id_Type`, `Nom_Type`) VALUES
(00001, 'Sport'),
(00002, 'Film'),
(00003, 'Documentaire'),
(00004, 'Dessin Anime'),
(00005, 'Film d''animation'),
(00006, 'Divertissement'),
(00007, 'Serie'),
(00008, 'Spectacle'),
(00009, 'Telefilm'),
(00010, 'Information');