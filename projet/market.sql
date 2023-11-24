-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 24 juin 2023 à 09:08
-- Version du serveur : 8.0.32-0ubuntu0.22.04.2
-- Version de PHP : 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `market`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int NOT NULL,
  `nomcomplet` varchar(255) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mot_pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nomcomplet`, `tel`, `email`, `mot_pass`) VALUES
(1, 'seth_exauce', '11111111', '111111111', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_art` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `description` text,
  `etat` varchar(200) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL,
  `statut` varchar(200) NOT NULL DEFAULT 'En vente',
  `id_cat` int NOT NULL,
  `id_util` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `nom`, `prix`, `description`, `etat`, `position`, `img1`, `img2`, `img3`, `img4`, `statut`, `id_cat`, `id_util`) VALUES
(31, 'iphone 11', 800000, 'iphone neuf juste 6 mois d&#039;utilisation tout les acesoire disponible', 'neuf sans probleme', 'calavie', '../files/16875207301-542130072-HP-iPhone-13-128GB-Blue-Seken-Siap-Pakai---Surabaya.jpg', '../files/1687520730ip12-gia-99_22082022120428.jpg', '../files/1687520730s-l640.jpg', '../files/1687520730_used__iphone_x_64gb_my__batte_1649767443_1e6f9e56_progressive.jpg', 'En vente', 16, 14),
(32, 'iphone 11', 50000, 'legerement fisurre mais tous marche bien  il n&#039;y a aucun probleme ', 'legerement fisurre mais tous marche bien ', 'cotonou', '../files/1687521529iphone-13-mlph3hn-a-apple-original-imag6vzzhrxgazsg.jpeg', '../files/1687521529s-l640.jpg', '../files/1687521529s-l640.jpg', '../files/1687521529iphone-11_6175-Edit.jpg', 'En vente', 16, 14),
(33, 'iphone 13', 130000, 'neuf avec carton et tout les acesoire ', 'new new sans pb', 'cotonou', '../files/1687521766iphone_11_pro_max_1655904795_551fc6b0_progressive.jpg', '../files/1687521766iphone_11_pro_max_64gb_in_gree_1650358101_76cd551e.jpg', '../files/1687521766_used__iphone_x_64gb_my__batte_1649767443_1e6f9e56_progressive.jpg', '../files/1687521766iphone_11_pro_max_1655904795_551fc6b0_progressive.jpg', 'En vente', 16, 14),
(34, 'dayang ', 300000, 'dayant en bonne etat juste 2 ans d&#039;utilisation ', 'bon etats ', 'porto-novo', '../files/16875227753614221_uploaded_image1_1647611079.jpg', '../files/16875227753614221_uploaded_image2_1647611080.jpeg', '../files/1687522775big_with_watermark_dayang-dy50qt-a-benin-cotonou-10852.jpg', '../files/16875227753614221_uploaded_image1_1647611079.jpg', 'En vente', 17, 14),
(35, 'cd pes', 100, 'cd pes pour console ps3 en tres bon etat', 'en bon etat ', 'cotonou', '../files/1687525919CD-PS5-FIFA-23-@maconsole.jpg', '../files/1687525919fifa-23-ps4-a-tunis.jpg', '../files/1687525919images (9).jpeg', '../files/1687525919CD-PS5-FIFA-23-@maconsole.jpg', 'Acheter', 6, 14),
(36, 'dayang', 400000, 'dayang 2019  new bon etat moins de 6 mois d&#039;utilisation', 'new bon etat', 'cotonou', '../files/16875550546231f9f45298f588704145.jpg', '../files/16875550543614221_uploaded_image1_1647611079.jpg', '../files/16875550543614221_uploaded_image2_1647611080.jpeg', '../files/16875550546231f9f45298f588704145.jpg', 'En vente', 17, 12),
(37, 'wave new ', 600000, 'wave new  en bon etat tout d&#039;origine moteur jamais toucher', 'bon etat tout d&#039;origine', 'calavie', '../files/16875553690DD0FAF7-324C-4FB9-9AE0-43FB47773B15-scaled.jpeg', '../files/16875553696231aaf1169f9322084254.jpeg', '../files/1687555369thumb_2878222_uploaded_image1_1610127223.jpg', '../files/16875553690DD0FAF7-324C-4FB9-9AE0-43FB47773B15-scaled.jpeg', 'En vente', 17, 12),
(38, 'toyota', 3500000, 'toyota en bonne etat sans aucun probleme', 'bon etat ', 'porto-novo', '../files/168755628095h97qs8zv.jpg', '../files/16875562801461759_uploaded_image1_1578704347.46.png', '../files/16875562801461759_uploaded_image1_1578704347.46.png', '../files/1687556280big_with_watermark_57284422_3200903426602296_7176352432731979776_n.jpg', 'En vente', 17, 12),
(39, 'toyota', 1500000, 'toyota moyent mais sans pb juste 2 ans d&#039;utilisaton', 'moyent mais sans pb', 'porto-novo', '../files/16875564726233e1364b716083425047.jpg', '../files/1687556472107243576_3052755844805333_3948522025901256640_n.jpg', '../files/1687556472téléchargement (6).jpeg', '../files/16875564726233e1364b716083425047.jpg', 'En vente', 17, 12),
(40, 'toyota', 5000000, 'voiture toyota 2018 bon etat et avec aucun probleme', 'neuf neuf', 'parakou', '../files/1687556942téléchargement (7).jpeg', '../files/1687556942toyotarav4-1-750x410.jpg', '../files/1687556942019366_2010_toyota_RAV4.jpg', '../files/1687556942019366_2010_toyota_RAV4.jpg', 'En vente', 17, 12),
(41, 'psp', 10000, 'psp etat 5/10 mais sans probleme margeur', 'pas mal ', 'parakou', '../files/16875571690cf6e6c1fc868f83ab07855515ceb00fd1de6f49.jpg', '../files/1687557169155.jpeg', '../files/16875571690cf6e6c1fc868f83ab07855515ceb00fd1de6f49.jpg', '../files/1687557169efc7e974b8d064471f608304719ce0482f6c19e4.jpg', 'En vente', 7, 12),
(42, 'psp vita', 12000, '2 ans d&#039;utilisation ', 'etat 9/10', 'cotonou', '../files/16875573261011719181095_____000_____console_ps_vita_3g_wi_fi_occ_.jpg', '../files/1687557326L2ltYWdlL3ZpdGEtamV1eC1jYXJ0ZS9XQjE2LzEvOS9XQjE2MTk4NzQxMV8xLmpwZWc_MjAyMTA4MjcwODIzMTE_rct.jpeg', '../files/1687557326L2ltYWdlL3ZpdGEtamV1eC1jYXJ0ZS9XQjE2LzEvOS9XQjE2MTk4NzQxMV8xLmpwZWc_MjAyMTA4MjcwODIzMTE_rct.jpeg', '../files/1687557326playstation-vita-slim-1647868864.jpg', 'En vente', 7, 12),
(43, 'ps2', 20000, 'ps2 neuf sans probleme', 'neuf neuf ', 'porto-novo', '../files/1687557580L2ltYWdlL3VsdHJhLXNsaW0tNTAwZ28vV0IxNi8zLzMvV0IxNjMzNDAxMjRfMS5qcGVn_rct.jpeg', '../files/1687557580s-l400.jpg', '../files/1687557580s-l400.jpg', '', 'En vente', 7, 12),
(44, 'ps3', 100000, 'ps3 10/10 new sans probleme avec des cd ', '10/10 new', 'cotonou', '../files/16875579331.jpg', '../files/16875579336231c161d52e4087195361.jpeg', '../files/168755793362317faa29e85068448940.jpg', '../files/16875579336231c161d52e4087195361.jpeg', 'En vente', 7, 12),
(45, 'ps3', 9584, 'sans aucun probleme', 'en super etat', 'porto-novo', '../files/1687558101img1.PNG', '../files/1687558101img3.PNG', '', '', 'En vente', 7, 12),
(46, 'ps4', 950000, 'ps4 sans aucun probleme', 'neuf neuf ', 'cotonou', '../files/1687558349img4.PNG', '../files/1687558349img2.PNG', '../files/1687558349img1.PNG', '../files/1687558349img3.PNG', 'En vente', 7, 12),
(47, 'meuble', 100000, 'meuble fait a l&#039;usine', 'usine new', 'cotonou', '../files/16875586031e25ac5a864b57888ee6491ebacfd88618ad5745.jpg', '../files/1687558603buffet-industriel.jpg', '', '', 'En vente', 5, 12),
(48, 'table', 157411, 'table en bon etat', 'neuf  ', 'calavie', '../files/1687558832buffet-industriel (1).jpg', '../files/1687558832buffet-industriel.jpg', '../files/1687558832buffet-industriel (2).jpg', '../files/1687558832buffet-industriel (2).jpg', 'En vente', 5, 12),
(49, 'cd de console', 100, 'cd de console', '10/10', 'porto-novo', '../files/1687559323images (9).jpeg', '../files/1687559323images (10).jpeg', '../files/1687559323cde3d224c9527ed68e8aee20390f985ad765ab67.jpg', '../files/16875593233551185_uploaded_image1_1643833737.jpg', 'En vente', 6, 12),
(50, 'cd ps5', 100, 'en bonne etat', 'bon etat', 'porto-novo', '../files/16875594548123PMgTudL.jpg', '../files/1687559454470923d40f8dccbf2000c6da68779d410b56f282.jpg', '../files/1687559454db89968f7671099f04ac943cc4e019663ab798b1_S200768714_1.jpg', '../files/1687559454images (10).jpeg', 'En vente', 6, 12);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int NOT NULL,
  `nom_cat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(5, 'Ameublement'),
(6, 'CD/Musique'),
(7, 'Consoles & Jeux Vidéo'),
(8, 'Décoration'),
(9, 'Electroménager'),
(10, 'Fournitures de Bureau'),
(11, 'Electronique'),
(12, 'Immobilier'),
(13, 'Jeux et jouets'),
(14, 'Livres'),
(15, 'Montres & Bijoux'),
(16, 'Téléphone'),
(17, 'Véhicule'),
(18, '#Autres');

-- --------------------------------------------------------

--
-- Structure de la table `paiment`
--

CREATE TABLE `paiment` (
  `id_art` int NOT NULL,
  `id_util` int NOT NULL,
  `vendeur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiment`
--

INSERT INTO `paiment` (`id_art`, `id_util`, `vendeur`) VALUES
(35, 12, '14'),
(35, 13, '14'),
(35, 15, '14'),
(35, 16, '14'),
(35, 17, '14'),
(35, 18, '14'),
(35, 20, '14');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `nom_photo` varchar(100) DEFAULT NULL,
  `id_art` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id_trans` int NOT NULL,
  `methode` varchar(55) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `montant` int DEFAULT NULL,
  `statut` varchar(200) NOT NULL DEFAULT 'En Attente',
  `id_util` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`id_trans`, `methode`, `numero`, `montant`, `statut`, `id_util`) VALUES
