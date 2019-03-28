-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 28 mars 2019 à 10:32
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaires` int(3) NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `commentaire` text,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaires`, `pseudo`, `email`, `commentaire`, `date`) VALUES
(2, 'dszd', 'assa@g.c', 'dddddd', ' 28-03-2019 - 09:15:47 ');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id_experiences` int(3) NOT NULL,
  `poste` varchar(50) DEFAULT NULL,
  `entreprise` varchar(50) DEFAULT NULL,
  `description` text,
  `date_debut` varchar(255) DEFAULT NULL,
  `date_fin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id_experiences`, `poste`, `entreprise`, `description`, `date_debut`, `date_fin`) VALUES
(1, 'EmployÃ© Administratif', 'Caplogy', 'Gestion Administrative', 'AoÃ»t - 2013', 'AoÃ»t - 2013'),
(2, 'Assistante Administrative', 'Direction RÃ©gionnale de Lidl ', 'Gestion Administratif au Service du Personnel', 'Sept - 2013', 'Janv - 2014'),
(3, 'Assistante Administrative', 'Pole Emploi', 'Gestion des demandes des clients', 'Janv - 2016', 'AoÃ»t - 2016'),
(4, 'SecrÃ©taire Polyvalante', 'Maison de Quartier Clos D Arcy', 'Gestion du Secretariat, de la Comptabilite et accompagnement au activitÃ©s divers des enfants ', 'Mars - 2017', 'Mars - 2018'),
(5, 'DÃ©veloppeur - IntÃ©grateur  Web Junior', 'Le Pole S (78)', 'CrÃ©ation de site Web', 'Sept - 2018', 'Juil - 2019');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id_formations` int(3) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `lieu` varchar(250) DEFAULT NULL,
  `description` text,
  `date_debut` varchar(255) DEFAULT NULL,
  `date_fin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id_formations`, `titre`, `lieu`, `description`, `date_debut`, `date_fin`) VALUES
(1, 'BaccalaurÃ©at Professionnel SecrÃ©tariat', 'Adrienne Bolland - Poissy (78)', 'Administration', 'Sept - 2009', 'Juin - 2012'),
(2, 'Web Force 3', 'Poisssy (78)', 'Apprentissage de langages Web', 'Sept - 2018', 'Juil - 2019'),
(3, 'BEP', 'Adrienne Bolland', 'BEP  Administratif', 'Sept - 2009', 'Juin - 2011');

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

CREATE TABLE `loisirs` (
  `id_loisirs` int(3) NOT NULL,
  `loisir` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `loisirs`
--

INSERT INTO `loisirs` (`id_loisirs`, `loisir`) VALUES
(1, 'Danse Africaine'),
(2, 'Voyages');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id_photo`, `photo`) VALUES
(1, 'http://localhost/Cours/SitePortfolio/image/Avatar.png'),
(19, 'http://localhost/Cours/SitePortfolio/image/php.jpg'),
(23, 'http://localhost/Cours/SitePortfolio/image/PoleEmploi.png'),
(24, 'http://localhost/Cours/SitePortfolio/image/Lidl.png'),
(25, 'http://localhost/Cours/SitePortfolio/image/gimp.jpeg'),
(26, 'http://localhost/Cours/SitePortfolio/image/js.jpg'),
(27, 'http://localhost/Cours/SitePortfolio/image/html-css.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `realisations`
--

CREATE TABLE `realisations` (
  `id_realisations` int(3) NOT NULL,
  `competences` varchar(50) DEFAULT NULL,
  `description` text,
  `date_rea` varchar(50) DEFAULT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisations`
--

INSERT INTO `realisations` (`id_realisations`, `competences`, `description`, `date_rea`, `photo`) VALUES
(1, 'HTML - CSS', 'Maquette et RÃ©alisation en HTML - CSS', 'Sept - Nov 2018', ''),
(2, 'Javascript', 'Maquettes et RÃ©alisation en JS', 'Nov - DÃ©c 2018', ''),
(3, 'Bootstrap', 'Maquettes et RÃ©alisation avec Bootstrap', 'Oct 2018', ''),
(4, 'Ajax', 'Apprentissage du langage', 'Fev 2019', ''),
(5, 'Php - POO', 'Apprentissage du langage', 'Jan - Fev 2019', ''),
(6, 'SQL', 'Apprentissage et Mise en pratique ', 'Dec 2018', ''),
(7, 'Symfony', 'Apprentissage et Mise en pratique ', 'Fev - 2019', ''),
(8, 'WordPress', 'Apprentissage et Mise en pratique ', 'Dec 2018', '');

-- --------------------------------------------------------

--
-- Structure de la table `titre_cv`
--

CREATE TABLE `titre_cv` (
  `id_titre_cv` int(3) NOT NULL,
  `titre_cv` text,
  `description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `titre_cv`
--

INSERT INTO `titre_cv` (`id_titre_cv`, `titre_cv`, `description`) VALUES
(1, 'DÃ©veloppeuse - IntÃ©gratrice Web', 'Junior');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(3) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `ville` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `pays` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `telephone` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pseudo` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `mdp` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `site_web` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `pays`, `date_naissance`, `telephone`, `email`, `pseudo`, `mdp`, `site_web`) VALUES
(1, 'Traore', 'Assa', '60 avenue Marechal Lyautey', 78300, 'Poissy', 'France', '1994-01-20', 0751573705, 'assa.traore@lepoles.com', 'Biss', '20011994', 'https://assatraorebtsam.wixsite.com/website');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaires`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id_experiences`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id_formations`);

--
-- Index pour la table `loisirs`
--
ALTER TABLE `loisirs`
  ADD PRIMARY KEY (`id_loisirs`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Index pour la table `realisations`
--
ALTER TABLE `realisations`
  ADD PRIMARY KEY (`id_realisations`);

--
-- Index pour la table `titre_cv`
--
ALTER TABLE `titre_cv`
  ADD PRIMARY KEY (`id_titre_cv`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaires` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experiences` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id_formations` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `loisirs`
--
ALTER TABLE `loisirs`
  MODIFY `id_loisirs` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `id_realisations` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `titre_cv`
--
ALTER TABLE `titre_cv`
  MODIFY `id_titre_cv` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
