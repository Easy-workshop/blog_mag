-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Janvier 2018 à 18:28
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mag`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idarticle` int(11) NOT NULL,
  `titre` varchar(150) DEFAULT NULL,
  `contenutxt` varchar(1000) DEFAULT NULL,
  `contenuimage` varchar(1000) DEFAULT NULL,
  `afficher` int(11) DEFAULT NULL,
  `nbrlecture` int(11) DEFAULT NULL,
  `datecreation` timestamp NULL DEFAULT NULL,
  `idcategorie` int(11) DEFAULT NULL
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idarticle`, `titre`, `contenutxt`, `contenuimage`, `afficher`, `nbrlecture`, `datecreation`, `idcategorie`) VALUES
(2, 'La légende : Fatal fury ', 'fatal fury est un jeu de baston qui a vu le jour dans les année 90 pour concurencer l indétronable street fighter 2', 'images/fft.svg', 1, 0, '0000-00-00 00:00:00', 3),
(3, 'La game boy : console des riches', 'Parmi les jeux les plus populaire y avait ce tortue ninja , un jeux qu on ne peut pas voir sa cartouche dans les magazins et ne pas cracker pour l avoir', 'images/game_boy.svg', 1, 0, '0000-00-00 00:00:00', 3),
(4, 'Golden axe ou conan le barbar', 'golden axe 1 faisait parti des jeux vendus d office avec la Megadrive se rajoute aussi Sonic,Shinobi et street of rage <br/> ce fut une trés belle époque', 'images/golden-axe.svg', 1, 0, '0000-00-00 00:00:00', 3),
(55, 'Résident Evil 4 : acheter la gamecube pour cela', 'l agent américain doit sauver la fille du président et pour cela il va voir de toutes les oouleus dans un monde sombre et contre des créatures pas trop gentilles', 'images/Resident-evil.svg', 1, 0, '2018-01-23 00:00:00', 3),

(56, 'Le stress comment le vaincre ', 'De nos jours il est trés difficile d éviter le stress à cause de la cadence de vie rapide il existe des solutions rapide pour y remédier :<br/> écouter de la music douce<br/>boire de l eau<br/>faire du sport<br/>éviter de parler avec les personnes toxique<br/>', 'images/stress.svg', 1, 0, '2018-01-23 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `afficher` int(11) DEFAULT NULL,
  `iconecategorie` varchar(200) DEFAULT NULL
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `titre`, `afficher`, `iconecategorie`) VALUES
(1, 'Emploi', 1, ''),
(2, 'informatique', 1, ''),
(3, 'retro-gaming', 1, ''),
(4, 'insolite.ma', 1, '');
--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idarticle`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
