-- phpMyAdmin SQL Dump
-- version 4.0.10.4
-- http://www.phpmyadmin.net
--
-- Host: 127.12.29.130:3306
-- Generation Time: Oct 26, 2014 at 08:44 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `security`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(4, 'おはよう！！', 'Hello 1...2...3....4!! 笑', '2014-10-26 15:21:52', '2014-10-26 20:22:09'),
(5, 'Hello World', 'Hello, everyone, this is a good day.\r\nHello, everyone, this is a good day.\r\nHello, everyone, this is a good day.\r\nHello, everyone, this is a good day.\r\nHello, everyone, this is a good day.\r\nHello, everyone, this is a good day.\r\nHello, everyone, this is a good day.', '2014-10-26 17:18:18', '2014-10-26 20:15:07'),
(6, 'Test 1 2 3', 'Hello in 1 2 3!', '2014-10-26 20:33:57', '2014-10-26 20:33:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
