-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 juin 2024 à 09:20
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `t_appli`
--

-- --------------------------------------------------------

--
-- Structure de la table `chauffeurs`
--

CREATE TABLE `chauffeurs` (
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `numPermis` text NOT NULL,
  `Tvoiture` varchar(50) NOT NULL,
  `plaqueImmatriculation` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chauffeurs`
--

INSERT INTO `chauffeurs` (`nom`, `email`, `tel`, `numPermis`, `Tvoiture`, `plaqueImmatriculation`, `mdp`, `id`) VALUES
('rodrigue', 'rodrigue@gamil', '456123', '963852', 'yaris', 'kjsojs', 'azerty', 1),
('eunice', 'leslie_sam@gmail.com', '677302364', 'qe3456gds7', 'berline', 'AD614OU', '2345', 2),
('ken', 'ken@gmail.com', '741852', 'jlbkjbjb', 'khvbjkj', 'khvyvybu', '321321', 3);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`nom`, `email`, `tel`, `mdp`, `id`) VALUES
('joel', 'rodrigue@gmail.com', 1425, 'rodrigue', 8),
('latifah', 'latifah@gmail', 456987, '2525', 9),
('ken', 'ken@gmail.com', 741852, '321321', 14),
('ken', 'ken@gmail.com', 6251436, '321321', 12),
('landry', 'landry@gmail.com', 6584769, 'landry123', 11),
('joel', 'rodrigue@gmail.com', 81214724, '123456', 6),
('rodrigue', 'rodrigue@gmail.com', 696494062, '142536', 1),
('joel', 'rodrigue@gmail.com', 812147245, '123456', 7),
('ngomegni', 'ngomegnieunice@gmail.com', 987654332, '1234', 10),
('rodrigue', 'rodrigue@gmail.com', 2147483647, '142536', 4);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `nom`, `comment`) VALUES
(2, 'chancelle', 'fabuleux'),
(3, 'chancelle', 'vraiment ce site est bien je le recommande \r\n'),
(4, 'rodrigue', 'presque satisfait !!!\r\n'),
(5, 'henri', '2 etoiles');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `namec` varchar(50) NOT NULL,
  `surename` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `dateR` date NOT NULL,
  `heure` time NOT NULL,
  `nb_place` int(10) NOT NULL,
  `telephone` int(11) NOT NULL,
  `cpoint` varchar(15) NOT NULL,
  `Destination` varchar(15) NOT NULL,
  `statuss` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`namec`, `surename`, `email`, `dateR`, `heure`, `nb_place`, `telephone`, `cpoint`, `Destination`, `statuss`, `id`) VALUES
('anthony', 'leo', 'leo@gmail.com', '2024-06-17', '02:57:00', 1, 6584769, 'Guerite', 'Marhaba', '', 1),
('jean', 'francis', 'JF@gmail.com', '2023-01-31', '00:59:00', 1, 6584769, 'Carrefout Boron', 'Carrefout Boron', 'oui', 2),
('jule', 'julio', 'jj@gmail', '2024-06-30', '21:59:00', 2, 147852369, 'LMD', 'Marhaba', 'oui', 3),
('jean', 'francis', 'JF@gmail.com', '2023-01-31', '00:59:00', 1, 6584769, 'Carrefout Boron', 'Carrefout Boron', 'oui', 4),
('rodrigueks', 'joelks', 'rodriguejoel96@gmail.comks', '2024-01-01', '23:59:00', 1, 81214724, 'Carrefout Boron', 'Marhaba', 'reservation refusé', 5),
('jules', 'yves', 'yves@gmail.com', '2023-12-01', '22:00:00', 2, 6589674, 'Commissariat', 'MobileOil Manwi', 'reservation accepté', 6),
('jules', 'yves', 'yves@gmail.com', '2023-12-01', '22:00:00', 2, 6589674, 'Commissariat', 'MobileOil Manwi', '', 7),
('kevin', 'sdf', 'sdfsdfsdf@gmail', '2023-12-31', '22:59:00', 2, 696494022, 'Carrefout Boron', 'Marhaba', 'reservation refusé', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`tel`),
  ADD KEY `id_chauffeurs` (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`tel`),
  ADD KEY `id_client` (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD UNIQUE KEY `index_id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
