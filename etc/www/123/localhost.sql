-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2012 at 07:10 AM
-- Server version: 5.5.22
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE `ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL DEFAULT 'not null',
  `password` varchar(25) NOT NULL DEFAULT 'not null',
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `detail` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `age`, `address`, `phone`, `email`, `detail`) VALUES
(1, 'shiv', 'sah', 'shiv', 'sah', 'Male', 21, 'siraha', 12, 'sah@!yahoo.com', 'senior ');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `details`) VALUES
(10, 'Gibson', 'vtgjh'),
(11, 'SHURE', 'huiyh');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `ctid` varchar(255) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `productname`, `image`, `quantity`, `price`, `ctid`) VALUES
(67, 31, 'guitar', '1344920423.jpeg', 1, 1500, 'puu0mb9u99l71a2v4c06r19ho6'),
(72, 31, 'guitar', '1344920423.jpeg', 1, 1500, 'e8dnrmso7sbs0ado0ar4eivl74'),
(75, 31, 'guitar', '1344920423.jpeg', 1, 1500, 'nlunsjm5gq88jdrdgssfra7pd3');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT 'not null',
  `details` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `details`, `status`) VALUES
(7, 'RECORDING EQUIPMENT', 'sdfds', 'Published'),
(8, 'FDFGS', 'UTYUT', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL DEFAULT 'not null',
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `password`, `FirstName`, `LastName`, `Country`, `City`, `Email`, `phone`) VALUES
(5, 'nepal', 'shiv', 'sah', 'nepal', 'ktm', 'sah@yahoo.com', '123456'),
(6, 'nepal', 'shiv', 'sah', 'nepal', 'nepal', 'sah@yahoo.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `odid` int(10) NOT NULL AUTO_INCREMENT,
  `sfname` varchar(255) NOT NULL,
  `slname` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `sphone` varchar(255) NOT NULL,
  `scity` varchar(255) NOT NULL,
  `scode` varchar(255) NOT NULL,
  `pfname` varchar(255) NOT NULL,
  `plname` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `pphone` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  PRIMARY KEY (`odid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`odid`, `sfname`, `slname`, `saddress`, `sphone`, `scity`, `scode`, `pfname`, `plname`, `paddress`, `pphone`, `pcity`, `pcode`) VALUES
(1, 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '+977', 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '+977'),
(2, 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '+977', 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '+977'),
(5, 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '', 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '+977'),
(6, 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '', 'Shiv', 'Sah', 'Siraha', '123456', 'Sarswor', '+977'),
(12, 'Shiv', 'Sah', 'Kathmandu', '9999999', 'Ktm', '+977', 'Shiv', 'Sah', 'Kathmandu', '9999999', 'Ktm', '+977'),
(13, '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'shiv', 'sah', 'kathmandu', '9999999', 'ktm', '977', 'shiv', 'sah', 'kathmandu', '9999999', 'ktm', '977');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL,
  `orderdate` date DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `orderdate`, `pid`, `price`, `quantity`, `status`) VALUES
(6, '2012-08-15', 32, 1500, 1, 'delivered'),
(7, '2012-08-15', 31, 1500, 1, 'delivered'),
(12, '2012-08-17', 32, 1500, 1, 'pending'),
(13, '2012-08-17', 31, 1500, 1, 'pending'),
(14, '2012-08-17', 31, 1500, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PaymentType` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `detail` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `feature` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `detail`, `category`, `brand`, `price`, `status`, `feature`, `image`) VALUES
(31, 'guitar', 'sdfds', 'RECORDING EQUIPMENT', 'SHURE', 1500, 'Active', 'Yes', '1344920423.jpeg'),
(32, 'guitar', 'dsfszd', 'RECORDING EQUIPMENT', 'SHURE', 1500, 'Active', 'Yes', '1345007432.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
