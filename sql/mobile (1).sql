-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 09:57 AM
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
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `apple`
--

CREATE TABLE `apple` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apple`
--

INSERT INTO `apple` (`id`, `Name`, `brand`, `Price`) VALUES
(1, 'APPLE iPhone 13 Pro Sierra Blue 512GB', 'Apple', 149900),
(2, 'APPLE iPhone 13 Starlight 128GB', 'Apple', 149900),
(3, 'APPLE iPhone 13 Starlight 128GB', 'Apple', 149900),
(4, 'APPLE iPhone 13 Pink 128 GB', 'Apple', 72000),
(5, 'APPLE iPhone 13 Pink 128 GB', 'Apple', 72000);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(20) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `zip` int(10) DEFAULT NULL,
  `bought_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `firstname`, `mobile`, `phone`, `email`, `address`, `city`, `state`, `zip`, `bought_at`) VALUES
(1, 'Sneha', 'Realme GT ', 2147483647, 'shivalipatyal202@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '0000-00-00 00:00:00'),
(2, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '0000-00-00 00:00:00'),
(70, 'Payal', 'Realme C11', 23456789, 'payal202@gmail.com', 'dharmshala', 'India', 'Punjab', 199991, '0000-00-00 00:00:00'),
(71, 'Rahul', 'Realme C31', 2147483647, 'shivalipatyal202@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:13:07'),
(72, 'Rahul', 'Realme C31', 2147483647, 'shivalipatyal202@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:14:18'),
(73, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:15:12'),
(74, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:16:27'),
(75, '', '', 0, '', '', '', '', 0, '2022-09-03 11:16:47'),
(76, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:18:52'),
(77, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:19:08'),
(78, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:19:25'),
(79, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:19:32'),
(80, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:19:46'),
(81, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:19:59'),
(82, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:20:05'),
(83, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:20:23'),
(84, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:21:24'),
(85, 'Arpita', 'OnePlus 9R', 898005769, 'sneha@gmail.com', 'Hamirpur', 'India', 'Punjab', 199991, '2022-09-03 11:22:34'),
(86, '', 'OnePlus No', 0, '', '', '', '', 0, '2022-09-03 11:24:38'),
(87, '', '', 0, '', '', '', '', 0, '2022-09-03 11:24:46'),
(88, '', 'OnePlus No', 0, '', '', '', '', 0, '2022-09-03 11:27:41'),
(89, '', 'Realme C31', 0, '', '', '', '', 0, '2022-09-03 11:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `oneplus`
--

CREATE TABLE `oneplus` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oneplus`
--

INSERT INTO `oneplus` (`id`, `Name`, `brand`, `Price`) VALUES
(1, 'OnePlus 9RT 5G Nano Silver 8GB|128GB', 'One Plus', 39999),
(2, 'OnePlus 9RT 5G Nano Silver 8GB|128GB', 'One Plus', 39999),
(3, 'OnePlus Nord CE 2 5G Gray Mirror 8GB', 'One Plus', 24999),
(4, 'OnePlus Nord CE 2 5G Gray Mirror 8GB', 'One Plus', 24999);

-- --------------------------------------------------------

--
-- Table structure for table `realme`
--

CREATE TABLE `realme` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `realme`
--

INSERT INTO `realme` (`id`, `Name`, `brand`, `Price`) VALUES
(1, 'Realme C31 Dark Green 4GB|64GB', 'Realme', 10000),
(2, 'Realme C21Y Cross Black 3 GB RAM', 'Realme', 9000),
(3, 'Realme GT 2 Pro Steel Black 8GB|128GB', 'Realme', 50009),
(4, 'Realme C31 Light Silver 3GB|32GB', 'Realme', 93900),
(5, 'Realme C11 2021 Cool Grey 4GB | 64GB', 'Realme', 9099);

-- --------------------------------------------------------

--
-- Table structure for table `vivo`
--

CREATE TABLE `vivo` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apple`
--
ALTER TABLE `apple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oneplus`
--
ALTER TABLE `oneplus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realme`
--
ALTER TABLE `realme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivo`
--
ALTER TABLE `vivo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apple`
--
ALTER TABLE `apple`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `oneplus`
--
ALTER TABLE `oneplus`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `realme`
--
ALTER TABLE `realme`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vivo`
--
ALTER TABLE `vivo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
