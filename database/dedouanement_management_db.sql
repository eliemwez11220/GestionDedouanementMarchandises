-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 13 nov. 2020 à 18:07
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dedouanement_management_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `bonlivraisons`
--

CREATE TABLE `bonlivraisons` (
  `bon_id` int(11) NOT NULL,
  `numBon` int(11) NOT NULL,
  `dateBon` date NOT NULL,
  `Concernee` varchar(75) NOT NULL,
  `dateDedouane` date NOT NULL,
  `observation` text NOT NULL,
  `declarant_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cotations`
--

CREATE TABLE `cotations` (
  `cot_id` int(11) NOT NULL,
  `numCotation` varchar(75) NOT NULL,
  `dateCotation` date NOT NULL,
  `concernee` varchar(75) NOT NULL,
  `periode` date NOT NULL,
  `facture` varchar(75) NOT NULL,
  `marque` varchar(75) NOT NULL,
  `dgda` varchar(95) NOT NULL,
  `redevance` varchar(95) NOT NULL,
  `fpi` varchar(95) NOT NULL,
  `ogefrem` varchar(95) NOT NULL,
  `pors_soins` varchar(95) NOT NULL,
  `honoraire` varchar(95) NOT NULL,
  `tva` varchar(75) NOT NULL,
  `frais_transit` float NOT NULL,
  `seguce` varchar(95) NOT NULL,
  `intervention` text NOT NULL,
  `montant` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `declarants`
--

CREATE TABLE `declarants` (
  `matricule` varchar(255) NOT NULL,
  `nomDeclarant` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `adresse` text,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demandeclients`
--

CREATE TABLE `demandeclients` (
  `dem_id` int(11) NOT NULL,
  `date_demande` date NOT NULL,
  `motif_demande` text NOT NULL,
  `nom_client` varchar(75) NOT NULL,
  `adresse` text NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `marchandises`
--

CREATE TABLE `marchandises` (
  `mar_id` int(11) NOT NULL,
  `designation` varchar(75) NOT NULL,
  `quantite` varchar(10) NOT NULL,
  `poids` varchar(75) NOT NULL,
  `volume` varchar(75) NOT NULL,
  `client_sid` int(11) NOT NULL,
  `cotation_sid` int(11) NOT NULL,
  `bonLivraison_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `registredossiers`
--

CREATE TABLE `registredossiers` (
  `dossier_id` int(11) NOT NULL,
  `numDossier` varchar(75) NOT NULL,
  `paysProv` varchar(75) NOT NULL,
  `lieuEntree` varchar(75) NOT NULL,
  `dateEntree` date NOT NULL,
  `nationTransp` varchar(75) NOT NULL,
  `modeTransp` varchar(75) NOT NULL,
  `valeurDouane` varchar(75) NOT NULL,
  `DroitPercu` varchar(75) NOT NULL,
  `entrepot` text NOT NULL,
  `apurement` text NOT NULL,
  `liquidation` text NOT NULL,
  `observation` text NOT NULL,
  `declarant_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'logisticien',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT NULL,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(1, 'Elie Mwez', 'eliemwez', '$2y$12$RxoZZtrglgKwikbElHaDcOec1N97l8vXS6bB.pSHO85/nJXpnyxiG', 'eliemwez.rubuz@gmail.com', 'masculin', '+243858533285', 'user', '2020-09-11 08:08:58', '2020-11-13 15:49:05', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-11-13 17:35:40', 'caissier', '11220'),
(2, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243903774951', 'admin', '2020-09-21 08:01:52', '2020-11-13 15:50:27', 'active', 'global/img/avatars/client_satisfaction.png', '2020-11-13 17:21:38', 'admin', '2020010'),
(3, 'Mohamed', 'mohamed', '$2y$12$lLICVOX4JpnObVEbJUNwn.ud/qTSYSzQKb3sIGa6erkr4ezDIsEQ2', 'mohamed@gmail.com', 'masculin', '+243975556941', 'user', '2020-10-18 17:40:01', '2020-11-13 15:35:14', 'active', NULL, '2020-11-13 17:35:14', 'dex', '1122001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bonlivraisons`
--
ALTER TABLE `bonlivraisons`
  ADD PRIMARY KEY (`bon_id`);

--
-- Index pour la table `declarants`
--
ALTER TABLE `declarants`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `demandeclients`
--
ALTER TABLE `demandeclients`
  ADD PRIMARY KEY (`dem_id`);

--
-- Index pour la table `marchandises`
--
ALTER TABLE `marchandises`
  ADD PRIMARY KEY (`mar_id`);

--
-- Index pour la table `registredossiers`
--
ALTER TABLE `registredossiers`
  ADD PRIMARY KEY (`dossier_id`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bonlivraisons`
--
ALTER TABLE `bonlivraisons`
  MODIFY `bon_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demandeclients`
--
ALTER TABLE `demandeclients`
  MODIFY `dem_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marchandises`
--
ALTER TABLE `marchandises`
  MODIFY `mar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `registredossiers`
--
ALTER TABLE `registredossiers`
  MODIFY `dossier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
