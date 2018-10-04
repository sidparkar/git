-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 08:58 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `profile_status` varchar(50) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `sub_caste` varchar(20) NOT NULL,
  `eating_habits` varchar(20) NOT NULL,
  `drinking_habits` varchar(20) NOT NULL,
  `smoking_habits` varchar(20) NOT NULL,
  `disability` varchar(20) NOT NULL,
  `star` varchar(20) NOT NULL,
  `raashi` varchar(20) NOT NULL,
  `time_of_birth` varchar(20) NOT NULL,
  `place_of_birth` varchar(20) NOT NULL,
  `education` varchar(50) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `employed_in` varchar(20) NOT NULL,
  `father_status` varchar(20) NOT NULL,
  `mother_status` varchar(20) NOT NULL,
  `brother_status` varchar(20) NOT NULL,
  `sister_status` varchar(20) NOT NULL,
  `parents_contact` varchar(20) NOT NULL,
  `parents_location` varchar(20) NOT NULL,
  `family_status` varchar(20) NOT NULL,
  `family_type` varchar(20) NOT NULL,
  `family_values` varchar(20) NOT NULL,
  `about_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `profile_for` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `b_date` int(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `mother_tounge` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `profile_for`, `username`, `gender`, `b_date`, `religion`, `mother_tounge`, `caste`, `country`, `phone`, `email`, `password`) VALUES
(1, '1', 'bdadmin', 'MALE', 4, '1', '3', '1', '8', '9730258963', 'siddji@gmau.com', ' VA0BGJ6O@I)Nvjqd(2'),
(2, '1', 'bdadmin', 'MALE', 4, '1', '3', '1', '8', '9730258963', 'siddji@gmau.com', ' VA0BGJ6O@I)Nvjqd(2'),
(3, 'Son', 'sid', 'MALE', 4, 'Muslim - Shia', '54', 'Teli', 'Mumbai', '9730258963', 'sid@gmail.com', 'sid12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `uname`, `password`) VALUES
(1, 'habibshaikh84@gmail.com', 'asdfghj'),
(2, 'bdadmin', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