(4, 'Mobile monney', '678', 2000, 'Payer', 3),
(5, 'Mobile monney', '660534677', 1000, 'Payer', 3),
(6, 'Mobile monney', '7', 1000, 'Payer', 3),
(7, 'Mobile monney', '55676', 33, 'En Attente', 3),
(8, 'Mobile monney', '3456577', 435, 'En Attente', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_util` int NOT NULL,
  `nom_util` varchar(255) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `solde_pasif` int DEFAULT '0',
  `solde_dispo` int DEFAULT '0',
  `adress_resid` varchar(255) DEFAULT NULL,
  `num_card` varchar(100) DEFAULT NULL,
  `photo_card` varchar(255) DEFAULT NULL,
  `mot_pass` varchar(255) DEFAULT NULL,
  `statut` varchar(100) NOT NULL DEFAULT 'Non valider',
  `id_admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `nom_util`, `tel`, `email`, `solde_pasif`, `solde_dispo`, `adress_resid`, `num_card`, `photo_card`, `mot_pass`, `statut`, `id_admin`) VALUES
(3, 'Admin', '111', 'admin@gmail.com', 23778, 13600, 'dbckbcd', 'dchcbs', '../files/1681321736Capture.PNG', 'admin', 'Valider', 1),
(7, 'bg', NULL, 'bg@gmail.com', 0, 0, NULL, NULL, NULL, 'bg', 'Non valider', 1),
(10, 'alex6', '67449338', 'admin2@gmail.com', 0, -10000, 'gtfyhgk', '44556778', '../files/lang__zh.png', 'alex6', 'Non valider', 1),
(11, 'benin', '44556778', 'benin@gmail.com', 0, 0, NULL, NULL, NULL, 'azerty', 'Non valider', 1),
(12, 'tom', '95950955', 'tom09@gmail.com', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(13, 'Algérie ', '34946864', 'bsksl@gml.co', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(14, 'tomye', '3456777', 'tomy@gmail.com', 760, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(15, 'azerty', '23456789', 'toto@gmail.com', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(16, 'ototo', '4567hgkuhg', 'toto1@gmail.com', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(17, 'knbgbgfn', '123456789', 'toto2@gmail.com', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(18, 'tototb', '234567', 'toto3@gmail.com', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(19, 'rgjfg', '95114278', 'toot@gmail.com', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1),
(20, 'carle', '50547854', 'tomee@gmail.com', 0, 0, NULL, NULL, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Non valider', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_util` (`id_util`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `paiment`
--
ALTER TABLE `paiment`
  ADD PRIMARY KEY (`id_art`,`id_util`),
  ADD KEY `id_util` (`id_util`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`),
  ADD KEY `id_art` (`id_art`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_util` (`id_util`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_util`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_trans` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_util` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id_util`);

--
-- Contraintes pour la table `paiment`
--
ALTER TABLE `paiment`
  ADD CONSTRAINT `paiment_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`),
  ADD CONSTRAINT `paiment_ibfk_2` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id_util`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id_util`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
