-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 20, 2025 at 05:02 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dd594`
--

-- --------------------------------------------------------

--
-- Table structure for table `CoffeeTypes`
--

CREATE TABLE IF NOT EXISTS `CoffeeTypes` (
  `CoffeeTypeID` int(11) NOT NULL,
  `CoffeeTypeCode` varchar(255) NOT NULL,
  `CoffeeTypeName` varchar(255) NOT NULL,
  `CoffeeTypeAisleNumber` int(11) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `CoffeeTypes`
--

INSERT INTO `CoffeeTypes` (`CoffeeTypeID`, `CoffeeTypeCode`, `CoffeeTypeName`, `CoffeeTypeAisleNumber`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(100, 'ESP', 'Espresso', 1, '2025-10-16 02:33:52', '2025-10-16 02:33:52'),
(200, 'CLD', 'Cold Brew', 2, '2025-10-16 02:33:52', '2025-10-16 02:33:52'),
(300, 'LAT', 'Latte', 3, '2025-10-16 02:33:52', '2025-10-16 02:33:52'),
(400, 'CAP', 'Cappucino', 4, '2025-10-31 17:09:05', '2025-10-31 17:09:05'),
(500, 'DRIP', 'Drip Coffee', 5, '2025-11-20 16:25:59', '2025-11-20 16:25:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CoffeeTypes`
--
ALTER TABLE `CoffeeTypes`
 ADD PRIMARY KEY (`CoffeeTypeID`), ADD UNIQUE KEY `CoffeeTypeCode` (`CoffeeTypeCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
