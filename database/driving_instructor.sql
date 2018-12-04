-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2018 at 12:35 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving_instructor`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `lesson` tinyint(4) NOT NULL,
  `duration` tinyint(4) NOT NULL,
  `instructor_id` tinyint(4) NOT NULL,
  `client_id` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` char(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` tinytext NOT NULL,
  `gender` char(10) NOT NULL,
  `contact_number` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `name`, `surname`, `address`, `gender`, `contact_number`) VALUES
('8401251478952', 'Sandisile', 'Songelo', 'Makhaya Khayelitsha', 'male', '0781542586'),
('8705134725187', 'Lubabalo', 'Langa', '12763 Kwezi Park Mandalay', 'male', '0780456123');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` tinyint(4) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `license_code` tinyint(2) NOT NULL,
  `contact_number` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_name`, `surname`, `license_code`, `contact_number`) VALUES
(1, 'Simbonile', 'Pungu', 8, '0725938039'),
(2, 'Camagu', 'Sikithi', 8, '0783113001'),
(3, 'Asanda', 'Vava', 10, '0725938039');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` tinyint(4) NOT NULL,
  `date` date DEFAULT NULL,
  `license_code` tinyint(4) NOT NULL,
  `num_of_lessons` tinyint(4) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `lesson_duration` tinyint(4) NOT NULL,
  `client_id` char(13) NOT NULL,
  `instructor_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `date`, `license_code`, `num_of_lessons`, `start_date`, `start_time`, `lesson_duration`, `client_id`, `instructor_id`) VALUES
(2, '2018-10-01', 8, 15, '2018-10-02', '09:00:00', 1, '8705134725187', 2),
(3, '2018-10-01', 10, 15, '2018-10-03', '10:00:00', 1, '8401251478952', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'myadmin'),
(6, 'instructor', 'makhi123instructor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
