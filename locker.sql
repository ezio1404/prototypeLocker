-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 06:39 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locker`
--

-- --------------------------------------------------------

--
-- Table structure for table `lockers`
--

CREATE TABLE `lockers` (
  `locker_id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lockers`
--

INSERT INTO `lockers` (`locker_id`, `number`, `status`) VALUES
(11, '1', '1'),
(12, '2', '0'),
(13, '3', '0'),
(14, '4', '0'),
(15, '5', '0'),
(16, '6', '0'),
(17, '7', '0'),
(18, '8', '0'),
(19, '9', '0'),
(20, '10', '0'),
(21, '11', '0'),
(22, '12', '0'),
(23, '13', '0'),
(24, '14', '0'),
(25, '15', '0'),
(26, '16', '0'),
(27, '17', '0'),
(28, '18', '0'),
(29, '19', '0'),
(30, '20', '0'),
(31, '21', '0'),
(32, '22', '0'),
(33, '23', '0'),
(34, '24', '0'),
(35, '25', '0'),
(36, '26', '0'),
(37, '27', '0'),
(38, '28', '0'),
(39, '29', '0'),
(40, '30', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `idno` varchar(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `course` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `idno`, `fname`, `lname`, `course`, `username`, `password`) VALUES
(3, '14288484', 'Mitch', 'Alforque', 'BSIT', 'mitchy', 'mitchy');

-- --------------------------------------------------------

--
-- Table structure for table `user_lockers`
--

CREATE TABLE `user_lockers` (
  `ul_id` int(11) NOT NULL,
  `locker_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_lockers`
--

INSERT INTO `user_lockers` (`ul_id`, `locker_id`, `user_id`) VALUES
(1, 11, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lockers`
--
ALTER TABLE `lockers`
  ADD PRIMARY KEY (`locker_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_lockers`
--
ALTER TABLE `user_lockers`
  ADD PRIMARY KEY (`ul_id`),
  ADD KEY `locker_id` (`locker_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lockers`
--
ALTER TABLE `lockers`
  MODIFY `locker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_lockers`
--
ALTER TABLE `user_lockers`
  MODIFY `ul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_lockers`
--
ALTER TABLE `user_lockers`
  ADD CONSTRAINT `user_lockers_ibfk_1` FOREIGN KEY (`locker_id`) REFERENCES `lockers` (`locker_id`),
  ADD CONSTRAINT `user_lockers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
