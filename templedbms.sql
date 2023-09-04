-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 07:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `templedbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `darshana`
--
-- Error reading structure for table templedbms.darshana: #1932 - Table 'templedbms.darshana' doesn't exist in engine
-- Error reading data for table templedbms.darshana: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `templedbms`.`darshana`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `disabled`
--
-- Error reading structure for table templedbms.disabled: #1932 - Table 'templedbms.disabled' doesn't exist in engine
-- Error reading data for table templedbms.disabled: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `templedbms`.`disabled`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `login`
--
-- Error reading structure for table templedbms.login: #1932 - Table 'templedbms.login' doesn't exist in engine
-- Error reading data for table templedbms.login: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `templedbms`.`login`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `regadmin`
--

CREATE TABLE `regadmin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `regadmin`
--

INSERT INTO `regadmin` (`admin_id`, `email`, `password`, `user_type`) VALUES
(1, 'ad@gmail.com', '523af537946b79c4f8369ed39ba78605', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--
-- Error reading structure for table templedbms.register: #1932 - Table 'templedbms.register' doesn't exist in engine
-- Error reading data for table templedbms.register: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `templedbms`.`register`' at line 1

--
-- Triggers `register`
--
DELIMITER $$
CREATE TRIGGER `login` AFTER INSERT ON `register` FOR EACH ROW INSERT INTO login VALUES (New.user_id,New.email,New.password,New.user_type,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `seva`
--
-- Error reading structure for table templedbms.seva: #1932 - Table 'templedbms.seva' doesn't exist in engine
-- Error reading data for table templedbms.seva: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `templedbms`.`seva`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `specialevent`
--
-- Error reading structure for table templedbms.specialevent: #1932 - Table 'templedbms.specialevent' doesn't exist in engine
-- Error reading data for table templedbms.specialevent: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `templedbms`.`specialevent`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regadmin`
--
ALTER TABLE `regadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regadmin`
--
ALTER TABLE `regadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
