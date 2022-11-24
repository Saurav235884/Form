-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 02:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `name`, `email`, `mob`, `dob`) VALUES
(1, 'Xyz', 'Xyz@gmail.com', '8100110011', '10-10-2000'),
(27, 'Saurav', 'Sourav@gmail.com', '8817919191', '\r\n                            2000-10-10'),
(28, 'Xyz', 'Xyz@gmail.com', '8191910199', '\r\n                            2000-10-10'),
(29, 'ABC', 'Abc@gmail.com', '8911010100', '\r\n                            2000-10-10'),
(30, 'Sagar Sharma', 'Sagar@gmail.com', '9101029378', '\r\n                            2000-01-09'),
(31, 'Krishan Kant', 'Kant@gmail.com', '8919181726', '\r\n                            2000-01-01'),
(32, 'Raj ', 'Raj@gmail.com', '7828293749', '\r\n                            2000-10-10'),
(33, 'dfasjdfo', 'Xyz@gmail.com', '8191000000', '\r\n                                2013-10-23'),
(34, 'ABC', 'Gkf@gmail.com', '7372832839', '\r\n                                2000-10-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
