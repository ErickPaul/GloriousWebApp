-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2016 at 03:31 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glorious`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(4, 'dave@yahoo.com', 'hazebee');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE IF NOT EXISTS `booked` (
  `room` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`room`) VALUES
('1A'),
('1A'),
('1A'),
('8A'),
('1A'),
('5B');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`ID` int(11) NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `passport` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` text NOT NULL,
  `room` varchar(11) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32301978 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `FName`, `LName`, `passport`, `email`, `phone`, `gender`, `room`, `in_date`, `out_date`) VALUES
(66, 'joseph', 'wekesa', 0, 'jjjj@gmail.com', 78, 'Male', '8A', '2015-04-09', '2015-04-16'),
(123, 'joan', 'chenge', 0, 'jj@yahoo.com', 2147483647, 'Male', '1A', '2015-04-08', '2015-06-27'),
(127, 'mosses', 'juma', 0, 'manoneantoine@gmail.com', 9, 'Male', '1A', '2015-04-06', '2015-04-10'),
(234, 'rehema', 'nyokabi', 0, 'rehemany@gmail.com', 2147483647, 'Male', '1A', '2015-04-08', '2015-04-16'),
(987, 'allan ', 'kandush', 0, 'anto@yahoo.com', 789, 'Male', '1A', '2015-04-05', '2015-04-30'),
(1234, 'john', 'juma', 0, 'jjj@gmail.com', 726801251, 'Male', '1A', '2015-04-08', '2015-04-25'),
(1238, 'paul', 'karanja', 0, 'p@gcgs', 1238, 'Male', '5B', '2016-02-02', '2016-02-26'),
(2345, 'jesse', 'jay', 0, 'jj@yahoo.com', 456, 'Male', '1A', '2015-04-02', '2015-04-30'),
(8999, 'john', 'joe', 0, 'j@gmail.com', 726801251, 'Male', '1A', '2015-04-07', '2015-04-24'),
(34567, 'kenedy', 'mwikya', 0, 'ken@yahoo.com', 2147483647, 'Male', '1A', '2015-04-08', '2015-04-30'),
(77777, 'Fabio', 'Hood', 0, 'fabio.hood@gmail.com', 711151020, 'Male', '1A', '2015-04-14', '2015-04-17'),
(345678, 'david', 'mwiti', 0, 'dave@yahoo.com', 2147483647, 'Male', '1A', '2015-04-08', '2015-04-30'),
(677898, 'danw', 'wasilwa', 0, 'dave@yahoo.com', 2147483647, 'Male', '1A', '2015-04-06', '2015-04-22'),
(3456789, 'antony', 'munene', 0, 'tony@gmail.com', 2147483647, 'Male', '1A', '2015-04-08', '2015-04-30'),
(30417405, 'hesbon', 'wasilwa', 0, 'heswas@gmai', 718671337, 'Male', '1A', '2015-04-05', '2015-04-10'),
(32301977, 'rahab', 'eleli', 0, 'rahabeleli@yahoo.com', 718671337, 'Male', '1A', '2015-04-06', '2015-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `mpesa`
--

CREATE TABLE IF NOT EXISTS `mpesa` (
`TID` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12346 ;

--
-- Dumping data for table `mpesa`
--

INSERT INTO `mpesa` (`TID`, `phone`) VALUES
(12345, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`ID` int(11) NOT NULL,
  `room` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `room`) VALUES
(1, '1A'),
(2, '2A'),
(3, '3A'),
(4, '4A'),
(5, '5A'),
(6, '6A'),
(7, '7A'),
(8, '8A'),
(9, '9A'),
(10, '10A'),
(11, '1B'),
(12, '2B'),
(13, '3B'),
(14, '4B'),
(15, '5B'),
(16, '6B'),
(17, '7B'),
(18, '8B'),
(19, '9B'),
(20, '10B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mpesa`
--
ALTER TABLE `mpesa`
 ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32301978;
--
-- AUTO_INCREMENT for table `mpesa`
--
ALTER TABLE `mpesa`
MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12346;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
