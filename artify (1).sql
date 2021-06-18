-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 05:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artify`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `cus_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(200) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` int(255) NOT NULL,
  `expmonth` int(255) NOT NULL,
  `expyear` int(255) NOT NULL,
  `cvv` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`cus_id`, `firstname`, `email`, `address`, `city`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'shweta', 'shweta@gmail.com', 'koregaon park', 'pune', '', 0, 0, 0, 0),
(2, 'shweta', 'shweta@gmail.com', 'koregaon park', 'pune', '', 0, 0, 0, 0),
(3, 'sonam', 'sonam@gmail.com', 'jalgaon', 'pune', 'sonam mahajan', 2147483647, 6, 2304, 568),
(4, '', '', '', '', '', 0, 0, 0, 0),
(6, '', '', '', '', '', 0, 0, 0, 0),
(7, '', '', '', '', '', 0, 0, 0, 0),
(8, '', '', '', '', '', 0, 0, 0, 0),
(9, '', '', '', '', '', 0, 0, 0, 0),
(11, '', '', '', '', '', 0, 0, 0, 0),
(12, 'monu', 'monu@yahoo.com', 'mumbai', 'thane', 'monu chakli', 2147483647, 2, 2020, 888);

-- --------------------------------------------------------

--
-- Table structure for table `bill1`
--

CREATE TABLE `bill1` (
  `cus_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `pincode` int(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` int(255) NOT NULL,
  `expmonth` int(255) NOT NULL,
  `expyear` int(255) NOT NULL,
  `cvv` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `comment`) VALUES
(84, 'Sonam', 'mahajan', 'smahajan1782000@gmail.com', 'hello'),
(85, 'Shweta', 'Gholap', 'shweta@gmail.com', 'welcome'),
(86, 'digza', 'gandhi', 'digza@gmail.com', 'gm..!'),
(87, 'yash', 'kale', 'yashnkale@gmail.com', 'stay home!'),
(88, 'adc', 'xyz', 'abc@gmail.com', 'heyyya:)'),
(89, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` int(255) NOT NULL,
  `expmonth` int(255) NOT NULL,
  `expyear` int(200) NOT NULL,
  `cvv` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Fashion Girl', 201, 6700, 'images/fas1.jpg'),
(2, 'Rocking Girl', 202, 7800, 'images/fas2.jpg'),
(3, 'wowen', 203, 3400, 'images/fas3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(255) UNSIGNED NOT NULL,
  `price` double(10,2) UNSIGNED NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Dance of Passion', 101, 5000.00, 'images/lady1.jpg'),
(2, 'lady2', 102, 12000.00, 'images/lady2.png'),
(3, 'lady3', 103, 15000.00, 'images/lady3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Sonu', 'shweta@gmail.com', '040b7cf4a55014e185813e0644502ea9'),
(2, 'shweta', 'smahajan1782000@gmail.com', 'eb89f40da6a539dd1b1776e522459763'),
(3, 'digza', 'digza@gmail.com', '6ca29d9bb530402bd09fe026ee838148'),
(4, 'abc', 'monu@yahoo.com', '12793ea96d6f3660c3b06f4de4497768'),
(5, 'xyz', 'xyz@gmail.com', '040b7cf4a55014e185813e0644502ea9'),
(6, 'ghj', 'ghi123@gmail.com', 'dabaf1787915353fd73261cad5a5bb4e'),
(7, 'asd', 'asd12@gmail.com', '37fc6aa364ab471f3d7db2f4a63b1245'),
(8, 'opo', 'opo15@gmail.com', '9322b4fe1dcceae3a95b9f289514545b'),
(9, 'ttt', 'ttt@gmail.com', '11438cc8f84408798bb9dedc480e7b0c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `bill1`
--
ALTER TABLE `bill1`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `cus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bill1`
--
ALTER TABLE `bill1`
  MODIFY `cus_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
