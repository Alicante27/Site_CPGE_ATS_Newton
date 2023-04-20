-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : drvevtibd.mysql.db
-- Généré le : dim. 08 jan. 2023 à 17:46
-- Version du serveur : 5.7.40-log
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `drvevtibd`
--

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `Promo` int(4) DEFAULT NULL,
  `Bac` varchar(18) DEFAULT NULL,
  `BTS/DUT` varchar(8) DEFAULT NULL,
  `Ecole` varchar(23) DEFAULT NULL,
  `Concours/Dossier` varchar(12) DEFAULT NULL,
  `Statut` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`Promo`, `Bac`, `BTS/DUT`, `Ecole`, `Concours/Dossier`, `Statut`) VALUES
(2020, '', 'DUT GTE', 'UTBM', 'Dossier', 'Étudiant'),
(2020, '', 'BTS SIO', NULL, NULL, NULL),
(2020, '', 'DUT MP', 'ESILV', 'Dossier', 'Apprenti'),
(2020, '', 'DUT GMP', 'IMT Mines Nord Europe', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'ESTP', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GC', 'CESI', 'Dossier', 'Apprenti'),
(2020, '', 'DUT GTE', 'ESTP', 'Concours ATS', 'Étudiant'),
(2020, '', 'BTS MCI', 'IMT Mines Nord Europe', 'Concours ATS', 'Apprenti'),
(2020, '', 'DUT GTE', 'Arts et métiers', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'ESTP', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT MP', 'SUPMECA', 'Dossier', 'Apprenti'),
(2020, '', 'DUT GTE', 'ISAT', 'Dossier', 'Apprenti'),
(2020, '', 'DUT GTE', NULL, NULL, NULL),
(2020, '', 'DUT GTE', 'UTBM', 'Dossier', 'Étudiant'),
(2020, '', 'DUT RT', 'TELECOM Saint-Étienne', 'Dossier', 'Apprenti'),
(2020, '', 'DUT GTE', 'ECAM Lyon', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'Polytech Marseille', 'Concours ATS', 'Étudiant'),
(2020, '', 'PN', NULL, NULL, NULL),
(2020, '', 'DUT GMP', NULL, NULL, NULL),
(2020, '', 'DUT GIM', 'ESIGELEC', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT MP', 'IMT Mines Nord Europe', 'Concours ATS', 'Apprenti'),
(2020, '', 'DUT GTE', 'Polytech Orléans', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'Arts et métiers', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'Arts et métiers', 'Concours ATS', 'Étudiant'),
(2020, '', 'BTS Geo', 'ESTP', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'SUPMECA', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'ESTP', 'Concours ATS', 'Étudiant'),
(2020, '', 'DUT GTE', 'UTC', 'Dossier', 'Étudiant'),
(2020, '', 'DUT GC', NULL, NULL, NULL),
(2020, '', 'DUT MP', 'ECAM Lyon', 'Concours ATS', 'Étudiant'),
(2020, '', 'BTS MV', 'ESILV', 'Dossier', 'Apprenti'),
(2020, '', 'DUT GEII', 'Arts et métiers', 'Concours ATS', 'Étudiant'),
(2020, '', 'BTS ET', 'Licence Génie Energ.', 'Université', 'Étudiant'),
(2021, 'Général', 'BTS Geo', 'ECAM-EPMI', 'Dossier', 'Apprenti'),
(2021, 'Général', 'BTS', NULL, NULL, NULL),
(2021, 'Général', 'DUT GTE', 'Mines Paris - PSL', 'Dossier', 'Apprenti'),
(2021, 'Techno', 'DUT GTE', 'ESTP', 'Dossier', 'Apprenti'),
(2021, 'Général', 'DUT MP', 'ESTP', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'DUT GIM', 'ESTP', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'DUT GIM', 'Mecavenir', 'Dossier', 'Apprenti'),
(2021, 'Général', 'DUT GIM', 'ENSEA', 'Concours ATS', 'Étudiant'),
(2021, 'Pro', 'BTS', 'ESIX', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'DUT MP', 'Arts et métiers', 'Concours ATS', 'Étudiant'),
(2021, 'Techno', 'DUT GMP', 'EIGSI', 'Dossier', 'Apprenti'),
(2021, 'Général', 'DUT MP', 'IMT Mines Saint-Étienne', 'Dossier', 'Apprenti'),
(2021, 'Général', 'BTS CPI', 'Mines Paris - PSL', 'Concours ATS', 'Étudiant'),
(2021, 'Techno', 'BTS', 'ESIEA', 'Concours ATS', 'Apprenti'),
(2021, 'Techno', 'DUT GTE', 'UTBM', 'Dossier', 'Étudiant'),
(2021, 'Général', 'PN', 'Polytech Nancy', 'Concours ATS', 'Étudiant'),
(2021, 'Techno', 'DUT', 'Arts et métiers', 'Dossier', 'Apprenti'),
(2021, 'Général', 'DUT MP', 'Arts et métiers', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'DUT GTE', 'IMT Mines Albi', 'Concours ATS', 'Apprenti'),
(2021, 'Techno', 'BTS MCI', 'Licence mécanique', 'Université', 'Étudiant'),
(2021, 'Général', 'DUT GTE', 'UTBM', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'BTS', 'EIL', 'Concours ATS', 'Étudiant'),
(2021, 'Techno', 'DUT GEII', 'ENSEA', 'Concours ATS', 'Étudiant'),
(2021, 'Techno', 'BTS SNIR', NULL, NULL, NULL),
(2021, 'Général (étranger)', 'DUT GTE', 'Polytech Marseille', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'BTS SNIR', 'ECAM-EPMI', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'DUT GTE', 'Polytech Marseille', 'Concours ATS', 'Étudiant'),
(2021, 'Général', 'BTS SNIR', 'Polytech Tours', 'Concours ATS', 'Étudiant'),
(2022, 'Techno', 'BTS CIM', NULL, NULL, NULL),
(2022, 'Général', 'DUT GC', 'ESTP', 'Dossier', 'Apprenti'),
(2022, 'Pro', 'DUT GEII', NULL, NULL, NULL),
(2022, 'Général (étranger)', 'BTS CRSA', 'Licence finance', 'Université', 'Étudiant'),
(2022, 'Techno', 'BTS SNIR', 'ESIPE', 'Dossier', 'Apprenti'),
(2022, 'Pro', 'BTS ET', NULL, NULL, NULL),
(2022, 'Général', 'DUT GTE', 'Centrale Lille', 'Concours ATS', 'Étudiant'),
(2022, 'Techno', 'BTS MS', 'ISAE-SUPMECA', 'Dossier', 'Apprenti'),
(2022, 'Général', 'BTS CPI', 'École inconnue', 'Dossier', NULL),
(2022, 'Général', 'DUT GMP', 'ISAT', 'Dossier', 'Apprenti'),
(2022, 'Général', 'DUT GC', 'Polytech Lyon', 'Concours ATS', 'Étudiant'),
(2022, 'Techno', 'BTS MS', 'He2B', 'Dossier', 'Apprenti'),
(2022, '', 'BTS MCI', NULL, NULL, NULL),
(2022, 'Général', 'DUT GTE', 'UTC', 'Dossier', 'Étudiant'),
(2022, 'Général (étranger)', 'DST GSI', 'ESAIP', 'Dossier', 'Apprenti'),
(2022, 'Général', 'DUT GTE', 'ESILV', 'Dossier', 'Apprenti'),
(2022, '', 'BTS SIO', 'Licence sociologie', 'Université', 'Étudiant'),
(2022, 'Général (étranger)', 'BTS FED', 'INSA Strasbourg', 'Dossier', 'Étudiant'),
(2022, 'Général', 'DUT GEII', 'Telecom Sud Paris', 'Concours ATS', 'Étudiant'),
(2022, 'Général', 'DUT GTE', 'EIGSI', 'Concours ATS', 'Étudiant'),
(2022, 'Techno', 'DUT MP', 'ECAM Rennes', 'Concours ATS', 'Étudiant'),
(2022, 'Techno', 'BTS ET', 'ECAM-EPMI', 'Concours ATS', 'Étudiant'),
(2022, 'Techno', 'BTS ET', 'Redoublement', NULL, 'Étudiant'),
(2022, 'Techno (étranger)', 'BTS Meca', 'Master Gestion Prod', 'Université', 'Étudiant'),
(2022, '', 'DUT MMI', 'ENSIIE', 'Dossier', 'Étudiant'),
(2022, 'Général', 'DUT GTE', 'Polytech Orléans', 'Concours ATS', 'Étudiant'),
(2022, '', 'DUT GEII', 'ESIGELEC', 'Concours ATS', 'Étudiant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
