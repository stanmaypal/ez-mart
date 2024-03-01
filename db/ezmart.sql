-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 01:23 PM
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
-- Database: `ezmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `abt`
--

CREATE TABLE `abt` (
  `sr` int(11) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abt`
--

INSERT INTO `abt` (`sr`, `txt`) VALUES
(3, '<p style=\"text-align: center;\"><span style=\"color: rgb(45, 194, 107);\"><strong><span style=\"font-size: 36pt;\">Welcome To E mart</span></strong></span></p>'),
(4, '<p>This is E commerse WebSite</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `ask1` text NOT NULL,
  `ask2` text NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `dob`, `ask1`, `ask2`, `pass`, `address`) VALUES
(1, '[value-2]', '[value-3]', 'admin@gmail.com', '0000-00-00', '[value-6]', '[value-7]', 'admin@123', '[value-9]');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `name`) VALUES
(4, 'Computer'),
(1, 'Laptop'),
(2, 'Mobile'),
(5, 'Shirt'),
(3, 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `cnt`
--

CREATE TABLE `cnt` (
  `sr` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `response` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cnt`
--

INSERT INTO `cnt` (`sr`, `name`, `email`, `message`, `response`) VALUES
(1, 'SHUBHAM', 'shubhamaman1157@gmail.com', 'awawddwegerhtrj', 0),
(2, 'SHUBHAM', 'shubhamaman1157@gmail.com', 'awawddwegerhtrj', 0),
(3, 'Abhishek', 'abhi@gmail.com', 'Royalty-free licenses let you', 0),
(4, 'SHUBHAM', 'shubhamaman1157@gmail.com', 'testing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `cate` int(11) NOT NULL,
  `dis` int(11) NOT NULL,
  `p_status` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `price`, `cate`, `dis`, `p_status`, `image`, `details`) VALUES
(6, 'Pendrive', 499, 2, 23, 1, 'cup2-removebg-preview.png', ''),
(7, 'Sumsung A04e', 9999, 2, 23, 1, 'cpuM-removebg-preview.png', ''),
(8, 'Processer i5 7th Gen', 9000, 4, 34, 1, 'cup2-removebg-preview.png', ''),
(9, 'Dell O Laptop', 670000, 0, 23, 1, 'monitor-removebg-preview.png', '<p>cwqwq</p>');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `u_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userId` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`u_id`, `name`, `mobile`, `email`, `userId`, `pass`, `pin`, `image`, `address`) VALUES
(3, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value', '[value-8]', '[value-9]'),
(4, 'Abhishek', '0888788806', 'qshubhamaman1157@gmail.com', 'abhi@123', '202cb962ac59075b964b07152d234b70', '273001', 'download.jfif', 'DHUKUNATH POST- SHANKARPUR GORAKHPUR\r\ndhukunath post- shankarpur\r\ngorakhpur'),
(8, 'Abhishek', '0888788804', '12@gmail.com', 'qazx123', '202cb962ac59075b964b07152d234b70', '273001', '', 'DHUKUNATH POST- SHANKARPUR GORAKHPUR\r\ndhukunath post- shankarpur\r\ngorakhpur'),
(9, 'Test', '9621122159', 'tsp@gmail.com', 'tp@123', '202cb962ac59075b964b07152d234b70', '273301', 'cpuM-removebg-preview.png', 'civil Lines Golghar\r\nGorakhpur'),
(12, 'SHUBHAM', '9876541230', 'shubhamaman12345@gmail.com', 'sarvesh@12345', '202cb962ac59075b964b07152d234b70', '273001', 'cmr.jpg', 'DHUKUNATH POST- SHANKARPUR GORAKHPUR\r\ndhukunath post- shankarpur\r\ngorakhpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abt`
--
ALTER TABLE `abt`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cnt`
--
ALTER TABLE `cnt`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abt`
--
ALTER TABLE `abt`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cnt`
--
ALTER TABLE `cnt`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
