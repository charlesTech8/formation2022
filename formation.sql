-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 08 jan. 2022 à 22:00
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `nomArticle` varchar(255) NOT NULL,
  `descriptionArticle` text NOT NULL,
  `prixUnitaire` int(11) NOT NULL CHECK (`prixUnitaire` >= 0),
  `prixPromo` int(11) DEFAULT NULL CHECK (`prixPromo` < `prixUnitaire`),
  `detailArticle` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `nomArticle`, `descriptionArticle`, `prixUnitaire`, `prixPromo`, `detailArticle`) VALUES
(1, 'Akassa', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 100, 50, 'Akassa du b&eacute;nin'),
(2, 'Piment', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 50, 0, 'Akassa du b&eacute;nin'),
(4, 'Orange', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 100, 50, 'Akassa du b&eacute;nin'),
(5, 'Mangue', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 100, 50, 'Akassa du b&eacute;nin'),
(6, 'Tomate', 'Some quick example text to build on the card title and make up the bulk of the card\\\'s content.', 200, 0, 'Some quick example text to build on the card title and make up the bulk of the card\\\'s content.'),
(8, 'Orge', 'Some quick example text to build on the card title and make up the bulk of the card\\\'s content.', 10000, 9000, 'Some quick example text to build on the card title and make up the bulk of the card\\\'s content.'),
(10, 'Poisson', 'Some quick example text to build on the card title and make up the bulk of the card\\\'s content.', 2500, 2000, 'Some quick example text to build on the card title and make up the bulk of the card\\\'s content.');

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `lien_img` varchar(255) NOT NULL,
  `id_article` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `lien_img`, `id_article`) VALUES
(1, 'formation.jpg', 10),
(2, 'formation.jpg', 1),
(3, 'formation.jpg', 2),
(4, 'formation1.jpg', 4),
(5, 'formation1.jpg', 5),
(6, 'formation1.jpg', 6),
(7, 'formation.jpg', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
