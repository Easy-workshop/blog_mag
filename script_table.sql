-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 18 jan. 2018 à 01:02
-- Version du serveur :  10.1.25-MariaDB
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
  `nbrlecture` int(11)  NULL,
  `datecreation` datetime NULL,
  `idcategorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idarticle`, `titre`, `contenutxt`, `contenuimage`, `afficher`, `nbrlecture`, `datecreation`, `idcategorie`) VALUES
(2, 'CECI EST L ARTICLE1 yyyyyyyyy sssk', 'bla bla bla 11', 'images/photodune-2043745-college-student-s-225x136.jpg', 1, 0, '0000-00-00 00:00:00', 1),
(3, 'CECI EST L ARTICLE2 yyyyyyyyy sssk', 'bla bla bla 22', 'images/photodune-3517559-idea-s-225x136.jpg', 1, 0, '0000-00-00 00:00:00', 1),
(4, 'CECI EST L ARTICLE3 zzzzzzzzzzzz sssk', 'bla bla bla 33', 'images/shutterstock_2114081-225x136.jpg', 1, 0, '0000-00-00 00:00:00', 1),
(5, 'CECI EST L ARTICLE4 qqqqqqqqqqq sssk', 'bla bla bla 44', 'images/shutterstock_109209743-225x136.jpg', 1, 0, '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `afficher` int(11) DEFAULT NULL,
  `iconecategorie` varchar(200)  NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `titre`, `afficher`, `iconecategorie`) VALUES
(1, 'Actualite', 1, ''),
(2, 'Art-culture', 1, ''),
(3, 'Auto-Moto', 1, ''),
(4, 'Femme', 1, ''),
(5, 'Homme', 1, ''),
(6, 'Informatique', 1, ''),
(7, 'Technologie', 1, ''),
(8, 'Histoire', 1, '');

--
-- Index pour les tables déchargées
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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
