-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 05:04 PM
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
  `manager_id` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_ids` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `name`, `manager_id`, `user_ids`) VALUES
(29, 'محمد', '14', '1, 3'),
(30, 'محمد', '14', '1, 3, 4'),
(35, 'A prject', '8, 16', '1, 3');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `id_department` int(11) DEFAULT NULL,
  `is_manager` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `point` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `id_department`, `is_manager`, `username`, `password`, `full_name`, `email`, `point`) VALUES
(1, NULL, 0, 'mohammed', '1', 'mohammed alotibi', 'm7mdx511x@gmail.com', 10),
(3, NULL, 0, 'man', '1', 'manger', 'm@', 20.5),
(4, NULL, 0, 'Ahmad', '1', 'Ahmad alomary', 'm@', 22),
(6, NULL, 0, 'Bader', '1', 'Bader khaled', 'm@', 24),
(7, NULL, 0, 'qwe', 'qwe', 'qwe', 'qwe@gmail.com', 7),
(8, NULL, 0, 'asd', 'asd', 'asd', 'asd@gmail.com', 10),
(9, NULL, 0, 'zxc', 'zxc', 'zxc', 'zxc@gmail.com', 3),
(10, NULL, 0, 'cvb', 'cvb', 'cvb', 'cvb@gmail.com', 7),
(13, NULL, 0, 'rtyu', 'tyu', 'tyu', 'tyu@gmail.com', 36),
(14, NULL, 1, 'fgh', 'fgh', 'fgh', 'asd@gmail.com', 10),
(15, NULL, 0, 'lkj', 'lkj', 'lkj', 'lkj@gmail.com', 29),
(16, NULL, 1, 'kjh', 'kjh', 'kjh', 'kjh@gmail.com', 17);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `description` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` datetime NOT NULL,
  `point_max` int(10) NOT NULL,
  `status` enum('started','completed','evaluated') COLLATE utf8_unicode_ci NOT NULL,
  `performance` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `improvement` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `knowledge` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `satisfaction` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `earned_point` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `id_employee` (`id_employee`);

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
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id_employee`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
