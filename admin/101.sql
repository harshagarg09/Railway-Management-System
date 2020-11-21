-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 04:44 PM
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
-- Table structure for table `101`
--

CREATE TABLE `101` (
  `db_coachType` varchar(3) NOT NULL,
  `db_BerthNo` int(11) NOT NULL,
  `db_bookStatus` int(11) NOT NULL,
  `db_coachNo` int(11) NOT NULL,
  `db_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `101`
--

INSERT INTO `101` (`db_coachType`, `db_BerthNo`, `db_bookStatus`, `db_coachNo`, `db_date`) VALUES
('AC', 1, 0, 1, '2020-11-22'),
('AC', 1, 0, 2, '2020-11-22'),
('AC', 2, 0, 1, '2020-11-22'),
('AC', 2, 0, 2, '2020-11-22'),
('AC', 3, 0, 1, '2020-11-22'),
('AC', 3, 0, 2, '2020-11-22'),
('AC', 4, 0, 1, '2020-11-22'),
('AC', 4, 0, 2, '2020-11-22'),
('AC', 5, 0, 1, '2020-11-22'),
('AC', 5, 0, 2, '2020-11-22'),
('AC', 6, 0, 1, '2020-11-22'),
('AC', 6, 0, 2, '2020-11-22'),
('AC', 7, 0, 1, '2020-11-22'),
('AC', 7, 0, 2, '2020-11-22'),
('AC', 8, 0, 1, '2020-11-22'),
('AC', 8, 0, 2, '2020-11-22'),
('AC', 9, 0, 1, '2020-11-22'),
('AC', 9, 0, 2, '2020-11-22'),
('AC', 10, 0, 1, '2020-11-22'),
('AC', 10, 0, 2, '2020-11-22'),
('AC', 11, 0, 1, '2020-11-22'),
('AC', 11, 0, 2, '2020-11-22'),
('AC', 12, 0, 1, '2020-11-22'),
('AC', 12, 0, 2, '2020-11-22'),
('AC', 13, 0, 1, '2020-11-22'),
('AC', 13, 0, 2, '2020-11-22'),
('AC', 14, 0, 1, '2020-11-22'),
('AC', 14, 0, 2, '2020-11-22'),
('AC', 15, 0, 1, '2020-11-22'),
('AC', 15, 0, 2, '2020-11-22'),
('AC', 16, 0, 1, '2020-11-22'),
('AC', 16, 0, 2, '2020-11-22'),
('AC', 17, 0, 1, '2020-11-22'),
('AC', 17, 0, 2, '2020-11-22'),
('AC', 18, 0, 1, '2020-11-22'),
('AC', 18, 0, 2, '2020-11-22'),
('SL', 19, 0, 1, '2020-11-22'),
('SL', 19, 0, 2, '2020-11-22'),
('SL', 20, 0, 1, '2020-11-22'),
('SL', 20, 0, 2, '2020-11-22'),
('SL', 21, 0, 1, '2020-11-22'),
('SL', 21, 0, 2, '2020-11-22'),
('SL', 22, 0, 1, '2020-11-22'),
('SL', 22, 0, 2, '2020-11-22'),
('SL', 23, 0, 1, '2020-11-22'),
('SL', 23, 0, 2, '2020-11-22'),
('SL', 24, 0, 1, '2020-11-22'),
('SL', 24, 0, 2, '2020-11-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `101`
--
ALTER TABLE `101`
  ADD PRIMARY KEY (`db_coachType`,`db_BerthNo`,`db_coachNo`,`db_date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
