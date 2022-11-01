-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 01:51 PM
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
-- Database: `cifour`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `firstname`, `lastname`, `date`, `gender`, `email`, `mobile`) VALUES
(1, 'Juan', 'Trent', '1994-06-08', 'M', 'JuanBTrent@teleworm.us', '3127528947'),
(3, 'Kevin', 'Lyons', '1985-03-04', 'M', 'KevinPLyons@dayrep.com', '8126400488'),
(4, 'Thomas', 'Bush', '2000-01-07', 'M', 'ThomasABush@rhyta.com', '6614527774'),
(5, 'Gayle', 'Kiry', '1994-11-05', 'F', 'GayleRKirby@jourrapide.com', '4803458240');

-- --------------------------------------------------------

--
-- Table structure for table `employeesalary`
--

CREATE TABLE `employeesalary` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `salary` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeesalary`
--

INSERT INTO `employeesalary` (`id`, `name`, `salary`) VALUES
(1, 'Claude Bryan', 8.00),
(2, 'Travis Green', 5.60),
(3, 'Jennifer Williams', 3.40),
(4, 'John Burke', 9.60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employeesalary`
--
ALTER TABLE `employeesalary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employeesalary`
--
ALTER TABLE `employeesalary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
