-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 05:33 PM
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
-- Table structure for table `prod_details`
--

CREATE TABLE `prod_details` (
  `prod_id` varchar(10) NOT NULL,
  `prod_spec` varchar(1000) DEFAULT NULL,
  `manufacturer_details` varchar(500) DEFAULT NULL,
  `importer_details` varchar(500) DEFAULT NULL,
  `packers_details` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod_details`
--

INSERT INTO `prod_details` (`prod_id`, `prod_spec`, `manufacturer_details`, `importer_details`, `packers_details`) VALUES
('1', 'super quality honey', 'adsdsd', 'dsads', 'sddds'),
('12', 'super quality', 'azaz', 'azaz', 'azaz'),
('20', 'healthy product', 'azz', 'zaz', 'zaz'),
('21', 'healthy', 'azaz', 'azaz', 'azaz'),
('22', 'healthy', 'xsxs', 'xsx', 'sxs'),
('24', 'good honey', 'xsx', 'sxx', 'sxsx'),
('29', 'good quality olives', 'cdccd', 'dcdc', 'dccd'),
('30', 'good quality', 'vfvfv', 'fvfv', 'fvfv'),
('33', 'dddddd', 'ddddd', 'ddddddd', 'ddddd'),
('34', 'dddddddd', 'ddd', 'dd', 'dddd'),
('35', 'ddddddddd', 'dddddddd', 'dddddddd', 'ddddddd'),
('37', 'aaaaaaaaa', 'aaaaaaaaa', 'aaaaaa', 'aaaaaaaa'),
('38', 'qqqqqq', 'qqqqqqq', 'qqqqqqq', 'qqqqqqqqq'),
('39', 'cccccc', 'ccccccccc', 'ccccccc', 'cccccc'),
('4', 'fine quality cocoa powder', 'x xcx', 'xcxc', 'cxcx'),
('40', 'ccccc', 'cccccc', 'cccccc', 'ccccccc'),
('41', 'qqqqqq', 'qqqqq', 'qqq', 'qqqqq'),
('42', 'df', 'dfd', 'dfd', 'dfd'),
('44', 'dfdf', 'dffd', 'fdfd', 'fdfd'),
('49', 'dfdfd', 'dfdf', 'dfdf', 'dfdf'),
('50', 'asasas', 'asasas', 'asasa', 'sass'),
('51', 'eded', 'ede', 'eded', 'eded'),
('54', 'edede', 'eded', 'eded', 'eded'),
('57', 'dede', 'dede', 'dded', 'eded'),
('60', 'eded', 'edded', 'eeded', 'edede');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prod_details`
--
ALTER TABLE `prod_details`
  ADD PRIMARY KEY (`prod_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prod_details`
--
ALTER TABLE `prod_details`
  ADD CONSTRAINT `f7` FOREIGN KEY (`prod_id`) REFERENCES `prod` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
