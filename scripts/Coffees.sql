-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Dec 05, 2025 at 10:17 PM
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
-- Table structure for table `Coffees`
--

CREATE TABLE IF NOT EXISTS `Coffees` (
  `CoffeeID` int(11) NOT NULL,
  `CoffeeCode` varchar(10) NOT NULL,
  `CoffeeName` varchar(255) NOT NULL,
  `CoffeeDescription` text NOT NULL,
  `CoffeeOrigin` varchar(255) NOT NULL,
  `CoffeeRoastLevel` varchar(255) NOT NULL,
  `CoffeeTypeID` int(11) NOT NULL,
  `CoffeeWholesalePrice` decimal(10,2) NOT NULL,
  `CoffeeListPrice` decimal(10,2) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Coffees`
--

INSERT INTO `Coffees` (`CoffeeID`, `CoffeeCode`, `CoffeeName`, `CoffeeDescription`, `CoffeeOrigin`, `CoffeeRoastLevel`, `CoffeeTypeID`, `CoffeeWholesalePrice`, `CoffeeListPrice`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1001, 'ESP001', 'Italian Espresso', 'Bold and intense espresso blend.', 'Italy', 'Dark', 100, 8.99, 12.99, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(1002, 'ESP002', 'Blonde Espresso', 'Mild espresso made from lightly roasted beans.', 'Latin America', 'Light', 100, 8.50, 12.00, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(1003, 'ESP003', 'Americano', 'Espresso diluted with hot water.', 'Italy', 'Medium', 100, 10.00, 12.00, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(1004, 'ESP004', 'Ristretto', 'Restricted espresso made with less water.', 'Italy', 'Dark', 100, 8.00, 12.00, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(1005, 'ESP005', 'Doppio', 'Double strength espresso,', 'Italy', 'Medium', 100, 9.99, 15.99, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(2001, 'CLD001', 'Classic Cold Brew', 'Smooth and less acidic, brewed cold for hours.', 'USA', 'Medium', 200, 9.00, 11.99, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(2002, 'CLD002', 'Vanilla Cold Brew', 'Infused with vanilla flavor.', 'USA', 'Medium', 200, 10.50, 13.00, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(2003, 'CLD003', 'Nitro Cold Brew', 'Charged with nitrogen for creaminess.', 'USA', 'Dark', 200, 11.00, 14.50, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(2004, 'CLD004', 'Mocha Cold Brew', 'Cold brew with chocolate flavor.', 'Canada', 'Medium', 200, 8.99, 12.50, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(2005, 'CLD005', 'Vietnamese Cold Brew', 'Sweetened and creamy cold brew.', 'Vietnam', 'Dark', 200, 14.50, 17.00, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(3001, 'LAT001', 'Iced Latte', 'Cold coffee with extra milk.', 'Italy', 'Medium', 300, 7.50, 10.50, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(3002, 'LAT002', 'Vanilla Latte', 'Latte with vanilla syrup.', 'USA', 'Medium', 300, 8.00, 11.00, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(3003, 'LAT003', 'Caramel Latte', 'Sweet latte with caramel syrup.', 'USA', 'Medium', 300, 8.00, 11.00, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(3004, 'LAT004', 'Pumpkin Spice Latte', 'Seasonal latte with pumpkin spices.', 'USA', 'Light', 300, 9.25, 13.50, '2025-10-16 02:33:11', '2025-10-16 02:33:11'),
(3005, 'LAT005', 'Hazelnut Latte', 'Latte with hazelnut flavoring.', 'Turkey', 'Medium', 300, 9.99, 12.99, '2025-10-16 02:33:11', '2025-12-05 22:05:12'),
(3006, 'LAT006', 'Hot Latte', 'Warm and milky. Lots of steamed milk and topped with a thin layer of foam.', 'Italy', 'Medium', 300, 9.99, 12.99, '2025-11-20 12:16:45', '2025-11-20 17:00:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Coffees`
--
ALTER TABLE `Coffees`
 ADD PRIMARY KEY (`CoffeeID`), ADD UNIQUE KEY `CoffeeCode` (`CoffeeCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
