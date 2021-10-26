-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2021 at 08:20 AM
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

CREATE TABLE IF NOT EXISTS `MovieComingSoon` (
  `moviecsID` int(50) NOT NULL AUTO_INCREMENT,
  `movieName` varchar(80) NOT NULL,
  `movieRating` varchar(6) NOT NULL,
  `movieStars` text NOT NULL,
  `movieDetails` text NOT NULL,
  `movieDuration` varchar(10) NOT NULL,
  PRIMARY KEY (`moviecsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Movie`
--

INSERT INTO `MovieComingSoon` (`moviecsID`, `movieName`, `movieRating`, `movieStars`, `movieDetails`, `movieDuration`) VALUES
(7, 'City Hunter', 'PG-13', 'Jackie Chan, Richard Norton, Joey Wang', 'A self-indulgent private investigator winds up on a cruise ship full of rich patrons, gorgeous women, murderous terrorists, and scarce food.', '1hr 45mins'),
(8, 'The Adventurers', 'G', 'Andy Lau, Rosamund Kwan, Chien-Lien Wu', 'Andy was a child when his parents murdered by a double agent in Vietnam, Ray Liu.', '1hr 48mins'),
(9, 'Peace Hotel', 'G', 'Chow Yun-Fat, Cecilia Yip, Ho Chin', 'A retired old west killer sets up a hotel for vagrants and wayward souls called Peace Hotel. When a woman with a gang on her tail attempts to hide there the owner of the hotel must revert to his old ways to protect his hotel.', '1hr 29mins');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
