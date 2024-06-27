-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 10:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies_habits`
--

CREATE TABLE `allergies_habits` (
  `patient_id` varchar(15) NOT NULL,
  `Drug` text NOT NULL,
  `Food` text NOT NULL,
  `Insect` text NOT NULL,
  `Latex` text NOT NULL,
  `Pet` text NOT NULL,
  `Pollen` text NOT NULL,
  `Dust` text NOT NULL,
  `Alcohol` text NOT NULL,
  `Smoke` text NOT NULL,
  `Tobacco` text NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allergies_habits`
--

INSERT INTO `allergies_habits` (`patient_id`, `Drug`, `Food`, `Insect`, `Latex`, `Pet`, `Pollen`, `Dust`, `Alcohol`, `Smoke`, `Tobacco`, `note`) VALUES
('1', 'N/A', 'N/A', 'enter', 'N/A', 'N/A', 'N/A', 'N/A', 'Quit', 'Quit', 'occasionally', 'note1'),
('1', 'N/A', 'N/A', 'enter', 'N/A', 'N/A', 'N/A', 'N/A', 'Quit', 'Quit', 'occasionally', 'note1'),
('1', 'N/A', 'N/A', 'enter', 'N/A', 'N/A', 'N/A', 'N/A', 'Quit', 'Quit', 'occasionally', 'note1'),
('2', 'yes', 'yes', 'yes', 'N/A', 'N/A', 'N/A', 'N/A', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
