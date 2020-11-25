-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 10:48 PM
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
-- Table structure for table `bookings_history`
--

CREATE TABLE `bookings_history` (
  `username` varchar(50) NOT NULL,
  `pnr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_history`
--

INSERT INTO `bookings_history` (`username`, `pnr`) VALUES
('qwert7851', 13),
('qwert7851', 14),
('qwert7851', 15),
('qwert7851', 16),
('qwert7851', 17),
('qwert7851', 18),
('qwert7851', 19),
('qwert7851', 20),
('qwert7851', 21),
('qwert7851', 22),
('qwert7851', 23),
('qwert7851', 24),
('qwert7851', 25),
('qwert7851', 26),
('qwert7851', 27),
('qwert7851', 28),
('qwert7851', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings_history`
--
ALTER TABLE `bookings_history`
  ADD PRIMARY KEY (`username`,`pnr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
