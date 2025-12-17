-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2025 at 07:16 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PASSWORDs` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `PASSWORDs`) VALUES
('Moawininam', 'Gayle333');

-- --------------------------------------------------------

--
-- Table structure for table `campuschange`
--

DROP TABLE IF EXISTS `campuschange`;
CREATE TABLE IF NOT EXISTS `campuschange` (
  `Name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `StudentId` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CurrentCampus` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Changecampus` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reason` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campuschange`
--

INSERT INTO `campuschange` (`Name`, `StudentId`, `CurrentCampus`, `Changecampus`, `reason`) VALUES
('Muhammad Moawin', 'BB-7056', 'North Nazimabad Campus', 'North Nazimabad Campus', 'just change it');

-- --------------------------------------------------------

--
-- Table structure for table `complainform`
--

DROP TABLE IF EXISTS `complainform`;
CREATE TABLE IF NOT EXISTS `complainform` (
  `Name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Fathername` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `faculty` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `complain` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainform`
--

INSERT INTO `complainform` (`Name`, `Id`, `Fathername`, `faculty`, `complain`) VALUES
('Ghaffar', 'BB-1817', 'Adnan Kala', 'Media science', 'we going to apply this at morning\r\n'),
('Salman ', 'BB-6553', 'Farhan', 'BSCS', 'ye sab mil kae hamme pagal bana rahe hain'),
('Rehman', 'BB-6564', 'Hammad', 'Bscs', 'hellow world'),
('Josha', 'BB-7048', 'Arif', 'BSSE', 'hamra teacher time py nh aty or class mai aa k time pass krty hai\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `marksquery`
--

DROP TABLE IF EXISTS `marksquery`;
CREATE TABLE IF NOT EXISTS `marksquery` (
  `StudentName` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `StudentID` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Course` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MarksObian` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Remarks` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marksquery`
--

INSERT INTO `marksquery` (`StudentName`, `StudentID`, `Course`, `MarksObian`, `Remarks`) VALUES
('Muhammad Moawin', 'BB-7056', 'Principle of Marketing', '76', 'Marks Query');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
