-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 09 mai 2022 à 16:28
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(10) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `ville` varchar(11) NOT NULL,
  `cp` varchar(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` enum('location','vente','vacance') NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'ShareHouse ', '26 chemin des enfers', 'Nice', '06200', 121, 1300, './media/maison PHP eval.jpg', 'location', 'Magnifique t4 proche du centre ville et des petits commerces. Vous êtes à 5 minutes de la plage. Parfait pour une famille ou une petite collocation entre amis.'),
(2, 'Villa de luces~', '33 rue des souffrances', 'avignon', '84003', 85, 950, './media/Maison_2-PHP.jpg', 'location', 'Petite maison moderne, situé dans une petite campagne, à la lisière d\'un petit bois. Le chemin derrière la maison, est parfait pour les amoureux de balades. Il vous mènera à un magnifique lac. '),
(3, 'BabaYaga', '16 route de la sorcière', 'Antibes', '06004', 140, 215000, './media/maisonsPHP.jpg', 'vente', 'Cette pépite , unique en son genre, a appartenu à la célèbre Babayaga. Aujourd\'hui et après quelques rénovations, elle est prête à accueillir ses futurs occupants. Je la recommande pour une famille ayant plusieurs enfants de bas âges.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
