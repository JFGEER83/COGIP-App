-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 28, 2018 at 01:33 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `COGIP Appli`
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

--
-- Dumping data for table `factures`
--

INSERT INTO `factures` (`idFACTURES`, `num_facture`, `date_facture`, `motif-prestation_facture`) VALUES
(2, 'facture_A0034', '2018-02-12', 'achat de marchandises '),
(3, 'facture_V0055', '2018-03-12', 'vente de marchandises '),
(4, 'facture_V0056', '2018-03-29', 'vente de marchandises '),
(5, 'facture_A0035', '2018-04-11', 'achat de marchandises '),
(6, 'facture_V0057', '2018-04-25', 'vente de marchandises '),
(7, 'facture_A0036', '2018-05-17', 'achat de marchandises '),
(8, 'facture_V0058', '2018-05-23', 'vente de marchandises '),
(9, 'facture_A0037', '2018-06-20', 'achat de marchandises '),
(10, 'facture_V0059', '2018-06-21', 'vente de marchandises '),
(11, 'facture_A0037', '2018-07-16', 'achat de marchandises '),
(12, 'facture_V0060', '2018-07-23', 'vente de marchandises '),
(13, 'facture_A0038', '2018-08-08', 'achat de marchandises ');

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

--
-- Dumping data for table `personnes`
--

