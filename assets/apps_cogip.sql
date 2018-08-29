-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 29 Août 2018 à 16:35
-- Version du serveur :  5.7.23-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `apps_cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `FACTURES`
--

CREATE TABLE `FACTURES` (
  `idFACTURES` int(11) NOT NULL,
  `numero_facture` varchar(11) DEFAULT NULL,
  `date_facture` date DEFAULT NULL,
  `motif_prestation_facture` varchar(45) DEFAULT NULL,
  `PERSONNES_idPERSONNES` int(11) NOT NULL,
  `PERSONNES_SOCIETES_idSOCIETES` int(11) NOT NULL,
  `SOCIETES_idSOCIETES1` int(11) NOT NULL,
  `TYPE_idTYPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `FACTURES`
--

INSERT INTO `FACTURES` (`idFACTURES`, `numero_facture`, `date_facture`, `motif_prestation_facture`, `PERSONNES_idPERSONNES`, `PERSONNES_SOCIETES_idSOCIETES`, `SOCIETES_idSOCIETES1`, `TYPE_idTYPE`) VALUES
(1, 'fact_A0034', '2018-02-12', 'achat de marchandises', 1, 6, 6, 1),
(2, 'fact_V0055', '2018-08-16', 'vente de marchandises', 2, 2, 2, 2),
(3, 'fact_V0056', '2018-04-17', 'vente de marchandises', 3, 4, 4, 1),
(4, 'fact_A0035', '2018-03-20', 'achat de marchandises', 4, 1, 1, 1),
(5, 'fact_V0057', '2018-02-25', 'vente de marchandises', 5, 8, 8, 1),
(6, 'fact_A0036', '2018-07-10', 'achat de marchandises', 6, 7, 7, 2),
(7, 'fact_V0058', '2017-09-12', 'vente de marchandises', 7, 3, 3, 1),
(8, 'fact_A0037', '2017-01-28', 'achat de marchandises', 8, 6, 6, 1),
(9, 'fact_V0059', '2016-10-02', 'vente de marchandises', 9, 5, 5, 2),
(10, 'fact_A0037', '2018-07-01', 'achat de marchandises', 10, 5, 5, 2),
(11, 'fact_V0060', '2017-09-30', 'vente de marchandises', 11, 2, 2, 2),
(12, 'fact_A0038', '2018-02-01', 'achat de marchandises', 12, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `PERSONNES`
--

CREATE TABLE `PERSONNES` (
  `idPERSONNES` int(11) NOT NULL,
  `nom_personne` varchar(45) DEFAULT NULL,
  `prenom_presonne` varchar(45) DEFAULT NULL,
  `telephone_personne` int(11) DEFAULT NULL,
  `email_personne` varchar(45) DEFAULT NULL,
  `SOCIETES_idSOCIETES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PERSONNES`
--

INSERT INTO `PERSONNES` (`idPERSONNES`, `nom_personne`, `prenom_presonne`, `telephone_personne`, `email_personne`, `SOCIETES_idSOCIETES`) VALUES
(1, 'Stalone', 'Sylvester', 27635445, 'S.stalone@gmail.com', 6),
(2, 'Sauvage', 'Patrick', 24678767, 'P.sauvage@gmail.com', 2),
(3, 'Dupond', 'Jean', 28765645, 'J.dupond@gmail.com', 4),
(4, 'Johnson', 'Katerine', 28764598, 'K.johnson@gmail.com', 1),
(5, 'Durand', 'Vincent', 24658967, '\'V.durand@gmail.com', 8),
(6, 'Blanc', 'Michel', 28975616, 'M.blanc@gmail.com', 7),
(7, 'Spears', 'Britney', 27659845, 'B.spears@gmail.com', 3),
(8, 'Dogg', 'Snoop', 24024040, 'S.dogg@gmai.com', 6),
(9, 'Jacques', 'Bastien', 25768725, 'J.bastien@gmail.com', 5),
(10, 'Surimis', 'Bernadette', 23446756, 'B.surimis@gmail.com', 5),
(11, 'Heman', 'Kevin', 23487836, 'K.heman@gmail.com', 2),
(12, 'Potter', 'Harry', 26788376, 'H.potter@gmail.com', 1),
(13, 'Dupond', 'René', 26738736, 'R.dupond@gmail.com', 8),
(14, 'Sheen', 'Charlie', 27865635, 'C.sheen@gmail.com', 4);

-- --------------------------------------------------------

--
-- Structure de la table `SOCIETES`
--

CREATE TABLE `SOCIETES` (
  `idSOCIETES` int(11) NOT NULL,
  `nom_societe` varchar(45) DEFAULT NULL,
  `adresse_societe` varchar(45) DEFAULT NULL,
  `pays_societe` varchar(45) DEFAULT NULL,
  `TVA_societe` varchar(45) DEFAULT NULL,
  `telephone_societe` int(11) DEFAULT NULL,
  `TYPE_idTYPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `SOCIETES`
--

INSERT INTO `SOCIETES` (`idSOCIETES`, `nom_societe`, `adresse_societe`, `pays_societe`, `TVA_societe`, `telephone_societe`, `TYPE_idTYPE`) VALUES
(1, 'BECODE', 'rue du chat perché 56', 'BELGIQUE', 'BE 0936278916', 26759845, 1),
(2, 'JOHNSON', 'avenue des éperviers 86', 'BELGIQUE', 'BE 7623764516', 26755635, 2),
(3, 'LOVELACE', 'rue du vélo 67', 'BELGIQUE', 'BE 3678752709', 27869089, 1),
(4, 'SNCB', 'rue de la poutre 34', 'BELGIQUE', 'BE 8767452678', 23457634, 1),
(5, 'PROXIMUS', 'avenue général jacques 2', 'BELGIQUE', 'BE 6738290944', 25678723, 2),
(6, 'LIDL', 'rue du bon prix 76', 'BELGIQUE\'', 'BE 7834562514', 23457678, 1),
(7, 'CARREFOUR', 'rue sans-souci 33', 'BELGIQUE', 'BE 8767459988', 27683355, 2),
(8, 'ALLEZ CINE', 'rue du réseau 88', 'BELGIQUE', 'BE 8736562718', 26653344, 1);

-- --------------------------------------------------------

--
-- Structure de la table `TYPE`
--

CREATE TABLE `TYPE` (
  `idTYPE` int(11) NOT NULL,
  `type_entreprise` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `TYPE`
--

INSERT INTO `TYPE` (`idTYPE`, `type_entreprise`) VALUES
(1, 'Clients'),
(2, 'Fournisseurs');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `FACTURES`
--
ALTER TABLE `FACTURES`
  ADD PRIMARY KEY (`idFACTURES`,`PERSONNES_idPERSONNES`,`PERSONNES_SOCIETES_idSOCIETES`,`SOCIETES_idSOCIETES1`,`TYPE_idTYPE`),
  ADD KEY `fk_FACTURES_TYPE1` (`TYPE_idTYPE`),
  ADD KEY `fk_FACTURES_PERSONNES1_idx` (`PERSONNES_idPERSONNES`,`PERSONNES_SOCIETES_idSOCIETES`),
  ADD KEY `fk_FACTURES_SOCIETES1_idx` (`SOCIETES_idSOCIETES1`);

--
-- Index pour la table `PERSONNES`
--
ALTER TABLE `PERSONNES`
  ADD PRIMARY KEY (`idPERSONNES`,`SOCIETES_idSOCIETES`),
  ADD KEY `fk_PERSONNES_SOCIETES_idx` (`SOCIETES_idSOCIETES`);

--
-- Index pour la table `SOCIETES`
--
ALTER TABLE `SOCIETES`
  ADD PRIMARY KEY (`idSOCIETES`,`TYPE_idTYPE`),
  ADD KEY `fk_SOCIETES_TYPE1_idx` (`TYPE_idTYPE`);

--
-- Index pour la table `TYPE`
--
ALTER TABLE `TYPE`
  ADD PRIMARY KEY (`idTYPE`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `FACTURES`
--
ALTER TABLE `FACTURES`
  MODIFY `idFACTURES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `PERSONNES`
--
ALTER TABLE `PERSONNES`
  MODIFY `idPERSONNES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `SOCIETES`
--
ALTER TABLE `SOCIETES`
  MODIFY `idSOCIETES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `TYPE`
--
ALTER TABLE `TYPE`
  MODIFY `idTYPE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `FACTURES`
--
ALTER TABLE `FACTURES`
  ADD CONSTRAINT `fk_FACTURES_PERSONNES1` FOREIGN KEY (`PERSONNES_idPERSONNES`,`PERSONNES_SOCIETES_idSOCIETES`) REFERENCES `PERSONNES` (`idPERSONNES`, `SOCIETES_idSOCIETES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FACTURES_SOCIETES1` FOREIGN KEY (`SOCIETES_idSOCIETES1`) REFERENCES `SOCIETES` (`idSOCIETES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FACTURES_TYPE1` FOREIGN KEY (`TYPE_idTYPE`) REFERENCES `TYPE` (`idTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `PERSONNES`
--
ALTER TABLE `PERSONNES`
  ADD CONSTRAINT `fk_PERSONNES_SOCIETES` FOREIGN KEY (`SOCIETES_idSOCIETES`) REFERENCES `SOCIETES` (`idSOCIETES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `SOCIETES`
--
ALTER TABLE `SOCIETES`
  ADD CONSTRAINT `fk_SOCIETES_TYPE1` FOREIGN KEY (`TYPE_idTYPE`) REFERENCES `TYPE` (`idTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
