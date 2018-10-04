-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 09:45 AM
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
-- Table structure for table `partner_preference`
--

CREATE TABLE IF NOT EXISTS `partner_preference` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `partner_age` int(50) NOT NULL,
  `partner_height` int(50) NOT NULL,
  `partner_martial_status` varchar(50) NOT NULL,
  `partner_physical_status` varchar(50) NOT NULL,
  `partner_eating_habits` varchar(50) NOT NULL,
  `partner_drinking_habits` varchar(50) NOT NULL,
  `partner_smoking_habits` varchar(50) NOT NULL,
  `partner_religion` varchar(50) NOT NULL,
  `partner_mother_tongue` varchar(50) NOT NULL,
  `partner_select_caste` varchar(50) NOT NULL,
  `partner_star` varchar(50) NOT NULL,
  `partner_manglik` varchar(50) NOT NULL,
  `partner_country` varchar(50) NOT NULL,
  `partner_citizenship` varchar(50) NOT NULL,
  `partner_education` varchar(50) NOT NULL,
  `partner_occupation` varchar(50) NOT NULL,
  `partner_annual_income` varchar(50) NOT NULL,
  `about_partner` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_preference`
--

INSERT INTO `partner_preference` (`id`, `user_id`, `partner_age`, `partner_height`, `partner_martial_status`, `partner_physical_status`, `partner_eating_habits`, `partner_drinking_habits`, `partner_smoking_habits`, `partner_religion`, `partner_mother_tongue`, `partner_select_caste`, `partner_star`, `partner_manglik`, `partner_country`, `partner_citizenship`, `partner_education`, `partner_occupation`, `partner_annual_income`, `about_partner`) VALUES
(1, 0, 2, 2, 'Unmarried', 'Physically Challenged', '', 'Never Drinks', 'Never Smokes', '1', '7', '1', '3', 'No', '2', '1', '1', '6', '3', 'jhgfdswertyhuiuytrewsdfghjk'),
(2, 0, 23, 4, 'Unmarried', 'Physically Challenged', 'Non-Vegetarian', 'Never Drinks', 'Never Smokes', 'Hindu', 'Marathi', 'Teli', 'Magha', 'No', 'England', 'British Citizen', 'Agricultural Communication and Journalism (BS)', 'Certified Human Resources and Industrial Relations', '230000 - 290000', 'aDSFDFGHJKHGFEDWERETRUYUKJTHGRFDSGFDH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partner_preference`
--
ALTER TABLE `partner_preference`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partner_preference`
--
ALTER TABLE `partner_preference`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
