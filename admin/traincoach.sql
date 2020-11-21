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
-- Table structure for table `traincoach`
--

CREATE TABLE `traincoach` (
  `db_trainNo` int(3) NOT NULL,
  `db_AC` int(11) NOT NULL,
  `db_Sleeper` int(11) NOT NULL,
  `db_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traincoach`
--

INSERT INTO `traincoach` (`db_trainNo`, `db_AC`, `db_Sleeper`, `db_date`) VALUES
(101, 2, 2, '2020-11-22'),
(102, 2, 2, '2020-11-22'),
(103, 2, 2, '2020-11-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traincoach`
--
ALTER TABLE `traincoach`
  ADD PRIMARY KEY (`db_trainNo`),
  ADD UNIQUE KEY `db_trainNo` (`db_trainNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
