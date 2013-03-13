-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2012 at 05:29 AM
-- Server version: 5.5.22
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

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
(1, 'anjana', 'rijal', 'anjana', 'rijal', 'Female', 21, 'bhaktapur', 0, 'rijalanjana@gmail.com', 'sdhjsfhj');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `details`, `status`) VALUES
(11, 'Samsung', 'jfdh', 'Published'),
(12, 'titan', 'djfvhd', 'Published'),
(13, 'Dell', 'djfkhsd', 'Published'),
(14, 'Sony', 'fdgfd', 'Published'),
(15, 'Apple', 'dfsd', 'Published'),
(16, 'Canon', 'shfdsgf', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `ctid` varchar(255) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `productname`, `price`, `quantity`, `ctid`) VALUES
(41, 41, 'Titan-Raga-Flora', 3550, 1, 'ci5kqfurbhknu9i49fa28adng7'),
(42, 40, 'Titan-Octane', 3565, 1, 'e6t520gr5bs3f7lc5g85qjmdi6'),
(43, 41, 'Titan-Raga-Flora', 3550, 1, 'darcuch0mi43l065kam3e5afe2'),
(44, 38, 'MAC BOOK AIR', 120000, 1, 'darcuch0mi43l065kam3e5afe2');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(25) NOT NULL AUTO_INCREMENT,
  `cname` varchar(25) DEFAULT 'not null',
  `details` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `details`, `status`) VALUES
(8, 'Laptop', 'sdhjsg', 'Published'),
(9, 'watches', 'dsghf', 'Published'),
(10, 'Camera', 'dfdg', 'Published'),
(11, 'mobile', 'hsdgash', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `sfname` varchar(255) NOT NULL,
  `slname` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `scity` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pfname` varchar(255) NOT NULL,
  `plname` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `pphone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `password`, `sfname`, `slname`, `saddress`, `scity`, `Email`, `phone`, `pfname`, `plname`, `paddress`, `pcity`, `pphone`) VALUES
(2, 'rijal', 'anjana', 'rijal', 'bhaktapur', 'sallaghari', 'rijalanjana@gmail.com', '6614015', 'anjana', 'rijal', 'bhaktapur', 'sallaghari', '6614015'),
(3, 'rijal', 'ashjfa', 'shdfja', 'hdsfjh', 'hsdjh', 'anjanarijal56@yahoo.com', 'shfdja', 'ashjfa', 'shdfja', 'hdsfjh', 'hsdjh', 'shfdja');

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
  `pfname` varchar(255) NOT NULL,
  `plname` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `pphone` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  PRIMARY KEY (`odid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`odid`, `sfname`, `slname`, `saddress`, `sphone`, `scity`, `pfname`, `plname`, `paddress`, `pphone`, `pcity`) VALUES
(65, 'Anjana', 'Rijal', 'Bhaktapur', '', '6614015', 'Anjana', 'Rijal', 'Bhaktapur', '6614015', 'Sallaghari'),
(66, 'Anjana', 'Rijal', 'Bhaktapur', '', '6614015', 'Anjana', 'Rijal', 'Bhaktapur', '6614015', 'Sallaghari');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `pid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `orderdate`, `pid`, `productname`, `price`, `quantity`, `status`) VALUES
(65, '2012-08-20', 41, 'Titan-Raga-Flora', 3550, 1, 'Pending'),
(65, '2012-08-20', 38, 'MAC BOOK AIR', 120000, 1, 'Pending'),
(66, '2012-08-20', 39, 'SX100 IS', 56000, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(25) NOT NULL,
  `detail` varchar(25) NOT NULL,
  `category` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `feature` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `Fk_brand` (`brand`),
  KEY `Fk_category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `detail`, `category`, `brand`, `price`, `status`, `feature`, `image`) VALUES
(37, 'samsung-Galaxy S III', 'dfdg', 11, 11, 65000, 'Active', 'Yes', '1345176932.jpg'),
(38, 'MAC BOOK AIR', 'dfdg', 8, 15, 120000, 'Active', 'Yes', '1345176495.jpg'),
(39, 'SX100 IS', 'fdsfds', 10, 16, 56000, 'Active', 'Yes', '1345176818.jpg'),
(40, 'Titan-Octane', 'dsfsd', 9, 12, 3565, 'Active', 'Yes', '1345177597.jpg'),
(41, 'Titan-Raga-Flora', 'gtryrt', 9, 12, 3550, 'Active', 'Yes', '1345177689.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Fk_brand` FOREIGN KEY (`brand`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_category` FOREIGN KEY (`category`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
