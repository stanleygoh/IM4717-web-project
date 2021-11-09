-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2021 at 07:05 AM
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
-- Table structure for table `MovieAiringTime`
--

CREATE TABLE IF NOT EXISTS `MovieAiringTime` (
  `airingID` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `theatreID` int(11) NOT NULL,
  PRIMARY KEY (`airingID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `MovieAiringTime`
--

INSERT INTO `MovieAiringTime` (`airingID`, `movieID`, `Date`, `Time`, `theatreID`) VALUES
(2, 1, '2021-11-11', '11:30:00', 1),
(3, 1, '2021-11-11', '17:30:00', 1),
(4, 2, '2021-11-11', '11:30:00', 2),
(5, 2, '2021-11-11', '17:30:00', 2),
(6, 3, '2021-11-11', '11:30:00', 3),
(7, 3, '2021-11-11', '17:30:00', 3),
(8, 4, '2021-11-11', '14:30:00', 1),
(9, 4, '2021-11-11', '20:30:00', 1),
(10, 5, '2021-11-11', '14:30:00', 2),
(11, 5, '2021-11-11', '20:30:00', 2),
(12, 6, '2021-11-11', '14:30:00', 3),
(13, 6, '2021-11-11', '20:30:00', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
