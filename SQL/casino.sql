-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 nov. 2021 à 18:35
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `casino`
--

-- --------------------------------------------------------

--
-- Structure de la table `catégorie`
--

CREATE TABLE `catégorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `catégorie`
--

INSERT INTO `catégorie` (`id_categorie`, `nom_categorie`) VALUES
(0, 'Voyage'),
(1, 'Voiture'),
(2, 'Point');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date DEFAULT NULL,
  `quantite_commande` double DEFAULT NULL,
  `id_etat` int(11) NOT NULL,
  `Id_Profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

CREATE TABLE `concerner` (
  `Id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etat_cmd`
--

CREATE TABLE `etat_cmd` (
  `id_etat` int(11) NOT NULL,
  `nom_etat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etat_cmd`
--

INSERT INTO `etat_cmd` (`id_etat`, `nom_etat`) VALUES
(0, 'Terminé'),
(1, 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) DEFAULT NULL,
  `prix_produit` double DEFAULT NULL,
  `quantite_produit` double DEFAULT NULL,
  `description_produit` varchar(50) DEFAULT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `nom_produit`, `prix_produit`, `quantite_produit`, `description_produit`, `id_categorie`) VALUES
(0, '100 Points', 10, 1e24, 'Points pour jouer aux jeux de casino', 2),
(1, 'BMW i8 Coupé', 1420000, 10, 'Véhicule sportif pour les petites promenades du we', 1);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `Id_Profil` int(11) NOT NULL,
  `mail_profil` varchar(50) DEFAULT NULL,
  `login_profil` text DEFAULT NULL,
  `password_profil` varchar(2048) DEFAULT NULL,
  `status_profil` text NOT NULL,
  `nom_profil` varchar(50) DEFAULT NULL,
  `prenom_profil` varchar(50) DEFAULT NULL,
  `naissance_profil` date DEFAULT NULL,
  `tel_profil` varchar(50) DEFAULT NULL,
  `credit_profil` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`Id_Profil`, `mail_profil`, `login_profil`, `password_profil`, `status_profil`, `nom_profil`, `prenom_profil`, `naissance_profil`, `tel_profil`, `credit_profil`) VALUES
(12, 'user@gmail.com', 'user', '$2y$10$2utQPXn/OpCZDundcbDjW.8miCWQTFkR74nVrWyfbGjASYEGLjWwm', 'user', 'Non renseigné', 'Non renseigné', '0000-00-00', 'Non renseigné', 100),
(13, 'admin@gmail.com', 'admin', '$2y$10$wKRCG94Eb3WCgLA8IykA/ezQ/tubCk/oEdaJeGmW8OCnIYlb2u9sW', 'admin', 'Non renseigné', 'Non renseigné', '0000-00-00', 'Non renseigné', 100);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `etat_cmd`
--
ALTER TABLE `etat_cmd`
  ADD PRIMARY KEY (`id_etat`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id_produit`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`Id_Profil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etat_cmd`
--
ALTER TABLE `etat_cmd`
  MODIFY `id_etat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `Id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `Id_Profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
