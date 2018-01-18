-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 18 Janvier 2018 à 18:07
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `publishDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `publishDate`) VALUES
(1, 'Test', 'Test ta race', '2018-01-17 17:09:28'),
(2, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:41:22'),
(3, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:42:43'),
(4, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:42:44'),
(5, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:43:10'),
(6, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:43:46'),
(7, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:44:43'),
(8, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:46:02'),
(9, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:46:36'),
(10, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:46:46'),
(11, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:03'),
(12, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:52'),
(13, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:53'),
(14, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:53'),
(15, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:53'),
(16, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:53'),
(17, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:53'),
(18, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:54'),
(19, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:54'),
(20, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:54'),
(21, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:48:54'),
(22, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:50:16'),
(23, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:50:44'),
(24, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:52:38'),
(25, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:53:25'),
(26, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:54:14'),
(27, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:54:38'),
(28, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:56:00'),
(29, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:56:33'),
(30, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:57:14'),
(31, 'TEST 2', 'Test paeerrrer', '2018-01-17 17:57:25');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `commentDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `subscrDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `age`, `subscrDate`) VALUES
(1, 'jdabricot', 'bd2e4e567b8a0af893274ebfb86afe9cef6db1ac', 'jdabricot@inbox.fr', 24, '2018-01-18 11:36:02'),
(2, 'yficadiere', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'yficadiere@inbox.fr', 22, '2018-01-18 11:40:15'),
(3, 'ftir', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'ftir@inbox.fr', 23, '2018-01-18 14:11:55'),
(4, 'hbenhammar', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'hbenhammar@inbox.fr', 32, '2018-01-18 14:20:49'),
(6, 'llesecq', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'llesecq@inbox.fr', 30, '2018-01-18 16:56:01'),
(7, 'rasta', '3b4921ceb05fe441cbb43cd9b3ae92b79aea0af6', 'superman@toto.com', 32, '2018-01-18 17:20:16');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
