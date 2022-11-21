-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 05:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccine_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_regd`
--

CREATE TABLE `user_regd` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `code` varchar(3) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `adhar` varchar(16) NOT NULL,
  `age` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(16) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `adress` text NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `application_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regd`
--

INSERT INTO `user_regd` (`id`, `name`, `email`, `code`, `phone`, `adhar`, `age`, `date`, `password`, `gender`, `adress`, `usertype`, `application_no`) VALUES
(1, 'sailesh', 'admin@gmail.com', '', '', '', '', '0000-00-00', '786', '', '786', 'admin', ''),
(22, 'Sailesh Dakua', 'sailesh@gmail.com', '+91', '7077059596', '637118587002', '22', '2022-11-24', '123456', 'Male', 'Booking', 'user', '4244');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_regd`
--
ALTER TABLE `user_regd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_regd`
--
ALTER TABLE `user_regd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
