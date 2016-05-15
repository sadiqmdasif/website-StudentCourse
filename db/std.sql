-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2015 at 12:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `std`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `title` varchar(30) NOT NULL,
  `courseId` varchar(15) NOT NULL,
  PRIMARY KEY (`courseId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`title`, `courseId`) VALUES
('C', '111'),
('C++', '112'),
('C#', '113'),
('eng', '121'),
('bangla', '122'),
('physics', '199');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentId` int(15) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `motherName` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `presentAddress` varchar(150) NOT NULL,
  `permanentAddress` varchar(150) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  PRIMARY KEY (`studentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1021 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `firstName`, `lastName`, `fatherName`, `motherName`, `birthdate`, `gender`, `dept`, `presentAddress`, `permanentAddress`, `phone`, `email`, `bloodGroup`) VALUES
(1010, 'sadiq md', 'asif', 'Anowar Hossain', 'Khodeja akter', '1993-02-23', 'Male', 'CSE', 'dhaka', 'comilla', '01671234123', 'sm.asiff@gmail.com', 'B+'),
(1011, 'forhad', 'uddin', 'uddin forhad', 'mrs uddin', '1993-02-23', 'Male', 'CSE', 'dhaka', 'rajshahi', '01676404404', 'error@gmail.com', 'B+'),
(1012, 'ryan', 'mansur', 'mansur ryan', 'mrs mansur', '1993-02-23', 'Male', 'CSE', 'dhaka', 'jamalpur', '01686445566', 'ryan@gmail.com', 'B+'),
(1013, 'rayan', 'selim', 'selim rayan', 'mrs selim', '1993-02-23', 'Male', 'CSE', 'dhaka', 'khulna', '0167123121', 'rayan@gmail.com', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE IF NOT EXISTS `studentcourse` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `studentID` int(20) DEFAULT NULL,
  `courseID` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_studID` (`studentID`),
  KEY `fk_courseID` (`courseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `studentcourse`
--

INSERT INTO `studentcourse` (`ID`, `studentID`, `courseID`) VALUES
(17, 1010, '111'),
(18, 1011, '111'),
(19, 1012, '111'),
(20, 1013, '111'),
(27, 1013, '112'),
(28, 1010, '111'),
(29, 1010, '111'),
(30, 1010, '112'),
(31, 1010, '113'),
(32, 1010, '121'),
(33, 1011, '111'),
(34, 1011, '112'),
(35, 1011, '113'),
(36, 1012, '113'),
(37, 1012, '121'),
(38, 1013, '111'),
(39, 1013, '121');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD CONSTRAINT `fk_courseID` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseId`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_studID` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentId`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
