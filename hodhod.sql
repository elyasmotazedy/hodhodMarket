-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 09:32 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hodhod`
--

-- --------------------------------------------------------

--
-- Table structure for table `hodhod_admin`
--

CREATE TABLE `hodhod_admin` (
  `admin_id` int(100) UNSIGNED NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_email` varchar(75) NOT NULL,
  `admin_password` varchar(255) CHARACTER SET utf32 NOT NULL,
  `access` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hodhod_admin`
--

INSERT INTO `hodhod_admin` (`admin_id`, `admin_username`, `admin_email`, `admin_password`, `access`) VALUES
(101, 'shahriyar_tarnasi', 'shahryar.tarnasi@gmail.com', 'tarnasi68', 4),
(102, 'elex', 'lost_ring123@yahoo.com', 'elex1374', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hodhod_admin`
--
ALTER TABLE `hodhod_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hodhod_admin`
--
ALTER TABLE `hodhod_admin`
  MODIFY `admin_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
