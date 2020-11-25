-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 10:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `pnr_train`
--

CREATE TABLE `pnr_train` (
  `pnr` int(11) NOT NULL,
  `trainid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pnr_train`
--

INSERT INTO `pnr_train` (`pnr`, `trainid`) VALUES
(1, 101),
(2, 101),
(3, 101),
(4, 101),
(5, 101),
(6, 101),
(7, 103),
(8, 103),
(9, 103),
(10, 103),
(11, 103),
(12, 103),
(13, 103),
(14, 103),
(15, 103),
(16, 103),
(17, 102),
(18, 102),
(19, 102),
(20, 102),
(21, 102),
(22, 102),
(23, 102),
(24, 102),
(25, 102),
(26, 102),
(27, 102),
(28, 105),
(29, 105);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pnr_train`
--
ALTER TABLE `pnr_train`
  ADD PRIMARY KEY (`pnr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
