-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 02:19 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `about_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL,
  `user_id` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `name`, `designation`, `image`, `user_id`, `view`) VALUES
(7, 'vijay jadhav', ' DevOps ENGINEER', '', 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `img_id` int(11) NOT NULL,
  `image` varchar(75) NOT NULL,
  `user_id` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `image`, `user_id`, `view`) VALUES
(1, '19', 0, 1),
(2, '19', 0, 1),
(3, '19', 0, 1),
(4, '19', 0, 0),
(5, '19', 0, 1),
(9, '19', 0, 0),
(10, '19', 0, 0),
(12, '19', 0, 0),
(19, '', 11, 0),
(20, '', 11, 0),
(21, '15320724311530791366ad1.jpg', 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL,
  `description` varchar(500) NOT NULL,
  `view` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `image`, `description`, `view`, `user_id`) VALUES
(1, 'mobile', 'abc.jpeg', 'new phone in the market', 0, 9),
(5, '', '1530791227transport.png', 'i5, 1tb,8gb ', 0, 0),
(6, '', '1530791255apurer-truck.png', ' fdgdfg', 1, 0),
(7, 'dfdh', '1530791366ad1.jpg', ' fdhcv', 0, 0),
(8, 'ncngc', '1530791440about-us.png', ' ngvn ', 0, 0),
(9, 'gfdfb', '1530791559about-us.png', ' bcvb ', 1, 0),
(11, 'fbcvb', '1530791683apurer-truck.png', ' bcv b ', 0, 9),
(13, 'fsxdcvbn', '1530791703bg-2.jpeg', ' sxcvbn', 0, 9),
(14, 'gjvn', '1530791793creative.jpg', ' gnvb ', 1, 9),
(24, 'gfdfb', '15317316181530791703bg-2.jpeg', ' s', 1, 0),
(47, 'dfdh', '1531809382bitnami.ico', ' hh', 0, 0),
(48, 'ncngc', '1531811079bitnami.ico', ' q', 1, 0),
(63, 'product2', '', 'zxcvnb', 0, 11),
(65, 'ncngc', '15318957591531820063background-3.jpg', 'adlkjhgfd', 1, 11),
(66, 'ballu', '15318958321531820063background-3.jpg', 'sdfgayusdfghjfgh ', 0, 11),
(67, '', '15318970071531732461person-female.png', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` varchar(75) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `email`, `phone`, `city`, `date`) VALUES
(6, 'vijay dinanath chavan', 'vjjadhav9', '91115c9a1b87ea287dea3736c45dcced', 'jadhavvijay@live.in', '9594319954', 'mandwa west', '05/07/18'),
(7, 'vijay', 'shaikh.habib@apurer.in', '5d7f9e07aad65a7743026bb422f9a50f', '9773640070', '9773640070', 'MUMBAI', '05/07/18'),
(8, 'vijay', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 'shaikh.habib@apurer.in', '9773640070', 'MUMBAI', '05/07/18'),
(9, 'nitesh', 'nitesh@dj', '855cf45bfd4a3ee1befcc4ee8f1bc468', 'nitesh@gmail.com', '123456788', 'vasai', '05/07/18'),
(10, 'siddhi', 'sid@parkar', 'b8c1a3069167247e3503f0daba6c5723', 'siddhi.parlar95@gmail.com', '9595959565', 'MUMBAI', '06/07/18'),
(11, 'siddhiG', 'siddhi.parkar', 'f2285b68e227f7a9d4481a80a3b1b186', 'habibshaikh84@gmail.com', '9773640070', 'MUMBAI', '06/07/18'),
(12, 'nitesh bhandari', 'nitesh@bhandari', '388c6df5ce99c934d9c5f0bf29d758e4', 'nitesh@gmail.com', '9773640070', 'MUMBAI', '07/07/18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
