-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 07:51 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_da` (IN `ord_id` INT(10), IN `date1` DATE)  NO SQL
update orders set delivery_date=DATE_ADD(date1,INTERVAL 3 DAY) where order_id=ord_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `prod_id` varchar(10) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`prod_id`, `cust_id`) VALUES
('1', 1002),
('1', 1004),
('10', 1002);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_name` varchar(35) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `email_id`) VALUES
('1', 'shreya', '1234', 'shreyabaliga248@gmail.com'),
('2', 'neha', 'shreyaneha', 'nehabaliga@gmail.com');

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
(1002, '2', '2019-11-04', '2019-11-07', 'debit-card', 100013, 190, 0);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `rating` AFTER UPDATE ON `orders` FOR EACH ROW update prod set rating=(select avg(rate) from orders where prod_id=new.prod_id)
where prod_id=new.prod_id
$$
DELIMITER ;

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
('1', 'Apis Himalaya Honey', 5, 'paperboat.png', 178, 'paperboat.png', 'Cooking and Baking Supplies'),
('10', 'Tata Salt', 0, 'paperboat.png', 200, 'paperboat.png', 'Cooking and Baking Supplies'),
('11', 'MannaRagiMalt', 0, 'paperboat.png', 36, 'paperboat.png', 'Cooking and Baking Supplies'),
('12', 'Hershey\'sCocoaPowder', 0, 'paperboat.png', 190, 'paperboat.png', 'Cooking and Baking Supplies'),
('13', 'True Elements', 0, 'paperboat.png', 400, 'paperboat.png', 'Cooking and Baking Supplies'),
('14', 'ToastedMilletMuesli', 0, 'paperboat.png', 540, 'paperboat.png', 'Cereal and Muesli'),
('15', 'ToastedMillet', 0, 'paperboat.png', 600, 'paperboat.png', 'Cooking and Baking Supplies'),
('16', 'SoulfullMillet', 0, 'paperboat.png', 450, 'paperboat.png', 'Cooking and Baking Supplies'),
('17', 'ProteinMuesli', 0, 'paperboat.png', 350, 'paperboat.png', 'Cooking and Baking Supplies'),
('18', 'OatClusters', 0, 'paperboat.png', 680, 'paperboat.png', 'Cooking and Baking Supplies'),
('19', 'Nuts Delight', 0, 'paperboat.png', 100, 'paperboat.png', 'Cooking and Baking Supplies'),
('2', 'Dabur 100% Pure Honey', 0, 'paperboat.png', 190, 'paperboat.png', 'Cereal and Muesli'),
('20', 'FruitNFibreMixedFruit', 0, 'paperboat.png', 120, 'paperboat.png', 'Cereal and Muesli'),
('21', 'Crunchy Fruit and Nut', 0, 'paperboat.png', 200, 'paperboat.png', 'Cooking and Baking Supplies'),
('22', 'CrunchMuesli', 0, 'paperboat.png', 190, 'paperboat.png', 'Cooking and Baking Supplies'),
('23', 'SteelCuttOats', 0, 'paperboat.png', 235, 'paperboat.png', 'Cereal and Muesli'),
('24', 'Honey and Nuts', 0, 'paperboat.png', 200, 'paperboat.png', 'Cooking and Baking Supplies'),
('25', 'VegHot&SourSoup', 0, 'paperboat.png', 10, 'paperboat.png', 'Cooking and Baking Supplies'),
('26', 'TunaChunks', 0, 'paperboat.png', 200, 'paperboat.png', 'Cooking and Baking Supplies'),
('27', 'Sliced Jalapeno', 0, 'paperboat.png', 200, 'paperboat.png', 'Cooking and Baking Supplies'),
('28', 'Oregano', 0, 'paperboat.png', 120, 'paperboat.png', 'Cooking and Baking Supplies'),
('29', 'GreenSlicedOlive', 0, 'paperboat.png', 132, 'paperboat.png', 'Cooking and Baking Supplies'),
('3', 'Fortune Refined Sunflower Oil', 0, 'paperboat.png', 250, 'paperboat.png', 'Cereal and Muesli'),
('30', 'Fish Sauce', 0, 'paperboat.png', 50, 'paperboat.png', 'Cooking and Baking Supplies'),
('31', 'DryFishReadytoEat', 0, 'paperboat.png', 198, 'paperboat.png', 'Cooking and Baking Supplies'),
('32', 'Dry Shrimp', 0, 'paperboat.png', 60, 'paperboat.png', 'Cooking and Baking Supplies'),
('33', 'BlackSlicedOlives', 0, 'paperboat.png', 50, 'paperboat.png', 'Cooking and Baking Supplies'),
('34', 'Baked Beans', 0, 'paperboat.png', 540, 'paperboat.png', 'Canned and Jarred Food'),
('35', 'AlphonsoMangoPulp', 0, 'paperboat.png', 600, 'paperboat.png', 'Cooking and Baking Supplies'),
('36', 'Sliced Jalapenos', 0, 'paperboat.png', 250, 'paperboat.png', 'Cooking and Baking Supplies'),
('37', 'Cadbury Celebrations', 0, 'paperboat.png', 500, 'paperboat.png', 'Cooking and Baking Supplies'),
('38', 'CoconutCandy', 0, 'paperboat.png', 100, 'paperboat.png', 'Cooking and Baking Supplies'),
('39', 'Coolmints', 0, 'paperboat.png', 150, 'paperboat.png', 'Canned and Jarred Food'),
('4', 'Hershey\'sCocoaPowder', 0, 'paperboat.png', 300, 'paperboat.png', 'Cooking and Baking Supplies'),
('40', 'DairyMilkChocolateBar', 0, 'paperboat.png', 50, 'paperboat.png', 'Cooking and Baking Supplies'),
('41', 'DairyMilkSilk', 0, 'paperboat.png', 150, 'paperboat.png', 'Canned and Jarred Food'),
('42', 'ChocolateMilk', 0, 'paperboat.png', 200, 'paperboat.png', 'Cooking and Baking Supplies'),
('43', 'FerreroRocher', 0, 'paperboat.png', 600, 'paperboat.png', 'Cooking and Baking Supplies'),
('44', 'Gulab Jamun', 0, 'paperboat.png', 120, 'paperboat.png', 'Cooking and Baking Supplies'),
('45', 'Hajmola', 0, 'paperboat.png', 30, 'paperboat.png', 'Cooking and Baking Supplies'),
('46', 'KajuKatli', 0, 'paperboat.png', 700, 'paperboat.png', 'Cooking and Baking Supplies'),
('47', 'M&M\'sRoundBuddy', 0, 'paperboat.png', 700, 'paperboat.png', 'Cooking and Baking Supplies'),
('48', 'Rasgulla', 0, 'paperboat.png', 300, 'paperboat.png', 'Cooking and Baking Supplies'),
('49', 'BlackTea', 0, 'paperboat.png', 200, 'paperboat.png', 'Cooking and Baking Supplies'),
('5', 'ZeroSugarSachetBox', 0, 'paperboat.png', 400, 'paperboat.png', 'Sweets, Chocolate and Gum'),
('50', 'BruInstantCoffee', 0, 'paperboat.png', 60, 'paperboat.png', 'Cooking and Baking Supplies'),
('51', 'GreenLeafTea', 0, 'paperboat.png', 300, 'paperboat.png', 'Cooking and Baking Supplies'),
('52', 'LemonGreenTea', 0, 'paperboat.png', 250, 'paperboat.png', 'Cooking and Baking Supplies'),
('53', 'MixedFruit', 0, 'paperboat.png', 150, 'paperboat.png', 'Cooking and Baking Supplies'),
('54', 'Nescafe', 0, 'paperboat.png', 50, 'paperboat.png', 'Coffee, Tea and Beverages'),
('55', 'Nestle', 0, 'paperboat.png', 90, 'paperboat.png', 'Cooking and Baking Supplies'),
('56', 'OrangeJuice', 0, 'paperboat.png', 150, 'paperboat.png', 'Cooking and Baking Supplies'),
('57', 'paperboat', 0, 'paperboat.png', 190, 'paperboat.png', 'Cooking and Baking Supplies'),
('58', 'Litchie', 0, 'paperboat.png', 60, 'paperboat.png', 'Cooking and Baking Supplies'),
('59', 'TeaDhaba', 0, 'paperboat.png', 350, 'paperboat.png', 'Cooking and Baking Supplies'),
('6', 'VirginCoconutOil', 0, 'paperboat.png', 187, 'paperboat.png', 'Cooking and Baking Supplies'),
('60', 'Guavava', 0, 'paperboat.png', 90, 'paperboat.png', 'Cooking and Baking Supplies'),
('7', 'Vedaka Cumin', 0, 'paperboat.png', 186, 'paperboat.png', 'Cooking and Baking Supplies'),
('8', 'UradWhole', 0, 'paperboat.png', 190, 'paperboat.png', 'Cooking and Baking Supplies'),
('9', 'TurmericPowderMasala', 0, 'paperboat.png', 300, 'paperboat.png', 'Cooking and Baking Supplies');

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
('1', 'sasa', 'asas', 'aasas', 'asasa'),
('10', 'sscscsc', 'scscsc', 'scscsc', 'scscsc'),
('2', 'rgrgr', 'rgrgr', 'rgrgr', 'rgrgrg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`prod_id`,`cust_id`),
  ADD KEY `f2` (`cust_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `f5` (`cust_id`),
  ADD KEY `f6` (`prod_id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `prod_details`
--
ALTER TABLE `prod_details`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100014;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD CONSTRAINT `f1` FOREIGN KEY (`prod_id`) REFERENCES `prod` (`prod_id`),
  ADD CONSTRAINT `f2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `f5` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `f6` FOREIGN KEY (`prod_id`) REFERENCES `prod` (`prod_id`);

--
-- Constraints for table `prod_details`
--
ALTER TABLE `prod_details`
  ADD CONSTRAINT `f7` FOREIGN KEY (`prod_id`) REFERENCES `prod` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
