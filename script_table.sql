-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Janvier 2018 à 18:12
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
  `introtxt` varchar(100) NOT NULL,
  `contenutxt` varchar(1000) DEFAULT NULL,
  `contenuimage` varchar(1000) DEFAULT NULL,
  `afficher` int(11) DEFAULT NULL,
  `nbrlecture` int(11) DEFAULT NULL,
  `datecreation` timestamp NULL DEFAULT NULL,
  `idcategorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idarticle`, `titre`, `introtxt`, `contenutxt`, `contenuimage`, `afficher`, `nbrlecture`, `datecreation`, `idcategorie`) VALUES
(2, 'La légende : Fatalfury ', 'La légende : Fatalfury', 'fatal fury est un jeu de baston qui a vu le jour dans les année 90 pour concurencer l indétronable street fighter 2', 'images/fft.svg', 1, 0, '0000-00-00 00:00:00', 3),
(3, 'La game boy : console des riches', 'le noir est blanc et les jeux pixélisés', 'Parmi les jeux les plus populaire y avait ce tortue ninja , un jeux qu on ne peut pas voir sa cartouche dans les magazins et ne pas cracker pour l avoir', 'images/game_boy.svg', 1, 0, '0000-00-00 00:00:00', 3),
(4, 'Golden axe ou conan le barbar', 'parmi les jeux les plus célèbres à l''époque', 'golden axe 1 faisait parti des jeux vendus d office avec la Megadrive se rajoute aussi Sonic,Shinobi et street of rage <br/> ce fut une trés belle époque', 'images/golden-axe.svg', 1, 0, '0000-00-00 00:00:00', 3),
(55, 'Resident Evil 4 : acheter la gamecube pour cela', 'l''horreur et le suspense sont au rendez-vous', 'l agent américain doit sauver la fille du président et pour cela il va voir de toutes les oouleus dans un monde sombre et contre des créatures pas trop gentilles', 'images/Resident-evil.svg', 1, 0, '2018-01-23 00:00:00', 3),
(56, 'Le stress comment le vaincre ', '4 conseils pratiques pour cela', 'De nos jours il est trés difficile d éviter le stress à cause de la cadence de vie rapide il existe des solutions rapide pour y remédier :<br/> écouter de la music douce<br/>boire de l eau<br/>faire du sport<br/>éviter de parler avec les personnes toxique<br/>', 'images/stress.svg', 1, 0, '2018-01-23 00:00:00', 1),
(62, 'CrÃ©er votre CV rapidement', 'plusieur Template prêt pour l''emploi', '<p>Retrouver ci-dessous quelques bon mod&egrave;les de CV pr&ecirc;t &agrave; &ecirc;tre t&eacute;l&eacute;charger et mis<br />\r\n&agrave; jour facilement</p>\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://images/blue-side.doc">BLUE SIDE</a></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>VIBRANT</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MARKETED</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>ROSY OUTLOOK</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'images/modele_cv.svg', 1, 0, '2018-01-26 16:38:00', 1),
(63, 'Le code de travail marocain', 'le code de travail marocain Ã  tÃ©lÃ©chager', 'InterprÃ©tation du code du Travail Marocain\r\nLa forme\r\nLe nouveau code du travail est incomplet, en effet certaines catÃ©gories de travailleurs restent en dehors de toute protection juridique : câ€™est notemment le cas des bonnes travaillant aux domiciles des particuliers et des salariÃ©s de lâ€™artisanat traditionnel. Dâ€™autres catÃ©gories de travailleurs continuent dâ€™Ãªtre rÃ©gis par une lÃ©gislation autonome du code : les fonctionnaires et agents des administrations publiques, les employÃ©s des entreprises et Ã©tablissements publics, les travailleurs des gisements miniers, les journalistesâ€¦ En outre le nouveau code du travail nâ€™englobe pas certains domaines relevant normalement de la lÃ©gislation du travail, tels que la formation professionnelle, la sÃ©curitÃ© sociale, la protection sanitaire, le rÃ©gime mutualiste, les accidents de travail, les maladies professionnelles et lâ€™organisation syndicale pour les fonctionnaires.\r\nLes drois syndicaux\r\nDans ce domaine, les principa', 'images/emploi_codetravail_ma.svg', 1, 0, '2018-01-29 18:06:00', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idarticle`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
