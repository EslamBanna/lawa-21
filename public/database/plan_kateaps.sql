-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 02:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawa21`
--

-- --------------------------------------------------------

--
-- Table structure for table `plan_kateaps`
--

CREATE TABLE `plan_kateaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` int(11) NOT NULL,
  `kateapa_id` int(11) NOT NULL,
  `day` enum('1','2','3','4','5','6','7','-') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_kateaps`
--

INSERT INTO `plan_kateaps` (`id`, `plan_id`, `kateapa_id`, `day`, `created_at`, `updated_at`) VALUES
(5, 3, 5, '1', NULL, NULL),
(8, 6, 2, '1', NULL, NULL),
(93, 39, 1, '-', '2023-08-26 10:29:07', '2023-08-26 10:29:07'),
(94, 19, 1, '-', '2023-08-26 12:11:31', '2023-08-26 12:11:31'),
(95, 19, 2, '-', '2023-08-26 12:11:31', '2023-08-26 12:11:31'),
(96, 19, 4, '-', '2023-08-26 12:11:31', '2023-08-26 12:11:31'),
(97, 19, 7, '-', '2023-08-26 12:11:31', '2023-08-26 12:11:31'),
(98, 38, 4, '-', '2023-08-26 12:13:08', '2023-08-26 12:13:08'),
(99, 38, 7, '-', '2023-08-26 12:13:08', '2023-08-26 12:13:08'),
(100, 38, 10, '-', '2023-08-26 12:13:08', '2023-08-26 12:13:08'),
(101, 16, 1, '-', '2023-08-26 12:13:56', '2023-08-26 12:13:56'),
(102, 16, 2, '-', '2023-08-26 12:13:56', '2023-08-26 12:13:56'),
(103, 16, 3, '-', '2023-08-26 12:13:56', '2023-08-26 12:13:56'),
(104, 16, 4, '-', '2023-08-26 12:13:56', '2023-08-26 12:13:56'),
(108, 36, 1, '-', '2023-08-26 12:29:28', '2023-08-26 12:29:28'),
(109, 36, 2, '-', '2023-08-26 12:29:28', '2023-08-26 12:29:28'),
(110, 36, 11, '-', '2023-08-26 12:29:28', '2023-08-26 12:29:28'),
(111, 40, 1, '1', '2023-08-27 08:59:38', '2023-08-27 08:59:38'),
(112, 40, 2, '2', '2023-08-27 08:59:38', '2023-08-27 08:59:38'),
(113, 40, 9, '3', '2023-08-27 08:59:38', '2023-08-27 08:59:38'),
(114, 40, 3, '4', '2023-08-27 08:59:38', '2023-08-27 08:59:38'),
(115, 40, 5, '5', '2023-08-27 08:59:38', '2023-08-27 08:59:38'),
(116, 40, 8, '6', '2023-08-27 08:59:38', '2023-08-27 08:59:38'),
(117, 40, 9, '6', '2023-08-27 08:59:38', '2023-08-27 08:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plan_kateaps`
--
ALTER TABLE `plan_kateaps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan_kateaps`
--
ALTER TABLE `plan_kateaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
