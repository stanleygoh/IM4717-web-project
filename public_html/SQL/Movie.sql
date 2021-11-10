-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2021 at 04:39 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f32ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE IF NOT EXISTS `Movie` (
  `movieID` int(50) NOT NULL AUTO_INCREMENT,
  `movieName` varchar(80) NOT NULL,
  `movieRating` varchar(6) NOT NULL,
  `movieStars` text NOT NULL,
  `movieDetails` text NOT NULL,
  `movieDuration` varchar(10) NOT NULL,
  PRIMARY KEY (`movieID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`movieID`, `movieName`, `movieRating`, `movieStars`, `movieDetails`, `movieDuration`) VALUES
(1, 'Drunken Master III', 'G', 'Andy Lau, Ka-Kui Ho, Michelle Reis', 'At the dawn of the 20th century, a sinister criminal organization has plotted against Chinese imperial family. Someone must stop them. Someone who is skillful in martial arts.', '1hr 31mins'),
(2, 'First Strike', 'PG-13', 'Jackie Chan, Jackson Lou, Annie Wu', 'This fourth installment of Chan''s Police Story film franchise has our hero trying to locate a missing nuclear warhead.', '1hr 47mins'),
(3, 'Casino Tycoon II', 'G', 'Andy Lau, Alex Man, Chingmy Yau', 'Prolific director Wong Jing mixes the laughter, action and suspense - as only he can - in this sequel. Casino tycoon Ho Hsin (Andy Lau) has enemies, but he is not about to just roll over and die.', '1hr 54mins'),
(4, 'Thunderbolt', 'R', 'Jackie Chan, Anita Yuenm, Michael Wong', 'In order to release his kidnapped sister, sports car mechanic Chan Foh To (Jackie Chan) has to beat a supercriminal street racer.', '1hr 50mins'),
(5, 'Hard Boiled', 'R', 'Chow Yun-Fat, Tony Chiu-Wai Leung, Teresa Mo', 'A tough-as-nails cop teams up with an undercover agent to shut down a sinister mobster and his crew.', '2hr 8mins'),
(6, 'The Return of the God of Gamblers', 'G', 'Chow Yun-Fat, Tony Ka Fai Leung, Chien-Lien Wu', 'Ko Chun vows to keep his identity hidden while looking for the gangsters who murdered his pregnant wife, in Wong Jing''s sequel to his action/comedy classic.', '2hr 6mins');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
