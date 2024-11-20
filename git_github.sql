-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 nov. 2024 à 14:37
-- Version du serveur : 11.4.0-MariaDB
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `git_github`
--

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `idVisiteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `Password` varchar(256) NOT NULL,
  PRIMARY KEY (`idVisiteur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`idVisiteur`, `nom`, `email`, `Password`) VALUES
(1, 'baltak', 'arnoldlandre@gmail.com', '$2y$10$O0DXyAq9CTw98WQscT16IOKHLyWs4qpSeeBdLjlrm.2xyapv5yuke'),
(2, 'bit', 'inessyoutchou929@gmail.com', '$2y$10$V3.n2wSmWKifYWliljAJUOcXB.0wXfvbkPWuF5/a6roIA29kT3Y06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
