-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2019 at 03:26 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thaai`
--

-- --------------------------------------------------------

--
-- Table structure for table `almira`
--

DROP TABLE IF EXISTS `almira`;
CREATE TABLE IF NOT EXISTS `almira` (
  `email` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `colors` varchar(20) NOT NULL,
  `rack` varchar(20) NOT NULL,
  `locker` varchar(20) NOT NULL,
  `anchor` varchar(20) NOT NULL,
  `mirror` varchar(20) NOT NULL,
  `orderid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `almira`
--

INSERT INTO `almira` (`email`, `height`, `weight`, `colors`, `rack`, `locker`, `anchor`, `mirror`, `orderid`) VALUES
('ps@gmail.com', '12*34', 'heavy', 'Blue', '5 Racks', 'double', 'yes', 'yes', 99851908);

-- --------------------------------------------------------

--
-- Table structure for table `chair`
--

DROP TABLE IF EXISTS `chair`;
CREATE TABLE IF NOT EXISTS `chair` (
  `orderid` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `colors` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chair`
--

INSERT INTO `chair` (`orderid`, `email`, `categories`, `weight`, `colors`) VALUES
(99851908, 'ps@gmail.com', 'normal', 'heavy', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `cot`
--

DROP TABLE IF EXISTS `cot`;
CREATE TABLE IF NOT EXISTS `cot` (
  `email` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `colors` varchar(20) NOT NULL,
  `arch` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `orderid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cot`
--

INSERT INTO `cot` (`email`, `height`, `weight`, `colors`, `arch`, `model`, `orderid`) VALUES
('ps@gmail.com', '12*34', 'heavy', 'Green', 'Normal', 'single', 99851908);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE IF NOT EXISTS `orderdetail` (
  -- `orderid` bigint(20) NOT NULL,
  -- `name` varchar(100) NOT NULL,
  -- `quantity` int(11) NOT NULL,
  -- `total` bigint(20) NOT NULL
   `orderid` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderid`, `name`, `quantity`, `total`) VALUES
(1438543498, 'monitor', 1, 3000),
(915871877, 'monitor', 1, 7000),
(915871877, 'SDRAM', 1, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderid` bigint(20) NOT NULL,
  `orderdetail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categories` varchar(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `code` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(1000) NOT NULL,
  `guarantee` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories`, `name`, `code`, `quantity`, `size`, `price`, `description`, `guarantee`, `image`) VALUES
(12, 'Monitor', 'monitor', 'P68', 78, '21.5 Inch Full HD IPS LED Monitor+FRC technology', 3000, 'dknfkndsfkdsf\r\ndslfmlsmdfmls;dmfl;m;sm ', '1year', 'uploads/laptop.jpg'),
(13, 'Ram', 'SDRAM', 'P89', 98, '1600 MHz RAM', 4000, 'dskfhkjdshfohsd ooh iohdiohsdhfiohoihiohfoihofihsd\r\ndk jklf', '2year', 'uploads/iphone.jpg'),
(14, 'MotherBoard', 'ASUS Prime H370-Plus', 'P61', 10, 'DDR4 HDMI DVI VGA M.2 ATX ', 10920, 'sdjfklsdjfkhfsdfnd', '15 months', 'uploads/laptop-bag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `address`, `mobile`, `email`, `pwd`) VALUES
('saran', 'pr', 'fsdfsd', '9940779272', 'ps@gmail.com', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `orderid` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`orderid`, `email`, `name`, `address`, `mobile`, `date`) VALUES
(1438543498, 'ps@gmail.com', 'saran', 'fsdfsd', '9940779272', '2020-03-31'),
(915871877, 'ps@gmail.com', 'saran', 'fsdfsd', '9940779272', '2020-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `orderid` bigint(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `email` varchar(20) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `colors` varchar(20) NOT NULL,
  `orderid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
