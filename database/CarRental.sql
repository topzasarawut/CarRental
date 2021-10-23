-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2021 at 07:17 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CarRental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `carreg` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `gen` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `carid`, `carreg`, `category`, `brand`, `gen`, `status`) VALUES
(1, 1001, 'กจ 1234 ชัยภูมิ', 'เก่ง', 'toyota', 'Camry', '2'),
(2, 1002, 'กข 1122 มหาสารคาม', 'เก่ง', 'Honda', 'Accord', '1'),
(3, 1003, 'กจ 8888 ชัยภูมิ', 'เก่ง', 'benz', 's class', '1'),
(4, 1004, 'กจ 3333 ชัยภูมิ', 'เก่ง', 'toyota', 'Camry', '1'),
(5, 1005, 'กข 8888 มหาสารคาม', 'เก่ง', 'Mazda', 'CX-5', '1'),
(6, 1006, 'กข 5555 มหาสารคาม', 'เก่ง', 'porsche', '911 Carrera S', '1'),
(7, 1007, 'กข 1111 ร้อยเอ็ด', 'เก่ง', 'Benz', 'AMG', '1'),
(8, 1008, 'กจ 444 ขอนแก่น', 'อเนกประสงค์', 'ford', 'everest', '1'),
(9, 1009, 'กข 8899 กรุงเทพมหานคร', 'กะบะ', 'ford', 'ranger', '1'),
(10, 1010, '9 กก 99', 'เก่ง', 'Audi', 'Audi RS7-R', '1'),
(11, 1011, '9 กก 88', 'เก่ง', 'toyota', 'alphard', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `idcard` varchar(255) DEFAULT NULL,
  `carid` int(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `status_re` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `idcard`, `carid`, `created_at`, `money`, `status_re`) VALUES
(1, '1222', 1001, '2021-03-23', '1000', 'รออนุมัติ'),
(2, '1369900112119', 1001, '2021-03-23', '2000', 'อนุมัติ'),
(3, '1369900112119', 1010, '2021-03-23', '1000', 'รออนุมัติ'),
(4, '1369900112119', 1002, '2021-03-23', '3333', 'รออนุมัติ'),
(5, '1111111111111', 1010, '2021-03-24', '2000', 'อนุมัติ'),
(6, '1111111111111', 1010, '2021-03-24', '1000', 'รออนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `idcard` varchar(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `idcard`, `username`, `password`, `first_name`, `last_name`, `address`, `email`, `phone`, `picture`, `status_user`) VALUES
(1, '1369900112119', 'topza', '1234', 'topza', 'kedtrawon', '1234444444', 'aaa@aa', '0985865881', '1615280867.png', '1'),
(2, '1111', 'sarawut', '1111', '1111', '1111', '1111', '11@11', '1111', '1616220740.png', '1'),
(3, '22222', 'too2222', '2222', '2222', '2222', '2222', '22@22', '2222', '1616221422.png', '1'),
(4, '1111111111111', 'test', '1234', 'test', 'test', 'ss', 'aaa@aa', '2222', '1616518859.png', '1'),
(5, '2222222222222', 'test2', '1234', 'test2', 'test2', 'test2', 'test2@test2', '2222', '1616580563.png', '1'),
(6, '3333333333333', 'test3', '1234', 'test3', 'test3', 'test3', 'test3@test3', '2222', '1616581229.png', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
