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
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `prod_id` varchar(10) NOT NULL,
  `prod_name` varchar(35) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `path1` varchar(100) NOT NULL,
  `category` enum('Cooking and Baking Supplies','Cereal and Muesli','Canned and Jarred Food','Sweets, Chocolate and Gum','Coffee, Tea and Beverages') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`prod_id`, `prod_name`, `rating`, `path`, `price`, `path1`, `category`) VALUES
('1', 'Apis Himalaya Honey', 5, 'honey.png', 178, 'baked_beans.png', 'Cooking and Baking Supplies'),
('12', 'Hershey\'sCocoaPowder', 0, 'hersheyscocoa.png', 190, 'baked_beans.png', 'Cooking and Baking Supplies'),
('20', 'FruitNFibreMixedFruit', 0, 'fruitnfibremueseli.png', 120, 'crunchmueselli.png', 'Cereal and Muesli'),
('21', 'Crunchy Fruit and Nut', 0, 'crunchmueselli.png', 200, 'crunchmueselli.png', 'Cereal and Muesli'),
('22', 'CrunchMuesli', 0, 'crunchmueselli.png', 190, 'crunchmueselli.png', 'Cereal and Muesli'),
('24', 'Honey and Nuts', 0, 'honey1.png', 200, 'crunchmueselli.png', 'Cereal and Muesli'),
('29', 'GreenSlicedOlive', 0, 'greenslicedolives.png', 132, 'greenslicedolives.png', 'Canned and Jarred Food'),
('30', 'Fish Sauce', 0, 'fishsauce.png', 50, 'greenslicedolives.png', 'Canned and Jarred Food'),
('33', 'BlackSlicedOlives', 0, 'greenslicedolives.png', 50, 'greenslicedolives.png', 'Canned and Jarred Food'),
('34', 'Baked Beans', 4, 'baked_beans.png', 540, 'baked_beans.png', 'Cooking and Baking Supplies'),
('35', 'AlphonsoMangoPulp', 0, 'alphonso_mango.png', 600, 'greenslicedolives.png', 'Canned and Jarred Food'),
('37', 'CadburyCelebrations', 0, 'CadburyCelebrations.jpg', 500, 'baked_beans.png', 'Cooking and Baking Supplies'),
('38', 'CoconutCandy', 0, 'coconutcandy.png', 100, 'baked_beans.png', 'Cooking and Baking Supplies'),
('39', 'Coolmints', 0, 'coolmints.png', 150, 'greenslicedolives.png', 'Canned and Jarred Food'),
('4', 'Hershey\'sCocoaPowder', 0, 'hersheyscocoa.png', 300, 'baked_beans.png', 'Cooking and Baking Supplies'),
('40', 'DairyMilkChocolateBar', 5, 'DairyMilkChocolateBar.jpg', 50, 'GulabJamun.png', 'Sweets, Chocolate and Gum'),
('41', 'DairyMilkSilk', 0, 'DairyMilkChocolateBar.jpg', 150, 'GulabJamun.png', 'Sweets, Chocolate and Gum'),
('42', 'ChocolateMilk', 0, 'DairyMilkChocolateBar.jpg', 200, 'GulabJamun.png', 'Sweets, Chocolate and Gum'),
('44', 'Gulab Jamun', 0, 'GulabJamun.png', 120, 'GulabJamun.png', 'Sweets, Chocolate and Gum'),
('49', 'BlackTea', 0, 'greenleaftea.png', 200, 'bruinstantcoffee.png', 'Coffee, Tea and Beverages'),
('50', 'BruInstantCoffee', 0, 'bruinstantcoffee.png', 60, 'bruinstantcoffee.png', 'Coffee, Tea and Beverages'),
('51', 'GreenLeafTea', 0, 'greenleaftea.png', 300, 'bruinstantcoffee.png', 'Coffee, Tea and Beverages'),
('54', 'Nescafe', 0, 'bruinstantcoffee.png', 50, 'bruinstantcoffee.png', 'Coffee, Tea and Beverages'),
('57', 'paperboat', 0, 'paperboat.png', 190, 'bruinstantcoffee.png', 'Coffee, Tea and Beverages'),
('60', 'Guavava', 0, 'guavava.png', 90, 'bruinstantcoffee.png', 'Coffee, Tea and Beverages');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
