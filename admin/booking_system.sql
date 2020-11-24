-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 07:52 PM
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
-- Table structure for table `booking_system`
--

CREATE TABLE `booking_system` (
  `db_trainNo` int(3) NOT NULL,
  `db_AC` int(11) NOT NULL,
  `db_Sleeper` int(11) NOT NULL,
  `db_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_system`
--

INSERT INTO `booking_system` (`db_trainNo`, `db_AC`, `db_Sleeper`, `db_date`) VALUES
(101, 2, 1, '2020-11-23'),
(102, 2, 2, '2020-11-25'),
(102, 2, 2, '2020-11-26'),
(105, 2, 2, '2020-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_system`
--
ALTER TABLE `booking_system`
  ADD PRIMARY KEY (`db_trainNo`,`db_date`),
  ADD KEY `db_trainNo` (`db_trainNo`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
