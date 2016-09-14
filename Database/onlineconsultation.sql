-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 14 Septembre 2016 à 07:43
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
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `tblquestion`
--

INSERT INTO `tblquestion` (`id`, `time`, `sender`, `message`, `contact`) VALUES
(6, '10:47:22', 'DIallo Soulmouctar', 'Hello I have the headaches......', '621443322'),
(7, '10:48:37', 'Usmane Doukoure', 'Good evening, Have you some advices for me? I''m....', 'dukuly@uba.com');

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
  `avalable_time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tbluser`
--

INSERT INTO `tbluser` (`id`, `user_name`, `password`, `full_name`, `medical_qualification`, `address`, `email`, `phone_number`, `avalable_time`) VALUES
(1, 'soulmouctar', '123', 'Diallo SM', 'Doctor', 'ENTA', 'soulmouctar@gmail.com', 2147483647, '9pm to 10pm '),
(3, 'alpha', 'alpha', 'Alpha Oumar Camara', 'Chemistry', 'Kosa', 'alpha22@gmail.com', 656554545, '7pm to 9pm');
