-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 06:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id_log`, `id_user`, `status`, `date`) VALUES
(1, 1, 'login', '2023-10-24 08:32:04'),
(2, 2, 'logout', '2023-10-24 08:32:04'),
(3, 6, 'login', '2023-10-23 08:32:19'),
(4, 2, 'login', '2023-10-18 08:32:19'),
(5, 6, 'logout', '2023-10-25 08:32:19'),
(6, 1, 'login', '2023-10-21 08:32:55'),
(7, 2, 'logout', '2023-10-22 08:33:11'),
(8, 6, 'reset password', '2023-10-19 08:33:11'),
(9, 1, 'reset password', '2023-10-17 08:33:11'),
(10, 2, 'posting', '2023-10-17 08:35:36'),
(11, 6, 'posting', '2023-10-23 08:34:04'),
(12, 2, 'comment', '2023-10-18 08:34:57'),
(13, 1, 'login', '2023-10-22 08:34:57'),
(14, 2, 'logout', '2023-10-24 08:35:36'),
(15, 6, 'comment', '2023-10-24 08:35:36'),
(16, 2, 'posting', '2023-10-21 08:53:30'),
(17, 1, 'posting', '2023-10-26 08:53:30'),
(18, 2, 'posting', '2023-10-25 01:58:05'),
(19, 1, 'posting', '2023-10-26 02:08:14'),
(20, 1, 'login', '2023-10-26 03:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `initial` varchar(2) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `profile` varchar(1000) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `initial`, `gender`, `email`, `phone`, `profile`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Doe', 'AA', 'L', 'john@gmail.com', '085767856571', 'Hi my name is Jhon', 1, '2023-10-24 03:38:46', '2023-10-26 02:10:17'),
(2, 'Catalina', 'AA', 'P', 'catalina@gmail.com', '087565345333', 'Hi i am Catalina', 0, '2023-10-24 04:08:31', '2023-10-26 02:10:19'),
(6, 'Nadela', 'AA', 'L', 'nadela@gmail.com', '081765892778', 'Hello, my name is Nadela. I am a programmer', 1, '2023-10-24 08:31:34', '2023-10-26 02:10:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
