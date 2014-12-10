-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: _your_host
-- Generation Time: Dec 09, 2014 at 09:25 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.35-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_your_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `_table`
--

CREATE TABLE IF NOT EXISTS `_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `elevation` varchar(50) NOT NULL,
  `title` varchar(90) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `has_detail_page` int(1) NOT NULL,
  `webpage` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
