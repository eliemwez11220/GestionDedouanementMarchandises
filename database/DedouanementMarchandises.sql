-- Generated by CRUDigniter v2.3 Beta 
-- www.crudigniter.com

-- Generation Time: Nov 13, 2020 10:28 PM

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Table structure for table `bonlivraisons`
--

DROP TABLE IF EXISTS `bonlivraisons`;
CREATE TABLE `bonlivraisons` (
`bon_id` int(11) NOT NULL,
`numBon` int(11) NOT NULL,
`dateBon` date NOT NULL,
`Concernee` varchar(75) NOT NULL,
`dateDedouane` date NOT NULL,
`observation` text NOT NULL,
`declarant_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `bonlivraisons`
--

ALTER TABLE `bonlivraisons`
ADD PRIMARY KEY (`bon_id`);

--
-- AUTO_INCREMENT for table `bonlivraisons`
--

ALTER TABLE `bonlivraisons`
MODIFY `bon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `cotations`
--

DROP TABLE IF EXISTS `cotations`;
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
-- Table structure for table `demandeclients`
--

DROP TABLE IF EXISTS `demandeclients`;
CREATE TABLE `demandeclients` (
`dem_id` int(11) NOT NULL,
`date_demande` date NOT NULL,
`motif_demande` text NOT NULL,
`nom_client` varchar(75) NOT NULL,
`adresse` text NOT NULL,
`telephone` varchar(25) NOT NULL,
`observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `demandeclients`
--

ALTER TABLE `demandeclients`
ADD PRIMARY KEY (`dem_id`);

--
-- AUTO_INCREMENT for table `demandeclients`
--

ALTER TABLE `demandeclients`
MODIFY `dem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `marchandises`
--

DROP TABLE IF EXISTS `marchandises`;
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

--
-- Indexes for table `marchandises`
--

ALTER TABLE `marchandises`
ADD PRIMARY KEY (`mar_id`);

--
-- AUTO_INCREMENT for table `marchandises`
--

ALTER TABLE `marchandises`
MODIFY `mar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `registredossiers`
--

DROP TABLE IF EXISTS `registredossiers`;
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

--
-- Indexes for table `registredossiers`
--

ALTER TABLE `registredossiers`
ADD PRIMARY KEY (`dossier_id`);

--
-- AUTO_INCREMENT for table `registredossiers`
--

ALTER TABLE `registredossiers`
MODIFY `dossier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `declarants`
--

DROP TABLE IF EXISTS `declarants`;
CREATE TABLE `declarants` (
`matricule` varchar(255) ,
`nomDeclarant` varchar(255) ,
`telephone` varchar(255) ,
`adresse` text ,
`email` varchar(255) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `declarants`
--

ALTER TABLE `declarants`
ADD PRIMARY KEY (`matricule`);

--
-- AUTO_INCREMENT for table `declarants`
--

ALTER TABLE `declarants`
MODIFY `matricule` varchar(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;