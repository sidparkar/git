-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 07:22 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(50) NOT NULL,
  `profile_for` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `user_weight` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `sub_caste` varchar(50) NOT NULL,
  `eating_habits` varchar(50) NOT NULL,
  `drinking_habits` varchar(50) NOT NULL,
  `smoking_habits` varchar(50) NOT NULL,
  `disability` varchar(50) NOT NULL,
  `star` varchar(50) NOT NULL,
  `rashi` varchar(50) NOT NULL,
  `birth_time` int(50) NOT NULL,
  `birth_minute` int(50) NOT NULL,
  `birth_period` varchar(50) NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `birth_city` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `employed_in` varchar(50) NOT NULL,
  `father_status` varchar(50) NOT NULL,
  `mother_status` varchar(50) NOT NULL,
  `brother_status` varchar(50) NOT NULL,
  `brother_married` varchar(50) NOT NULL,
  `sister_status` varchar(50) NOT NULL,
  `sister_married` varchar(50) NOT NULL,
  `country_code` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `parents_location` varchar(50) NOT NULL,
  `family_status` varchar(50) NOT NULL,
  `family_type` varchar(50) NOT NULL,
  `family_values` varchar(50) NOT NULL,
  `about_user` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `profile_for`, `height`, `user_weight`, `caste`, `sub_caste`, `eating_habits`, `drinking_habits`, `smoking_habits`, `disability`, `star`, `rashi`, `birth_time`, `birth_minute`, `birth_period`, `birth_place`, `birth_city`, `education`, `occupation`, `currency`, `income`, `employed_in`, `father_status`, `mother_status`, `brother_status`, `brother_married`, `sister_status`, `sister_married`, `country_code`, `phone`, `parents_location`, `family_status`, `family_type`, `family_values`, `about_user`) VALUES
(1, 'Daughter', '4', '25', '3', '2', 'Eggetarian', 'Yes', 'Yes', 'Normal', '8', '9', 3, 2, '1', 'maharashtra', 'virar', '4', '3', '2', '3', 'Government', '2', '2', '8', '9', '4', '7', '2', 2147483647, 'Same as my Location', 'Middle Class', 'Joint', 'Orthodox', 'sadfghjkl'),
(5, 'Daughter', '3', '25', '2', '2', 'Eggetarian', 'Yes', 'Yes', 'Normal', '4', '3', 4, 3, '1', 'maharashtra', 'virar', '3', '3', '2', '2', 'Private', '3', '4', '3', '4', '4', '3', '3', 2147483647, 'Same as my Location', 'Middle Class', 'Joint', 'Orthodox', 'qwertyuiopasdfghjkl'),
(6, 'Myself', '4', '25', 'obc', 'Teli', 'Eggetarian', 'Yes', 'Yes', 'Normal', 'Ashlesha', 'Simha - Leo', 4, 1, 'AM', 'maharashtra', 'virar', 'Aerospace Studies (Air Force ROTC)', 'Audiologists', 'Indian Rupee', '31,000-50,000', 'Government', 'Retired', 'Expired', '0', '0', '2', '0', '+91', 2147483647, 'Same as my Location', 'Middle Class', 'Joint', 'Orthodox', 'asdfghjkl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
