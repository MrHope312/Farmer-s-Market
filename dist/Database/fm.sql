-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 08:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pname` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(100) NOT NULL,
  `pid` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pname`, `quantity`, `price`, `pid`, `uid`) VALUES
('Tomato', 1, 10, 1, 1),
('Carrot', 1, 15, 2, 1),
('Tomato', 2, 10, 1, 1),
('Carrot', 2, 15, 2, 1),
('Tomato', 5, 10, 1, 1),
('Carrot', 2, 15, 2, 1),
('Carrot', 3, 15, 2, 1),
('Carrot', 2, 15, 2, 1),
('Carrot', 1, 15, 2, 1),
('Carrot', 2, 15, 2, 1),
('radish', 2, 10, 3, 1),
('Carrot', 1, 15, 2, 2),
('Carrot', 3, 15, 2, 1),
('Carrot', 1, 15, 2, 1),
('Carrot', 1, 15, 2, 2),
('Carrot', 1, 15, 2, 2),
(' sapota', 1, 60, 19, 1),
(' sapota', 1, 60, 19, 1),
(' sapota', 1, 60, 19, 1),
('papaya', 1, 40, 16, 1),
('Carrot', 1, 15, 2, 1),
('radish', 1, 10, 3, 1),
('starfruit ', 1, 80, 20, 2),
('starfruit ', 1, 80, 20, 2),
('avocodo', 1, 60, 4, 2),
('raisinskishmish-indian ', 1, 50, 35, 2),
('-broken-rice ', 1, 50, 32, 2),
('sona-masoori ', 1, 50, 41, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `cname`) VALUES
(1, 'vegetables'),
(2, 'fruits'),
(3, 'groceries');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `catid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `image`, `price`, `catid`) VALUES
(1, 'Tomato', 'tomato.jpg', 10, 2),
(2, 'Carrot', 'carrot.jpg', 15, 1),
(3, 'radish', 'radish.jpg', 10, 1),
(4, 'avocodo', '10000013_23-fresho-avocado.jpg', 60, 2),
(6, 'cherry', '10000198_9-fresho-tomato-cherry.jpg', 50, 2),
(9, 'apple', 'apple-washington-regular.jpg', 40, 2),
(10, 'banana ', 'banana-robusta.jpg', 30, 2),
(11, 'grapes ', 'g.jpg', 30, 2),
(12, 'grapes_blue; ', 'gb.jpg', 30, 2),
(13, 'kiwi', 'kiwi-green.jpg', 100, 2),
(14, 'muskmelon ', 'muskmelon-striped.jpg', 60, 2),
(15, 'orange ', 'orange.jpg', 30, 2),
(16, 'papaya', 'papaya-semi-ripe.jpg', 40, 2),
(17, 'passion_fruit ', 'passion-fruit.jpg', 50, 2),
(18, ' pomegranet', 'pomegranate.jpg', 50, 2),
(19, ' sapota', 'sapota.jpg', 60, 2),
(20, 'starfruit ', 'starfruit.jpg', 80, 2),
(29, 'watermelon-small ', 'watermelon-small.jpg', 70, 2),
(30, ' almondbadam', 'almondbadam.jpg', 100, 3),
(31, 'black_seed ', 'black-seedless.jpg', 50, 3),
(32, '-broken-rice ', ' -broken-rice.jpg', 50, 3),
(33, ' cashew', 'cashewkaju-whole-medium-w240.jpg', 80, 3),
(34, 'dry-apricotskhumani ', 'dry-apricotskhumani.jpg', 60, 3),
(35, 'raisinskishmish-indian ', '-raisinskishmish-indian.jpg', 50, 3),
(36, 'organic-sugar ', ' organic-sugar.jpg', 50, 3),
(37, 'black-seedless ', ' black-seedless.jpg', 50, 3),
(38, 'aloe_vera ', ' aloe-vera-organically-grown.jpg', 50, 1),
(39, ' pista', 'pista-irani-roasted-salted.jpg', 45, 3),
(40, '-poha ', ' -poha.jpg', 50, 3),
(41, 'sona-masoori ', ' sona-masoori-semi-brown-rice-handpounded.jpg', 50, 3),
(42, '-zucchini-green ', '-zucchini-green.jpg', 50, 1),
(43, 'sweet-potato-organically-grown ', ' Sweet-potato-organically-grown.jpg', 50, 1),
(44, 'potato-onion-tomato-1-kg-each ', 'potato-onion-tomato-1-kg-each.jpg', 50, 1),
(45, '-potato', '-potato.jpg', 50, 1),
(48, 'lettuce-iceberg ', ' lettuce-iceberg.jpg', 60, 1),
(49, '-lettuce-green', ' -lettuce-green.jpg', 30, 1),
(50, ' groundnut-fresh', ' groundnut-fresh.jpg', 50, 1),
(51, 'green-organically-grown ', ' green-organically-grown.jpg', 80, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zcode` int(6) NOT NULL,
  `pnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `email`, `password`, `sname`, `city`, `zcode`, `pnum`) VALUES
(1, 'shreyas', 'shreyas', 'shreyas', 'basavanapura main road', 'bangalore', 560036, 996414746),
(2, 'rachana', 'rachana', 'rachana', '13th cross', 'bangalore', 560036, 944),
(3, 'vijay', 'vijay', 'vijay', 'c v ramannagar', 'Bangalore', 560036, 996414747);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
