-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 10:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2102_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` text NOT NULL,
  `nicno` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `expsalary` float NOT NULL,
  `position` varchar(20) NOT NULL,
  `wrkschedule` varchar(25) NOT NULL,
  `eduqual` varchar(50) NOT NULL,
  `profqual` varchar(50) NOT NULL,
  `workcomp` varchar(20) NOT NULL,
  `workdesig` varchar(20) NOT NULL,
  `workfrom` date DEFAULT NULL,
  `workto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidateid`, `firstname`, `lastname`, `fullname`, `dob`, `gender`, `nationality`, `nicno`, `contactno`, `email`, `telephone`, `address`, `department`, `expsalary`, `position`, `wrkschedule`, `eduqual`, `profqual`, `workcomp`, `workdesig`, `workfrom`, `workto`) VALUES
(66, 'Kate', 'Peter', 'Kate Peter', '1990-01-01', '0', 'Sri Lankan', '199020304012', '', 'katepeter@gmail.com', '', '28, Richard Street, Kollupitiya, Colombo - 03', 'IT', 0, 'Manager', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(67, 'Jack', 'Samuel', 'Jack Samuel', '1993-01-19', '0', 'Sri Lankan', '199312131415', '', 'jacksamuel@gmail.com', '', '20, Green Street, Kollupitiya, Colombo - 03', 'Marketing', 0, 'Sales Executive', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(68, 'Jill', 'Samuel', 'Jill Samuel', '1993-01-19', '0', 'Sri Lankan', '199312131422', '', 'jillsamuel@gmail.com', '', '20, White Street, Kollupitiya, Colombo - 03', 'Marketing', 0, 'Sales Executive', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(84, 'Paul', 'Peter', 'Paul Peter', '1983-10-26', 'Male', 'Sri Lankan', '198343246787', '9411245678', 'katepeter@gmail.com', '94112456789', 'kjkj oioioio', 'Management', 0, 'Manager', '', 'O/L,A/L,B.A', '', '', '', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
