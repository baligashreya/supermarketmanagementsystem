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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cust_id` int(11) DEFAULT NULL,
  `prod_id` varchar(10) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `mode_of_payment` enum('credit-card','debit-card','','') NOT NULL,
  `order_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cust_id`, `prod_id`, `order_date`, `delivery_date`, `mode_of_payment`, `order_id`, `price`, `rate`) VALUES
(1002, '1', '2019-11-04', '2019-11-07', 'debit-card', 100009, 178, 5),
(1002, '1', '2019-11-04', '2019-11-07', 'credit-card', 100010, 178, 6),
(1002, '1', '2019-11-04', '2019-11-07', 'credit-card', 100011, 178, 7),
(1002, '1', '2019-11-04', '2019-11-07', 'debit-card', 100012, 178, 0),
(1002, '40', '2019-11-05', '2019-11-08', 'debit-card', 100014, 50, 5),
(1001, '1', '2019-11-05', '2019-11-08', 'debit-card', 100015, 178, 5),
(1001, '34', '2019-11-05', '2019-11-08', 'debit-card', 100016, 540, 4),
(1001, '37', '2019-11-06', '2019-11-09', 'debit-card', 100017, 500, 0),
(1001, '20', '2019-11-06', '2019-11-09', 'debit-card', 100018, 120, 0),
(1001, '20', '2019-11-06', '2019-11-09', 'debit-card', 100019, 120, 0);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `rating` AFTER UPDATE ON `orders` FOR EACH ROW update prod set rating=(select avg(rate) from orders where prod_id=new.prod_id)
where prod_id=new.prod_id
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `f5` (`cust_id`),
  ADD KEY `f6` (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100020;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `f5` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `f6` FOREIGN KEY (`prod_id`) REFERENCES `prod` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
