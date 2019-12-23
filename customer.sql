-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 05:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdbmss`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(35) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `password`, `email_id`, `phone`, `city`, `state`) VALUES
(1000, 'prerana', 'p11', 'preranasharma@yahoo.com', 9901730152, 'kolkata', 'west bengal'),
(1001, 'nibedita', 'n02', 'nibi@gmail.com', 8277469118, 'bangalore', 'karnataka'),
(1002, 'ganesh', '7896', 'gannu@123.com', 646456, 'karkala', 'karnataka'),
(1003, 'K Ganesh Prabhu', '12345', 'gprabhu071@gmail.com', 8151858006, 'Karkala', 'Karnataka'),
(1004, 'K Ganesh Prabhu', '12345', 'gprabhu071@gmail.com', 8151858006, 'Karkala', 'Karnataka'),
(1005, 'K Ganesh Prabhu', '123', 'gprabhu071@gmail.com', 8151858006, 'Karkala', 'Karnataka'),
(1006, 'K Ganesh Prabhu', '123', 'gprabhu071@gmail.com', 8151858006, 'Karkala', 'Karnataka'),
(1007, 'K Ganesh Prabhu', '1111', 'gprabhu071@gmail.com', 8151858006, 'Karkala', 'Karnataka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
