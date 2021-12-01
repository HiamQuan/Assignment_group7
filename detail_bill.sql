-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 04:11 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`bill_id`,`food_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `detail_bill_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `detail_bill_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
