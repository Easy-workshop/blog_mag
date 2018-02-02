-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 02 Février 2018 à 17:25
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

DROP TABLE IF EXISTS `article`;
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
(63, 'Le code de travail marocain', 'le code de travail marocain Ã  tÃ©lÃ©chager', 'InterprÃ©tation du code du Travail Marocain\r\nLa forme\r\nLe nouveau code du travail est incomplet, en effet certaines catÃ©gories de travailleurs restent en dehors de toute protection juridique : câ€™est notemment le cas des bonnes travaillant aux domiciles des particuliers et des salariÃ©s de lâ€™artisanat traditionnel. Dâ€™autres catÃ©gories de travailleurs continuent dâ€™Ãªtre rÃ©gis par une lÃ©gislation autonome du code : les fonctionnaires et agents des administrations publiques, les employÃ©s des entreprises et Ã©tablissements publics, les travailleurs des gisements miniers, les journalistesâ€¦ En outre le nouveau code du travail nâ€™englobe pas certains domaines relevant normalement de la lÃ©gislation du travail, tels que la formation professionnelle, la sÃ©curitÃ© sociale, la protection sanitaire, le rÃ©gime mutualiste, les accidents de travail, les maladies professionnelles et lâ€™organisation syndicale pour les fonctionnaires.\r\nLes drois syndicaux\r\nDans ce domaine, les principa', 'images/emploi_codetravail_ma.svg', 1, 0, '2018-02-01 18:06:00', 1),
(64, 'Effacer toutes vos donnÃ©es de votre laptop', 'vendre votre ordinateur portable sans qu on restaure vos donnÃ©es', 'Le soft : my disk wiper permet supprimer radicalement vos donnÃ©es . Ã§a peut servir si par exemple vous souhaiteriez vendre votre ordinateur portable en effet , si la personne Ã  qui vous avez vendu votre ordinateur utilise des logiciels de restauration , il pourra facilement rÃ©cupÃ©rer vos document de travail ou photo de vacance Donc my disk wiper va vous permettre d effacer radicalement vos prÃ©cieuses donnÃ©es', 'images/informatique-restauration.svg', 1, 0, '2018-02-01 15:54:00', 2),
(65, 'Surfez anonyme pour Ã©viter qu on vous piste', 'votre FAI et les sites que vous visiter vous piste Ã  tort et Ã  travers', 'aujourd hui quand vous surfez sur internet vous Ãªtes tout le temps confrontÃ© Ã  des parasites de tout genre.\r\nquand vous visitez des sites par exemple il se peut qu il vous installe des petits fichiers txt dans votre ordinateur sans que vous leur donner l autorisation de le faire et ensuite il comment Ã  vous espionner Ã  tort et Ã  travers ...\r\nHeureusement il existe plusieurs solutions pour au moins vous puissiez vous cacher un petit peu et conserver votre intimitÃ© virtuelle \r\ndonc on vous propose d installer le soft : sÃ©curitykiss, ce dernier vous permettra de changer votre adresse ip et pays comme Ã§a mÃªme votre fournisseur d accÃ©s Ã  internet et saura pas vous pister\r\nensuite pour vÃ©rifier que votre ip et votre adresse ip sont fausses connectez-vous sur : \r\nhttps://ipleak.net/ ou bien https://www.dnsleaktest.com/ \r\nVoila', 'images/info-anonyme.svg', 0, 0, '2018-02-01 16:28:00', 2),
(71, 'Les moteurs de recherches europÃ©en VS google', 'google: l amÃ©rique veut tout savoir de vous comment y remÃ©dier', '<p>quand vous faites des recherche sur google vous devez savoir que toutes votre activit&eacute;e est historiser chez eux dans des serveurs tiers et que toutes vos informations personnelles sont vendus...</p>\r\n\r\n<p>bon pour essayer au moins de rem&eacute;dier &agrave; cela utiliser le moteur de recherche europ&eacute;en :&nbsp;<strong>Qwant ou bien duckduckgo&nbsp;</strong></p>\r\n\r\n<p>ces moteur de recherche sont moins curieux en terme de vie priv&eacute; que google m&ecirc;me si on ne peut pas &ecirc;tre &agrave; 100% garant que ces derniers aussi ne vous pistes pas mais au moins vous serez un tout petit peu prot&eacute;g&eacute;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'images/info_qwant.svg', 0, 0, '2018-02-01 17:21:00', 2),
(72, 'Restaurer vos donnÃ©es supprimÃ©es par erreur', 'vous avez effacer des rÃ©pertoire par erreur! ne vous inquiÃ©tez pas un seul logiciel permet de les ', '<p>Il arrive que parfois on supprime des fichiers (m&ecirc;me de la corbeille) donc pour rem&eacute;dier &agrave; cela installer les logiciels :</p>\r\n\r\n<ol>\r\n	<li>MiniTool</li>\r\n</ol>\r\n\r\n<p>ou bien&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;2. ShadowMaker Free</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>voil&agrave; good luck</p>\r\n', 'images/info_restau.svg', 0, 0, '2018-02-01 17:39:00', 2),
(73, 'Manger,DÃ©guster et faite vous plaisir', 'pizza,chandwitch,sushi,frite glace qu est ce qui vous fait le plus plaisir', '', 'images/divers_food.svg', 0, 0, '2018-02-02 11:28:00', 5),
(74, 'spectacle et cinÃ©ma les meilleurs film et comÃ©die', 'spectacle, cinÃ©ma les meilleurs programmations ', '', 'images/divers_cinema.svg', 0, 0, '2018-02-02 12:17:00', 5),
(75, 'Explorer le Maroc et ses bons plans et coins sympa', 'Voyage Marrackech,Tanger,Essaouira , cafÃ©,restaurant et bon plan ', '', 'images/divers_voyage.svg', 0, 0, '2018-02-02 12:26:00', 5),
(76, 'Les vÃªtements de la saison et bien d autre surprise', 'chemise,pontalon,robe chaussure classique ou sportive et bien d autre choses', '', 'images/divers_mode.svg', 0, 0, '2018-02-02 12:39:00', 5);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `afficher` int(11) DEFAULT NULL,
  `iconecategorie` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `titre`, `afficher`, `iconecategorie`) VALUES
(1, 'Emploi', 1, ''),
(2, 'informatique', 1, ''),
(3, 'retro-gaming', 1, ''),
(4, 'insolite.ma', 1, ''),
(5, 'Divers', 0, NULL);

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
  MODIFY `idarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
