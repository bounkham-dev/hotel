-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 05:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `ram` char(5) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `sue` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` mediumint(5) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `name`, `brand`, `price`, `ram`, `storage`, `sue`, `image`, `quantity`, `status`) VALUES
(1, 'Acer112', 'Acer', '11000.00', '8', '2000', 'IIMAI', '4.png', 35, '1'),
(2, 'Yee Hor Detail', 'MSI', '55000.00', '16', '500', 'SUE', '4.png', 25, '1'),
(3, 'Academic Period', 'Razer', '22000.00', '8', '1000', 'PIEN', '3.png', 15, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `user_password`, `user_level`) VALUES
(5, 'totothegame', 'totoaudition@gmail.com', '$2y$10$5c4QlPthutXnFusZWK.YsOV3MfNnftkEJ9QJXsiUAmHhY.xuViFVu', 'a'),
(6, 'bibio', 'toto@gmail.com', '$2y$10$eI4aTxdD/YpI1q4ZXNT.3O/zHLYOs2wIIccxvaf9jNmsFyriYucBC', 'u'),
(7, 'totoaudition', 'tt@gmail.com', '$2y$10$51m/khPjug5O.BKvGRrlq.E2Jm3sSvTlFwjck6VSJ0HyyqulbOC8S', 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
