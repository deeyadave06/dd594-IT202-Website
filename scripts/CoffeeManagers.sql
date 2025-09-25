-- Deeya Dave
-- October 3, 2025
-- IT-202-003 Internet Applications
-- Phase 1 Assignment: Login and Logout
-- dd594@njit.edu

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Sep 25, 2025 at 05:14 PM
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
-- Table structure for table `CoffeeManagers`
--

CREATE TABLE IF NOT EXISTS `CoffeeManagers` (
`CoffeeManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `pronouns` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `CoffeeManagers`
--

INSERT INTO `CoffeeManagers` (`CoffeeManagerID`, `emailAddress`, `password`, `pronouns`, `firstName`, `lastName`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1, 'john@coffee.com', 'ca7b261739819d34ded7329daeb494c8fb4e9db9772496a4abf6d4b40942ae69', 'He/Him', 'John', 'Doe', '2025-09-20 17:49:38', '2025-09-20 17:49:38'),
(2, 'jane@coffee.com', '2b8618ece1c608bfd91f588dc1ee758bc4a42d89b11909e763a8915b449b7009', 'She/Her', 'Jane', 'Doe', '2025-09-20 17:49:38', '2025-09-20 17:49:38'),
(3, 'deeya@coffee.com', '3cdfa761361762ddedc01ea1428db10a92e327325f490f7f34f1b1b91d994f22', 'She/Her', 'Deeya', 'Dave', '2025-09-20 17:49:38', '2025-09-20 17:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CoffeeManagers`
--
ALTER TABLE `CoffeeManagers`
 ADD PRIMARY KEY (`CoffeeManagerID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CoffeeManagers`
--
ALTER TABLE `CoffeeManagers`
MODIFY `CoffeeManagerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
