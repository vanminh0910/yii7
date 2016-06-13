-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2014 at 08:52 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii7`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop_order_capture`
--

CREATE TABLE IF NOT EXISTS `shop_order_capture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `order_day` date NOT NULL,
  `products` text NOT NULL,
  `shipping` text NOT NULL,
  `payment` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_order_capture`
--

INSERT INTO `shop_order_capture` (`id`, `order_id`, `order_day`, `products`, `shipping`, `payment`) VALUES
(3, 26, '2014-11-03', '[{"amount":"1","name":"Demonstration of Article with variations","price":"19.99","id":"1","tax_name":"19%","tax_value":"19","variations":[{"spec_name":"Specific number","variation_name":"please enter a number here","variation_adjust":"0"},{"spec_name":"Size","variation_name":"variation1","variation_adjust":"3"}]}]', '{"method":"Delivery by postal Service","tax_name":"19%","tax_value":"19"}', '{"method":"cash","tax_name":"19%","tax_value":"19"}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