INSERT INTO `personnes` (`idPERSONNES`, `nom_personne`, `prenom_personne`, `telephone_personne`, `email_personne`) VALUES
(1, 'Sauvage', 'Patrick', '02/467.87.67', 'P.sauvage@gmail.com'),
(2, 'Dupond', 'Jean', '02/876.56.45', 'J.dupond@gmail.com'),
(3, 'Johnson', 'Katerine', '02/876.45.98', 'K.johnson@gmail.com'),
(4, 'Durand', 'Vincent', '02/465.89.67', 'V.durand@gmail.com'),
(5, 'Blanc', 'Michel', '02/897.56.16', 'M.blanc@gmail.com'),
(6, 'Spears ', 'Britney', '02/765.98.45', 'B.spears@gmail.com'),
(7, 'Dogg', 'Snoop', '02/402.40.40.02', 'S.dogg@gmai.com'),
(8, 'Jacques', 'Bastien', '02/576.87.25.65', 'J.bastien@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `personnes_has_factures`
--

CREATE TABLE `personnes_has_factures` (
  `PERSONNES_idPERSONNES` int(11) NOT NULL,
  `FACTURES_idFACTURES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnes_has_factures`
--

INSERT INTO `personnes_has_factures` (`PERSONNES_idPERSONNES`, `FACTURES_idFACTURES`) VALUES
(5, 2),
(1, 3),
(6, 4),
(7, 5),
(5, 6),
(2, 7),
(7, 8),
(4, 9),
(2, 10),
(8, 11),
(4, 12),
(3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `personnes_has_societes`
--

CREATE TABLE `personnes_has_societes` (
  `PERSONNES_idPERSONNES` int(11) NOT NULL,
  `SOCIETES_idSOCIETES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnes_has_societes`
--

INSERT INTO `personnes_has_societes` (`PERSONNES_idPERSONNES`, `SOCIETES_idSOCIETES`) VALUES
(7, 1),
(4, 2),
(3, 3),
(6, 4),
(1, 5),
(8, 6),
(2, 7),
(5, 8);

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

--
-- Dumping data for table `societes`
--

INSERT INTO `societes` (`idSOCIETES`, `nom_societe`, `adresse_societe`, `pays_societe`, `TVA_societe`, `telephone_societe`) VALUES
(1, 'BECODE', 'rue du chat perché 56', 'BELGIQUE', 'BE 0936278916', '02/675.98.45'),
(2, 'JOHNSON', 'avenue des éperviers 86', 'BELGIQUE', 'BE 7623764516', '02/675.56.35'),
(3, 'LOVELACE', 'rue du vélo 67', 'BELGIQUE', 'BE 3678752709', '02/786.90.89'),
(4, 'SNCB', 'rue de la poutre 34', 'BELGIQUE', 'BE 8767452678', '02/345.76.34'),
(5, 'PROXIMUS', 'avenue général jacques 2', 'BELGIQUE', 'BE 6738290944', '02/567.87.23'),
(6, 'LIDL', 'rue du bon prix 76', 'BELGIQUE', 'BE 7834562514', '02/345.76.78'),
(7, 'CARREFOUR', 'rue sans-souci 33', 'BELGIQUE', 'BE 8767459988', '02/768.33.55'),
(8, 'ALLEZ CINE', 'rue du réseau 88', 'BELGIQUE', 'BE 8736562718', '02/665.33.44');

-- --------------------------------------------------------

--
-- Table structure for table `societes_has_factures`
--

CREATE TABLE `societes_has_factures` (
  `societes_idsocietes` int(11) NOT NULL,
  `factures_idfactures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `societes_has_factures`
--

INSERT INTO `societes_has_factures` (`societes_idsocietes`, `factures_idfactures`) VALUES
(8, 2),
(1, 5),
(7, 7),
(2, 9),
(6, 11),
(3, 13),
(5, 3),
(4, 4),
(8, 6),
(1, 8),
(7, 10),
(2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `societes_has_type`
--

CREATE TABLE `societes_has_type` (
  `societes_idsocietes` int(11) NOT NULL,
  `type_idtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `societes_has_type`
--

INSERT INTO `societes_has_type` (`societes_idsocietes`, `type_idtype`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 2),
(4, 1),
(5, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2);

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
-- Dumping data for table `type_has_factures`
--

INSERT INTO `type_has_factures` (`type_idtype`, `factures_idfactures`) VALUES
(2, 2),
(2, 5),
(2, 7),
(2, 9),
(2, 11),
(2, 13),
(1, 3),
(1, 4),
(1, 6),
(1, 8),
(1, 10),
(1, 12);

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
-- Indexes for table `personnes_has_societes`
--
ALTER TABLE `personnes_has_societes`
  ADD PRIMARY KEY (`PERSONNES_idPERSONNES`,`SOCIETES_idSOCIETES`),
  ADD KEY `fk_SOCIETES_has_PERSONNES_PERSONNES1` (`SOCIETES_idSOCIETES`);

--
-- Indexes for table `societes`
--
ALTER TABLE `societes`
  ADD PRIMARY KEY (`idSOCIETES`);

--
-- Indexes for table `societes_has_factures`
--
ALTER TABLE `societes_has_factures`
  ADD KEY `fk_SOCIETES_has_FACTURES_FACTURES1` (`societes_idsocietes`),
  ADD KEY `fk_FACTURES_has_SOCIETES_SOCIETES1` (`factures_idfactures`);

--
-- Indexes for table `societes_has_type`
--
ALTER TABLE `societes_has_type`
  ADD KEY `fk_SOCIETES_has_TYPE_TYPE1` (`societes_idsocietes`),
  ADD KEY `fk_TYPE_has_SOCIETES_SOCIETES1` (`type_idtype`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idTYPE`);

--
-- Indexes for table `type_has_factures`
--
ALTER TABLE `type_has_factures`
  ADD KEY `fk_TYPE_has_FACTURES_FACTURES1` (`type_idtype`),
  ADD KEY `fk_FACTURES_has_TYPE_TYPE1` (`factures_idfactures`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
  MODIFY `idFACTURES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `idPERSONNES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `societes`
--
ALTER TABLE `societes`
  MODIFY `idSOCIETES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

--
-- Constraints for table `personnes_has_societes`
--
ALTER TABLE `personnes_has_societes`
  ADD CONSTRAINT `fk_PERSONNES_has_SOCIETES_SOCIETES1` FOREIGN KEY (`PERSONNES_idPERSONNES`) REFERENCES `personnes` (`idPERSONNES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SOCIETES_has_PERSONNES_PERSONNES1` FOREIGN KEY (`SOCIETES_idSOCIETES`) REFERENCES `societes` (`idSOCIETES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `societes_has_factures`
--
ALTER TABLE `societes_has_factures`
  ADD CONSTRAINT `fk_FACTURES_has_SOCIETES_SOCIETES1` FOREIGN KEY (`factures_idfactures`) REFERENCES `factures` (`idFACTURES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SOCIETES_has_FACTURES_FACTURES1` FOREIGN KEY (`societes_idsocietes`) REFERENCES `societes` (`idSOCIETES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `societes_has_type`
--
ALTER TABLE `societes_has_type`
  ADD CONSTRAINT `fk_SOCIETES_has_TYPE_TYPE1` FOREIGN KEY (`societes_idsocietes`) REFERENCES `societes` (`idSOCIETES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TYPE_has_SOCIETES_SOCIETES1` FOREIGN KEY (`type_idtype`) REFERENCES `type` (`idTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `type_has_factures`
--
ALTER TABLE `type_has_factures`
  ADD CONSTRAINT `fk_FACTURES_has_TYPE_TYPE1` FOREIGN KEY (`factures_idfactures`) REFERENCES `factures` (`idFACTURES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TYPE_has_FACTURES_FACTURES1` FOREIGN KEY (`type_idtype`) REFERENCES `type` (`idTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION;
