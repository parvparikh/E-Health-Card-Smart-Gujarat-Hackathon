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
-- Table structure for table `patient_1`
--

CREATE TABLE `patient_1` (
  `date` date NOT NULL,
  `id` int(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `medicine` longtext NOT NULL,
  `status` text NOT NULL,
  `dosage` int(11) NOT NULL,
  `dosage_type` text NOT NULL,
  `frequency` int(11) NOT NULL,
  `frequency_days` int(11) NOT NULL,
  `end_date` date NOT NULL,
  `prescribed_by` text NOT NULL,
  `tests` longtext NOT NULL,
  `test_date` date NOT NULL,
  `report` longtext NOT NULL,
  `tested_by` text NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_1`
--

INSERT INTO `patient_1` (`date`, `id`, `diagnosis`, `medicine`, `status`, `dosage`, `dosage_type`, `frequency`, `frequency_days`, `end_date`, `prescribed_by`, `tests`, `test_date`, `report`, `tested_by`, `note`) VALUES
('2020-02-24', 73, 'diag', 'med1,med2', 'active', 2, 'tablets/Capsules', 3, 7, '0000-00-00', '', 'test1', '2020-02-26', 'testupload/aa.txt', '', 'note1'),
('2020-02-25', 74, 'diag', 'med1,med2', '', 2, 'tablets/Capsules', 3, 7, '0000-00-00', '', 'test1', '2020-02-25', 'testupload/Undertaking from students.pdf', '', ''),
('2020-02-25', 75, 'diag', 'med1,med2', '', 2, 'tablets/Capsules', 3, 7, '0000-00-00', '', 'test1', '2020-02-26', 'testupload/abc.txt', '', ''),
('2020-02-25', 76, 'Abdominal Aortic Aneurysm', 'abatacept', '', 0, 'tablets/Capsules', 12, 2, '0000-00-00', '', '', '0000-00-00', 'N/A', '', ''),
('2020-02-23', 77, 'sds', 'sd', 'active', 0, '', 0, 0, '0000-00-00', '', '', '0000-00-00', 'N/A', '', ''),
('2020-02-26', 78, 'dfdf', 'dfdf', '', 0, '', 0, 0, '0000-00-00', '', '', '0000-00-00', 'N/A', '', ''),
('2020-02-26', 79, 'Abdominal Adhesions (Scar Tissue)', '', '', 0, 'N/A', 0, 0, '0000-00-00', '', 'asaaas', '2020-02-26', 'testupload/abc.txt', '', ''),
('2020-02-26', 80, 'fdf', 'df', '', 0, 'tsp/drops', 0, 0, '0000-00-00', '', 'fdfdfdfdfdfdfdfdfdf', '2020-02-26', 'testupload/abc.txt', '', 'sdsdsds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_1`
--
ALTER TABLE `patient_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_1`
--
ALTER TABLE `patient_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
