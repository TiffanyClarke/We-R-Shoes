-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2019 at 04:23 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prod_image` varchar(200) NOT NULL,
  `prod_code` varchar(50) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `prod_image`, `prod_code`, `prod_name`, `prod_price`) VALUES
(1, './img/men/men-sneaker.jpg', 'mens', 'Gym Sneakers', '75.00'),
(2, './img/women/gold.jpg', 'womens', 'Gold Party Shoes', '120.00'),
(3, './img/blue-small.png', 'unisex', 'Simple Sneakers', '50.00'),
(4, './img/men/skate-small.jpg', 'mens', 'Skate Sneakers', '120.00'),
(5, './img/men/mens-boots.png', 'mens', 'Boots', '95.00'),
(6, './img/men/mens-shoe.jpg', 'mens', 'Dress Boots', '100.00'),
(7, './img/men/mens-brown.jpg', 'mens', 'Single Color Shoes', '150.00'),
(8, './img/men/mens-small.jpg', 'mens', 'Duo Color Dress Shoes', '195.00'),
(9, './img/women/pink-shoes.png', 'womens', 'High Heel Dress Shoes', '60.00'),
(10, './img/women/booties.jpg', 'womens', 'High Heel Boots', '75.00'),
(11, './img/women/punk-small.jpg', 'womens', 'Flat Boots', '60.00'),
(12, './img/women/boots-small.jpg', 'womens', 'Winter Boots', '100.00'),
(13, './img/women/sneakers.jpg', 'womens', 'Gym Sneakers', '75.00'),
(14, './img/converse-small.jpg', 'unisex', 'Converse', '60.00'),
(15, './img/DC-small.jpg', 'unisex', 'Specialty Converse', '80.00'),
(16, './img/glow-small.jpg', 'unisex', 'Glow Shoes', '100.00'),
(17, './img/shortsneaker.jpg', 'unisex', 'Short Converse', '50.00'),
(18, './img/martin.jpg', 'unisex', 'Doc Martin Boots', '150.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
