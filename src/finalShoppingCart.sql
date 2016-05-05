-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 02:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingcart12`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE DATABASE shoppingCart12;
USE shoppingCart12;

CREATE TABLE IF NOT EXISTS `customer` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(45) NOT NULL,
  `PhoneNumber` varchar(45) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `Middlename` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1235 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `Email`, `PhoneNumber`, `FirstName`, `Middlename`, `LastName`, `Address`) VALUES
(1, 'billyjoe123@mail.com', '123456789', 'Billy', 'M', 'Joe', '100 n northland'),
(12, 'bob@msn.com', '480-798-9009', 'Bob', 'Jim', 'Smith', '200 s southland'),
(123, 'ChelseaY@gmail.com', '480-098-9100', 'Chelsea', '', 'Rogers', '300 e eastland'),
(1234, 'Eric@hotmail.com', '480-098-9101', 'Cheesey', 'D', 'Rogers', '400 w westland');

-- --------------------------------------------------------

--
-- Table structure for table `digitallibrary`
--

CREATE TABLE IF NOT EXISTS `digitallibrary` (
  `UFC` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  PRIMARY KEY (`UFC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `digitallibrary`
--

INSERT INTO `digitallibrary` (`UFC`, `ISBN`) VALUES
(1, 0),
(10, 0),
(12, 0),
(15, 0),
(25, 0),
(2, 1),
(13, 1),
(16, 1),
(18, 1),
(26, 1),
(28, 1),
(3, 12),
(17, 12),
(27, 12),
(4, 123),
(19, 123),
(29, 123),
(20, 653),
(30, 653),
(21, 897),
(31, 897),
(9, 991),
(22, 991),
(23, 5567),
(33, 5567),
(24, 12345),
(34, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `FavID` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  PRIMARY KEY (`FavID`),
  KEY `ISBN` (`ISBN`),
  KEY `CID` (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`FavID`, `ISBN`, `CID`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logininformation`
--

CREATE TABLE IF NOT EXISTS `logininformation` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `CID` int(11) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `CID` (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logininformation`
--

INSERT INTO `logininformation` (`Username`, `Password`, `CID`) VALUES
('fido2', 'f', 123),
('fido@yum.com', 'f', 1234),
('mike', 'master', 12),
('saul', 'sauceman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mediadescription`
--

CREATE TABLE IF NOT EXISTS `mediadescription` (
  `ISBN` int(11) NOT NULL,
  `Title` varchar(45) NOT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Author` varchar(45) DEFAULT NULL,
  `Cost` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mediadescription`
--

INSERT INTO `mediadescription` (`ISBN`, `Title`, `Type`, `Category`, `Year`, `Author`, `Cost`) VALUES
(0, 'Terminator 2', 'Video', 'Action', 1992, 'James Cameroon', '9.99'),
(1, 'Hangar 18', 'Music', 'Metal', 1992, 'Megadeth', '0.99'),
(12, 'Intro to Database Management', 'eBook', 'Computer Science', 2004, 'Michael Douglas', '19.99'),
(123, 'Advanced Data Strcutures', 'eBook', 'Computer Science', 1999, 'Sarah Dean', '29.99'),
(653, 'How to lose Wieght in 1 min', 'eBook', 'LifeStyle', 2010, 'Doug Schrodinger', '19.99'),
(897, 'Enter Sandman', 'Music', 'Metal', 1991, 'Metallica', '0.99'),
(991, 'PainKiller', 'Music', 'Metal', 1984, 'Judas Priest', '0.99'),
(999, 'The Life of Pi', 'Video', 'Drama', 2012, 'Ang Lee', '19.99'),
(5567, 'Jurassic Park', 'Video', 'Action', 1994, 'Steven Speilsperg', '9.99'),
(12345, 'Terminator 3', 'Video', 'Action', 2000, 'James Cameroon', '9.99');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `CID` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `CID` (`CID`),
  KEY `ISBN` (`ISBN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Date`, `CID`, `ISBN`) VALUES
(1, '2016-12-01', 1, 0),
(3, '2016-03-04', 123, 12),
(4, '2016-09-08', 1234, 123),
(5, '2016-09-08', 1234, 653),
(6, '2016-01-09', 1234, 12345),
(7, '2016-05-04', 1234, 897),
(8, '2016-05-04', 1234, 653),
(9, '2016-05-04', 1234, 2),
(10, '2016-05-04', 1234, 66);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `mediadescription` (`ISBN`);

--
-- Constraints for table `logininformation`
--
ALTER TABLE `logininformation`
  ADD CONSTRAINT `logininformation_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `customer` (`CID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
