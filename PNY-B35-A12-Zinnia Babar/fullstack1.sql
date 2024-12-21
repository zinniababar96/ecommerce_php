-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 05:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_name` varchar(100) NOT NULL,
  `item_price` int(100) NOT NULL,
  `qty_selected` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE `item_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item_sub_category`
--

CREATE TABLE `item_sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `sub_cat_desc` varchar(100) DEFAULT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item_types`
--

CREATE TABLE `item_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `type_desc` varchar(100) DEFAULT NULL,
  `sub_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `userid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`userid`, `password`, `fullname`, `email`, `active_status`) VALUES
('admin', '12345', 'admin', 'admin@gmail.com', 1),
('amna', '12345', 'amna', 'amna@gmail.com', 1),
('HAIDER', '12345', 'Haider Ali', 'haider@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `item_id` int(11) DEFAULT NULL,
  `item_name` varchar(200) DEFAULT NULL,
  `item_desc` varchar(200) DEFAULT NULL,
  `item_uom` varchar(50) DEFAULT NULL,
  `block_status` tinyint(1) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `image_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`item_id`, `item_name`, `item_desc`, `item_uom`, `block_status`, `type_id`, `item_price`, `image_file`) VALUES
(1, 'Kurta', 'kurta', 'NOS', 0, 1, 2000, 'bluekurta.jpg'),
(2, 'Grey Kurta', 'Grey Kurta', 'NOS', 0, 2, 2500, 'greenkurta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_prices`
--

CREATE TABLE `product_prices` (
  `item_id` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `price_change_date` date DEFAULT NULL,
  `active_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_prices`
--

INSERT INTO `product_prices` (`item_id`, `unit_price`, `price_change_date`, `active_status`) VALUES
(1, 2000, '2021-03-27', 1),
(2, 1500, '2022-04-27', 0),
(3, 1600, '2022-04-27', 0),
(3, 1800, '2022-04-27', 0),
(3, 2200, '2022-04-27', 0),
(4, 1100, '2022-04-27', 0),
(5, 4000, '2022-04-27', 0),
(6, 3000, '2022-04-27', 0),
(6, 2700, '2022-04-27', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `item_sub_category`
--
ALTER TABLE `item_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `item_types`
--
ALTER TABLE `item_types`
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_sub_category`
--
ALTER TABLE `item_sub_category`
  ADD CONSTRAINT `item_sub_category_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `item_category` (`cat_id`);

--
-- Constraints for table `item_types`
--
ALTER TABLE `item_types`
  ADD CONSTRAINT `item_types_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `item_sub_category` (`sub_cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
