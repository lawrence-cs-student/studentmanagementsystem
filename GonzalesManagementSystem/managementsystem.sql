-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 11:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_schedule`
--

CREATE TABLE `available_schedule` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timecreated` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timecreated` bigint(20) NOT NULL,
  `lastupdated` bigint(20) NOT NULL,
  `updatedby` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timecreated` bigint(20) NOT NULL,
  `lastupdated` bigint(20) NOT NULL,
  `updatedby` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `timecreated`, `lastupdated`, `updatedby`) VALUES
(1, 'Data Structures', 20241021131958, 20241021131958, 0),
(2, 'Database Systems', 20241021131958, 20241021131958, 0),
(3, 'Operating Systems', 20241021131958, 20241021131958, 0),
(4, 'Computer Networks', 20241021131958, 20241021131958, 0),
(5, 'Software Engineering', 20241021131958, 20241021131958, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teaching_load`
--

CREATE TABLE `teaching_load` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `subject` bigint(20) NOT NULL,
  `timecreated` bigint(20) NOT NULL,
  `lastupdated` bigint(20) NOT NULL,
  `updatedby` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `birthday` text NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `lastlogin` bigint(20) NOT NULL,
  `datecreated` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `lastname`, `firstname`, `middlename`, `birthday`, `address`, `mobile`, `lastlogin`, `datecreated`) VALUES
(1, 'Lawrence@mail.com', 'Lawrence@mail.com', 'YWRtaW4xMjM=', 'Gonzales', 'Lawrence', 'S', 'july 20, 2003', 'calamba', '09295556761', 0, 1727662249),
(2, 'carmela@mail.com', 'carmela@mail.com', 'YWRtaW4xMjM=', 'carmela', 'david', 'a', 'october 10, 2004', 'calamba', '09112321293', 0, 1727662340),
(3, 'zoe@mail.com', 'zoe@mail.com', 'YWRtaW4xMjM=', 'Natividad', 'Zoe', 'A', 'december 2, 2005', 'pasig', '09114567654', 0, 1727662427),
(4, 'ixie@mail.com', 'ixie@mail.com', 'YWRtaW4xMjM=', 'Milan', 'ixie', 'M', 'february 14, 2001', 'alabang', '09495678232', 0, 1727662525),
(5, 'David@mail.com', 'David@mail.com', 'YWRtaW4xMjM=', 'Small', 'David', 'B', 'march 15, 1995', 'Caloocan', '09815768235', 0, 1727662623),
(6, 'Anica@mail.com', 'Anica@mail.com', 'YWRtaW4xMjM=', 'Berna', 'Anica', 'S', 'April 5, 2004', 'manila', '09918463762', 0, 1727663243),
(7, 'Mika@mail.com', 'Mika@mail.com', 'YWRtaW4xMjM=', 'Lim', 'Mikha', 'C', 'January 2, 2000', 'makati', '09851254756', 0, 1727664111);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `roleid` bigint(20) NOT NULL,
  `timecreated` bigint(20) NOT NULL,
  `lastupdated` bigint(20) NOT NULL,
  `updatedby` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_schedule`
--
ALTER TABLE `available_schedule`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_load`
--
ALTER TABLE `teaching_load`
  ADD PRIMARY KEY (`id`,`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`,`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
