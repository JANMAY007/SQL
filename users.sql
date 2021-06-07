-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2016 at 07:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `date`) VALUES
(2, 'Ted', 'Smith', 'ted@me.com', '2016-01-29 18:07:49'),
(4, 'Bill', 'Stevens', 'bill@me.com', '2016-01-29 23:38:33'),
(7, 'Will', 'Scott', 'will@me.com', '2016-01-30 00:02:46'),
(8, 'Jane', 'Mill', 'jane@me.com', '0000-00-00 00:00:00'),
(9, 'Adam', 'Brown', 'adam@me.com', '2016-01-30 09:10:10'),
(10, 'Ana', 'Williams', 'ana@me.com', '2016-01-30 09:10:10'),
(11, 'Avril', 'Moore', 'avril@me.com', '2016-01-30 09:10:10'),
(12, 'Bob', 'White', 'bob@me.com', '2016-01-30 09:10:10'),
(13, 'Martin', 'Harris', 'martin@me.com', '2016-01-30 09:10:10'),
(14, 'Garcia', 'Jones', 'garcia@me.com', '2016-01-30 09:10:10'),
(15, 'Clark', 'Robinson', 'clark@me.com', '2016-01-30 09:10:10'),
(16, 'Taylor', 'Clark', 'taylor@gmail.com', '2016-01-30 09:10:10'),
(17, 'Scott', 'Hill', 'scott@me.com', '2016-01-30 09:10:10'),
(18, 'Allen', 'King', 'allen@me.com', '2016-01-30 09:10:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
