-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2023 at 04:07 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int NOT NULL,
  `nomcomplet` varchar(255) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mot_pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nomcomplet`, `tel`, `email`, `mot_pass`) VALUES
(1, 'seth_exauce', '11111111', '111111111', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `article`
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
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_art`, `nom`, `prix`, `description`, `etat`, `position`, `img1`, `img2`, `img3`, `img4`, `statut`, `id_cat`, `id_util`) VALUES
(27, 'Samsung', 30000, 'Déjà utilisé pendant 6 mois, mais fonctionne correctement', 'Bon etat', 'Cotonou', '../files/1681901878img 1.jpeg', '../files/1681901878img 2.jpeg', '../files/1681901878img 1.jpeg', '../files/1681901878dfghjklhhv.jpeg', 'En vente', 16, 11),
(28, 'TECHNo', 35000, ' Un portable de la marque Tecno, modèle Aspire 5735Z avec un processeur Intel Pentium dual-core, 3 Go de RAM, un disque dur de 160 Go et un écran de 15,6 pouces. ', 'Très bon état, pas de rayures ', 'Porto-Novo', '../files/1681904283img 2.jpeg', '../files/1681904283img 1.jpeg', '../files/1681904283img 2.jpeg', '../files/1681904283img 2.jpeg', 'En vente', 16, 12),
(29, 'Immeuble agossou', 15000000, 'L&#039;immeuble Agossou est un bâtiment commercial de cinq étages situé dans le quartier d&#039;affaires de Cotonou. Il offre une surface totale de 1500 mètres carrés, dont 300 mètres carrés de bureaux climatisés.', 'neuf et propre', 'Cotonou', '../files/1681904800im1.jpg', '../files/1681904800img6.jpeg', '../files/1681904800im1.jpg', '../files/1681904800im1.jpg', 'En vente', 12, 12),
(30, 'Toyota Corolla', 800000, 'Véhicule utilisé pendant 1 ans, mais fontionne toujours correctement', 'bon état', 'Cotonou', '../files/1681915903voiture2.jpg', '../files/1681915903int voi.png', '../files/1681915903voiture2.jpg', '../files/1681915903voiture2.jpg', 'En vente', 17, 12),
(31, 'machine à laver', 55000, 'Encore neuf  avec un bon état de fonctionnement et un bon autonomie', 'neuf et en bon etat', 'Cadjèhou', '../files/1681916392elctr 2.jpeg', '../files/1681916392elctr 2.jpeg', '../files/1681916392elctr 2.jpeg', '../files/1681916392eletr8.jpg', 'En vente', 9, 12);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int NOT NULL,
  `nom_cat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
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
-- Table structure for table `paiment`
--

CREATE TABLE `paiment` (
  `id_art` int NOT NULL,
  `id_util` int NOT NULL,
  `vendeur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
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
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_trans`, `methode`, `numero`, `montant`, `statut`, `id_util`) VALUES
(4, 'Mobile monney', '678', 2000, 'Payer', 3),
(5, 'Mobile monney', '660534677', 1000, 'Payer', 3),
(6, 'Mobile monney', '7', 1000, 'Payer', 3),
(7, 'Mobile monney', '55676', 33, 'En Attente', 3);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
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
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `nom_util`, `tel`, `email`, `solde_pasif`, `solde_dispo`, `adress_resid`, `num_card`, `photo_card`, `mot_pass`, `statut`, `id_admin`) VALUES
(3, 'Admin', '111', 'admin@gmail.com', 18700, 13600, 'dbckbcd', 'dchcbs', '../files/1681321736Capture.PNG', 'admin', 'Valider', 1),
(11, 'Seth2k22', '90949222', 'baiseth1@gmail.com', 0, 0, NULL, NULL, NULL, 'sethseth', 'Non valider', 1),
(12, 'tychique', '8956231', 'tychique@gmail.com', 0, 0, NULL, NULL, NULL, 'tychique', 'Non valider', 1),
(13, 'exauce', '90902332', 'exauce@gmail.com', 0, 0, NULL, NULL, NULL, 'exauce', 'Non valider', 1),
(14, 'ahouangan', '85963214', 'ahouangan@gmail.com', 0, 0, NULL, NULL, NULL, 'ezplace', 'Non valider', 1),
(15, 'exauce2', '85963214', 'exauce2@gmail.com', 0, 0, NULL, NULL, NULL, 'exauce1', 'Non valider', 1),
(16, 'exauce2', '90949255', 'exauce2@gmail.com', 0, 0, NULL, NULL, NULL, 'exauce1', 'Non valider', 1),
(17, 'seth1', '87412582', 'baiseth1@gmail.com', 0, 0, NULL, NULL, NULL, 'seth111', 'Non valider', 1),
(18, 'PIerre', '85963258', 'ahouangan5@gmail.com', 0, 0, NULL, NULL, NULL, 'ezplace', 'Non valider', 1),
(19, 'ahouangan0', '85412536', 'ahouangan0@gmail.com', 0, 0, NULL, NULL, NULL, 'ezplace', 'Non valider', 1),
(20, 'ahouagan', '78956214', 'ahouangan@gmail.com', 0, 0, NULL, NULL, NULL, 'ezplace', 'Non valider', 1),
(21, 'exaucee', '85632145', 'exauce@gmail.com', 0, 0, NULL, NULL, NULL, 'exauce', 'Non valider', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_util` (`id_util`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `paiment`
--
ALTER TABLE `paiment`
  ADD PRIMARY KEY (`id_art`,`id_util`),
  ADD KEY `id_util` (`id_util`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_util` (`id_util`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_util`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_trans` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_util` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id_util`);

--
-- Constraints for table `paiment`
--
ALTER TABLE `paiment`
  ADD CONSTRAINT `paiment_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`),
  ADD CONSTRAINT `paiment_ibfk_2` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id_util`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`id_util`) REFERENCES `utilisateur` (`id_util`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
