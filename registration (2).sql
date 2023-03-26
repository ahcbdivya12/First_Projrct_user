-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 09:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `Name`, `email`, `message`) VALUES
(9, 'prerna', 'prerna@gmail.com', 'this is best webside'),
(10, 'prerna', 'prerna@gmail.com', 'this is best webside'),
(11, 'prerna', 'prerna@gmail.com', 'this is best webside'),
(12, '', '', ''),
(13, 'prerna', 'prerna@gmail.com', 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `uid` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`uid`, `name`, `email`, `password`, `mobile`, `gender`, `state`, `city`, `address`) VALUES
(94, 'nisha', 'nish@gmail.com', '12345678', '9876543212', 'male', 'M.P', 'Mumbai', 'lkfdesrdtfgyhuj'),
(79, 'nisha', 'nish@gmail.com', '12345678', '9876543212', 'male', 'M.P', 'Mumbai', 'lkfdesrdtfgyhuj'),
(37, 'prerna', 'prerna@gmail.com', 'f0898af949a373e72a4f6a34b4de9090', '9825785020', 'Female', 'Gujrata', 'Ahemdabad', 'jhfdsxfgjhklbcvbn'),
(120, '94', '83@gmail.com', '7654321', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(119, '92`', 'poiuyt@gmail.com', '7654321', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(118, '91', 'aw@gmail.com', '98765432', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(39, 'nisha', 'nish@gmail.com', '7654321', '9876543212', 'male', 'M.P', 'Mumbai', 'lkfdesrdtfgyhuj'),
(117, '90', 'aw@gmail.com', '7654321', '9408058581', 'Female', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(116, '89', 'ewqoiuytr@gmail.com', '7654321', '9408058581', 'Female', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(115, '88', 'oiuytr@gmail.com', '98765432', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(114, '87', 'ytf@gmail.com', '7654321', '9408058581', 'Female', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(121, '92`', 'poiuyt@gmail.com', '12345', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(122, '65', 'asutoshtiwari299@gmail.com', '1234', '9408059591', 'Female', 'Gujrata', 'Ahemdabad', 'dgszfgf'),
(123, '65', 'asutoshtiwari299@gmail.com', '1234', '9408059591', 'Female', 'Gujrata', 'Ahemdabad', 'dgszfgf'),
(124, '65', 'asutoshtiwari299@gmail.com', '123', '09408059591', 'Female', 'Gujrata', 'Ahemdabad', 'dgszfgf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
