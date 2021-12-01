-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 03:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group7`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(50) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `date`, `amount`, `status`, `desk_id`, `user_id`) VALUES
(29, '2021-11-29 21:44:31', 192500, 'Đã thanh toán', 1, 1),
(30, '2021-11-29 21:53:52', 93500, 'Chưa thanh toán', 1, 1),
(31, '2021-11-29 21:54:19', 115500, 'Chưa thanh toán', 1, 1),
(32, '2021-11-29 21:56:03', 27500, 'Chưa thanh toán', 1, 1),
(33, '2021-11-29 21:56:40', 49500, 'Chưa thanh toán', 1, 1),
(34, '2021-11-29 21:56:58', 27500, 'Chưa thanh toán', 1, 1),
(35, '2021-11-29 22:01:04', 115500, 'Chưa thanh toán', 1, 1),
(36, '2021-11-29 22:05:13', 49500, 'Chưa thanh toán', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Món khai vị'),
(2, 'Món chính'),
(3, 'Món tráng miệng');

-- --------------------------------------------------------

--
-- Table structure for table `desk`
--

CREATE TABLE `desk` (
  `desk_id` int(11) NOT NULL,
  `desk_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desk`
--

INSERT INTO `desk` (`desk_id`, `desk_name`, `location`, `status`, `capacity`) VALUES
(1, '', 1, 'đã đặt', 4),
(2, '', 1, 'đã đặt', 8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_bill`
--

CREATE TABLE `detail_bill` (
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `bill_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_bill`
--

INSERT INTO `detail_bill` (`quantity`, `status`, `time`, `bill_id`, `food_id`) VALUES
(1, 0, '2021-11-29 22:10:50', 29, 2),
(1, 0, '2021-11-29 22:10:50', 29, 4),
(2, 0, '2021-11-29 22:10:50', 29, 5),
(1, 0, '2021-11-29 22:10:50', 29, 6),
(1, 0, '2021-11-29 22:10:50', 30, 5),
(1, 0, '2021-11-29 22:10:50', 30, 7),
(1, 0, '2021-11-29 22:10:50', 31, 2),
(1, 0, '2021-11-29 22:10:50', 31, 6),
(1, 0, '2021-11-29 22:10:50', 32, 5),
(1, 0, '2021-11-29 22:10:50', 33, 4),
(1, 0, '2021-11-29 22:10:50', 33, 5),
(1, 0, '2021-11-29 22:10:50', 34, 5),
(1, 0, '2021-11-29 22:10:50', 35, 6),
(1, 0, '2021-11-29 22:10:50', 35, 7),
(1, 0, '2021-11-29 22:10:50', 36, 4),
(1, 0, '2021-11-29 22:10:50', 36, 5);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `price`, `category_id`, `image`) VALUES
(1, 'Bò Hầm', 50000, 2, 'food1.jpg'),
(2, 'Cá Hồi', 60000, 2, 'food2.jpg'),
(3, 'Mỳ Chúc Chích Sườn', 30000, 2, 'mysuon.jpg'),
(4, 'Soup ramen', 20000, 1, 'food2.jpg'),
(5, 'Salad Trứng', 25000, 1, 'banner.png'),
(6, 'Bánh Kếp Mật Ong', 45000, 3, 'dessert1.jpg'),
(7, 'Bún Ếch Chiên Bơ', 60000, 3, 'bundau.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `phone`, `role`, `image`) VALUES
(1, 'Nguyễn Anh Quân', 'songmai96', '0326669823', 'admin', 'food1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `desk_id` (`desk_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `desk`
--
ALTER TABLE `desk`
  ADD PRIMARY KEY (`desk_id`);

--
-- Indexes for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`bill_id`,`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `desk`
--
ALTER TABLE `desk`
  MODIFY `desk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`desk_id`) REFERENCES `desk` (`desk_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `detail_bill_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `detail_bill_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
