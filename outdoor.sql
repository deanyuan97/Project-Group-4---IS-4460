-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 26, 2018 at 05:39 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outdoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` bigint(20) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `event_type` varchar(20) DEFAULT NULL,
  `product line` varchar(20) DEFAULT NULL,
  `attendance` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `IMG` varchar(255) NOT NULL,
  `user` bigint(20) NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `price`, `IMG`, `user`, `sold`) VALUES
(1, 'Hydro Flask', 'Large Water Bottle', '$20.00', '../images/HydroFlask.jpg', 4, 0),
(2, 'Back Pack', 'Hiking Back Pack', '$50.00', '../images/Backpack.jpg', 4, 0),
(3, 'Hiking Shoes', 'Sturdy Shoes for Hiking', '$60.00', '../images/HikingShoes.jpg', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` bigint(20) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `occupancy` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) NOT NULL,
  `quantity` int(5) DEFAULT NULL,
  `total` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` bigint(20) NOT NULL,
  `item` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `billingaddress` varchar(255) DEFAULT NULL,
  `creditcard` varchar(20) DEFAULT NULL,
  `expirationdate` varchar(11) DEFAULT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`, `phone`, `billingaddress`, `creditcard`, `expirationdate`, `type`) VALUES
(1, 'Cameron', 'Clegg', 'cclegg10', '$2y$10$1MbpLND.LF3fWlOSw9snAOX.fa92o26DQS9Rf8O6od/KcbYgwCZky', '8012440189', '2190 ', 'adfa', 'adfadf', 'buyer'),
(3, 'Ben', 'Kulbertis', 'benkulbertis', '$2y$10$Tvj5mrwBQ0Rik1Jc5/gykuY1GMgDcrQ1wuH88gdaeLJfBMDW9c2bO', '1234567890', '123 Main St', '123123123', '22/22', 'buyer'),
(4, 'Ben', 'Kulbertis', 'isellstuff', '$2y$10$1MbpLND.LF3fWlOSw9snAOX.fa92o26DQS9Rf8O6od/KcbYgwCZky', '123123', '123 maple st', '1231232', '11/22', 'seller'),
(5, 'Anthony', 'Gonzalez', 'agonzalez', '$2y$10$5pXoIm8YJkqg1F8oGnvEbu25Q/s0MXf739SS9jNHil5..ytzjtfSS', '801555555', '1010 s 3030 ', '12345678910', '10/10', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_owner` (`user`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user`),
  ADD KEY `fk_item` (`item`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_owner` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `fk_item` FOREIGN KEY (`item`) REFERENCES `item` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
