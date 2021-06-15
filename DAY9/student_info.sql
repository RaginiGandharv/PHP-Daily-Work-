-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 02:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `sno` int(3) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `code` int(2) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `psw` bigint(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`sno`, `fname`, `lname`, `gender`, `email`, `code`, `phone`, `address`, `psw`, `bloodgroup`, `dob`, `is_delete`) VALUES
(16, 'Ragini', 'Gandharv', 'Female', 'ragini@gmail.com', 12, 2341567890, 'shakti socity, anand', 123456, 'B+', '2021-06-14', 0),
(17, 'somdatt', 'gandharv', 'Male', 'somdatt@gmail.com', 32, 1234567892, 'shiv socity, baroda', 0, 'O+', '2021-06-14', 0),
(18, 'pranjal', 'barot', 'Female', 'pranjal@gmail.com', 23, 454545678975, 'kareli bag , baroda', 123, 'AB', '2021-06-14', 0),
(19, 'pricy', 'patel', 'Female', 'princy@gmail.com', 23, 124356778855, 'borsad', 0, 'B+', '2021-06-14', 0),
(20, 'yash', 'patel', 'Male', 'yash@gmail.com', 12, 2233445566, 'rcc road, kheda', 123, 'B+', '2021-06-14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
