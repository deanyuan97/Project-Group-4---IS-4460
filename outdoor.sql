-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 19, 2018 at 10:25 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

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
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyerid` int(11) NOT NULL,
  `firstname` varchar(11) DEFAULT NULL,
  `lastname` varchar(11) DEFAULT NULL,
  `buyerusername` varchar(11) NOT NULL,
  `buyerpassword` varchar(11) DEFAULT NULL,
  `cbuyerpassword` varchar(11) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `billingaddress` varchar(50) DEFAULT NULL,
  `creditcard` varchar(20) DEFAULT NULL,
  `expirationdate` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyerid`, `firstname`, `lastname`, `buyerusername`, `buyerpassword`, `cbuyerpassword`, `phone`, `billingaddress`, `creditcard`, `expirationdate`) VALUES
(1, 'Cameron', 'Clegg', 'cclegg10', 'test', 'test', '8012440189', '2190 ', 'adfa', 'adfadf');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(255) AUTO_INCREMENT NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `IMG` varchar(255 ) NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=utf8;


INSERT INTO `item` (`itemid`, `name`, `description`, `price`, `IMG`) VALUES
(1, 'Hydro Flask', 'Large Water Bottle', '$20.00', 'HydroFlask.jpg');

INSERT INTO `item` (`itemid`, `name`, `description`, `price`, `IMG`) VALUES
(2, 'Back Pack', 'Hiking Back Pack', '$50.00', 'Backpack.jpg');

INSERT INTO `item` (`itemid`, `name`, `description`, `price`, `IMG`) VALUES
(3, 'Hiking Shoes', 'Sturdy Shoes for Hiking', '$60.00', 'HikingShoes.jpg');
-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerid` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `sellerpassword` varchar(20) DEFAULT NULL,
  `sellerusername` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyerid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerid` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
