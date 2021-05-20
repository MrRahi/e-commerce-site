-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 03:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce site`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ProductName`, `description`, `price`, `name`, `image`) VALUES
(7, 'Bike', 'The Yamaha YZF R15 V3 is powered by a 155 cc air-cooled engine which produces of power.', 50000, '178232898_778540189522174_4147110678187756582_n.jpg', ''),
(8, 'Lamborghini Sesto Elemento', 'The Sesto Elemento is equipped with a 6-speed semi-automatic transmission and a 5.2-litre V10 engine', 200000000, 'Screenshot (496).png', ''),
(9, 'ASUS Laptop', 'ASUS ProArt StudioBook Pro 15 Mobile Workstation Laptop, 15.6” UHD NanoEdge Bezel, Intel Core i7-975', 240000, '81yJcGQ3nNL._AC_SX679_.jpg', ''),
(10, 'Huawei Phone', 'Huawei P40 Pro 5G ELS-NX9 256GB 8GB RAM International Version - Silver Frost', 50000, '61u6jqTncaL._AC_UL160_.jpg', ''),
(11, 'iPhone 12 Pro Max', 'Big, beautiful screen Best camera of the bunch Excellent battery life   No 90/120Hz screen No charge', 80000, 'iphone12promax-2-768x576.jpg', ''),
(12, 'Where the Crawdads Sing by Delia Owens, Book', 'Condition - New', 500, '0735219109.jpg', ''),
(13, 'Turkish Coffee', 'A must and trademark in every corner of the Ottoman empire. The preparation up to the serving of Tur', 1500, '41iidHtQiBL._SL250_.jpg', ''),
(14, 'Sony, Camera', 'It is really good. ', 50000, 'Sony-A7R-III(3).jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
