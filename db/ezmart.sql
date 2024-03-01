-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 11:09 AM
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
(3, 'Tablet');

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
(1, 'Camera', 1122, 0, 15, 1, 'cpuM.jfif', '<div class=\"_1AtVbE col-12-12\">\r\n<div class=\"aMaAEs\">\r\n<div><span class=\"B_NuCI\">LG 24 inch Full HD LED Backlit IPS Panel White Colour Monitor (24MK600M)&nbsp;&nbsp;(AMD Free Sync, Response Time: 5 ms, 75 Hz Refresh Rate)</span></div>\r\n<div class=\"\">\r\n<div class=\"_3_L3jD\">\r\n<div class=\"gUuXy- _16VRIQ\">\r\n<div class=\"_3LWZlK\">4.4<img class=\"_1wB99o\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg==\"></div>\r\n<span id=\"productRating_LSTMONFB6JQFJEP7BZXLEIFM1_MONFB6JQFJEP7BZX_\" class=\"_1lRcqv\"></span><span class=\"_2_R_DZ\">5,925 Ratings&nbsp;<span class=\"_13vcmD\">&amp;</span>&nbsp;771 Reviews</span></div>\r\n</div>\r\n<span class=\"b7864- _2Z07dN\"><img class=\"jMnjzX\" src=\"https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/fa_62673a.png\" height=\"21\"></span></div>\r\n<div class=\"_1V_ZGU\">Special price</div>\r\n<div class=\"dyC4hf\">\r\n<div class=\"CEmiEU\">\r\n<div class=\"_25b18c\">\r\n<div class=\"_30jeq3 _16Jk6d\">₹8,199</div>\r\n<div class=\"_3I9_wc _2p6lqe\">₹16,500</div>\r\n<div class=\"_3Ay6Sb _31Dcoz\">50% off</div>\r\n</div>\r\n</div>\r\n<div class=\"_1V9q7_\">\r\n<div id=\"price-info-icon\" class=\"_25icda\">i</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"_1AtVbE col-12-12\">\r\n<div class=\"_3Z0lU8\">\r\n<div class=\"rd9nIL\">Available offers</div>\r\n</div>\r\n<div class=\"_3TT44I\">\r\n<div class=\"WT_FyS\">\r\n<div class=\"XUp0WS\"><span class=\"_3j4Zjq row\"><img class=\"_3HLfAg\" src=\"https://rukminim2.flixcart.com/www/36/36/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90\" width=\"18\" height=\"18\"><span class=\"u8dYXW\">Bank Offer</span>10% off on BOBCARD Transactions, up to ₹1,000 on orders of ₹10,000 and above<span class=\"fGhUR2\">T&amp;C</span></span><span class=\"_3j4Zjq row\"><img class=\"_3HLfAg\" src=\"https://rukminim2.flixcart.com/www/36/36/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90\" width=\"18\" height=\"18\"><span class=\"u8dYXW\">Bank Offer</span>10% off on BOBCARD EMI Transactions, up to ₹2,000 on orders of ₹10,000 and above<span class=\"fGhUR2\">T&amp;C</span></span><span class=\"_3j4Zjq row\"><img class=\"_3HLfAg\" src=\"https://rukminim2.flixcart.com/www/36/36/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90\" width=\"18\" height=\"18\"><span class=\"u8dYXW\">Bank Offer</span>10% off on Citi-branded Credit Card EMI Transactions, up to ₹2,000 on orders of ₹10,000 and above<span class=\"fGhUR2\">T&amp;C</span></span><span class=\"_3j4Zjq row\"><img class=\"_3HLfAg\" src=\"https://rukminim2.flixcart.com/www/36/36/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90\" width=\"18\" height=\"18\"><span class=\"u8dYXW\">Special Price</span>Get extra 34% off (price inclusive of cashback/coupon)<span class=\"fGhUR2\">T&amp;C</span></span></div>\r\n</div>\r\n</div>\r\n</div>'),
(2, 'Camera', 1122, 0, 15, 1, 'cpuf-removebg-preview.png', ''),
(3, 'Camera', 1122, 0, 15, 0, 'cpuf-removebg-preview.png', ''),
(4, 'Camera', 1122, 0, 15, 1, 'cpuf-removebg-preview.png', ''),
(5, 'Camera', 1122, 0, 15, 0, 'cpuf-removebg-preview.png', '');

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
(8, 'Abhishek', '0888788804', '12@gmail.com', 'qazx123', '202cb962ac59075b964b07152d234b70', '273001', '', 'DHUKUNATH POST- SHANKARPUR GORAKHPUR\r\ndhukunath post- shankarpur\r\ngorakhpur');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
