-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 02:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabulatorrealdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `daydatareport`
--

CREATE TABLE `daydatareport` (
  `si` int(11) NOT NULL,
  `datetime` datetime DEFAULT current_timestamp(),
  `solarPower` double(20,2) DEFAULT 0.00,
  `dayGen` double(20,2) DEFAULT 0.00,
  `energy` double(20,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daydatareport`
--

INSERT INTO `daydatareport` (`si`, `datetime`, `solarPower`, `dayGen`, `energy`) VALUES
(1, '2022-07-09 14:20:31', 0.00, 0.00, 0.00),
(2, '2022-07-09 14:15:31', 1981.57, 3737.00, 0.62),
(3, '2022-07-09 14:10:33', 1993.64, 3573.75, 0.60),
(4, '2022-07-09 14:05:31', 1983.42, 3407.69, 0.57);

-- --------------------------------------------------------

--
-- Table structure for table `dayreport`
--

CREATE TABLE `dayreport` (
  `si` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `plantDayGen` double(20,2) DEFAULT NULL,
  `totalGen` double(20,2) DEFAULT NULL,
  `tiltedRadiation` double(20,2) DEFAULT NULL,
  `cuf` double(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dayreport`
--

INSERT INTO `dayreport` (`si`, `date`, `plantDayGen`, `totalGen`, `tiltedRadiation`, `cuf`) VALUES
(1, '2022-01-11', 4.37, 61993.53, 0.00, 0.00),
(2, '2022-01-12', 2399.81, 64392.34, 0.00, 2.20),
(3, '2022-01-13', 6546.82, 70939.16, 0.00, 6.01),
(4, '2022-01-14', 5629.16, 76568.32, 24.24, 5.17);

-- --------------------------------------------------------

--
-- Table structure for table `monthreport`
--

CREATE TABLE `monthreport` (
  `si` bigint(20) NOT NULL,
  `month` varchar(100) DEFAULT 'NA',
  `plantMonthGen` double(20,2) DEFAULT 0.00,
  `totalGen` double(20,2) DEFAULT 0.00,
  `tiltedRadiation` double(20,2) DEFAULT 0.00,
  `cuf` double(20,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthreport`
--

INSERT INTO `monthreport` (`si`, `month`, `plantMonthGen`, `totalGen`, `tiltedRadiation`, `cuf`) VALUES
(1, 'Jan-2022', 114091.03, 176079.19, 35.34, 4.99),
(2, 'Feb-2022', 308608.02, 484687.22, 32.03, 10.12);

-- --------------------------------------------------------

--
-- Table structure for table `yearreport`
--

CREATE TABLE `yearreport` (
  `si` int(11) NOT NULL,
  `year` varchar(5) NOT NULL DEFAULT '0000',
  `plantYearGen` double(20,2) NOT NULL DEFAULT 0.00,
  `totalGen` double(20,2) NOT NULL DEFAULT 0.00,
  `tiltedRadiation` double(20,2) NOT NULL DEFAULT 0.00,
  `cuf` double(20,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearreport`
--

INSERT INTO `yearreport` (`si`, `year`, `plantYearGen`, `totalGen`, `tiltedRadiation`, `cuf`) VALUES
(1, '2021', 3443781.01, 3574206.81, 30.94, 8.90),
(2, '2022', 3897239.44, 5355121.56, 66.90, 18.92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daydatareport`
--
ALTER TABLE `daydatareport`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `dayreport`
--
ALTER TABLE `dayreport`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `monthreport`
--
ALTER TABLE `monthreport`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `yearreport`
--
ALTER TABLE `yearreport`
  ADD PRIMARY KEY (`si`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daydatareport`
--
ALTER TABLE `daydatareport`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dayreport`
--
ALTER TABLE `dayreport`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `monthreport`
--
ALTER TABLE `monthreport`
  MODIFY `si` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yearreport`
--
ALTER TABLE `yearreport`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
