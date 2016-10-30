-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2016 at 04:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--
CREATE DATABASE IF NOT EXISTS `shoppingcart` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shoppingcart`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `total` bigint(13) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `products`, `total`, `status`) VALUES
(1, 1, '[{"item_id":"2","item_name":"Dress","item_cost":"567","item_quantity":"5"},{"item_id":"3","item_name":"Some fashion product","item_cost":"1200","item_quantity":"2"},{"item_id":"4","item_name":"once again a dress","item_cost":"18000","item_quantity":"3"},{"item_id":"7","item_name":"yolo dress","item_cost":"28950","item_quantity":"1"},{"item_id":"6","item_name":"yo thats a dress","item_cost":"29950","item_quantity":"5"},{"item_id":"5","item_name":"look at the price","item_cost":"56000","item_quantity":"2"}]', 349935, 'pending'),
(2, 1, '[{"item_id":"2","item_name":"Dress","item_cost":"567","item_quantity":"1"},{"item_id":"3","item_name":"Some fashion product","item_cost":"1200","item_quantity":"1"},{"item_id":"4","item_name":"once again a dress","item_cost":"18000","item_quantity":"1"}]', 19767, 'pending'),
(3, 1, '[{"item_id":"4","item_name":"once again a dress","item_cost":"18000","item_quantity":"1"}]', 18000, 'pending'),
(4, 1, 'null', 0, 'pending'),
(5, 1, '[{"item_id":"7","item_name":"yolo dress","item_cost":"28950","item_quantity":"5"}]', 144750, 'pending'),
(6, 1, '[{"item_id":"2","item_name":"Dress","item_cost":"567","item_quantity":"1"},{"item_id":"3","item_name":"Some fashion product","item_cost":"1200","item_quantity":"1"}]', 1767, 'pending'),
(7, 1, '[{"item_id":"2","item_name":"Dress","item_cost":"567","item_quantity":"2"},{"item_id":"5","item_name":"look at the price","item_cost":"56000","item_quantity":"5"}]', 281134, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `img`, `cost`, `quantity`) VALUES
(2, 'Dress', 'Beautiful Dress', 'products/product3.jpg', 567, 1),
(3, 'Some fashion product', 'Some fashion product i have no idea about', 'products/product5.jpg', 1200, 3),
(4, 'once again a dress', 'once again a dress i hv no clue about off', 'products/product4.jpg', 18000, 7),
(5, 'look at the price', 'once again a dress i hv no clue about off its costly so it must be really good', 'products/girl3.jpg', 56000, 3),
(6, 'yo thats a dress', 'once again a dress i hv no clue about off its costly so it must be really good', 'products/girl1.jpg', 29950, 5),
(7, 'yolo dress', 'once again a dress i hv no clue about off its costly so it must be really good', 'products/girl2.jpg', 28950, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
