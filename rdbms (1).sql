-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 03:50 PM
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
-- Database: `rdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `prod_id` varchar(10) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1001, 'nibedita', 'n02', 'nibi@gmail.com', 8277469118, 'bangalore', 'karnataka');

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
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `prod_id` varchar(10) NOT NULL,
  `category` enum('Cooking & Baking Supplies','Cereal & Muesli','Canned & Jarred Food','Sweets, Chocolate & Gum','Coffee, Tea & Beverages') NOT NULL,
  `prod_name` varchar(35) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`prod_id`, `category`, `prod_name`, `rating`, `path`, `price`) VALUES
('1', 'Cooking & Baking Supplies', 'Apis Himalaya Honey', 5, 'C:xampphtdocs\rdbmsApis Himalaya Honey.webp', 178),
('10', 'Cooking & Baking Supplies', 'Tata Salt', 5, 'C:\\xampp\\htdocs\\rdbms\\Tata Salt.webp', 200),
('11', 'Cooking & Baking Supplies', 'MannaRagiMalt', 2, 'C:\\xampp\\htdocs\\rdbms\\MannaRagiMalt.webp', 36),
('12', 'Cooking & Baking Supplies', 'Hershey\'sCocoaPowder', 5, 'C:\\xampp\\htdocs\\rdbms\\CocoaPowder.webp', 190),
('13', 'Cereal & Muesli', 'True Elements', 5, 'C:\\xampp\\htdocs\\rdbms\\True Elementswebp', 400),
('14', 'Cereal & Muesli', 'ToastedMilletMuesli', 5, 'C:\\xampp\\htdocs\\rdbms\\ToastedMilletMuesli.webp', 540),
('15', 'Cereal & Muesli', 'ToastedMillet', 4, 'C:\\xampp\\htdocs\\rdbms\\ToastedMillet.webp', 600),
('16', 'Cereal & Muesli', 'SoulfullMillet', 4, 'C:\\xampp\\htdocs\\rdbms\\SoulfullMillet.webp', 450),
('17', 'Cereal & Muesli', 'ProteinMuesli', 3, 'C:\\xampp\\htdocs\\rdbms\\ProteinMuesli.webp', 350),
('18', 'Cereal & Muesli', 'OatClusters', 3, 'C:\\xampp\\htdocs\\rdbms\\OatClusters.webp', 680),
('19', 'Cereal & Muesli', 'Nuts Delight', 2, 'C:\\xampp\\htdocs\\rdbms\\Nuts Delight.webp', 100),
('2', 'Cooking & Baking Supplies', 'Dabur 100% Pure Honey', 4, 'C:xampphtdocs\rdbmsDabur 100% Pure Honey.webp', 190),
('20', 'Cereal & Muesli', 'FruitNFibreMixedFruit', 2, 'C:\\xampp\\htdocs\\rdbms\\FruitNFibreMixedFruit.webp', 120),
('21', 'Cereal & Muesli', 'Crunchy Fruit and Nut', 5, 'C:\\xampp\\htdocs\\rdbms\\Crunchy Fruit and Nut.webp', 200),
('22', 'Cereal & Muesli', 'CrunchMuesli', 4, 'C:\\xampp\\htdocs\\rdbms\\CrunchMuesli.webp', 190),
('23', 'Cereal & Muesli', 'SteelCuttOats', 3, 'C:\\xampp\\htdocs\\rdbms\\SteelCuttOats.webp', 235),
('24', 'Cereal & Muesli', 'Honey and Nuts', 3, 'C:\\xampp\\htdocs\\rdbms\\Honey and Nuts.webp', 200),
('25', 'Canned & Jarred Food', 'VegHot&SourSoup', 5, 'C:\\xampp\\htdocs\\rdbms\\VegHot&SourSoup.webp', 10),
('26', 'Canned & Jarred Food', 'TunaChunks', 5, 'C:\\xampp\\htdocs\\rdbms\\TunaChunks.webp', 200),
('27', 'Canned & Jarred Food', 'Sliced Jalapeno', 3, 'C:\\xampp\\htdocs\\rdbms\\Sliced Jalapeno.webp', 200),
('28', 'Canned & Jarred Food', 'Oregano', 3, 'C:\\xampp\\htdocs\\rdbms\\Oreganowebp', 120),
('29', 'Canned & Jarred Food', 'GreenSlicedOlive', 2, 'C:\\xampp\\htdocs\\rdbms\\GreenSlicedOlive.webp', 132),
('3', 'Cooking & Baking Supplies', 'Fortune Refined Sunflower Oil', 3, 'C:\\xampp\\htdocs\\rdbms\\Fortune.webp', 250),
('30', 'Canned & Jarred Food', 'Fish Sauce', 3, 'C:\\xampp\\htdocs\\rdbms\\Fish Sauce.webp', 50),
('31', 'Canned & Jarred Food', 'DryFishReadytoEat', 1, 'C:\\xampp\\htdocs\\rdbms\\DryFishReadytoEatwebp', 198),
('32', 'Canned & Jarred Food', 'Dry Shrimp', 3, 'C:\\xampp\\htdocs\\rdbms\\Dry Shrimp.webp', 60),
('33', 'Canned & Jarred Food', 'BlackSlicedOlives', 5, 'C:\\xampp\\htdocs\\rdbms\\BlackSlicedOlives.webp', 50),
('34', 'Canned & Jarred Food', 'Baked Beans', 3, 'C:\\xampp\\htdocs\\rdbms\\Baked Beans.webp', 540),
('35', 'Canned & Jarred Food', 'AlphonsoMangoPulp', 5, 'C:\\xampp\\htdocs\\rdbms\\AlphonsoMangoPulp.webp', 600),
('36', 'Canned & Jarred Food', 'Sliced Jalapenos', 1, 'C:\\xampp\\htdocs\\rdbms\\Sliced Jalapenos.webp', 250),
('37', 'Sweets, Chocolate & Gum', 'Cadbury Celebrations', 5, 'C:\\xampp\\htdocs\\rdbms\\Cadbury Celebrations.jpg', 500),
('38', 'Sweets, Chocolate & Gum', 'CoconutCandy', 3, 'C:\\xampp\\htdocs\\rdbms\\CoconutCandy.webp', 100),
('39', 'Sweets, Chocolate & Gum', 'Coolmints', 2, 'C:\\xampp\\htdocs\\rdbms\\Coolmints.webp', 150),
('4', 'Cooking & Baking Supplies', 'Hershey\'sCocoaPowder', 5, 'C:\\xampp\\htdocs\\rdbms\\Hershey\'sCocoaPowder.webp', 300),
('40', 'Sweets, Chocolate & Gum', 'DairyMilkChocolateBar', 5, 'C:\\xampp\\htdocs\\rdbms\\DairyMilkChocolateBar.jpg', 50),
('41', 'Sweets, Chocolate & Gum', 'DairyMilkSilk', 5, 'C:\\xampp\\htdocs\\rdbms\\DairyMilkSilk.jpg', 150),
('42', 'Sweets, Chocolate & Gum', 'ChocolateMilk', 5, 'C:\\xampp\\htdocs\\rdbms\\download.jfif', 200),
('43', 'Sweets, Chocolate & Gum', 'FerreroRocher', 5, 'C:\\xampp\\htdocs\\rdbms\\FerreroRocher.jpg', 600),
('44', 'Sweets, Chocolate & Gum', 'Gulab Jamun', 4, 'C:\\xampp\\htdocs\\rdbms\\GulabJamun.png', 120),
('45', 'Sweets, Chocolate & Gum', 'Hajmola', 1, 'C:\\xampp\\htdocs\\rdbms\\Hajmola.webp', 30),
('46', 'Sweets, Chocolate & Gum', 'KajuKatli', 5, 'C:\\xampp\\htdocs\\rdbms\\KajuKatli.webp', 700),
('47', 'Sweets, Chocolate & Gum', 'M&M\'sRoundBuddy', 5, 'C:\\xampp\\htdocs\\rdbms\\M&M\'sRoundBuddywebp', 700),
('48', 'Sweets, Chocolate & Gum', 'Rasgulla', 5, 'C:\\xampp\\htdocs\\rdbms\\Rasgulla.png', 300),
('49', 'Coffee, Tea & Beverages', 'BlackTea', 5, 'C:\\xampp\\htdocs\\rdbms\\BlackTea.webp', 200),
('5', 'Cooking & Baking Supplies', 'ZeroSugarSachetBox', 2, 'C:\\xampp\\htdocs\\rdbms\\ZeroSugarSachetBox.webp', 400),
('50', 'Coffee, Tea & Beverages', 'BruInstantCoffee', 3, 'C:\\xampp\\htdocs\\rdbms\\BruInstantCoffee.webp', 60),
('51', 'Coffee, Tea & Beverages', 'GreenLeafTea', 2, 'C:\\xampp\\htdocs\\rdbms\\GreenLeafTea.webp', 300),
('52', 'Coffee, Tea & Beverages', 'LemonGreenTea', 3, 'C:\\xampp\\htdocs\\rdbms\\LemonGreenTea.webp', 250),
('53', 'Coffee, Tea & Beverages', 'MixedFruit', 3, 'C:\\xampp\\htdocs\\rdbms\\MixedFruit.webp', 150),
('54', 'Coffee, Tea & Beverages', 'Nescafe', 3, 'C:\\xampp\\htdocs\\rdbms\\Nescafe.webp', 50),
('55', 'Coffee, Tea & Beverages', 'Nestle', 4, 'C:\\xampp\\htdocs\\rdbms\\Nestle.webp', 90),
('56', 'Coffee, Tea & Beverages', 'OrangeJuice', 4, 'C:\\xampp\\htdocs\\rdbms\\OrangeJuice.webp', 150),
('57', 'Coffee, Tea & Beverages', 'paperboat', 4, 'C:\\xampp\\htdocs\\rdbms\\paperboat.jpg', 190),
('58', 'Coffee, Tea & Beverages', 'Litchie', 3, 'C:\\xampp\\htdocs\\rdbms\\realLitchiewebp', 60),
('59', 'Coffee, Tea & Beverages', 'TeaDhaba', 4, 'C:\\xampp\\htdocs\\rdbms\\TeaDhaba.webp', 350),
('6', 'Cooking & Baking Supplies', 'VirginCoconutOil', 5, 'C:\\xampp\\htdocs\\rdbms\\VirginCoconutOil.webp', 187),
('60', 'Coffee, Tea & Beverages', 'Guavava', 3, 'C:\\xampp\\htdocs\\rdbms\\Guavava.webp', 90),
('7', 'Cooking & Baking Supplies', 'Vedaka Cumin', 4, 'C:\\xampp\\htdocs\\rdbms\\Vedaka Cumin.webp', 186),
('8', 'Cooking & Baking Supplies', 'UradWhole', 2, 'C:\\xampp\\htdocs\\rdbms\\UradWhole.webp', 190),
('9', 'Cooking & Baking Supplies', 'TurmericPowderMasala', 2, 'C:\\xampp\\htdocs\\rdbms\\Turmeric.webp', 300);

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

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rev_id` int(11) NOT NULL,
  `prod_id` varchar(40) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rev_id`,`prod_id`,`cust_id`),
  ADD KEY `fkk` (`prod_id`),
  ADD KEY `fkk1` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fkk` FOREIGN KEY (`prod_id`) REFERENCES `prod` (`prod_id`),
  ADD CONSTRAINT `fkk1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
