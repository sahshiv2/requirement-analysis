-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2012 at 05:07 AM
-- Server version: 5.5.22
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce1`
--
CREATE DATABASE `ecommerce1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce1`;

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
(1, 'anjana', 'rijal', 'anjana', 'rijal', 'Male', 21, 'bhaktapur', 0, 'rijalanjana@gmail.com', 'sdhjsfhj');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `details`, `status`) VALUES
(10, 'puma', 'sdhsdfg', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `ctid` varchar(255) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `quantity`, `ctid`) VALUES
(86, 28, 1, 'aa468ei31mt37i99blcljrt2v1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `details`, `status`) VALUES
(7, 'shoes', 'hsjdha', 'Published');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `password`, `FirstName`, `LastName`, `Country`, `City`, `Email`, `phone`) VALUES
(3, 'anjana', 'anjana', 'rijal', 'nepal', 'bhaktapur', 'rijalanjana@gmail.com', '75843656574');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `odid` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`odid`, `date`, `sfname`, `slname`, `saddress`, `sphone`, `scity`, `scode`, `pfname`, `plname`, `paddress`, `pphone`, `pcity`, `pcode`) VALUES
(20, '2012-08-14', 'Anjana', 'Rijal', 'Bhaktapur', '6614015', 'Sallaghari', '+977', 'Anjana', 'Rijal', 'Bhaktapur', '6614015', 'Sallaghari', '+977');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending',
  `paymethod` varchar(255) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `quantity`, `status`, `paymethod`) VALUES
(20, 28, 4, 'shipping', 'cod');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `detail`, `category`, `brand`, `price`, `status`, `feature`, `image`) VALUES
(28, 'test', 'test', 7, 10, 5435, 'Active', 'Yes', '1344834743.jpg'),
(31, 'gh', 'hfjqgf', 7, 10, 434, 'Active', 'Yes', '1344917058.JPG'),
(33, 'yuf', 'hdfjqh', 7, 10, 1234, 'Active', 'Yes', '1344917811.jpg'),
(36, 'fsdhsf', 'hfjqgghj', 7, 10, 214, 'Active', 'Yes', '1344918588.jpg');

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
