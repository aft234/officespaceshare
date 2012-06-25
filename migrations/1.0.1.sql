-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2012 at 05:49 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `office_space_share`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
CREATE TABLE `listings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `desks_available` int(11) DEFAULT NULL,
  `desk_price` int(11) DEFAULT NULL,
  `details` longtext,
  `lease_duration` int(11) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` VALUES(1, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:32:10');
INSERT INTO `listings` VALUES(2, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:32:21');
INSERT INTO `listings` VALUES(3, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:34:34');
INSERT INTO `listings` VALUES(4, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:38:06');
INSERT INTO `listings` VALUES(5, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:38:23');
INSERT INTO `listings` VALUES(6, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:38:57');
INSERT INTO `listings` VALUES(7, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:42:16');
INSERT INTO `listings` VALUES(8, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:42:31');
INSERT INTO `listings` VALUES(9, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:43:14');
INSERT INTO `listings` VALUES(10, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:44:13');
INSERT INTO `listings` VALUES(11, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:44:24');
INSERT INTO `listings` VALUES(12, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:44:32');
INSERT INTO `listings` VALUES(13, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:45:39');
INSERT INTO `listings` VALUES(14, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:46:00');
INSERT INTO `listings` VALUES(15, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:46:16');
INSERT INTO `listings` VALUES(16, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:47:09');
INSERT INTO `listings` VALUES(17, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:47:22');
INSERT INTO `listings` VALUES(18, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:47:41');
INSERT INTO `listings` VALUES(19, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:48:41');
INSERT INTO `listings` VALUES(20, NULL, '44 Wall Street', 0, 2, 320, 'We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.', 6, '2012-06-24 20:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from_id` varchar(45) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `to_id` varchar(45) NOT NULL,
  `to_email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

-- 2012-06-24 Anthony Tumbiolo
-- Changed a few field names

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'anthony.tumbiolo@gmail.com', 'azzurri11!', '2012-06-22 08:56:52');
