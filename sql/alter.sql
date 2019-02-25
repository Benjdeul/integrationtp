-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 25 Février 2019 à 16:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tpintegration`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `alb_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''album',
  `alb_art` int(5) NOT NULL COMMENT 'Code artiste',
  `alb_nom` varchar(50) NOT NULL COMMENT 'Nom de l''album',
  `alb_annee` int(4) NOT NULL COMMENT 'Année de sortie',
  `alb_prix` decimal(5,2) NOT NULL COMMENT 'Prix de l''album',
  PRIMARY KEY (`alb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `albums`
--

INSERT INTO `albums` (`alb_id`, `alb_art`, `alb_nom`, `alb_annee`, `alb_prix`) VALUES
(1, 10, 'Let It Bleed', 1969, '18.70'),
(2, 10, 'Sticky Fingers', 1971, '18.70'),
(3, 10, 'Black And Blue ', 1976, '16.50'),
(4, 10, 'Some Girls', 1978, '16.50'),
(5, 10, 'Undercover', 1983, '15.40'),
(6, 10, 'A Bigger Bang', 2005, '16.50'),
(7, 1, 'Led Zeppelin', 1969, '16.50'),
(8, 1, 'Led Zeppelin II', 1969, '16.50'),
(9, 1, 'Led Zeppelin III', 1970, '16.50'),
(10, 1, 'Led Zeppelin IV', 1971, '16.50'),
(11, 1, 'Houses Of The Holy', 1973, '13.20'),
(12, 1, 'Physical Graffiti', 1975, '16.50'),
(13, 1, 'Presence', 1976, '18.81'),
(14, 1, 'In Through The Outdoor', 1979, '18.70'),
(15, 1, 'Coda', 1982, '16.50'),
(16, 1, 'The Song Reamins The Same', 1976, '19.80'),
(17, 7, 'No Pads, No Helmets...Just Balls', 2002, '16.50'),
(18, 7, 'Still Not Getting Any...', 2004, '16.50'),
(19, 7, 'MTV Hard Rock Live', 2005, '11.00'),
(20, 7, 'Simple plan', 2008, '13.20'),
(21, 7, 'Get Your Heart On!', 2011, '16.50'),
(22, 7, 'Taking One For the Team', 2016, '19.80'),
(23, 3, '19', 2008, '16.50'),
(24, 3, '21', 2011, '18.70'),
(25, 3, '25', 2015, '17.60'),
(26, 2, 'Killers', 1981, '13.20'),
(27, 2, 'The Number of the Beast', 1982, '16.50'),
(28, 2, 'Piece of Mind', 1983, '13.20'),
(29, 2, 'Powerslave', 1984, '13.20'),
(30, 2, 'Somewhere in Time', 1986, '11.00'),
(31, 2, 'Seventh Son of a Seventh Son', 1988, '9.90'),
(32, 2, 'No Prayer for the Dying', 1990, '12.10'),
(33, 4, 'Showbizz', 1999, '11.00'),
(34, 4, 'Origin of Symmetry', 2001, '11.00'),
(35, 4, 'Absolution', 2003, '9.90'),
(36, 4, 'Black Holes and Revelations', 2006, '16.50'),
(37, 5, 'Telephone', 1977, '11.00'),
(38, 5, 'Crache Ton Venin', 1979, '13.20'),
(39, 5, 'Au Coeur de la Nuit', 1980, '13.20'),
(40, 5, 'Dure Limite', 1982, '13.20'),
(41, 5, 'Un Autre Monde', 1984, '15.40'),
(42, 6, 'Parachutes', 2000, '16.50'),
(43, 6, 'A Rush of Blood to the Head', 2002, '14.30'),
(44, 8, 'Blue Period', 1951, '16.50'),
(45, 8, 'Dig', 1951, '16.50'),
(46, 8, 'The Musings of Miles', 1955, '13.20'),
(47, 9, 'Extrapolation ', 1969, '18.81'),
(48, 9, 'Devotion  ', 1970, '15.40'),
(49, 9, 'Live At The Royal Festival Hall  ', 1990, '15.40'),
(50, 1, 'Live BBC Sessions', 1997, '19.86');

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE IF NOT EXISTS `artistes` (
  `art_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''artiste ou du groupe',
  `art_nom` varchar(30) NOT NULL COMMENT 'nom de l''artiste ou du groupe',
  `art_typ` varchar(1) NOT NULL COMMENT 'Type d''artiste : G=Groupe, S=Solo',
  `art_pays` varchar(3) NOT NULL COMMENT 'Code pays = nationalité du groupe ou de l''artiste. Se référer à la table des pays.',
  `art_genre` varchar(3) NOT NULL COMMENT 'Code genre musical; Se référer à la table des genres musicaux.',
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `artistes`
--

INSERT INTO `artistes` (`art_id`, `art_nom`, `art_typ`, `art_pays`, `art_genre`) VALUES
(1, 'Led Zeppelin', 'G', 'ANG', 'HME'),
(2, 'Iron Maiden', 'G', 'ANG', 'HME'),
(3, 'Adele', 'S', 'ANG', 'POP'),
(4, 'Muse', 'G', 'ANG', 'ROC'),
(5, 'Telephone', 'G', 'FRA', 'ROC'),
(6, 'Coldplay', 'G', 'ANG', 'POP'),
(7, 'Simple Plan', 'G', 'CAN', 'ROC'),
(8, 'Davis, Miles', 'S', 'USA', 'JAZ'),
(9, 'Mc Laughlin, John', 'S', 'ANG', 'JAZ'),
(10, 'Rolling Stones', 'G', 'ANG', 'ROC');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `cli_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du client',
  `cli_nom` varchar(30) NOT NULL COMMENT 'Nom du client',
  `cli_adr` varchar(50) NOT NULL COMMENT 'Adresse du client',
  `cli_cps` varchar(5) NOT NULL COMMENT 'Code Postal',
  `cli_ville` varchar(30) NOT NULL COMMENT 'Ville du client',
  `cli_email` varchar(50) NOT NULL COMMENT 'Adresse mail du client',
  `cli_dnai` date NOT NULL COMMENT 'Date de naissance',
  `cli_ca` decimal(8,2) NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`cli_id`, `cli_nom`, `cli_adr`, `cli_cps`, `cli_ville`, `cli_email`, `cli_dnai`, `cli_ca`) VALUES
(1, 'Campan, Bernard', '17 rue de la république', '75001', 'Paris', 'bernard.campan@mondomaine.fr', '1958-04-04', '0.00'),
(2, 'Bourdon, Didier', '63 place de la comédie', '06000', 'Nice', 'didier.bourdon@mondomaine.fr', '1959-01-22', '0.00'),
(3, 'Legitimus, Pascal', '127 route de la plage', '33680', 'Lacanau', 'pascal.legitimus@mondomaine.fr', '1959-03-13', '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `fbaccount`
--

CREATE TABLE IF NOT EXISTS `fbaccount` (
  `fbaccount_id` int(11) NOT NULL AUTO_INCREMENT,
  `fbaccount_email` varchar(255) NOT NULL,
  `fbaccount_pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`fbaccount_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `gen_genre` varchar(3) NOT NULL COMMENT 'Code genre musical',
  `gen_libelle` varchar(20) NOT NULL COMMENT 'Libellé du genre musical',
  PRIMARY KEY (`gen_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `genres`
--

INSERT INTO `genres` (`gen_genre`, `gen_libelle`) VALUES
('BLU', 'Blues'),
('HME', 'Heavy Metal'),
('JAZ', 'Jazz'),
('POP', 'Pop Music'),
('RAP', 'Rap'),
('ROC', 'Rock');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE IF NOT EXISTS `historique` (
  `his_id` int(5) NOT NULL AUTO_INCREMENT,
  `his_art` int(5) NOT NULL COMMENT 'code artiste',
  `his_mem` int(5) NOT NULL COMMENT 'code musicien',
  `his_debut` int(4) NOT NULL COMMENT 'année début',
  `his_fin` int(4) NOT NULL COMMENT 'année fin',
  PRIMARY KEY (`his_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `historique`
--

INSERT INTO `historique` (`his_id`, `his_art`, `his_mem`, `his_debut`, `his_fin`) VALUES
(1, 10, 1, 1965, 2016),
(2, 10, 2, 1965, 2016),
(3, 10, 3, 1965, 2016),
(4, 5, 4, 1976, 1986),
(5, 5, 5, 1976, 1986),
(6, 5, 6, 1976, 1986),
(7, 5, 7, 1976, 1986),
(8, 5, 1, 2016, 2020);

-- --------------------------------------------------------

--
-- Structure de la table `instruments`
--

CREATE TABLE IF NOT EXISTS `instruments` (
  `ins_cod` varchar(3) NOT NULL,
  `ins_libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`ins_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `instruments`
--

INSERT INTO `instruments` (`ins_cod`, `ins_libelle`) VALUES
('BAS', 'Guitare Basse'),
('BAT', 'Batterie'),
('CHA', 'Chant'),
('GUE', 'Guitare Electrique');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `mem_id` int(5) NOT NULL AUTO_INCREMENT,
  `mem_nom` varchar(30) NOT NULL COMMENT 'nom du musicien',
  `mem_pays` varchar(3) NOT NULL COMMENT 'code pays du musicien',
  `mem_ins` varchar(3) NOT NULL COMMENT 'code instrument joué par le musicien',
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`mem_id`, `mem_nom`, `mem_pays`, `mem_ins`) VALUES
(1, 'Richards, Keith', 'ANG', 'GUE'),
(2, 'Wyman, Bill', 'ANG', 'BAS'),
(3, 'Watts, Charlie', 'ANG', 'BAT'),
(4, 'Aubert, Jean-Louis', 'FRA', 'CHA'),
(5, 'Kolinka, Richard', 'FRA', 'BAT'),
(6, 'Bertignac, Louis', 'FRA', 'GUE'),
(7, 'Marienneau, Corinne', 'FRA', 'BAS');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `pay_pays` varchar(3) NOT NULL COMMENT 'Code pays',
  `pay_libelle` varchar(20) NOT NULL COMMENT 'Libellé du pays',
  PRIMARY KEY (`pay_pays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`pay_pays`, `pay_libelle`) VALUES
('ALL', 'Allemagne'),
('ANG', 'Angleterre'),
('CAN', 'Canada'),
('ESP', 'Espagne'),
('FRA', 'France'),
('ITA', 'Italie'),
('USA', 'Etats Unis');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_pwd` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_dateinscription` datetime NOT NULL,
  `user_lastconnexion` datetime NOT NULL,
  `user_comptefb` int(11) DEFAULT NULL,
  `user_tokenreset` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`user_id`, `user_username`, `user_pwd`, `user_email`, `user_dateinscription`, `user_lastconnexion`, `user_comptefb`, `user_tokenreset`) VALUES
(3, 'benjamin', 'benjamin', 'benjamin@benjamin.fr', '2019-02-25 15:02:06', '2019-02-25 15:02:06', 0, NULL),
(4, 'benjamin', 'benjamin', 'deleiris.benjamin@gmail.com', '2019-02-25 16:02:14', '2019-02-25 16:19:55', 0, '53c61f9bd6c144ca935bb0bc9aad41ef');

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE IF NOT EXISTS `ventes` (
  `ven_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de la vente',
  `ven_date` date NOT NULL COMMENT 'Date de la vente',
  `ven_alb` int(5) NOT NULL COMMENT 'Identifiant de l''album vendu',
  `ven_cli` int(5) NOT NULL COMMENT 'Identifiant du client qui a acheté l''album',
  `ven_prix` decimal(5,2) NOT NULL COMMENT 'Prix de vente de l''album',
  PRIMARY KEY (`ven_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `ventes`
--

INSERT INTO `ventes` (`ven_id`, `ven_date`, `ven_alb`, `ven_cli`, `ven_prix`) VALUES
(1, '2016-07-13', 1, 1, '15.00'),
(2, '2016-07-13', 1, 2, '13.00'),
(3, '2016-07-13', 1, 3, '13.00'),
(4, '2016-07-15', 2, 1, '14.00'),
(5, '2016-07-15', 2, 3, '14.00'),
(6, '2016-07-29', 3, 1, '12.00'),
(7, '2016-07-30', 3, 2, '12.00'),
(8, '2016-08-02', 10, 2, '12.00'),
(9, '2016-08-31', 15, 1, '12.00'),
(10, '2016-09-01', 39, 1, '10.00'),
(11, '2016-09-15', 39, 2, '10.00'),
(12, '2016-09-15', 9, 3, '10.00'),
(13, '2016-10-17', 6, 2, '15.00'),
(14, '2016-10-17', 7, 3, '15.00'),
(15, '2016-10-17', 8, 3, '15.00'),
(16, '2016-10-22', 8, 2, '15.00'),
(17, '2016-10-22', 9, 2, '15.00'),
(18, '2016-10-22', 10, 2, '15.00'),
(22, '2017-11-30', 1, 1, '7.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
