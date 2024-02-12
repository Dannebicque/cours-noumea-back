-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 juil. 2022 à 09:42
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvc_lite`
--
DROP DATABASE IF EXISTS `mvc_lite`;
CREATE DATABASE IF NOT EXISTS `mvc_lite` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mvc_lite`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `slug` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `slug`) VALUES
(1, 'Les statistiques sur les plus gros mensonges des programmeurs viennent de tomber', '1) Le site devrait fonctionner maintenant.<br/>\r\n2) ça ne prendra qu\'un instant.<br/>\r\n3) Je le ferai plus tard.<br/>\r\n4) C\'est un bug facile à corriger.<br/>', 'dev_web_et_mensonges'),
(2, 'Jeanne d\'arc a la fibre', 'Et oui, elle a Free !', 'jeanne_d_arc'),
(3, 'Quel IDE choisir ?', 'Visual Studio Code ? Non aucun challenge.<br/>\r\nAtom ? Encore trop simple !<br/>\r\nWord ? Voilà, ça c\'est un défi.<br/>', 'quel_ide'),
(4, 'Qu\'en dira-t-on ?', 'F1 n\'est pas GP.', 'F1_pas_GP');

-- --------------------------------------------------------

--
-- Structure de la table `humour`
--

DROP TABLE IF EXISTS `humour`;
CREATE TABLE IF NOT EXISTS `humour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(100) NOT NULL,
  `alt` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `humour`
--

INSERT INTO `humour` (`id`, `lien`, `alt`, `description`) VALUES
(1, '/media/bug.jpg', 'Humour Husky Dark Mode Bugs.', 'Blague éclairée ! D\'un chien lumineux'),
(2, '/media/code.jpg', 'Humour Code Propre', 'Oui mais non en fait !'),
(3, '/media/gravity.jpg', 'Chat de Newton', 'Sapin et chat à l\'envers'),
(4, '/media/hibou.jpg', 'Humour Hibou', 'Alerte au mâle Hibou'),
(5, '/media/android.png', 'Star Trek Data', 'Picard uses Android.'),
(6, '/media/programmer.jpg', 'Image des programmeurs', 'WTF'),
(7, '/media/sort.jpg', 'Humour Sort of', 'Trier ou ne pas trier telle est la question.'),
(11, '/media/7 erreurs.jpg', '7 différences', 'Haaaa les chats'),
(13, '/media/858609f89988c16820be25a90761ec7a--les-rois-french-christmas.jpg', 'Vie chère', 'Très chère'),
(16, '/media/97067549_2938991372816388_6835948348646621184_n.jpg', 'Beep beep', 'while ou do while');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
