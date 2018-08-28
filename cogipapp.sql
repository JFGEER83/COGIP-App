-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 11:21 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cogipapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

CREATE TABLE `factures` (
  `idFACTURES` int(11) NOT NULL,
  `num_facture` varchar(45) DEFAULT NULL,
  `date_facture` date DEFAULT NULL,
  `motif-prestation_facture` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personnes`
--

CREATE TABLE `personnes` (
  `idPERSONNES` int(11) NOT NULL,
  `nom_personne` varchar(45) DEFAULT NULL,
  `prenom_personne` varchar(45) DEFAULT NULL,
  `telephone_personne` varchar(45) DEFAULT NULL,
  `email_personne` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personnes_has_factures`
--

CREATE TABLE `personnes_has_factures` (
  `PERSONNES_idPERSONNES` int(11) NOT NULL,
  `FACTURES_idFACTURES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personnes_has_societes`
--

CREATE TABLE `personnes_has_societes` (
  `PERSONNES_idPERSONNES` int(11) NOT NULL,
  `SOCIETES_idSOCIETES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `societes`
--

CREATE TABLE `societes` (
  `idSOCIETES` int(11) NOT NULL,
  `nom_societe` varchar(45) DEFAULT NULL,
  `adresse_societe` varchar(45) DEFAULT NULL,
  `pays_societe` varchar(45) DEFAULT NULL,
  `TVA_societe` varchar(45) DEFAULT NULL,
  `telephone_societe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `societes_has_factures`
--

CREATE TABLE `societes_has_factures` (
  `societes_idsocietes` int(11) NOT NULL,
  `factures_idfactures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `societes_has_type`
--

CREATE TABLE `societes_has_type` (
  `societes_idsocietes` int(11) NOT NULL,
  `type_idtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idTYPE` int(11) NOT NULL,
  `type_entreprise` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idTYPE`, `type_entreprise`) VALUES
(1, 'Clients'),
(2, 'Fournisseurs');

-- --------------------------------------------------------

--
-- Table structure for table `type_has_factures`
--

CREATE TABLE `type_has_factures` (
  `type_idtype` int(11) NOT NULL,
  `factures_idfactures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`idFACTURES`);

--
-- Indexes for table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`idPERSONNES`);

--
-- Indexes for table `personnes_has_factures`
--
ALTER TABLE `personnes_has_factures`
  ADD PRIMARY KEY (`PERSONNES_idPERSONNES`,`FACTURES_idFACTURES`),
  ADD KEY `fk_PERSONNES_has_FACTURES_FACTURES1` (`FACTURES_idFACTURES`);

--
-- Indexes for table `societes`
--
ALTER TABLE `societes`
  ADD PRIMARY KEY (`idSOCIETES`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idTYPE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
  MODIFY `idFACTURES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `idPERSONNES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `societes`
--
ALTER TABLE `societes`
  MODIFY `idSOCIETES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `idTYPE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personnes_has_factures`
--
ALTER TABLE `personnes_has_factures`
  ADD CONSTRAINT `fk_PERSONNES_has_FACTURES_FACTURES1` FOREIGN KEY (`FACTURES_idFACTURES`) REFERENCES `factures` (`idFACTURES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PERSONNES_has_FACTURES_PERSONNES` FOREIGN KEY (`PERSONNES_idPERSONNES`) REFERENCES `personnes` (`idPERSONNES`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
