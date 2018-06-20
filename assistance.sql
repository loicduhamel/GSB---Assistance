-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-assistance.alwaysdata.net
-- Generation Time: Apr 24, 2018 at 01:48 PM
-- Server version: 10.2.13-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assistance_ppe`
--

-- --------------------------------------------------------

--
-- Table structure for table `disquedur`
--

CREATE TABLE `disquedur` (
  `id` int(11) NOT NULL,
  `libelledd` varchar(100) DEFAULT NULL,
  `typeDisque` varchar(100) DEFAULT NULL,
  `capaciteDisque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disquedur`
--

INSERT INTO `disquedur` (`id`, `libelledd`, `typeDisque`, `capaciteDisque`) VALUES
(1, 'SSD Crucial MX500', 'SSD', 500),
(2, 'Seagate Desktop', 'HDD', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `editeur`
--

CREATE TABLE `editeur` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editeur`
--

INSERT INTO `editeur` (`id`, `libelle`) VALUES
(1, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `equipement`
--

CREATE TABLE `equipement` (
  `id` int(11) NOT NULL,
  `dateAchat` date DEFAULT NULL,
  `garantie` date DEFAULT NULL,
  `nompc` varchar(25) DEFAULT NULL,
  `typeEquipement` varchar(50) DEFAULT NULL,
  `id_Fournisseur` int(11) DEFAULT NULL,
  `id_Visiteur` int(11) DEFAULT NULL,
  `id_Processeur` int(11) DEFAULT NULL,
  `id_Marque` int(11) DEFAULT NULL,
  `id_DisqueDur` int(11) DEFAULT NULL,
  `id_Memoire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipement`
--

INSERT INTO `equipement` (`id`, `dateAchat`, `garantie`, `nompc`, `typeEquipement`, `id_Fournisseur`, `id_Visiteur`, `id_Processeur`, `id_Marque`, `id_DisqueDur`, `id_Memoire`) VALUES
(1, '2018-03-02', '2020-03-02', 'FX503VD-DM255T', 'Portable', 1, 1, 1, 1, 1, 1),
(13, '2018-03-09', '2018-03-17', 'Aziz', 'Portable', 1, 1, 1, 1, 1, 1),
(14, '2018-03-16', '2018-03-09', 'test', 'Portable', 1, 1, 1, 1, 1, 1),
(15, '2018-03-10', '2018-03-09', 'ge', 'Portable', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL,
  `nomf` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nomf`, `adresse`, `telephone`, `mail`) VALUES
(1, 'LDLC', '2 rue des canard', '00.01.02.03.04', 'ldlc@gsb.fr');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE `incident` (
  `id` int(11) NOT NULL,
  `objet` varchar(100) DEFAULT NULL,
  `datePriseCharge` datetime DEFAULT NULL,
  `dateIntervention` date DEFAULT NULL,
  `solution` varchar(200) DEFAULT NULL,
  `duree` time DEFAULT NULL,
  `id_Equipement` int(11) DEFAULT NULL,
  `id_Niveau` int(11) DEFAULT NULL,
  `id_Statut` int(11) DEFAULT NULL,
  `id_Technicien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`id`, `objet`, `datePriseCharge`, `dateIntervention`, `solution`, `duree`, `id_Equipement`, `id_Niveau`, `id_Statut`, `id_Technicien`) VALUES
(1, 'L\'ordinateur ne s\'allume plus', '2018-03-23 00:00:00', '2018-03-24', '27093', '02:20:00', 1, 1, 3, 1),
(10, 'test8', '2018-03-30 18:39:12', NULL, NULL, NULL, 1, 1, 1, 1),
(11, 'ca marche', '2018-03-30 18:40:45', NULL, NULL, NULL, 1, 1, 1, 1),
(12, 'ca marche pas', '2018-03-30 18:41:01', NULL, NULL, NULL, 1, 3, 1, 1),
(13, 'testf', '2018-03-30 18:43:08', '2018-03-30', 'null', '00:00:00', 1, 1, 2, 1),
(14, 'test', '2018-04-02 16:09:01', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(15, 'test', '2018-04-02 16:10:25', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(16, 'test', '2018-04-02 16:11:19', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(17, 'testm', '2018-04-02 16:12:30', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(18, 'r\'zy', '2018-04-02 16:20:27', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(19, 'test', '2018-04-02 16:25:27', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(20, 'yr', '2018-04-02 16:27:41', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(21, 'eaz', '2018-04-02 16:28:25', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(22, 'test', '2018-04-02 16:30:49', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(23, 'test', '2018-04-02 16:34:14', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(24, 'test', '2018-04-02 16:34:20', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(25, 'test', '2018-04-02 16:35:33', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(26, 'te', '2018-04-02 16:35:36', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(27, 'te', '2018-04-02 16:36:25', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(28, 'u-', '2018-04-02 16:36:28', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(29, 'u-', '2018-04-02 16:37:57', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(30, 'u-', '2018-04-02 16:40:10', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(31, 'u-', '2018-04-02 16:41:18', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(32, 'g', '2018-04-02 14:47:21', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(33, 'g', '2018-04-02 14:47:34', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(34, 'g', '2018-04-02 14:49:02', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(35, 'g', '2018-04-02 14:50:35', '2018-04-02', NULL, NULL, 1, 1, 1, 1),
(36, 'test', '2018-04-02 17:12:01', '2018-04-02', NULL, NULL, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `installe`
--

CREATE TABLE `installe` (
  `id` int(11) NOT NULL,
  `id_Equipement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logiciel`
--

CREATE TABLE `logiciel` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `id_Editeur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `libellem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `libellem`) VALUES
(1, 'Asus'),
(4, 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `memoire`
--

CREATE TABLE `memoire` (
  `id` int(11) NOT NULL,
  `libellemem` varchar(100) DEFAULT NULL,
  `typeMemoire` varchar(100) DEFAULT NULL,
  `capaciteMemoire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memoire`
--

INSERT INTO `memoire` (`id`, `libellemem`, `typeMemoire`, `capaciteMemoire`) VALUES
(1, 'SODIMM 1066 MHz PC3-8500', 'DDR3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `libelle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`id`, `libelle`) VALUES
(1, 'Demande ne nécessitant pas une intervention logicielle ou matérielle'),
(2, 'Demande nécessitant une intervention à distance'),
(3, 'Demande nécessitant une intervention matérielle ou une réinstallation logicielle lourde'),
(4, 'Demande nécessitant l\'adaptation du site Web de gestion des Comptes-rendus et de frais de visite');

-- --------------------------------------------------------

--
-- Table structure for table `processeur`
--

CREATE TABLE `processeur` (
  `id` int(11) NOT NULL,
  `libellep` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processeur`
--

INSERT INTO `processeur` (`id`, `libellep`) VALUES
(1, 'Intel Core i7-8700K '),
(4, 'Intel Core i9-7900X');

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

CREATE TABLE `statut` (
  `id` int(11) NOT NULL,
  `libellest` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statut`
--

INSERT INTO `statut` (`id`, `libellest`) VALUES
(1, 'En attente de traitement'),
(2, 'En cours '),
(3, 'Terminé');

-- --------------------------------------------------------

--
-- Table structure for table `technicien`
--

CREATE TABLE `technicien` (
  `id` int(11) NOT NULL,
  `id_Utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technicien`
--

INSERT INTO `technicien` (`id`, `id_Utilisateur`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `password`, `mail`) VALUES
(1, 'Obiedzynski', 'Thomas', 'thomo', 'dozo', 'thomas.obiedzynski@epsi.fr'),
(2, 'Lefevere', 'Etienne', 'beerstorm', 'fanfan', 'etienne.lefevere@epsi.fr'),
(3, 'test', 'user', 'user.test', 'alwaysdata', 'assistance@alwaysdata.net');

-- --------------------------------------------------------

--
-- Table structure for table `visiteur`
--

CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL,
  `id_Utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visiteur`
--

INSERT INTO `visiteur` (`id`, `id_Utilisateur`) VALUES
(1, 1),
(2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disquedur`
--
ALTER TABLE `disquedur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Equipement_id_Fournisseur` (`id_Fournisseur`),
  ADD KEY `FK_Equipement_id_Visiteur` (`id_Visiteur`),
  ADD KEY `FK_Equipement_id_Processeur` (`id_Processeur`),
  ADD KEY `FK_Equipement_id_Marque` (`id_Marque`),
  ADD KEY `FK_Equipement_id_DisqueDur` (`id_DisqueDur`),
  ADD KEY `FK_Equipement_id_Memoire` (`id_Memoire`);

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Incident_id_Equipement` (`id_Equipement`),
  ADD KEY `FK_Incident_id_Niveau` (`id_Niveau`),
  ADD KEY `FK_Incident_id_Statut` (`id_Statut`),
  ADD KEY `FK_Incident_id_Technicien` (`id_Technicien`);

--
-- Indexes for table `installe`
--
ALTER TABLE `installe`
  ADD PRIMARY KEY (`id`,`id_Equipement`),
  ADD KEY `FK_installe_id_Equipement` (`id_Equipement`);

--
-- Indexes for table `logiciel`
--
ALTER TABLE `logiciel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_logiciel_id_Editeur` (`id_Editeur`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memoire`
--
ALTER TABLE `memoire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processeur`
--
ALTER TABLE `processeur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicien`
--
ALTER TABLE `technicien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Technicien_id_Utilisateur` (`id_Utilisateur`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Visiteur_id_Utilisateur` (`id_Utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disquedur`
--
ALTER TABLE `disquedur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `incident`
--
ALTER TABLE `incident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `logiciel`
--
ALTER TABLE `logiciel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `memoire`
--
ALTER TABLE `memoire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `processeur`
--
ALTER TABLE `processeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statut`
--
ALTER TABLE `statut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technicien`
--
ALTER TABLE `technicien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipement`
--
ALTER TABLE `equipement`
  ADD CONSTRAINT `FK_Equipement_id_DisqueDur` FOREIGN KEY (`id_DisqueDur`) REFERENCES `disquedur` (`id`),
  ADD CONSTRAINT `FK_Equipement_id_Fournisseur` FOREIGN KEY (`id_Fournisseur`) REFERENCES `fournisseur` (`id`),
  ADD CONSTRAINT `FK_Equipement_id_Marque` FOREIGN KEY (`id_Marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `FK_Equipement_id_Memoire` FOREIGN KEY (`id_Memoire`) REFERENCES `memoire` (`id`),
  ADD CONSTRAINT `FK_Equipement_id_Processeur` FOREIGN KEY (`id_Processeur`) REFERENCES `processeur` (`id`),
  ADD CONSTRAINT `FK_Equipement_id_Visiteur` FOREIGN KEY (`id_Visiteur`) REFERENCES `visiteur` (`id`);

--
-- Constraints for table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `FK_Incident_id_Equipement` FOREIGN KEY (`id_Equipement`) REFERENCES `equipement` (`id`),
  ADD CONSTRAINT `FK_Incident_id_Niveau` FOREIGN KEY (`id_Niveau`) REFERENCES `niveau` (`id`),
  ADD CONSTRAINT `FK_Incident_id_Statut` FOREIGN KEY (`id_Statut`) REFERENCES `statut` (`id`),
  ADD CONSTRAINT `FK_Incident_id_Technicien` FOREIGN KEY (`id_Technicien`) REFERENCES `technicien` (`id`);

--
-- Constraints for table `installe`
--
ALTER TABLE `installe`
  ADD CONSTRAINT `FK_installe_id` FOREIGN KEY (`id`) REFERENCES `logiciel` (`id`),
  ADD CONSTRAINT `FK_installe_id_Equipement` FOREIGN KEY (`id_Equipement`) REFERENCES `equipement` (`id`);

--
-- Constraints for table `logiciel`
--
ALTER TABLE `logiciel`
  ADD CONSTRAINT `FK_logiciel_id_Editeur` FOREIGN KEY (`id_Editeur`) REFERENCES `editeur` (`id`);

--
-- Constraints for table `technicien`
--
ALTER TABLE `technicien`
  ADD CONSTRAINT `FK_Technicien_id_Utilisateur` FOREIGN KEY (`id_Utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `visiteur`
--
ALTER TABLE `visiteur`
  ADD CONSTRAINT `FK_Visiteur_id_Utilisateur` FOREIGN KEY (`id_Utilisateur`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
