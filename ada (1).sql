-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 11:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ada`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manager_id` int(30) DEFAULT NULL,
  `user_ids` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `name`, `manager_id`, `user_ids`) VALUES
(20, 'tessssst', 12, '16, 17, 18');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `is_manager` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `point` double NOT NULL,
  `SECURITY_CODE` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `is_manager`, `username`, `password`, `full_name`, `email`, `point`, `SECURITY_CODE`) VALUES
(36, 0, 'emp1', '1234Qwert', 'mohammed', 'mohamadalmogren@gmail.com', 0, 'c5106600788a53523560c184da950559'),
(37, 0, 'mohammed', '1234Qwert', 'mohammed', 'gjdskfopfks@gmail.com', 0, '526d5926ac5a6a1027bb0f41971e733f');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `id_employee` int(11) NOT NULL,
  `name_task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` datetime NOT NULL,
  `point_max` int(10) NOT NULL,
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT 'started =1\r\n\r\ncompleted =2\r\n\r\nevaluated =3\r\n\r\n Failed =4',
  `earned_point` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id_task`, `manager_id`, `id_employee`, `name_task`, `description`, `start_date`, `end_date`, `point_max`, `status`, `earned_point`) VALUES
(9, 12, 11, 'aa', '', '2021-03-23 17:44:49', '2021-03-23 17:44:49', 6, '2', 0),
(11, 12, 11, 'go to home', 'm,', '2021-03-15 10:56:00', '2021-04-02 10:56:00', 9, '3', 5.85),
(17, 12, 11, 'اي شي', 'kjhgfds', '2021-04-01 17:16:00', '2021-04-09 17:18:00', 3, '3', 1.8),
(18, 12, 14, 'طاااااااااااااااااااااطططط', 'ريربرببربربربربربربربربربربربربربربر', '2021-03-13 15:13:00', '2021-04-09 17:07:00', 10, '3', 7.5),
(19, 12, 11, 'تحديث النظام', 'يرجى تحديث النظام ', '0000-00-00 00:00:00', '2021-03-31 18:10:00', 4, '3', 3),
(20, 12, 14, 'تحديث النظام', 'موموم', '0000-00-00 00:00:00', '2021-04-07 17:10:00', 3, '3', 1.5),
(21, 12, 14, '122تحديث النظام', '34rr34', '0000-00-00 00:00:00', '2021-04-10 20:58:00', 10, '3', 5),
(22, 12, 11, 'طاط', 'rfe', '0000-00-00 00:00:00', '2021-03-20 00:07:00', 7, '3', 7),
(23, 12, 11, 'ef', '4r3', '0000-00-00 00:00:00', '2021-04-03 00:08:00', 4, '3', 2.4),
(24, 12, 11, 'fe', '4r3', '0000-00-00 00:00:00', '2021-03-27 00:08:00', 5, '3', 2.25),
(25, 12, 11, '5432', '6543', '0000-00-00 00:00:00', '2021-04-09 01:59:00', 10, '3', 8.5),
(26, 12, 11, '65', '64534', '0000-00-00 00:00:00', '2021-04-08 01:59:00', 5, '3', 4),
(27, 12, 17, 'w', 'fdsfsdewdfvfsf', '0000-00-00 00:00:00', '2021-05-05 20:48:00', 10, '2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `manager_id` (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
