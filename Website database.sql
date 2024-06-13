-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 12:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voge`
--

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `genderId` tinyint(1) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`genderId`, `gender`, `datecreated`, `dateupdated`) VALUES
(1, 'Male', '2024-06-13 13:39:43', '2024-06-13 13:39:43'),
(2, 'Female', '2024-06-13 13:39:43', '2024-06-13 13:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleId` tinyint(1) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `role`, `datecreated`, `dateupdated`) VALUES
(1, 'Employee', '2024-06-13 13:39:12', '2024-06-13 13:39:12'),
(2, 'Admin', '2024-06-13 13:39:12', '2024-06-13 13:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` bigint(10) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `roleId` tinyint(1) NOT NULL DEFAULT 0,
  `genderId` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`genderId`),
  ADD UNIQUE KEY `gender` (`gender`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `genderId` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` bigint(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
