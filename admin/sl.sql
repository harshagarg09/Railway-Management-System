-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 04:45 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `sl`
--

CREATE TABLE `sl` (
  `db_berthNo` int(11) NOT NULL,
  `db_berthType` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sl`
--

INSERT INTO `sl` (`db_berthNo`, `db_berthType`) VALUES
(1, 'LB'),
(2, 'MB'),
(3, 'UB'),
(4, 'LB'),
(5, 'MB'),
(6, 'UB'),
(7, 'SL'),
(8, 'SU'),
(9, 'LB'),
(10, 'MB'),
(11, 'UB'),
(12, 'LB'),
(13, 'MB'),
(14, 'UB'),
(15, 'SL'),
(16, 'SU'),
(17, 'LB'),
(18, 'MB'),
(19, 'UB'),
(20, 'LB'),
(21, 'MB'),
(22, 'UB'),
(23, 'SL'),
(24, 'SU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sl`
--
ALTER TABLE `sl`
  ADD PRIMARY KEY (`db_berthNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
