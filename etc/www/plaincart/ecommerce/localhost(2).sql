-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2012 at 06:42 AM
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
(1, 'anjana', 'rijal', 'anjana', 'rijal', 'Male', 21, 'bhaktapur', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `details`, `status`) VALUES
(3, 'adidas', 'avinandan', 'Published'),
(4, 'puma', 'jdhfgwe', 'Published'),
(6, 'nike', 'asdjhsdfjsd', 'Published'),
(7, 'sdas', '', 'Published'),
(8, 'sdsfds', 'sdsd', 'Published'),
(9, 'sdsd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `unitprice` int(11) NOT NULL,
  `ctid` varchar(255) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `productname`, `image`, `brand`, `quantity`, `unitprice`, `ctid`) VALUES
(41, 16, 'hdff', '1344250727.jpg', 'jdhfjfglsdgf', 1, 47567, '3goncks0sfn0i0mkm1p07gskk7');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `details`, `status`) VALUES
(1, 'sports', 'trendy and comfortable sports shoes available here', 'Published'),
(5, 'KID', 'kids product here', 'Published');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `password`, `FirstName`, `LastName`, `Country`, `City`, `Email`, `phone`) VALUES
(3, 'anjana', 'anjana', 'rijal', 'nepal', 'bhaktapur', 'rijalanjana@gmail.com', '75843656574'),
(4, 'riz', 'sad', 'dfhsjhf', 'fjdh', 'sdjfh', 'dnfjdh', 'fncjdh');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `fk_orderID` (`orderID`),
  KEY `fk_productID` (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `Customerid` int(11) NOT NULL,
  `PaymentID` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `fk_Customerid` (`Customerid`),
  KEY `fk_Paymentid` (`PaymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `category` int(11) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `feature` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `detail`, `category`, `brand`, `price`, `status`, `feature`, `image`) VALUES
(7, 'test', 'test', 1, 'adidas', 47346732, 'Active', 'Yes', '1344250424.jpg'),
(8, 'sdfas', 'erw', 5, 'jdhfjfglsdgf', 2343, '', '', '1344250441.'),
(9, '', '', 5, 'jdhfjfglsdgf', 2323432, 'Active', 'Yes', '1344250462.JPG'),
(10, 'dfnf', 'efjfb', 5, 'jdhfjfglsdgf', 46574657, 'Active', 'Yes', '1344250492.jpg'),
(11, 'hdsjd', 'hjew', 5, 'jdhfjfglsdgf', 647356, 'Active', 'Yes', '1344250513.jpg'),
(12, 'ahas', 'HASDGh', 5, 'jdhfjfglsdgf', 314, 'Active', 'Yes', '1344250593.jpg'),
(13, 'shjsdh', 'uedwedyu', 5, 'jdhfjfglsdgf', 3254235, 'Active', 'Yes', '1344250613.jpg'),
(14, 'sassd', 'fdsf', 5, 'jdhfjfglsdgf', 54563, 'Active', 'Yes', '1344250643.jpg'),
(15, 'hdgdf', 'dshf', 5, 'jdhfjfglsdgf', 645756, 'Active', 'Yes', '1344250706.jpg'),
(16, 'hdff', 'dhfghdfg', 5, 'jdhfjfglsdgf', 47567, 'Active', 'Yes', '1344250727.jpg'),
(17, 'hdgashdfg', 'hfgdshf', 5, 'jdhfjfglsdgf', 3245, 'Active', 'Yes', '1344250804.jpg'),
(18, 'ahgdafh', 'dgfha', 5, 'jdhfjfglsdgf', 573456725, 'Active', 'Yes', '1344250849.jpg'),
(19, 'hfjdsg', 'SHDGFA', 5, 'jdhfjfglsdgf', 45767456, 'Active', 'Yes', '1344250890.jpg'),
(20, 'HDFSF', 'DFHAGF', 5, 'jdhfjfglsdgf', 278, 'Active', 'Yes', '1344250915.jpg'),
(21, 'FHJ', 'FHJDS', 5, 'jdhfjfglsdgf', 43726, 'Active', 'Yes', '1344250935.jpg'),
(22, 'test', 'test', 1, 'nike', 5345, 'Active', 'No', '1344405377.jpg'),
(24, 'testing', 'testing', 5, 'sdsd', 343, 'Active', 'Yes', '1344407616.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_orderID` FOREIGN KEY (`orderID`) REFERENCES `orders` (`oid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productID` FOREIGN KEY (`productID`) REFERENCES `products` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_Customerid` FOREIGN KEY (`Customerid`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `fk_Paymentid` FOREIGN KEY (`PaymentID`) REFERENCES `payment` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
