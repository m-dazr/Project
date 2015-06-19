-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2011 at 07:32 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eventID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ename` varchar(45) NOT NULL,
  `edesc` varchar(85) NOT NULL,
  `staffname` varchar(75) NOT NULL,
  `staffid` varchar(8) NOT NULL,
  `stdate` text NOT NULL,
  `stime` text NOT NULL,
  `entime` text NOT NULL,
  `elocation` varchar(45) NOT NULL,
  `resc` varchar(25) NOT NULL,
  `notes` varchar(85) NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventID`, `ename`, `edesc`, `staffname`, `staffid`, `stdate`, `stime`, `entime`, `elocation`, `resc`, `notes`) VALUES
(55, 'AIA Talk', 'Coverage talk by AIA', 'mary', '', '19-Nov-2011', '0900', '1200', 'ConfRoomA', 'none', '				 				 				'),
(56, 'Lunch Event', 'Monthly Lunch Event', 'mike', '', '18-Nov-2011', '1300', '1500', 'ConfRoomA', 'none', ''),
(57, 'Initial Meeting', 'Discussion for upcoming 2012 project', 'paul', '', '17-Nov-2011', '1300', '1500', 'MediaRm', 'none', ''),
(63, 'Project Review', 'End of month review meeting', 'paul', '', '30-Nov-2011', '0900', '1600', 'Comlab1', 'none', ''),
(64, 'Test Booking', 'This is a test booking', 'demo', '', '18-Nov-2011', '0900', '1100', 'ConfRoomA', 'Projector', 'This booking have been changed'),
(65, 'Software Training', 'User Interface Training', 'john', '', '06-Dec-2011', '1400', '1700', 'Comlab2', 'none', ''),
(66, 'Annual Dinner Meeting', 'Meeting for annual dinner commitee', '', '', '20-Dec-2011', '1000', '1200', 'MeetingRoom2', 'none', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'demo', 'demo', NULL, NULL),
(5, 'admin', 'admin', 'Admin', NULL),
(6, 'mike', 'mike', 'Micheal ', 'Acer'),
(7, 'mary', 'mary', 'Mary', 'Jane'),
(8, 'john c', 'johnc', 'John', 'Connor'),
(9, 'david', 'david', 'David ', 'Lee'),
(10, 'ron', 'ron', 'Ron ', 'Swanson'),
(11, 'barney', 'barney', 'Barney', 'Stinson'),
(12, 'Paul ', 'paul', 'Paul', 'Kevin'),
(13, 'Wong', 'wong', 'Wong', 'Loh'),
(14, 'Jason', 'jason', 'Jason', 'Julio');
