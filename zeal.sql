-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 11:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email` varchar(256) DEFAULT NULL,
  `Product_Id` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `Product_Id`) VALUES
('nipun.shah@somaiya.edu', 'PK101');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Brand` varchar(256) NOT NULL,
  `Price` varchar(256) NOT NULL,
  `Color` varchar(256) NOT NULL,
  `Material` varchar(256) NOT NULL,
  `Product_Id` varchar(256) NOT NULL,
  `Size` varchar(256) NOT NULL,
  `Type` varchar(256) NOT NULL,
  `Url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Brand`, `Price`, `Color`, `Material`, `Product_Id`, `Size`, `Type`, `Url`) VALUES
('SASSAFRAS', '700', 'Pink', 'Cotton : 70%', 'PW101', '38', 'Women', 'img/women/f1.jpg'),
(' Inddus', '1200', 'Black', 'Cotton : 100%', 'PW102', '40', 'Women', 'img/women/f2.jpg'),
('DOROTHY PERKINS', '859', 'Black and Pink', 'Cotton : 99%', 'PW103', '42', 'Women', 'img/women/f3.jpg'),
(' SASSAFRAS', '699', 'Green and White', 'Cotton : 80%', 'PW104', '38', 'Women', 'img/women/f4.jpg'),
('Harpa', '1199', 'Maroon and White', 'Cotton : 75%', 'PW105', '32', 'Women', 'img/women/f5.jpg'),
('Tokyo Talkies', '3299', 'White', 'Cotton : 100%', 'PW106', '40', 'Women', 'img/women/f6.jpg'),
('United Colors of Benetton ', '879', 'White and Blue', 'Cotton  : 100%', 'PM101', '38', 'Men', 'img/men/m1.jpg'),
('Levi\'s', '1200', 'Sky Blue', 'Cotton : 50%', 'PM102', '40', 'Men', 'img/men/m2.jpg'),
(' U.S.Polo', '1399', 'Pink', 'Cotton : 100%', 'PM103', '38', 'Men', 'img/men/m3.jpg'),
('BURBERRY Alexander', '1049', 'Grey', 'Cotton : 79%', 'PM104', '40', 'Men', 'img/men/m4.jpg'),
('Peter England', '1200', 'Pink', 'Cotton : 80%', 'PM105', '38', 'Men', 'img/men/m5.jpg'),
('Van Heusen', '3299', 'Blue', 'Cotton : 79%', 'PM106', '40', 'Men', 'img/men/m6.jpg'),
(' Biba ', '1299', 'Peach-Coloured & Blue ', 'Cotton : 80%', 'PK101', '20', 'Kids', 'img/kids/k1.jpg'),
(' Biba ', '649', 'Off-White', 'Cotton : 79%', 'PK102', '23', 'Kids', 'img/kids/k2.jpg'),
('Natilene Girls', '537', 'Pink', 'Cotton  : 100%', 'PK103', '25', 'Kids', 'img/kids/k3.jpg'),
('Gini and Jony', '899', 'Blue Floral ', 'Cotton : 79%', 'PK104', '24', 'Kids', 'img/kids/k4.jpg'),
('Cherry Crumble Girls', '1136', 'Pink ', 'Cotton : 100%', 'PK105', '20', 'Kids', 'img/kids/k5.jpg'),
('Tommy Hilfiger', '1619', 'Grey ', 'Cotton : 89%', 'PK106', '24', 'Kids', 'img/kids/k6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `pwd`, `tel`, `address`) VALUES
('Jeet', 'jeet.gujarathi@somaiya.edu', '8275589499', '8275589499', 'K J Somaiya Polytechnic Hostel, Vidhyavihar ,Mumbai(East)'),
('Sakina', 'sakina.dasorwala@somaiya.edu', 'sakina@123', '8254754815', '28 B, ABC Colony,Mulund, Mumbai(East)'),
('Mihir', 'mihir.ss@somaiya.edu', 'mihir8955', '8956998789', 'Thane(West), Mumbai'),
('Ishan', 'ishan.guj@somaiya.edu', 'ishan2259', '9856458255', '54 B,XYZ Apartment, near petrolpump, Jalgaon'),
('Paresh Mundale', 'paresh.m@somaiya.edu', 'paresh1234', '8989996632', 'Plot no:456 ,Mahavir Colony, Nandurbar '),
('Nipun', 'nipun.shah@somaiya.edu', 'nipun12345', '9922421737', 'Kalyan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
