-+-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 01:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalpataru`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `user_id` varchar(1000) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `password`, `type`) VALUES
(1, 'doctor', 'Doctor@123', 'Doc');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `pid` int(11) NOT NULL,
  `uhidno` text NOT NULL,
  `ssano` text NOT NULL,
  `adharnumber` text NOT NULL,
  `patientname` text NOT NULL,
  `patientphone` text NOT NULL,
  `patientage` text NOT NULL,
  `patientgender` text NOT NULL,
  `patientaddress` text NOT NULL,
  `patientsymptoms` text NOT NULL,
  `bpcheckbox` text NOT NULL,
  `sugarcheckbox` text NOT NULL,
  `heartcheckbox` text NOT NULL,
  `kidneycheckbox` text NOT NULL,
  `paralysischeckbox` text NOT NULL,
  `thyroidcheckbox` text NOT NULL,
  `patientdiagnosis` text NOT NULL,
  `patientbloodgroup` text NOT NULL,
  `patienthb` text NOT NULL,
  `patientkft` text NOT NULL,
  `patientecg` text NOT NULL,
  `patienteco` text NOT NULL,
  `patienttreatment` text NOT NULL,
  `patientpriscription` text NOT NULL,
  `patientspecialadvise` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`pid`, `uhidno`, `ssano`, `adharnumber`, `patientname`, `patientphone`, `patientage`, `patientgender`, `patientaddress`, `patientsymptoms`, `bpcheckbox`, `sugarcheckbox`, `heartcheckbox`, `kidneycheckbox`, `paralysischeckbox`, `thyroidcheckbox`, `patientdiagnosis`, `patientbloodgroup`, `patienthb`, `patientkft`, `patientecg`, `patienteco`, `patienttreatment`, `patientpriscription`, `patientspecialadvise`) VALUES
(1, 'kdsjv', 'dsvn', '54', 'dkfvn', '122', 'ksdnv', 'Female', 'kdvnej', 'wkefhoiwe', 'bp', '', '', '', '', '', 'dlvnjek', 'B+', 'nvkler', 'wekjf', 'wjebv', 'eiwohfv', 'dsvioe', 'dkv', 'dvwhoiw'),
(2, 'kdsjv', 'dsvn', '54', 'dkfvn', '122', 'ksdnv', 'Female', 'kdvnej', 'wkefhoiwe', 'bp', '', '', '', '', '', 'dlvnjek', 'B+', 'nvkler', 'wekjf', 'wjebv', 'eiwohfv', 'dsvioe', 'dkv', 'dvwhoiw'),
(3, 'kdsjv', 'dsvn', '54', 'dkfvn', '122', 'ksdnv', 'Female', 'kdvnej', 'wkefhoiwe', 'bp', '', '', '', '', '', 'dlvnjek', 'B+', 'nvkler', 'wekjf', 'wjebv', 'eiwohfv', 'dsvioe', 'dkv', 'dvwhoiw'),
(4, 'kdsjv', 'dsvn', '54', 'dkfvn', '122', 'ksdnv', 'Female', 'kdvnej', 'wkefhoiwe', 'bp', '', '', '', '', '', 'dlvnjek', 'B+', 'nvkler', 'wekjf', 'wjebv', 'eiwohfv', 'dsvioe', 'dkv', 'dvwhoiw'),
(5, '123', '123', '456', 'fff', '123', '20', 'Male', 'gj', 'hgyug', '', 'sugar', 'heart', '', '', '', 'hguyg', 'A-', 'b', 'b', 'h', 'nh', 'hj', 'hj', 'kjl'),
(6, '123', '1', '12', 'abc', '55', '30', 'Male', 'ff', 'ff', 'bp', 'sugar', 'heart', '', '', '', 'ss', 'A+', 'w', 'ww', 'ww', 'ww', 'aa', 'vv', 'qqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
