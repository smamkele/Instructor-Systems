-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2018 at 04:38 PM
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
  `client_id` char(13) NOT NULL,
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
('7809230876653', '2018-10-01', 'Liyema', 'Ndikeni', 'NY782 Nyanga Junction', 'male', 8, '0740761235'),
('8406100865083', '2018-09-05', 'Landile', 'Somana', '2466 Makhaya Khayelitsha', 'Female', 10, '0734001354'),
('8511240768085', '2018-09-16', 'Sinelizwi', 'Samanga', 'Makhaza 233 section', 'female', 10, '0750876542'),
('860324867889', '2018-09-10', 'Sesethu', 'Dazana', '38456 Harare Khayelitsha', 'female', 10, '0763456127'),
('8609231234560', '2018-10-01', 'Sethu', 'Soli', 'Philiphi East', 'male', 8, '0781245678'),
('90041276', '2018-09-10', 'Londiwe', 'Somvana', '6756 Gugulethu', 'female', 8, '0765432138'),
('98987786557', '2018-10-10', 'Simamkele ', 'Mkentane', 'Nomvencu street', 'female', 10, '0744241496');

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
  `client_id` char(15) NOT NULL,
  `instructor_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `num_of_lessons`, `start_date`, `start_time`, `lesson_duration`, `client_id`, `instructor_id`) VALUES
(3, 5, '2018-09-10', '11:00:00', 1, '8406100865083', 3),
(13, 15, '2018-10-03', '10:00:00', 1, '860923123456087', 2),
(20, 25, '2018-09-11', '08:00:00', 1, '860324867889', 3),
(21, 20, '2018-09-17', '12:00:00', 1, '8511240768085', 3),
(22, 15, '2018-10-02', '08:00:00', 1, '780923087665388', 2),
(23, 10, '2018-09-11', '11:00:00', 1, '90041276', 1),
(24, 10, '2018-10-11', '09:00:00', 1, '98987786557', 2);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `test_id` tinyint(4) NOT NULL,
  `client_id` char(15) NOT NULL,
  `lesson_id` tinyint(4) NOT NULL,
  `test_date` date NOT NULL,
  `test_status` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` tinyint(4) NOT NULL,
  `username` char(30) NOT NULL,
  `password` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'simbonile', 'makhi2013'),
(2, 'admin', 'myadmin');

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
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `lesson_id` (`lesson_id`);

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
  MODIFY `lesson_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`) ON UPDATE CASCADE;

--
-- Constraints for table `testing`
--
ALTER TABLE `testing`
  ADD CONSTRAINT `testing_ibfk_2` FOREIGN KEY (`lesson_id`) REFERENCES `lesson` (`lesson_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
