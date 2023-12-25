-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 06:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`) VALUES
(1, 'Road Bikes'),
(2, 'Mountain Bikes'),
(3, 'Cycling Helmets'),
(4, 'Cycling Gloves'),
(5, 'Cycling Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pr` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `email`, `pr`, `gender`) VALUES
(1, 'mahmoud', '123a', 'ahmed@gmail.com', 1, 1),
(2, 'ali_kamel', '111', 'ali1@gmail.com', 2, 1),
(3, 'fatma mohamed', '5555', 'fatma5@gmail.com', 2, 2),
(4, 'adel', 'aa11', 'adel11@gmail.com', 3, 1),
(5, 'noha', 'noha11', 'nn@gmail.com', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `pr`
--

CREATE TABLE `pr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pr`
--

INSERT INTO `pr` (`id`, `name`) VALUES
(1, 'owner'),
(2, 'admin'),
(3, 'super');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `dsc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `count`, `img`, `price`, `category`, `dsc`) VALUES
(1, 'Kryo X26 MTB – Model K', 15, '1703520975704bicycle-7-800x800.jpg', 1600, 1, ''),
(2, 'Kryo X26 MTB – Model X', 15, 'bicycle-1-800x800.jpg', 1600, 2, ''),
(3, 'Kryo X26 MTB – Model Y', 15, 'bicycle-5-800x800.jpg', 1600, 1, ''),
(5, 'Kryo X26 MTB – Model Z', 15, '1703096963864bicycle-4-800x800.jpg', 1600, 1, ' '),
(6, 'Trinx M136 Pro Bicycle', 10, '1703416099403mauntain10.jpg', 2000, 2, ''),
(7, 'Hador OX 21 Mountain Bike', 20, '17034174204433fe43e50eee70553bce5eb00be9d7a28.jpg', 2200, 2, ''),
(8, 'Rambler Bike', 25, '1703417528424495f78ecf07a2fc9f0dc126312e81b32.jpg', 1800, 1, ''),
(9, 'Hongui aero cycling helmet ', 50, '1703417774193h3.jpg', 150, 3, ''),
(10, 'Road sports cycling helmet', 50, '1703417850951h1.jpg', 200, 3, ''),
(11, 'Youyi Sports Cycling Helmet', 80, '1703417954245h7.jpg', 220, 3, ''),
(12, 'Long-Sleeved Cycling Base Layer Racer - Cosmos Black & Orange', 120, '1703418309210c4.jpg', 60, 5, ''),
(13, 'Short-Sleeved Road Cycling', 50, '1703418586458c6.jpg', 35, 5, ''),
(15, 'Road Cycling Gloves 900', 15, '1703418985263144a7b6d7c67079887d1bc11aa4ea851.jpg', 20, 4, ''),
(16, '500 Cycling Gloves for Spring/Autumn - Black', 50, '17034190803485b7e1246352fe82a6a144b528b3b6c26.jpg', 17, 4, ''),
(17, 'Mountain Biking Gloves Windblock 2.0', 60, '17034192202709bf9f3cb83a714b97ca05ceb80252bb9.jpg', 20, 4, ''),
(18, 'Long-Sleeved Cycling Base Layer Racer - Cosmos Black & Yellow', 50, '1703521643846170341871728c5.jpg', 300, 5, ''),
(19, 'Mountain bike Rockrider ST 500', 15, '17035217411752597732f2146da2c43bab71517f643cf.jpg', 1600, 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender` (`gender`),
  ADD KEY `pr` (`pr`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pr`
--
ALTER TABLE `pr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pr`
--
ALTER TABLE `pr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`pr`) REFERENCES `pr` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `cat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
