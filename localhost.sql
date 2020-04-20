-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 20 avr. 2020 à 18:22
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `enchere`
--

-- --------------------------------------------------------

--
-- Structure de la table `encheres`
--

DROP TABLE IF EXISTS `encheres`;
CREATE TABLE IF NOT EXISTS `encheres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_objet` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `encheres`
--

INSERT INTO `encheres` (`id`, `id_objet`, `id_utilisateur`, `prix`) VALUES
(1, 1, 1, 600);

-- --------------------------------------------------------

--
-- Structure de la table `objets`
--

DROP TABLE IF EXISTS `objets`;
CREATE TABLE IF NOT EXISTS `objets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendeur` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `description` text DEFAULT NULL,
  `prix` float NOT NULL,
  `photo` text DEFAULT NULL,
  `cat` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objets`
--

INSERT INTO `objets` (`id`, `id_vendeur`, `nom`, `description`, `prix`, `photo`, `cat`, `type`, `date`) VALUES
(1, 1, 'ordi', 'blabla', 599.99, '', 0, 0, '2020-04-19 12:55:19'),
(2, 1, 'mac', 'blabla', 3000, '', 0, 0, '2020-04-19 12:55:19'),
(3, 1, 'iphone', 'blabla', 600, '', 0, 0, '2020-04-19 12:55:19'),
(5, 4, 'velo', 'blablablabla super velo', 200, '', 0, 2, '2020-04-19 12:55:19'),
(6, 4, 'table', 'mega table', 50, '', 0, 2, '2020-04-19 12:55:19'),
(7, 5, 'bb', '', 1, NULL, 1, 0, '2020-04-20 17:23:55'),
(8, 5, 'zefzef', '', 50, NULL, 1, 2, '2020-04-20 18:36:15');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `bg` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `mdp` text NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `mail`, `bg`, `avatar`, `mdp`, `admin`) VALUES
(1, 'aydev', 'contact@aydev.fr', 'https://images.unsplash.com/photo-1511447333015-45b65e60f6d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2623&q=80', '', 'toto42', 0),
(3, 'zef', 'ezf', '', '', 'zef', 1),
(4, 'jojolapin', 'toto', 'https://c.wallhere.com/photos/9c/e1/ammunition_CAL_45_Colt_1911-179980.jpg!d', '', 'toto', 1),
(5, 'zaz', 'bnbn@lolo', NULL, NULL, 'zaz', 0),
(6, 'rty', 'blablo', NULL, NULL, 'rty', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
