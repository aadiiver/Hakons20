-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 07:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `S.No.` int(255) NOT NULL,
  `picsource` varchar(350) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `LAddress` varchar(100) NOT NULL,
  `PAddress` varchar(100) NOT NULL,
  `Sym` varchar(100) NOT NULL,
  `Med` varchar(100) NOT NULL,
  `zone` enum('r','o','g','') NOT NULL,
  `Mob` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Aadhaar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`S.No.`, `picsource`, `firstName`, `lastName`, `gender`, `LAddress`, `PAddress`, `Sym`, `Med`, `zone`, `Mob`, `Email`, `Aadhaar`) VALUES
(1, 'travel/download.jfif', 'Ram', 'Singh', 'm', 'Thana Road', 'Thana Road', 'Cough', 'Crocin', 'r', 2147483647, 'avi@xyz.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`S.No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `S.No.` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
