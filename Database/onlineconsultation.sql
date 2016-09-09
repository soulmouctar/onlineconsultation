-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 09 Septembre 2016 à 15:13
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `onlineconsultation`
--

-- --------------------------------------------------------

--
-- Structure de la table `tblquestion`
--

CREATE TABLE IF NOT EXISTS `tblquestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  `sender` text NOT NULL,
  `message` text NOT NULL,
  `doctor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tblquestion`
--

INSERT INTO `tblquestion` (`id`, `time`, `sender`, `message`, `doctor`) VALUES
(1, '03:23:44', 'DIallo Soulmouctar', 'Hello, I''m sick today, can you help e please??', 'Alpha Saliou'),
(2, '03:27:30', 'kaba', 'i need the medecine for malaria', 'oumar');

-- --------------------------------------------------------

--
-- Structure de la table `tblquestionar`
--

CREATE TABLE IF NOT EXISTS `tblquestionar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(100) NOT NULL,
  `date_question` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `question_title` varchar(200) NOT NULL,
  `question_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `tblquestionar`
--


-- --------------------------------------------------------

--
-- Structure de la table `tblresponse`
--

CREATE TABLE IF NOT EXISTS `tblresponse` (
  `response_id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tblresponse`
--


-- --------------------------------------------------------

--
-- Structure de la table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `medical_qualification` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbluser`
--

INSERT INTO `tbluser` (`id`, `user_name`, `password`, `full_name`, `medical_qualification`, `address`, `email`, `phone_number`) VALUES
(1, 'soulmouctar', '123', 'Diallo SM', 'Doctor', 'ENTA', 'soulmouctar@gmail.com', 2147483647);
