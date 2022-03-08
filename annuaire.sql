-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 02:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repertoire`
--

-- --------------------------------------------------------

--
-- Table structure for table `annuaire`
--

CREATE TABLE `annuaire` (
  `id_annuaire` int(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `telephone` int(10) UNSIGNED ZEROFILL NOT NULL,
  `profession` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `codepostal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `sexe` enum('m','f') NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annuaire`
--

INSERT INTO `annuaire` (`id_annuaire`, `nom`, `prenom`, `telephone`, `profession`, `ville`, `codepostal`, `adresse`, `date_de_naissance`, `sexe`, `description`) VALUES
(2, 'Destina', 'Jovenel', 0635133133, 'Dévelopeur', 'Paris', 75000, 'rue de l\'église', '1997-03-02', 'm', 'Pour que les apprenants ne perdent jamais le \"fil du code\" pendant les cours.'),
(4, 'Destina', 'Jovenel', 0635133133, 'Développeur', 'Paris', 07500, 'rue de l\'église', '1997-03-02', 'm', 'Pour que les apprenants ne perdent jamais le \"fil du code\" pendant les cours.'),
(5, 'Joseph', 'jimmy', 4294967295, 'Etudiant', 'VILLENEUVE ST GEORGES (94190)', 94190, '36 AVENUE DE L\'EUROPE', '2000-01-01', 'm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Songeon', 'Thomas', 4294967295, 'informaticien', 'VILLENEUVE ST GEORGES (94190)', 94190, '16 AVENUE DE L\'EUROPE', '2002-01-01', 'm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 'Charles', 'Lucie', 0635133133, 'styliste', 'Ablon-sur-Seine', 94480, '02 rue du bac', '2000-01-01', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(8, 'Hu', 'Helena', 0635133185, 'Journaliste', 'Paris', 75000, '5 rue de la chapelle', '1999-01-01', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(9, 'Claufard', 'Maria', 0635133109, 'Professeur', 'Vitry sur seine', 94800, 'Cité balzac', '1998-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(10, 'Lucchini', 'Giuseppe', 0685643109, 'Scenariste', 'Choisy le roi', 94812, 'rue de la victoire', '1997-01-02', 'm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(11, 'Sanchez', 'Xavier', 0685643143, 'Commercial', 'Thiais', 94512, '21 rue grignon', '1998-01-02', 'm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(12, 'Sanchez', 'Jade', 0625643143, 'Assistante', 'Villeneuve le roi', 94212, 'rue de la gare', '1997-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(13, 'Lopez', 'Andreas', 0625643149, 'Chef de projet', 'Athis Mons', 94310, 'chateau de la résidence', '1995-01-02', 'm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(14, 'Sato', 'Yuri', 0625690149, 'traductrice', 'Paris', 75013, '3 rue du chateau', '1995-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(15, 'Lambert', 'Jean Michel', 0625690825, 'Trader', 'Paris', 75001, '05 rue du café', '1994-01-02', 'm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(16, 'Jean pièrre', 'Laetitia', 4294967295, 'Secrétaire', 'Paris', 75001, '103 boulevard Lucien', '1994-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(17, 'Mgomri', 'Loudna', 4294967295, 'designer', 'Longjumeau', 92504, '103 boulevard Michelle', '1994-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(18, 'Pierre Louis', 'Juliana', 4294967295, 'Community manager', 'Maux', 77800, 'Rue de la gare', '1997-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(19, 'Le Pen', 'Marie Helène', 4294967295, 'Politicienne', 'Drancy', 93400, 'Rue Albert camus', '1998-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(20, 'Hollande', 'Grégoire', 4294967295, 'Fleuriste', 'Orly', 94853, 'Orly ville', '1990-01-02', 'm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(21, 'Elvira', 'Sonia', 4294967295, 'Danseuse', 'Maux', 77856, '02 rue Melun', '1980-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(22, 'Augustine', 'Silvie', 4294967295, 'Modèle', 'Ivry', 94856, 'che de la victoire', '1980-01-02', 'f', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annuaire`
--
ALTER TABLE `annuaire`
  ADD PRIMARY KEY (`id_annuaire`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annuaire`
--
ALTER TABLE `annuaire`
  MODIFY `id_annuaire` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
