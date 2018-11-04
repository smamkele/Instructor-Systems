-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2018 at 09:59 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` char(15) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` tinytext NOT NULL,
  `gender` char(10) NOT NULL,
  `license_code` int(11) NOT NULL,
  `contact_number` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `date`, `name`, `surname`, `address`, `gender`, `license_code`, `contact_number`) VALUES
('8406100865083', '2018-09-05', 'Landile', 'Somana', '2466 Makhaya Khayelitsha', 'Female', 10, '0734001354'),
('9512160464087', '2018-09-04', 'Loly', 'Beshwana', 'Tr2346 SiteC Khayelitsha', 'Female', 10, '0754561234');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` tinyint(4) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `contact_number` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_name`, `surname`, `contact_number`) VALUES
(1, 'Simbonile', 'Pungu', '0725938039'),
(2, 'Camagu', 'Sikithi', '0783113001'),
(3, 'Asanda', 'Vava', '0725938039');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` tinyint(4) NOT NULL,
  `num_of_lessons` tinyint(4) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `lesson_duration` tinyint(4) NOT NULL,
  `lesson_status` char(15) NOT NULL,
  `client_id` char(15) NOT NULL,
  `instructor_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `num_of_lessons`, `start_date`, `start_time`, `lesson_duration`, `lesson_status`, `client_id`, `instructor_id`) VALUES
(1, 10, '2018-09-04', '09:00:00', 1, '0', '', 0),
(2, 10, '2018-09-05', '11:00:00', 1, '0', '', 0),
(3, 5, '2018-09-10', '11:00:00', 1, 'on', '8406100865083', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` tinyint(4) NOT NULL,
  `username` char(30) NOT NULL,
  `psword` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `psword`) VALUES
(1, 'cymbo', 'makhidriving3030'),
(2, 'admin', 'administrator');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
